<?php
/**
 * Implements hook_block_view().
 *
 * Prepares the contents of the block.
 */
global $user;
$path = drupal_get_path('module', 'associate_birthday');
require_once("$path/associate_birthday.inc");

print current_birthday_contents();
