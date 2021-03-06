<?php

/**
 * @file
 * Contains Drupal\commerce\CommerceProductForm.
 */

namespace Drupal\commerce_product\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Language\Language;

/**
 * Form controller for the product edit form.
 */
class CommerceProductForm extends ContentEntityForm {
  /**
   * Overrides Drupal\Core\Entity\EntityFormController::form().
   */
  public function form(array $form, array &$form_state) {
    /* @var $entity \Drupal\commerce\Entity\CommerceProduct */
    $form = parent::form($form, $form_state);
    $product = $this->entity;

    // There appears to be no way to set default value for checkboxes in the
    // field definitions yet ...
    if ($product->isNew()) {
      $form['status']['widget']['#default_value'] = 1;
    }

    return $form;
  }

  /**
   * Overrides \Drupal\Core\Entity\EntityFormController::submit().
   */
  public function submit(array $form, array &$form_state) {
    // Build the entity object from the submitted values.
    $entity = parent::submit($form, $form_state);
    $form_state['redirect_route']['route_name'] = 'commerce_product.list';
    return $entity;
  }

  /**
   * Overrides Drupal\Core\Entity\EntityFormController::save().
   */
  public function save(array $form, array &$form_state) {
    $entity = $this->entity;
    $entity->save();
  }
}
