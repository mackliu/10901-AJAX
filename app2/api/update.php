<?php
//處理更新資料的請求

include_once "base.php";
$db=new DB("students");
//前端採用POST的方式送出請求，因此API這邊使用$_POST來接收請求
if(!empty($_POST)){
   echo $db->save($_POST);

}

?>