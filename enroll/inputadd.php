<?php
require_once 'connect.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>报名</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
<!-- <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/blog.js"></script> -->
</head>
<body>
	<div class="enroll">
		<form action="input_deal.php?action=add" method="post">
			<h1>请填写下列报名信息</h1>
			<table>
				<tr>
					<td>姓名：</td>
					<td><input type="text" name="name" placeholder="请填写姓名"></td>
				</tr>
				<tr>
					<td>身份证号码：</td>
					<td><input type="text" name="id_card" placeholder="请填写身份证号码"></td>
				</tr>
				<tr>
					<td>电话：</td>
					<td><input type="text" name="tel" placeholder="请填写电话"></td>
				</tr>
				<tr>
					<td>高考成绩：</td>
					<td><input type="text" name="gaokao" placeholder="请填写成绩"></td>
				</tr>
				<tr>
					<td>英语成绩：</td>
					<td><input type="text" name="english" placeholder="请填写英语成绩"></td>
				</tr>
				<tr>
					<td>艺术成绩：</td>
					<td><input type="text" name="art" placeholder="请填写艺术成绩（可不填）"></td>
				</tr>
				<tr>
					<td>专业：</td>
					<td>
						<select name="major">
	             			<option value="计科">计科</option>
	              			<option value="医学">医学</option>
	              			<option value="经济">经济</option>
	              			<option value="管理">管理</option>
	        			</select>
        			</td>
				</tr>
				<tr>
          			<!-- <td> <input type="reset" value="重置"></td> -->
          			<td> <input type="submit" name="submit_input" value="提交"></td>
       			 </tr>

			</table>
		</form>
	</div>
</body>
</html>