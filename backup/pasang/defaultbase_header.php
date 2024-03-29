<!DOCTYPE HTML>
<html lang="id">
<head>
	<link href="<?php echo base_url('dist/css/bootstrap.css')?>" media="screen" rel="stylesheet">
	<link href="<?php echo base_url('dist/css/public.css')?>" media="screen" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url()?>images/favicon.png" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
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
					<a href="<?php echo site_url()?>"><div class="header-img"></div></a>
				</div>
				<div class="header-link col-md-10">
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


		<script type="text/javascript">
			function show_poster(){
				 $("#line1").show();
				 $("#line2").hide();
				 $("#line3").hide();

				 $("#arrow1").show();
				 $("#arrow2").hide();
				 $("#arrow3").hide();
			}

			function show_link(){
				 $("#line2").show();
				 $("#line1").hide();
				 $("#line3").hide();

				 $("#arrow2").show();
				 $("#arrow1").hide();
				 $("#arrow3").hide();
			}

			function show_form(){
				 $("#line3").show();
				 $("#line1").hide();
				 $("#line2").hide();

				 $("#arrow3").show();
				 $("#arrow1").hide();
				 $("#arrow2").hide();
			}
		</script>
		
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
							<a onclick="show_poster()" href="#pasang"><img src="<?php echo base_url('assets/images/upload-poster.png') ?>"/></a>
							<div id="arrow1" style="margin-top:5px;display:none">
								<img src="<?php echo base_url()?>images/icon/arrow.png"/>
							</div>
						</div>	
						</center>
					</div>

					<div class="atau col-md-1"><center>atau</center></div>
					
					<div class="col-md-3">
						<center>
						<div class="pasang-menu">
							<a onclick="show_link()" href="#pasang"><img src="<?php echo base_url('assets/images/pasang-link.png') ?>"/></a>
							<div id="arrow2" style="margin-top:5px;display:none">
								<img src="<?php echo base_url()?>images/icon/arrow.png"/>
							</div>
						</div>
						</center>	
					</div>					

					<div class="atau col-md-1"><center>atau</center></div>
					
					<div class="col-md-3">
						<center>
						<div class="pasang-menu">
							<a onclick="show_form()" href="#pasang"><img src="<?php echo base_url('assets/images/isi-form.png') ?>"/></a>
							<div id="arrow3" style="margin-top:5px;display:none">
								<img src="<?php echo base_url()?>images/icon/arrow.png"/>
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

			<section class="line1" id="line1">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<center><h2>Upload Poster</h2><p>Kamu punya poster yang berisi info kompetisi, silahkan upload disini, pastika poster yang kamu kirimkan memiliki kualitas bagus mudah dibaca dan mencangkup informasi yang lengkap</p></center>
							<br/>
							<form enctype='multipart/form-data' action="<?php echo site_url('process/proc_public/add_request')?>" method="post" class="form-horizontal" role="form">
							  <div class="form-group">
							    <label for="inputName" class="col-lg-2 control-label">Nama :</label>
							    <div class="col-lg-10">
							      <input name="nama" type="text" class="form-control" id="inputName" placeholder="masukan nama" required>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword1" class="col-lg-2 control-label">Email :</label>
							    <div class="col-lg-10">
							      <input name="email" type="email" class="form-control" id="inputPassword1" placeholder="masukan email" required>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="uploadPoster" class="col-lg-2 control-label">Upload Poster :</label>
							    <div class="col-lg-10">
							    	<h6>ukuran maks 2MB, file didukung png, jpg, jpeg</h6>
							      <input name="poster" type="file" class="btn" id="uploadPoster" required>
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="col-lg-offset-2 col-lg-10">
							      <div class="checkbox">
							        <label>
							          <input type="checkbox" required> Saya telah menyetujui <a href="#">syarat dan ketentuan</a>
							        </label>
							      </div>
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="col-lg-offset-2 col-lg-10">
							      <button type="submit" class="btn btn-default">+ Pasang Kompetisi</button>
							    </div>
							  </div>
							</form>
						</div>
					</div>
				</div>
			</section>

			<section class="line2"id="line2">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<center><h2>Kirim Link</h2><p>Pastikan link yang kamu kirimkan valid adanya dan bisa diakses</p></center>
							<br/>
							<form action="<?php echo site_url('process/proc_public/add_request')?>" method="post" class="form-horizontal" role="form">
							  <div class="form-group">
							    <label for="inputName" class="col-lg-2 control-label">Nama :</label>
							    <div class="col-lg-10">
							      <input type="nama" class="form-control" id="inputName" placeholder="masukan nama" required>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword1" class="col-lg-2 control-label">Email :</label>
							    <div class="col-lg-10">
							      <input name="email" type="email" class="form-control" id="inputPassword1" placeholder="masukan email" required>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="uploadPoster" class="col-lg-2 control-label">Link :</label>
							    <div class="col-lg-10">
							    <input name="link" type="url" class="form-control" id="uploadPoster" value="http://" required>
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="col-lg-offset-2 col-lg-10">
							      <div class="checkbox">
							        <label>
							          <input type="checkbox" required> Saya telah menyetujui <a href="#">syarat dan ketentuan</a>
							        </label>
							      </div>
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="col-lg-offset-2 col-lg-10">
							      <button type="submit" class="btn btn-default">+ Pasang Kompetisi</button>
							    </div>
							  </div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</body>

		<section class="line3" id="line3">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<center><h2>Isi Form</h2><p>Kompetisi akan lebih cepat di posting, pastikan data yang anda masukan selengkap mungkin </p>
							<br/>
							<h6>silahkan login terlebih dahulu, <a href="#modal" data-toggle="modal">belum punya akun?</a></h6>
							<a class="btn btn-default" href="#">Login</a>
							</center>
						</div>
					</div>
				</div>
			</section>