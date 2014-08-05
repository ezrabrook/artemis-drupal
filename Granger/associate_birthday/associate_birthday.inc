<?php
function associate_birthday_menu() {
    $items = array();
    $items['admin/config/associate-birthday/get'] = array(
      'title' => 'Retrieve Associate Birthday',
      'description' => 'Get Associate Birthday',
      'page callback' => 'current_birthday_contents',
      'access arguments' => array('access content')
    );
    return $items;
}
?>