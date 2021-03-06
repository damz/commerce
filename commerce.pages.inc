<?php

/**
 * @file
 * Callbacks for store add pages.
 */

use Drupal\Component\Utility\Xss;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\commerce\CommerceStoreInterface;

/**
 * Prepares variables for list of available store type templates.
 *
 * Default template: commerce-store-add-list.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - content: An array of store types.
 */
function template_preprocess_commerce_store_add_list(&$variables) {
  $variables['types'] = array();

  if (!empty($variables['content'])) {
    foreach ($variables['content'] as $commerce_store_type) {
      $variables['types'][$commerce_store_type->id] = array(
        'type' => $commerce_store_type->id,
        'add_link' => l($commerce_store_type->label(), 'admin/commerce/config/store/add/' . $commerce_store_type->id),
        // 'description' => Xss::filterAdmin($type->description),
        'description' => Xss::filterAdmin('Not implemented yet.'),
      );
    }
  }
}
