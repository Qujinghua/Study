<?php
error_reporting(E_ALL & ~E_DEPRECATED);
header("Content-type: text/html; charset=UTF-8");
require_once '../connect.php';


  $sql = "select * from enroll";
  $sql_1 = mysqli_query($link,$sql);
  while($row = mysqli_fetch_array($sql_1)){
  	$rows[] = $row;
  }
  // print_r($rows);
$i=0;


?>




<form action="../input_deal.php?action=input" method="post">
		<table border="1">
			
			<tr>
				<td>序号</td>
				<td>姓名</td>
				<td>身份证号</td>
				<td>手机号</td>
				<td>高考成绩</td>
				<td>英语成绩</td>
				<td>艺术成绩</td>
				<td>专业</td>
				<td>准考证号</td>
				<td>专业成绩</td>
				
			</tr>
			
				<?php foreach($rows as $row): ?>
				
				<tr>
					<td><input name=<?php echo 'id.'.($i++) ?> value="<?php echo $row['id'];?>"></td>
					<td><?php echo $row['name'];?></a></td>
					<td><?php echo $row['id_card'];?></td>
					<td><?php echo $row['tel'];?></td>
					<td><?php echo $row['gaokao'];?></td>
					<td><?php echo $row['english'];?></td>
					<td><?php echo $row['art'];?></td>
					<td><?php echo $row['major'];?></td>
					<td><input type="text" name=<?php echo "exam_card".$row['id']; ?> placeholder=<?php echo $row['exam_card']?>></td>
					<td><input type="text" name=<?php echo "score".$row['id']; ?> placeholder=<?php echo $row['exam_card']?>></td>
					<!-- <td class="center" align="center"><input type="checkbox" name="selected[]" value="<?= $row['tid']?>"></td> -->
					<!-- <td class="center"><a href="editorTravel.php?tid=<?= $row['tid']?>">更新</a></td> -->
				</tr>
			<?php endforeach;?>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="submit" value="提交成绩"></td>
			</tr>
		</table>
	</form>