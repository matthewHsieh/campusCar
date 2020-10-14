<?php
$DBNAME = "my_data_base";
$DBUSER = "root";
$DBPASSWD = "";
$DBHOST = "localhost";
 
$conn = mysqli_connect( $DBHOST, $DBUSER, $DBPASSWD);
if (empty($conn)){
  print mysqli_error($conn);
  die ("無法連結資料庫");
  exit;
}

if(!mysqli_select_db($conn, $DBNAME)){
  die ("無法選擇資料庫");
}
// 設定連線編碼
mysqli_query( $conn, "SET NAMES 'utf8'");
?>
