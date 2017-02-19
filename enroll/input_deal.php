<?php
header("Content-type: text/html; charset=UTF-8");
require_once 'connect.php';


switch ($_GET["action"]){

case 'add':

$name=$_POST['name'];
$id_card=$_POST["id_card"];
$tel=$_POST['tel'];
$gaokao=$_POST['gaokao'];
$english=$_POST['english'];
$art=$_POST['art'];
$major=$_POST['major'];

if (empty($name)) {
	die("必须填写姓名");
}
if (empty($id_card)) {
	die("必须填写身份证号");
}
if (empty($tel)) {
	die("必须填写电话");
}

// $sql_add = 'insert into enroll (name,id_card,tel,gaokao,english,art,major)VALUES
// ("'.$name.'","'.$id_card.'","'.$tel.'","'.$gaokao.'","'.$english.'","'.$art.'","'.$major.'")';

$sql_add = "insert into enroll (name,id_card,tel,gaokao,english,art,major)VALUES
('$name','$id_card','$tel','$gaokao','$english','$art','$major')";

mysqli_query($link,$sql_add);
echo "成功";
// echo "<br/> <a href='show.php'>查看报名信息<a>";
echo "<br/> <a href='find.php'>查询成绩<a>";
break;


case 'input':
for ($i=0; $i < sizeof($_POST); $i++) { 
	if(isset($_POST["id_".$i])){
		$id = $_POST["id_".$i];
		// echo $id;
		$exam_card=$_POST['exam_card'.$id];
		$score=$_POST["score".$id];
		$sql_input = "update enroll set exam_card = '$exam_card',score = '$score' where id='$id'";
		mysqli_query($link,$sql_input);
	}else{
		$i = sizeof($_POST);
	}
}
echo "报名成功";
echo "<br/> <a href='admin/input.php'>查看报名信息<a>";
break;




default:echo "无效访问";
break;
}


?>