<?php
//  ------------------------------------------------------------------------ //
// 本模組由 prolin 製作
// 製作日期：2014-05-01
// $Id:$
// ------------------------------------------------------------------------- //
/*-----------引入檔案區--------------*/

$xoopsOption['template_main'] = "espanel_index_tpl.html";
include_once "header.php";
include_once XOOPS_ROOT_PATH."/header.php";


/*-----------function區--------------*/

 
/*-----------執行動作判斷區----------*/
//$op=empty($_REQUEST['op'])?"":$_REQUEST['op'];
	$keyword = $xoopsModuleConfig['es_panel_keyword'] ;			
	$data['memo'] = $xoopsModuleConfig['es_panel_memo'] ;			
	$data['width'] = $xoopsModuleConfig['es_panel_width'] ;	
 	$data['item'] = get_tad_themes_menu($keyword) ;


/*-----------秀出結果區--------------*/
$xoopsTpl->assign( "toolbar" , toolbar_bootstrap($interface_menu)) ;
$xoopsTpl->assign( "bootstrap" , get_bootstrap()) ;
$xoopsTpl->assign( "jquery" , get_jquery(true)) ;
$xoopsTpl->assign( "data" , $data ) ;
 
include_once XOOPS_ROOT_PATH.'/footer.php';

?>