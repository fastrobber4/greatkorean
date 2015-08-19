<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>todo_v</title>

	<style>
		*{margin: 0;padding: 0;}
		.todo-list{border-collapse:collapse; width:100%; margin:0 auto;}
		.todo-list th,.todo-list td{border:1px #ccc solid;}
	</style>

</head>
<body>

	<h1>todo 목록</h1>

	<table class="todo-list">
		<colgroup>
			<col style="width:50px">
			<col style="">
			<col style="width:100px;">
			<col style="width:100px;">
		</colgroup>
		<thead>
			<tr>
				<th scope="col">번호</th>
				<th scope="col">내용</th>
				<th scope="col">시작일</th>
				<th scope="col">종료일</th>
			</tr>
		</thead>
		<tbody>


		<?php
		foreach ($list as $lt)
		{
		?>
			<tr>
				<td><?php echo $lt->id;?></td>
				<td>
					<a rel="external" href="/index.php/main/view/<?php echo $lt->id;?>">
						<?php echo $lt->content;?>
					</a>
				</td>
				<td><?php echo $lt->created_on;?></td>
				<td><?php echo $lt->due_date;?></td>
			</tr>
		<?php
		}
		?>


		</tbody>
	</table>
</body>
</html>