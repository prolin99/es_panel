<?php
//  ------------------------------------------------------------------------ //
// 本模組由 prolin 製作
// 製作日期：2014-02-16
// $Id:$
// ------------------------------------------------------------------------- //
//引入TadTools的函式庫
if(!file_exists(XOOPS_ROOT_PATH."/modules/tadtools/tad_function.php")){
 redirect_header("http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50",3, _TAD_NEED_TADTOOLS);
}
include_once XOOPS_ROOT_PATH."/modules/tadtools/tad_function.php";


/********************* 自訂函數 *********************/



/********************* 預設函數 *********************/

//以 tad_themes_menu資料
function get_tad_themes_menu($keyword){
  global $xoopsDB;
  if(empty($keyword))return;
  
  //取得校務行政的代號
  $sql = "select * from ".$xoopsDB->prefix("tad_themes_menu")." where itemname='$keyword' and of_level=0 ";
  $result = $xoopsDB->query($sql) or redirect_header($_SERVER['PHP_SELF'],3, $xoopsDB->error());
  $row=$xoopsDB->fetchArray($result);
  $mid= $row['menuid'] ;
  
   if (!$mid ) return ;
   
  //取得該類別全部的程式  status =1 顯示
  $sql = "select * from ".$xoopsDB->prefix("tad_themes_menu")." where   of_level='$mid'  and status =1 order by position   ";
  $result = $xoopsDB->query($sql) or redirect_header($_SERVER['PHP_SELF'],3, $xoopsDB->error());

  while($row=$xoopsDB->fetchArray($result)){
	//取出模組 DIRname
	$row['logo']= get_xoopsLogo($row['itemurl']) ;
	$data[]=$row ;
  }
	
  
  
  return $data ;
}

//取得程式的圖示
function get_xoopsLogo($module_url){
	list($path , $mdir ) = preg_split('/modules\//' , $module_url)  ;
 	
 	if (!$mdir)  return ;
 	
 	//取得模組名稱
	list($module_dir ,$m_last) = preg_split('/\//' , $mdir)  ;

  	$modhandler = &xoops_gethandler('module');
  	$xoopsModule = &$modhandler->getByDirname($module_dir);
  	$logoimage = $xoopsModule->getInfo("image") ;
 	$log_url=  $path. 'modules/'.$mdir .$logoimage ;
 	$log_url=  $logoimage ;
 
 	 return $log_url ;
}
