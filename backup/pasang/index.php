<!DOCTYPE HTML>
<html lang="id">
<head>
	<meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
	<title>Pasang | Kompetisi Indonesia</title>
	<meta name="description" content="Menyebarkan info kompetisi lebih mudah di Kompetisi ndonesia, dengan 3 cara "/>
	<meta name="keyword" content="pasang kompetisi, kompetisi indonesia "/>
	<meta name="robots" CONTENT="NOINDEX, nofollow" />

	<link href="./dist/css/bootstrap.css" media="screen" rel="stylesheet">
	<link href="./dist/css/public.css" media="screen" rel="stylesheet">
	<link rel="icon" href="./images/favicon.png" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
	
	<style>
		#arrow1,#arrow2,#arrow3 {
			display:none
		}
	</style>



	<script type="text/javascript">
			function show_poster(){
				$("#arrow1").show();
				$("#arrow2").hide();
				$("#arrow3").hide();
			}

			function show_link(){
				$("#arrow1").hide();
				$("#arrow2").show();
				$("#arrow3").hide();
			}

			function show_form(){
				$("#arrow3").show();
				$("#arrow1").hide();
				$("#arrow2").hide();
			}

	</script>


</head>

<body>

	<div class="container">
		
		<nav>
			<div class="row">			  	
				<div class="col-md-4 col-md-offset-9">
					<p style="font-size:10px">Ada Pertanyaan ? hubungi cs@kompetisiindonesia.com</p>
				</div>			  	
			</div>
		</nav>
		<header>
			<div class="row">
				<div class="header col-md-2 ">
					<a href="http://kompetisiindonesia.com"><div class="header-img"></div></a>
				</div>
				<div  style="display:none" class="header-link col-md-10">
					<ul class="menu">
						<li><a href=#>Login</a></li>
						<li><a href=#>Testimoni</a></li>
						<li><a href=#>Cara Kerja</a></li>
						<li><a href=#>Bantuan</a></li>
					</ul>
				</div>
			</div>
		</header>
		<!--base end-->
		
		<div class="row">
			<div class="col-md-12">
				<center>
					<h1>Pasang Kompetisi</h1>
					<p>Silahkan Pilih Salah Satu Metode Dibawah Ini</p>
					<br/>
				</center>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-1">
				<div class="row">
					<div class="col-md-3">
						<center>
							<div class="pasang-menu">
								<a onclick="show_poster()" href="?act=1"><img src="./assets/images/upload-poster.png"/></a>
								<div id="arrow1" style="margin-top:5px">
									<img src="./images/icon/arrow.png"/>
								</div>
							</div>	
						</center>
					</div>

					<div class="atau col-md-1"><center>atau</center></div>
					
					<div class="col-md-3">
						<center>
							<div class="pasang-menu">
								<a onclick="show_link()" href="?act=2"><img src="./assets/images/pasang-link.png"/></a>
								<div id="arrow2" style="margin-top:5px">
									<img src="./images/icon/arrow.png"/>
								</div>
							</div>
						</center>	
					</div>					

					<div class="atau col-md-1"><center>atau</center></div>
					
					<div class="col-md-3">
						<center>
							<div class="pasang-menu">
								<a onclick="show_form()" href="?act=3"><img src="./assets/images/isi-form.png"/></a>
								<div id="arrow3" style="margin-top:5px">
									<img src="images/icon/arrow.png"/>
								</div>
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
		<div style="padding:5px" class="row"></div>
	</div>	

	
	<body>

		<section  class="line1" id="line1">
			<?php 
				if(!empty($_GET)) {
					$id = $_GET['act'];
					switch ($id) {
						case '1':
							require_once("poster.html");
							break;

						case '2':
							require_once("link.html");
							break;

						case '3':
							require_once("form.html");
							break;
						
						default:
							header("location:./");
							break;
					}
				}
				
			?>
		</section>

	</body>
<!--base start-->
<!-- Modal -->
<footer>
	<center>
		<h6>
			Copyright &copy; 2013. Kompetisi Indonesia | Kompetisi dengan cara berbeda<br/>
		</h6>
	</center>
</footer>

<div class=" modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">...</h4>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				...
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
<!-- Histats.com  START (hidden counter)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="web stats analysis" ><script  type="text/javascript" >
try {Histats.start(1,2475171,4,0,0,0,"");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2475171&101" alt="web stats analysis" border="0"></a></noscript>
<!-- Histats.com  END  -->
<script type="text/javascript" src="./dist/js/jquery.js"></script>
<script type="text/javascript" src="./dist/js/bootstrap.js"></script>
</html>