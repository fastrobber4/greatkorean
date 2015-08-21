
	
	<div class="wrap" id="main">
		<section class="description_0">
			<div class="middle-wrap">
				<div>
					<blockquote cite="프랑스 정치학자 알렉시 드 토크빌">
						<i class="flaticon-schoolboy2"></i>
						<p><q><strong>모든 민주주의에서 국민은 그들의 수준에 맞는 정부를 가진다</strong></q><br/ ><span>- 프랑스 정치학자 알렉시 드 토크빌 -</span></p>
					</blockquote>
				</div>
			</div>

			<a href="javascript:void(0)" class="downarrow"><i class="flaticon-arrow483"></i></a>
		</section>


		<section class="description_1">
			
			<div class="middle-wrap">
				<div>
					<i class="flaticon-teacher44"></i>
					<h2>국회의원 무보수란</h2>
					<p>
						국민소득 6만불의 덴마크 국회의원은 자전거를 타고 출ㆍ퇴근을 하고, 평균 104건의 법안을 발의 한다.<br /> 
						또한, 임금은 주급으로 받고 국회 등원과 법안 발의 등... <br /> 
						일하지 않으면 임금을 받지못하는 덴마크 국회의원 월급은 7백 만원이다.
					</p>
					<div class="btngroup"><a href="" class="base blue-white transper">자세히보기</a></div>
				</div>
			</div>

			<a href="javascript:void(0)" class="downarrow"><i class="flaticon-arrow483"></i></a>
		</section>


		<section class="description_2">
			<div class="middle-wrap">
				<div>
					<i class="flaticon-superheroe17"></i>
					<h2>덴마크 vs 대한민국</h2>
					<p>어떤게 좋아보일까?</p>
					<div class="btngroup"><a href="" class="base blue-white transper">자세히 보기</a></div>
				</div>	
			</div>
			<a href="javascript:void(0)" class="downarrow"><i class="flaticon-arrow483"></i></a>
		</section>
		<section class="description_3">
			<div class="middle-wrap">
				<div>
					<p>
						<i class="flaticon-award52"></i>
						<h2>자랑스런 대한국인</h2>
						<p>대한민국은 민주공화국이다.
						대한민국의 주권은 국민에게 있고,<br /> 모든 권력은 국민으로부터 나온다.
						</p>
					</p>
					<div class="btngroup"><a href="" class="base blue-white transper">자세히 보기</a></div>
				</div>	
			</div>
			<a href="javascript:void(0)" class="downarrow"><i class="flaticon-arrow483"></i></a>
		</section>


		<section class="description_4">
			<div class="middle-wrap">
				<div>
					<i class="flaticon-winners"></i>
					<h2>그래서 시도는 한번 해보자는 겁니다!</h2>
					<p>되든 안되든!</p>
					<div class="btngroup"><a href="/index.php/sign/index" class="base blue-white">서명하러갑시다</a></div>
				</div>
			</div>		
			<p class="topmove downarrow"><a href="javascript:void(0)">맨위로</a></p>
		</section>

	

	
<script type="text/javascript">
	
	var spot = [];

	$(window).resize(function(){

		//위치저장

		spot = [];
		
		$('.wrap>section').each(function(i,e){
			spot.push($(e).offset().top);
		});	

	});
	
	$('.downarrow').click(function(){

		//next sectoni movement

		var idx = $(this).parent().index();
		var $screen = $('body,html');
		var elementCheck = $('.wrap>section').eq(idx+1).html();

		
		if(elementCheck == undefined){
			$screen.animate({scrollTop:0});
		}else{
			$screen.animate({
				scrollTop:spot[idx+1]
			});
		}
	});
</script>


