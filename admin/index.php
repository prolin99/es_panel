<?php
//  ------------------------------------------------------------------------ //
// 本模組由 prolin 製作
// 製作日期：2014-05-01
// $Id:$
// ------------------------------------------------------------------------- //

/*-----------引入檔案區--------------*/

//樣版

$xoopsOption['template_main'] = "esp_ad_index_tpl.html";
include_once "header.php";
include_once "../function.php";

//include_once "header_admin.php";


/*-----------function區--------------*/
//


/*-----------執行動作判斷區----------*/
	$keyword = $xoopsModuleConfig['es_panel_keyword'] ;

	$data['memo'] = $xoopsModuleConfig['es_panel_memo'] ;
	$data['width'] = $xoopsModuleConfig['es_panel_width'] ;
 	$data['item'] = get_tad_themes_menu($keyword) ;

/*-----------秀出結果區--------------*/
$xoopsTpl->assign( "data" , $data ) ;


include_once 'footer.php';
?>
