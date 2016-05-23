<?php
header("Content-type: text/html; charset=UTF-8");
require_once 'connect.php';



?>
<h1>准考证号和身份证号二选一即可</h1>
<form action="actionfind.php" method="post">
	<input type="text" name="name" placeholder="请输入姓名：">
	<input type="text" name="exam_card" placeholder="请输入准考证号：">
	<input type="text" name="id_card" placeholder="请输入身份证号：">
	<input type="submit" value="查询">
</form>
