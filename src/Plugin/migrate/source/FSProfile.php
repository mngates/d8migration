<?php
/**
 * @file
 * Contains Drupal\my_custom_migrate\Plugin\migrate\source\FSProfile
 */

namespace Drupal\migrate_custombsos\Plugin\migrate\source;

public function prepareRow(Row $row) {
    drush_print_r($row);
    return parent::prepareRow($row);
  }
