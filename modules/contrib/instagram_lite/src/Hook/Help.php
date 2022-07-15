<?php

namespace Drupal\instagram_lite\Hook;

use Drupal\Core\Routing\RouteMatchInterface;

/**
 * Class Help.
 *
 * @package Drupal\instagram_lite\Hook
 */
class Help {

  /**
   * Form hook_help() main hook call.
   */
  public static function hook($route_name, RouteMatchInterface $route_match) {
    if ($route_name === 'help.page.instagram_lite') {
      $path = realpath(__DIR__ . '/../..') . '/README.md';

      if (file_exists($path)) {
        return '<pre>' . file_get_contents($path) . '</pre>';
      }
    }
  }

}
