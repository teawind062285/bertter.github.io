<?php

	$link_ID = mysql_connect('localhost', 'root', 'student');
	mysql_select_db('berter');
	mysql_query("SET CHARACTER SET utf8;");
	$query = "INSERT INTO menber_info(m_username,m_gender,m_birth,m_email,m_password,m_mobile,m_school,m_studyyear,m_grade) VALUES ('".$_POST['m_username']."','".$_POST['m_gender']."','".$_POST['m_birth']."','".$_POST['m_email']."','".$_POST['m_password']."','".$_POST['m_mobile']."','".$_POST['m_school']."','".$_POST['m_studyyear']."','".$_POST['m_grade']."');";
	$result = mysql_query($query, $link_ID);
	if (!$result) {
		echo $query;
	} else {
        header('Location: login.html');		
	}
mysql_close($link_ID);

?>