<?php echo '<?xml version="1.0" encoding="utf-8"?>' ?>

<rss version="2.0"
xmlns:content="http://purl.org/rss/1.0/modules/content/"
xmlns:wfw="http://wellformedweb.org/CommentAPI/"
xmlns:dc="http://purl.org/dc/elements/1.1/"
xmlns:atom="http://www.w3.org/2005/Atom"
xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
>

<channel>
	<title><?php echo $feed_name; ?></title>
	<link>http://kompetisiindonesia.com</link>
	<description><?php echo $page_description?></description>
	<language><?php echo $page_language; ?></language>
	<creator>yussan@kompetisiindonesia.com</creator>
	<image rdf:about="http://kompetisiindonesia.com/dist/css/images/ki-big-logo.png">
		<title><?php echo $feed_name; ?></title>
		<url>http://kompetisiindonesia.com/dist/css/images/ki-big-logo.png</url>
		<link>http://kompetisiindonesia.com</link>
	</image>
	<dc:rights>Copyright <?php echo gmdate("Y", time()); ?></dc:rights>
	<admin:generatorAgent rdf:resource="http://www.kompetisiindonesia.com/" />


	<?php foreach($post as $row) : ?>
		<?php 
		$sort = substr($row['sort'], 0,130);
			//encode id as url
		$enc = base64_encode(base64_encode($row['id_kompetisi']));
		$id = $id_kompetisi = str_replace('=', '', $enc);
			//judul post
		$judul = str_replace(' ', '-', $row['judul_kompetisi'])
		?>
		<item>
			<title><?php echo $row['judul_kompetisi']?></title>
			<link><?php echo site_url('kompetisi/detail/'.$id.'/'.$judul) ?></link>
			<guid><?php echo site_url('kompetisi/detail/'.$id.'/'.$judul) ?></guid>
			<pubDate><?php echo date('d-m-Y', strtotime($row['tgl_buat'])).' '?> 12:01:01</pubDate>
			<description>
				<![CDATA[
				<?php echo $row['sort'];?>
				]]>
			</description>
			<enclosure url="<?php echo base_url('images/poster/'.$row['poster'])?>" length="1024" type="image/jpg" />
			</item>
		<?php endforeach; ?>

	</channel>

</rss>