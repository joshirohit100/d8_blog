<?php

/* 
 * @file
 * Contains \Drupal\my_menu_service\Plugin\rest\resource\MyMenuRestResource
 */

namespace Drupal\my_menu_service\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\system\Entity\Menu;

/**
 * Provides a resource to get menu.
 *
 * @RestResource(
 *   id = "my_menu_resource",
 *   label = @Translation("My Menu Resource"),
 *   uri_paths = {
 *     "canonical" = "/my-menus-list"
 *   }
 * )
 */
class MyMenuRestResource extends ResourceBase {

  /*
   * Responds to GET requests.
   *
   * Returns a list of menus for given menu type.
   *
   * @return \Drupal\rest\ResourceResponse
   *   The response containing a list of bundle names.
   *
   * @throws \Symfony\Component\HttpKernel\Exception\HttpException
   */
    public function get() {
//     $menu_type = 'my-test-menu';
//    if ($menu_type) {
//      $result = db_select('menu_link_content_data', 'mlcd')
//                ->fields('mlcd', [
//                    'id',
//                    'title',
//                    'description',
//                    'external',
//                    'weight',
//                    'expanded',
//                    'enabled',
//                    'parent',
//                ])->execute()->fetchAll();
//        $output = [];
//        if (!empty($result)) {
//            foreach ($result as $res) {
//                $output[$res->id] = (array) $res;
//            }
//        }
      $output = ['name' => 'rohit'];
      if (!empty($output)) {
        return new ResourceResponse($output);
      }
  }
}
