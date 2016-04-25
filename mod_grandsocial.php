<?php

defined('_JEXEC') or die;


$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_grandsocial', $params->get('layout', 'default'));

// Add Params
$app = JFactory::getApplication();
$params = $app->getParams();


// Add Style
$doc=JFactory::getDocument();
$doc->AddStyleSheet(Juri::root().'modules/mod_grandsocial/css/font-awesome.min.css');
$doc->AddStyleSheet(Juri::root().'modules/mod_grandsocial/css/grand.css');

?>
