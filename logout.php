<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
unset($_SESSION['username']);
echo '<meta http-equiv=REFRESH CONTENT=0.05;url=loading2.php>';
?>
