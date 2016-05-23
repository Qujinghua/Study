<?php
header("Content-type: text/html; charset=UTF-8");
require_once 'connect.php';

// $sql = "select * from enroll";
// $sql_1 = mysqli_query($link,$sql);
// while($row = mysqli_fetch_array($sql_1)){
//   	$rows[] = $row;
// }


// echo $name = $row['name'];
// echo $id_card = $row['id_card'];
// echo $exam_card = $row['exam_card'];

$name = $_POST['name'];
$id_card=$_POST['id_card'];
$exam_card=$_POST['exam_card'];

$sql_1="select * from enroll where name='$name'";
$sql_1 = mysqli_query($link,$sql_1);
$sql_2="select * from enroll where exam_card='$exam_card'";
$sql_2 = mysqli_query($link,$sql_2);
$sql_3="select * from enroll where id_card='$id_card'";
$sql_3 = mysqli_query($link,$sql_3);

// echo $sql_2;
// var_dump(mysqli_fetch_array($sql_2)["name"]);

// if(mysqli_fetch_array($sql_1)["name"] && (mysqli_fetch_array($sql_2)["name"] || mysqli_fetch_array($sql_3)["name"])){

// if($sql_1 && ($sql_2 || $sql_3)){


if(mysqli_fetch_array($sql_1)["name"] && (mysqli_fetch_array($sql_2)["name"] || mysqli_fetch_array($sql_3)["name"])){
	$sql_11 = "select id,name,id_card,tel,gaokao,english,art,major,exam_card,score from enroll where name='$name'";
	$sql_12 = mysqli_query($link,$sql_11);
	$row = mysqli_fetch_array($sql_12);
	// var_dump($row);


}else{
	echo "<h1>查询失败</h1>";
}

?>


<table>
	<tr>
		<td>姓名：</td>
		<td><?php echo $row['name']; ?></td>
	</tr>
	<tr>
		<td>身份证号码：</td>
		<td><?php echo $row['id_card']; ?></td>
	</tr>
	<tr>
		<td>电话：</td>
		<td><?php echo $row['tel']; ?></td>
	</tr>
	<tr>
		<td>高考成绩：</td>
		<td><?php echo $row['gaokao']; ?></td>
	</tr>
	<tr>
		<td>英语成绩：</td>
		<td><?php echo $row['english']; ?></td>
	</tr>
	<tr>
		<td>艺术成绩：</td>
		<td><?php echo $row['art']; ?></td>
	</tr>
	<tr>
		<td>专业：</td>
		<td><?php echo $row['major']; ?></td>
	</tr>
	<tr>
		<td>准考证号：</td>
		<td><?php echo $row['exam_card']; ?></td>
	</tr>
	<tr>
		<td>专业成绩：</td>
		<td><?php echo $row['score']; ?></td>
	</tr>
</table>