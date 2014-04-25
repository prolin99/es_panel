<?php
//區塊
include_once(dirname(dirname(__FILE__)).'/function.php');
 //echo dirname(dirname(__FILE__)).'/function.php' ;
//取得偏好設定值
function panel_get_xoopsModuleConfig($module_dir){
  $modhandler = &xoops_gethandler('module');
  $xoopsModule = &$modhandler->getByDirname($module_dir);
  $config_handler =& xoops_gethandler('config');
  $xoopsModuleConfig =& $config_handler->getConfigsByCat(0, $xoopsModule->getVar('mid'));	
  return $xoopsModuleConfig ;
}	

//面板呈現
function panel_show() {
	$xoopsModuleConfig=panel_get_xoopsModuleConfig("es_panel") ;
	
	$keyword = $xoopsModuleConfig['es_panel_keyword'] ;			
	//echo $keyword ;
 	$block = get_tad_themes_menu($keyword) ;
	//var_dump($block) ;
 	return $block ;
 
}	


?>