<?php

/**
 * @file
 * Contains \Drupal\my_menu_service\Controller\MyMenuController
 */

namespace Drupal\my_menu_service\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\system\Entity\Menu;

class MyMenuController extends ControllerBase {

    public function getMenus() {
        return [
          '#markup' => $this->t('Hello'),
          '#max-age' => 0,
        ];
    }
}

