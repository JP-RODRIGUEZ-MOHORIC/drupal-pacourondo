<?php

namespace Drupal\instagram_lite\Plugin\Block;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\ClientInterface;

/**
 * Provides a Instragram feed block.
 *
 * @Block(
 *   id = "instagram_lite",
 *   admin_label = @Translation("Instagram Lite Block"),
 * )
 */
class InstagramLite extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The http client provider.
   *
   * @var \GuzzleHttp\ClientInterface
   */
  protected $httpClient;

  /**
   * Constructs a new Instagram Lite Block.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \GuzzleHttp\ClientInterface $http_client
   *   The http client provider.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, ClientInterface $http_client) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    $this->httpClient = $http_client;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('http_client')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'instagram_lite_token' => '',
      'instagram_lite_limit' => 5,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();

    $build = [
      '#markup' => $this->t('No results found'),
    ];

    $request = $this->httpClient->request('GET', 'https://graph.instagram.com/me/media', [
      'query' => [
        'fields' => 'id,media_type,media_url,thumbnail_url,timestamp,permalink,caption',
        'access_token' => $config['instagram_lite_token'] ?: '',
        'limit' => $config['instagram_lite_limit'] ?: 5,
      ],
    ]);

    if ($request->getStatusCode() != 200) {
      return $build;
    }

    $posts = $request->getBody()->getContents();
    $posts = Json::decode((string) $posts)['data'];

    return [
      '#attached' => [
        'library' => ['instagram_lite/instagram'],
      ],
      '#theme' => 'instagram_lite_block',
      '#posts' => $posts,
    ];

  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $config = $this->getConfiguration();

    $form['instagram_lite_token'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Instagram Token'),
      '#rows' => 4,
      '#cols' => 5,
      '#required' => TRUE,
      '#default_value' => $config['instagram_lite_token'] ?: '',
    ];
    $form['instagram_lite_limit'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Instagram Feed Limit'),
      '#required' => TRUE,
      '#default_value' => $config['instagram_lite_limit'] ?: '',
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['instagram_lite_token'] = $form_state->getValue('instagram_lite_token');
    $this->configuration['instagram_lite_limit'] = $form_state->getValue('instagram_lite_limit');
  }

}
