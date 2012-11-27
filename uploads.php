<?php header("Content-Type:text/html; charset=utf-8");
ini_set('display_errors','On');
 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--	<meta http-equiv="refresh" content="2; url=sysset.php">  -->
	<title>檔案上傳測試系統</title>

</head>

<body style="background-attachment: fixed" >
<div align="center">
<div style="position: relative; width: 899px;  background-color: #FFFFFF;">
<form method="post" enctype="multipart/form-data" action ="#">
<input type = "file" name="uploadedfile" size="30">
<input type = "text" name="rrr" size="30" value="資料">
<input type = "hidden" name = "max_file_size" value="400000">
<input type = "submit" value = "上傳檔案">
</form>

<?php
echo  '把var_dump($_POST)列出來<hr>';
var_dump($_POST);
echo  '<hr>把var_dump($_FILES)列出來<hr>';
var_dump($_FILES);
echo "<hr>";

if ($_FILES["uploadedfile"]["tmp_name"]<>"none") {
 if (!copy($_FILES["uploadedfile"]["tmp_name"], "runbg.jpg")) {
 echo "<br><font face='arial' size='4'> $name 檔案上傳失敗 ,<br>";
 echo "也可能是檔案太大<br>";
 echo "請使用 back 按鍵再試一次";
 } else {
 echo "<BR><font face='arial' size='4'>檔案上傳成功 !<br>";
 echo "檔案型態：$uploadedfile_type <BR>";
// echo "檔案大小：".$uploadedfile_size/1024 ."  KB <BR>";
  echo "檔案大小：";
  printf("%.2f",$uploadedfile_size/1024);
echo "  KB <BR>";
 echo "檔案名稱：$uploadedfile_name <BR>";
 echo "檔案說明：$description <BR><img border='0' src='runbg.jpg?kunlex' width='640' >";
 }
}

?>



</div></div>

</body>
</html>