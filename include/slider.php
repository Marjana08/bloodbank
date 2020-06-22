<div class="add">
		   <img src="image/r1.jpg" class="m" id="1">
			<img src="image/r2.jpg" class="m" id="2">
			<img src="image/r4.jpg" class="m" id="3">
			<img src="image/r5.jpg" class="m" id="4">

			<script>
					var a=1;
					function slide(){
						if(a==1){
							document.getElementById('1').style.display='block';
							document.getElementById('2').style.display='none';
							document.getElementById('3').style.display='none';
							document.getElementById('4').style.display='none';
							a=2;
						}
						else if(a==2){
							document.getElementById('1').style.display='none';
							document.getElementById('2').style.display='block';
							document.getElementById('3').style.display='none';
							document.getElementById('4').style.display='none';
							a=3;
						}
						else if(a==3){
							document.getElementById('1').style.display='none';
							document.getElementById('2').style.display='none';
							document.getElementById('3').style.display='block';
							document.getElementById('4').style.display='none';
							a=4;
						}
						else if(a==4){
							document.getElementById('1').style.display='none';
							document.getElementById('2').style.display='none';
							document.getElementById('3').style.display='none';
							document.getElementById('4').style.display='block';
							a=1;
						}

						setTimeout(function(){
							slide();
						},2000)
					}
					slide();

			</script> 
			
			<!-- <img src="image/zz.jpg"/> -->
		</div>