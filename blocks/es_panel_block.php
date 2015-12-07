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
	//取得顯示提醒
	$block['memo'] = $xoopsModuleConfig['es_panel_memo'] ;
	$block['width'] = $xoopsModuleConfig['es_panel_width'] ;
	$block['xswidth'] = $xoopsModuleConfig['es_panel_xs_width'] ;
	//echo $keyword ;
 	$block['item'] = get_tad_themes_menu($keyword) ;
    $block['row']               = $_SESSION['bootstrap'] == '3' ? 'row row-fluid' : 'row-fluid';
    $block['span']             = $_SESSION['bootstrap'] == '3' ? 'span'.$block['width']  .'  col-md-'.$block['width']  : 'span'.$block['width'] ;
    $block['spanxs']         = $_SESSION['bootstrap'] == '3' ? 'col-xs-'. $block['xswidth']  : '';

	//var_dump($block) ;
	return $block ;

}


?>
