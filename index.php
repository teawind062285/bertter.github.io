<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>商品po文</title>
  </head>
  <body>
  		<a href="login.html">登入</a>
  		<a href="register.html">註冊</a>
	 <form name="stuff" action="stuffpost.php" method="POST">
      <div align="center">
			商品名稱<input type="text" name="stuffname"><br>
			價錢<input type="text" name="stuffprice"><br>
			數量<input type="text" name="stuffpice"><br>
			圖片<input type="file" name="stuffpicture"><br>
			備註<input type="text" name="stufftext"><br>
			<input type="submit" value="確認">
      </div>
   </form>
   <?php
   	//顯示商品資訊//
	$link_ID = mysql_connect('localhost', 'root', 'student');
	mysql_select_db('post');
	mysql_query("SET CHARACTER SET utf8;");
	$result = mysql_query("SELECT * FROM stuff ORDER BY posttime DESC;", $link_ID);
	mysql_close($link_ID);

	
while($record = mysql_fetch_array($result))
{
	echo'<table width = "500" border = "0">';
	echo '<tr><td>';
	echo $record ['posttime']."<br>";
	echo ' ('.$record['stuffname'].')'."<br>";
	echo '('.$record['stuffprice'].')'."<br>";
	echo ' ('.$record['stuffpice'].')'."<br>";
	
	echo ' ('.$record['stufftext'].')'."<hr>";
	
	echo '</td></tr></table>';
}

?>
  </body>
</html>