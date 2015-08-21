<div class="wrap" id="signature">

<section>
	<div class="middle-wrap">
		<div>
			<form action="" id="signform" method="post" onsubmit="return false">
				<ul class="list">
					<li><label for="">이름</label><input type="text" id="username" name="username"></li>
					<li><label for="">이메일/전화번호</label><input type="text" name="info_num"></li>
					<li><label for="">주소</label><input type="text" name="address"></li>
				</ul>
				<div class="btngroup">
					<a href="">뒤로</a>
					<input type="submit" value="확인" id="submit">
				</div>
			</form>
		</div>
	</div>
</section>

<script>
	$('#submit').click(function(){
		var username = $('li input[name=username]').val()
		var info = $('li input[name=info_num]').val()
		var address = $('li input[name=address]').val()
			
		if(username == "" || info == "" || address == "")
		{
			alert("모두기입하셔야합니다.");
		}else{
			$('#signform').attr('onsubmit','return true');
		}

	})
</script>

