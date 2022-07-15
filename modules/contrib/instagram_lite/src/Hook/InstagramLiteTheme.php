<?php

namespace Drupal\instagram_lite\Hook;

/**
 * Class InstagramLiteTheme.
 *
 * @package Drupal\instagram_lite\Hook
 */
class InstagramLiteTheme {

  /**
   * Form hook_theme() main hook call.
   */
  public static function hook($existing, $type, $theme, $path) {
    return [
      'instagram_lite_block' => [
        'variables' => [
          'posts' => NULL,
        ],
      ],
    ];
  }

}
