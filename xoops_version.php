<?php
//  ------------------------------------------------------------------------ //
// 本模組由 prolin 製作
// 製作日期：2014-05-1
// $Id:$
// ------------------------------------------------------------------------- //

//---基本設定---//

$modversion['name'] ='校務行政面板';				//模組名稱
$modversion['version']	= '1.0';				//模組版次
$modversion['author'] = 'prolin(prolin@tn.edu.tw)';		//模組作者
$modversion['description'] ='以圖示顯示校務行政軟體';			//模組說明
$modversion['credits']	= 'prolin';				//模組授權者
$modversion['license']	= "GPL see LICENSE";		//模組版權
$modversion['official']		= 0;				//模組是否為官方發佈1，非官方0
$modversion['image']		= "images/logo.png";		//模組圖示
$modversion['dirname'] = basename(dirname(__FILE__));		//模組目錄名稱

//---模組狀態資訊---//
//$modversion['status_version'] = '0.8';
$modversion['release_date'] = '2016-06-06';
$modversion['module_website_url'] = 'https://github.com/prolin99/es_panel';
$modversion['module_website_name'] = 'prolin';
$modversion['module_status'] = 'release';
$modversion['author_website_url'] = 'http://www.syps.tn.edu.tw';
$modversion['author_website_name'] = 'prolin';
$modversion['min_php']= 5.2;



//---啟動後台管理界面選單---//
$modversion['system_menu'] = 1;//---資料表架構---//



//---管理介面設定---//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

//---使用者主選單設定---//
$modversion['hasMain'] = 0;


//---樣板設定---要有指定，才會編譯動作，//
$modversion['templates'] = array();
$i=1;


$modversion['templates'][$i]['file'] = 'espanel_index.tpl';
$modversion['templates'][$i]['description'] = 'espanel_index.tpl';
$i++ ;
$modversion['templates'][$i]['file'] = 'esp_ad_index.tpl';
$modversion['templates'][$i]['description'] = 'esp_ad_index.tpl';

//---區塊設定---//
$modversion['blocks'] = array();
$i=1 ;
$modversion['blocks'][1]['file'] = "es_panel_block.php";
$modversion['blocks'][1]['name'] = '行政面板';
$modversion['blocks'][1]['description'] = '顯示行政程式圖示';
$modversion['blocks'][1]['show_func'] = "panel_show";
$modversion['blocks'][1]['template'] = "espanel_block_tpl.html";



$i=0 ;
//偏好設定

$i++ ;
$modversion['config'][$i]['name'] = 'es_panel_keyword';
$modversion['config'][$i]['title']   = '_MI_ESPANEL_CON_TITLE1';
$modversion['config'][$i]['description'] = '_MI_ESPANEL_CON_DESC1';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default'] ="校務行政" ;

$i++ ;
$modversion['config'][$i]['name'] = 'es_panel_memo';
$modversion['config'][$i]['title']   = '_MI_ESPANEL_CON_TITLE2';
$modversion['config'][$i]['description'] = '_MI_ESPANEL_CON_DESC2';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default'] ="勿用舊版 IE ，建議使用 <a href='http://moztw.org/firefox/' target='_blank'>firefox</a>、<a href='http://www.google.com.tw/intl/zh-TW/chrome/browser/' target='_blank'>chrome</a>" ;

$i++ ;
$modversion['config'][$i]['name'] = 'es_panel_width';
$modversion['config'][$i]['title']   = '_MI_ESPANEL_CON_TITLE3';
$modversion['config'][$i]['description'] = '_MI_ESPANEL_CON_DESC3';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default'] ="3" ;

$i++ ;
$modversion['config'][$i]['name'] = 'es_panel_xs_width';
$modversion['config'][$i]['title']   = '_MI_ESPANEL_CON_TITLE4';
$modversion['config'][$i]['description'] = '_MI_ESPANEL_CON_DESC4';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default'] ="4" ;
?>
