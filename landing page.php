<!DOCTYPE html>
<html>
<head>
	<title>Musicsapiens</title>
	<meta name="viewport" content-type="width=device-width,initial-scale=1.0">
		<meta http-equiv="content-type" content="text/html" charset="utf-8">
		<link rel="icon" type="image/png" href="http://localhost:8080/websites projects/pics/musiclogo2.png">
		<link rel="stylesheet" type="text/css" href="landingpage.css">
		<link rel="stylesheet" type="text/css" href="animate.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
</head>
<body>
	<!--Creates the popup body-->
	<!-- Modal for image -->
	
	<div id="myModal">
  		<div class="img_modal">
  			<img src ="http://localhost:8080/websites projects/pics/emax.jpg" class="clg_img">
  		</div>
  	</div>


	<div id="top_bar">
	<nav class="navbar navbar-inverse">
		<h2 class="heading">Alok mishra </h2>
		<div class="Menus">
		<ul class="nav nav-pills">
			  <li class="active"><a href="#">About me</a></li>
			  <li><a href="#">Education</a></li>
			  <li><a href="#">Experience</a></li>
			  <li><a href="#">Projects</a></li>
			  <li><a href="#">Know more..</a></li>
		</ul>
		</div>
	</nav>
	</div>

	<div id ="cover_col">
		<img src="http://localhost:8080/websites projects/pics/alok.jpg" class="my_img">
		<div class="lines">
			<div class="bar">
			<span class="glyphicon glyphicon-triangle-right"></span><p class="my_name">ALOK MISHRA</p></div>
			<div class="bar">
			<span class="glyphicon glyphicon-triangle-right"></span><p class="line2">Frontend developer<br>portfolio</p></div>
			<div class="bar"> 
			<span class="glyphicon glyphicon-triangle-right"></span>
			<p class="E_mail">E-mail:-<a href="#" class="email">alokmishra11.am@gmail.com</a></p>
			</div>
		</div> 
	</div>

	<!--aboutme column-->


	<div id="Aboutme_col">
		<h2 class="about_me">About me</h2>
		<div class="aboutme_col2">
			<h3>I'm a self taught Front End Developer from Delhi, India.</h3>

			<p class="aboutme_col4">I enjoy turning complex problems into simple, beautiful and intuitive interface designs. When I'm not coding or pushing pixels, you'll find me in the gym or in the sports yard.</p>
			<p> This is my first portfolio on a beginner level of <B>            Frontend development
		</div>
		<div class="hobbies_col">
			<h4>Other Activities</h4>
			<img src ="http://localhost:8080/websites projects/pics/volly.png">
			<img src ="http://localhost:8080/websites projects/pics/soccer.png">
			<img src ="http://localhost:8080/websites projects/pics/mjd.png">
			<img src ="http://localhost:8080/websites projects/pics/musiclogo2.png">
			<img src ="http://localhost:8080/websites projects/pics/read.png">
			<img src ="http://localhost:8080/websites projects/pics/gaming.png">
		</div>
	</div>

	<!--education column-->

	<div id="Education_col">
		<h2 class="edu_text">Education & qualification</h2>
		<div class="grad_col">
			<fieldset>
				<legend>Graduation (2012-2016)</legend>
				<h5>Bachelore of Technology (computer science)</h5>
				<button class="Scl_img_btn"><img src ="http://localhost:8080/websites projects/pics/emax.jpg" class="scl_img"></button>
			<div class="edu_col">
			<div  class="edu_col_lines">University:<p>Kurukshetra University</p></div>
			<div class="edu_col_lines">College:<p>E-max institute of technology  (ambala, haryana, India-134003)</p></div>
			<div class="edu_col_lines">Training in html,css,php:<p>Infowiz-A software solution (chandigarh,India-160017)</p></div>
			<div class="edu_col_lines">Training in javascript:<p>Apex institute (Noida, sector 63 ,India-201301)</p> </div>
			</div>
			</fieldset>
		</div>
	</div>
	<div id="Skill_Set">
		
	</div>
	
	
<script src="http://localhost:8080/websites projects/js/jquery-3.3.1.slim.min .js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script >
	$(document).ready(function(){
	$(".scl_img").click(function(){
        $("#myModal").show(1000);
        $(".img_modal").show();
        $(".scl_img").css({opacity:"1"});

    });
    $("#myModal").click(function(){
    	$("#myModal").hide(1000);
    	$(".img_modal").hide(300);
    });
    $(window).scroll(function(){
    	if($(this).scrollTop()>130){
    		$("#Education_col").show();
    		$(".edu_col_lines").show();
    	}
    	else{
    		$(".edu_col_lines").hide();
    		$("#Education_col").hide();
    	}
    });

	
});
</script>

</body>
</html>