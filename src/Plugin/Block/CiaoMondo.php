<?php
/**
 * @file
 * Contains \Drupal\primo_modulo\Plugin\Block\CiaoMondo.
 */

namespace Drupal\primo_modulo\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CiaoMondo' Block
 *
 * @Block(
 *   id = "ciaomondo_block",
 *   admin_label = @Translation("CiaoMondo block"),
 * )
 */
class CiaoMondo extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Ciao Mondo!'),
    );
  }
}