<?php

/**
 * Implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title'       => t('Homepage layout (For Panels Everywhere)'),
  'category'    => t('Responsive'),
  'icon'        => 'icon.png',

  'theme'       => 'home',
//'css'         => '../../css/layouts/pri-general.css',
//'admin theme' => 'pri_general',
//  'admin css'   => '../../css/panels-layouts/pri-general.admin.css',

  'regions'     => array(
      'top' => t('Top'),
      'top-content' => t('Top Content'),
      'tabs' => t('Tabs'),
      'left' => t('Left'),
      'middle' => t('Middle'),
      'right' => t('Right'),
      'sidebar_first' => t('Sidebar_First'),
      'sidebar_second' => t('Sidebar_second'),
      'bottom' => t('Bottom'),
  ),
);
