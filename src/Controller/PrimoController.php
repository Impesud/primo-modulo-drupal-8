<?php
/**
 * @file
 * Contains \Drupal\first_module\Controller\FirstController.
 */

namespace Drupal\primo_modulo\Controller;

use Drupal\Core\Controller\ControllerBase;

class PrimoController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Ciao Mondo'),
    );
  }
}