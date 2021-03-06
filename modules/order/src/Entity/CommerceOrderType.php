<?php

/**
 * @file
 * Contains \Drupal\commerce_order\Entity\CommerceOrderType.
 */

namespace Drupal\commerce_order\Entity;

use Drupal\commerce_order\CommerceOrderTypeInterface;
use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\Core\Entity\EntityStorageInterface;

/**
 * Defines the Order type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "commerce_order_type",
 *   label = @Translation("Order type"),
 *   controllers = {
 *     "form" = {
 *       "add" = "Drupal\commerce_order\Form\CommerceOrderTypeForm",
 *       "edit" = "Drupal\commerce_order\Form\CommerceOrderTypeForm",
 *       "delete" = "Drupal\commerce_order\Form\CommerceOrderTypeDeleteForm"
 *     },
 *     "list_builder" = "Drupal\commerce_order\Controller\CommerceOrderTypeListBuilder",
 *   },
 *   admin_permission = "administer commerce_order_type entities",
 *   config_prefix = "commerce_order_type",
 *   bundle_of = "commerce_order",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "edit-form" = "commerce_order.type_edit",
 *     "delete-form" = "commerce_order.type_delete"
 *   }
 * )
 */
class CommerceOrderType extends ConfigEntityBundleBase implements CommerceOrderTypeInterface {

  /**
   * The order type ID.
   *
   * @var string
   */
  public $id;

  /**
   * The order type label.
   *
   * @var string
   */
  public $label;

  /**
   * A brief description of this order type.
   *
   * @var string
   */
  public $description;

}
