<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE HTML>
<html lang="id" itemscope itemtype="http://schema.org/website">
<head>
	<title><?php echo $title?> Kompetisi Indonesia</title>
	<link href="<?php echo base_url('dist/css/bootstrap.css')?>" media="screen" rel="stylesheet">
	<?php if(isset($view['sort'])) { ?>
	<meta name="description" content="<?php echo $view['sort']?>"/>
	<?php } else if(isset($dec)) { ?>
	<meta name="description" content="<?php echo $dec?>"/>
	<?php } else { ?>
	<meta name="description" content="Kumpulan kompetisi yang diadakan di Indonesia"/>
	<?php } ?>	

	<!--google web master-->
	<meta name="google-site-verification" content="8XcVX_SJldhaagGKaVFgLgMUaVpOpRE1V0Has2ERsF4" />
	<!-- Add the following three tags inside head. -->
	<meta itemprop="name" content="Kompetisi Indonesia">
	<meta itemprop="image" content="
	<?php if(isset($view['poster'])) { echo base_url('images/poster/'.$view['poster'].'') ;
} else {
	echo 'http://beta.kompetisiindonesia.com/dist/css/images/ki-big-logo.png';
}
?>">
<?php if(isset($view)) { ?>
<!--open graph-->
<meta property="og:image" content="<?php if(isset($view['poster'])) { echo base_url('images/poster/'.$view['poster'].'') ;
} else {
	echo 'http://beta.kompetisiindonesia.com/dist/css/images/ki-big-logo.png';
}
?>">
<meta property="og:url" content="<?php echo site_url(uri_string()) ?>"/>
<?php if(isset($view['judul_kompetisi'])) { ?>
<meta property="og:title" content="<?php echo $view['judul_kompetisi']?>"/>
<?php } else { ?>
<meta property="og:title" content="Kompetisi Indonesia"/>
<?php } ?>

<?php if(isset($view['sort'])) { ?>
<meta property="og:description" content="<?php echo $view['sort']?>"/>
<?php } else { ?>
<meta property="og:description" content="post dari kompetisi Indonesia"/>
<?php } ?>	
<meta property="og:site_name" content="Kompetisi Indonesia"/>
<meta property="og:type" content="website"/>	
<?php }?>
<meta property="fb:app_id" content="1419514554927551" />
<link href="<?php echo base_url('dist/css/public.css')?>" media="screen" rel="stylesheet">
<link rel="icon" href="<?php echo base_url()?>images/favicon.png" />
<link rel="canonical" href="<?php echo site_url(uri_string()) ?>">
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
<script src="<?php echo base_url('dist/js/jquery.js')?>"></script>
<script src="<?php echo base_url('dist/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('dist/js/ajax.js')?>"></script>
<script type="text/javascript">
	function not_ready(){
		alert('Sistem Belum Siap');
	}
</script>
<script type"text/javascript" src="<?php echo base_url('dist/tinymce/js/tinymce/tinymce.min.js')?>"></script>
<script type="text/javascript">
	tinymce.init({
		selector:"textarea#deskripsilengkap",
		height:400,
		menubar : false,
		plugins:["image"]
	});
</script>
</head>


<body style="background-color:rgb(245, 245, 245)">


	<div style="margin:0;padding-top:25px;padding-bottom:25px;background-color:#fff" class="row">
		<div class="container">

			<nav>
			</nav>
			<header>
				<div class="row">
					<div class="header col-md-2 ">
						<a href="<?php echo base_url()?>"><div class="header-img"></div></a>
					</div>
					<div class="header-link col-md-10">
						<ul class="menu">
							<script>
								function showsearch(){
									$('#searchform').show();
								}
							</script>
							<li><div class="col-md-1"><a onclick="showsearch()" title="search" href="#search"><span class="glyphicon glyphicon-search"></span></a></div><div style="display:none" id="searchform" class="col-md-10"><form action="<?php echo site_url('start/kompetisi/jelajah')?>" method="GET" role="form"><input style="padding:1px" name="q" class="" placeholder="enter to search" type="text"/><input type="hidden" name="kat" value="0"></form></div></li>
							<?php 
							$myid = base64_encode(base64_encode($this->session->userdata('id_user')));
							$myid = str_replace('=', '', $myid);
							$username = $this->session->userdata('username');
							?>
							<?php
							if($this->session->userdata('id_user') != "") {
								echo '
								<a href="#" >
									<li style="padding:0 0 0 10px">								

										<div class="dropdown pull-right">
											<a data-toggle="dropdown" href="#"><img style="margin-right:5px;width:40px;height:40px" src="https://graph.facebook.com/'.$this->session->userdata('oauth_id').'/picture?return_ssl_resources=true" alt="kompetisi indonesia user"/>'.$this->session->userdata('username').'<span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
												<li style="width:100%;padding:0"><a href="'.site_url('publik/profile/'.$username).'" >View Profile</a></li>
												<li style="width:100%;padding:0"><a href="'.site_url('dashboard').'" >Dasbor</a></li>
												<li style="width:100%;padding:0"><a href="'.site_url('dashboard/profile').'" >Edit Profil</a></li>
												<li style="width:100%;padding:0"><a href="'.site_url('publik/logout').'" >Logout</a></li>
											</ul>
										</div>
									</li></a>';
								} else {
									echo '<li><a href="#login" data-toggle="modal">Login</a></li>';
								}
								?>

								<li><a href="<?php echo site_url('start/kompetisi/jelajah')?>">Jelajah</a></li>
								<li><a href="<?php echo site_url('publik/read/TVRZPQ/Testimoni')?>">Testimoni</a></li>
								<li><a href="<?php echo site_url('start/kompetisi/news')?>">News</a></li>
								<li><a href="<?php echo site_url('publik/read/TWpBPQ/Bantuan')?>">Bantuan</a></li>
							</ul>
						</div>
					</div>
				</header>
			</div>
			<!--base end-->    

			<!--modal login-->
			<div class=" modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Kompetisi Indonesia Login</h4>
						</div>
						<div class="modal-body">
							<span class="row">
								<span class="col-md-12 login-via">
									<center>
										<span class="col-md-6">
											<h3 style="width:50%"> <span class="glyphicon glyphicon-user"> </span><br/> Pasang dan Manajemen Kompetisi</h3><br/><br/>
										</span>

							<!-- LOGIN BIASA
							<span class="col-md-6">
								<form method="post" action="<?php echo site_url('publik/login')?>" role="form">
								  <div class="form-group">
								    <label for="exampleInputEmail1">Username</label>
								    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username" required>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputPassword1">Password</label>
								    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
								  </div>
								  <div class="checkbox">
								    <label>
								      <input type="checkbox"> Check me out
								    </label>
								  </div>
								  <input  type="submit" class="btn btn-default" value="Log in"/>
								 </form>
								</span> -->

								<span class="col-md-6">
									<p>login via :</p>
									<a class="btn-connect fb"  href="<?php echo base_url('oauth/facebook.php')?>"><span style="float:left"><img src="http://kompetisiindonesia.com/images/icon/fb-20x20.png" alt="facebook login"/></span>Facebook</a>
									<!-- <a class="btn-connect twitter"  href="<?php echo site_url('auth/twitter')?>"><span style="float:left"><img src="http://kompetisiindonesia.com/images/icon/twitter-20x20.png" alt="twitter login"/></span>Twitter</a> -->
								</span>

							</center>
						</span>
					</span>

					<hr/>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<!--modal footer-->
	<div class=" modal fade" id="kategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">...</h4>
				</div>
				<div class="modal-body">
					...
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>

<!--JS-->
