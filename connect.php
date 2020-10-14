<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysqli_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];

//搜尋資料庫資料
$sql = "SELECT * FROM info where username = '$id'";
$result = mysqli_query($conn,$sql);
$row = @mysqli_fetch_row($result);

if(!isset($_SESSION)){
    session_start();
    }  //判斷session是否已啟動
	
if((!empty($_SESSION['check_word'])) && (!empty($_POST['checkword']))){  //判斷此兩個變數是否為空
	if($_SESSION['check_word'] == $_POST['checkword']){
		
		$_SESSION['check_word'] = ''; //比對正確後，清空將check_word值

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '<meta http-equiv=REFRESH CONTENT=0.05;url=loading.php>';
		
}
else
{
		unset($_SESSION['username']);
        echo "<script>alert('登入失敗!'); location.href = 'index.php';</script>";
		

}
	}else
{
		unset($_SESSION['username']);
        echo "<script>alert('登入失敗!'); location.href = 'index.php';</script>";
		

}
}else
{
		unset($_SESSION['username']);
        echo "<script>alert('登入失敗!'); location.href = 'index.php';</script>";
		

}

?>