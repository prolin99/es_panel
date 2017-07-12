<?php
//  ------------------------------------------------------------------------ //
// 本模組由 prolin 製作
// 製作日期：2014-05-01
// $Id:$
// ------------------------------------------------------------------------- //

/*-----------引入檔案區--------------*/

//樣版

$xoopsOption['template_main'] = "esp_ad_index.tpl";
include_once "header.php";
include_once "../function.php";

//include_once "header_admin.php";


/*-----------function區--------------*/
//指定選用選單目錄
if ($_POST['do_key'] == 'menu_select' ){
	$keyword = $_POST['menu_root'] ;
	//寫入 conf 表中

	$sql=  "update   " . $xoopsDB->prefix("config") ." set conf_value='$keyword' where conf_name='es_panel_keyword' "  ;
	$result = $xoopsDB->query($sql) or redirect_header($_SERVER['PHP_SELF'],3, $xoopsDB->error());
}else
	$keyword = $xoopsModuleConfig['es_panel_keyword'] ;



/*-----------執行動作判斷區----------*/
	$data['memo'] = $xoopsModuleConfig['es_panel_memo'] ;
	$data['width'] = $xoopsModuleConfig['es_panel_width'] ;
 	$data['item'] = get_tad_themes_menu($keyword) ;
	$data['menu_root'] = get_tad_themes_menu_root() ;


/*-----------秀出結果區--------------*/
$xoopsTpl->assign( "data" , $data ) ;
$xoopsTpl->assign( "keyword" , $keyword ) ;


include_once 'footer.php';
?>
