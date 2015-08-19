<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view_v</title>

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
			<col style="width:100px">
			<col style="">
			<col style="width:100px;">
			<col style="">
		</colgroup>
		<thead>
			<tr>
				<th scope="row">번호</th>
				<th><?php echo $views->id;?></th>
				<th scope="row">시작일</th>
				<th><?php echo $views->created_on;?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="4">
					<?php echo $views->content;?>
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="4">
					<a href="/index.php/main/lists">목록</a>
					<a href="/index.php/main/delete/<?php echo $this->uri->segment(3);?>">삭제</a>
					<a href="/index.php/main/write">쓰기</a>
				</td>
			</tr>
		</tfoot>
	</table>
</body>
</html>