<!--ADMIN LOGGED IN-->
<?php 
$logstatus = $this->session->userdata('level');
if($logstatus == 'admin') { ?>
<div class="col-md-2">
	<a id="kompetisi" href="<?php echo site_url('super/super/dashboard?act=posted')?>" >Kompetisi</a>
	<a id="request" href="<?php echo site_url('super/super/request?act=menunggu')?>">Request Kompetisi</a>
	<a id="request2" href="<?php echo site_url('super/super/request2?act=menunggu')?>">Request Link Poster</a>
	<a id="post" href="<?php echo site_url('super/super/post?act=active')?>">News</a>
	<a id="moderator" href="<?php echo site_url('super/super/moderator?act=active')?>">Moderator</a>
	<a id="user" href="<?php echo site_url('super/super/user?act=active')?>">User</a>
	<a id="logout" href="<?php echo site_url('super/super/logout')?>">Logout</a>
</div>
<?php } else if($logstatus == 'moderator'){?>
<div class="col-md-2">
	<a id="kompetisi" href="<?php echo site_url('super/super/dashboard?act=posted')?>" >Kompetisi</a>
	<a id="request" href="<?php echo site_url('super/super/request?act=menunggu')?>">Request Kompetisi</a>
	<a id="request2" href="<?php echo site_url('super/super/request2?act=menunggu')?>">Request Link Poster</a>
	<a id="post" href="<?php echo site_url('super/super/post?act=active')?>">News</a>
	<a id="logout" href="<?php echo site_url('super/super/logout')?>">Logout</a>
</div>
<?php } else { echo '<center><h1>GET OUT HACKER</h1></center>';}?>