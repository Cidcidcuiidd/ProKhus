<?php
session_start ();
include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OSIS SMP NEGERI 3 SLEMAN | Home </title>
<meta name="keywords" content="spicy, theme, web design, free templates, website templates, CSS, HTML" />
<meta name="description" content="Spicy Theme is a free website template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:700,
		pauseTime:2500,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, 
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.6, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>

<div id="templamteo_body_wrapper">

<div id="templatemo_wrapper">
<p align="right"><a href="proker.php">Program Kerja</a> | <a href="adatosis.php">Adat Osis</a> | <a href="Mars.php">Mars SMP N 3</a> | <a href="admin.php">Admin</a></p>
	<div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    
    	<div id="templatemo_sidebar">
        	
            <div id="site_title"><h1><img src="images/smp_logo.jpg" width="220px" height="300px" /></a><span>OSIS SMP NEGERI 3 SLEMAN</span></h1></div>
            
            <div id="templatemo_menu">
                <ul>
                    <li><a href="index.php" class="current">Home</a></li>
					<li><a href="profil.php">Profil</a></li>
					<li><a href="berita.php">Berita</a></li>
					<li><a href="artikel.php">Artikel</a></li>
                    <li><a href="galery.php">Gallery</a></li> 
					<li><a href="Struktur.php">Struktur Organisasi</a></li>					
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>    	
			</div>
            
           <!-- <div class="sb_box">
	            <h3>Search</h3>
            	<div id="search">
                    <form action="#" method="get">
                        <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <input type="submit" name="Search" value="Search" id="searchbutton" title="Search" />
                    </form>
				</div>
            </div>-->
            
            <div class="sb_box">
            	<h3>Kontak</h3>
				<?php	
						
						$sql = mysql_query("SELECT * FROM t_kontak");
						while ($data = mysql_fetch_array($sql)){
						list($idkontak,$alamat,$notlp,$email)=$data; 
				?>
						<p> Alamat : <?php echo $data['alamat']; ?></p>
						<p> No Telepon : <?php echo $data['no_tlp']; ?></p>
						<p> Email :<?php echo $data['email']; } ?></p>
				
            </div>
			
            <div class="cleaner"></div>
        </div> <!-- end of sidebar -->
        
        <div id="templatemo_content">
        	
            <div id="slider">
            	<a href="#"><img src="images/slideshow/01.jpg" alt="Image 1" title="image1." /></a>
				<a href="#"><img src="images/slideshow/02.jpg" alt="Image 2" title="image2." /></a>
                <a href="#"><img src="images/slideshow/03.jpg" alt="Image 3" title="image3." /></a>
                <a href="#"><img src="images/slideshow/04.jpg" alt="Image 4" title="image4." /></a>
                <a href="#"><img src="images/slideshow/05.jpg" alt="Image 5" title="image5." /></a>
        	</div>
            
			<div class="content_box">
					<h2>Welcome</h2>
						<p>Selamat Datang di Website OSIS SMP Negeri 3 Sleman, Yogyakarta. Organisasi Siswa Intra Sekolah di SMP 3 Sleman berfungsi sebagai sarana yang memprakarsai segala kegiatan yang berhubungan dengan kesiswaan dan keorganisasian. Suarakan aspirasi anda untuk kemajuan SMP 3 Negeri Sleman !! </p>
					<br></br>
					<h2>Berita Terbaru</h2>
						<?php
							$sql = mysql_query("SELECT * FROM t_berita order by id_berita desc");
							$data = mysql_fetch_row($sql);
							list($idberita,$tgl,$gbrberita,$judul,$isi)=$data;
							$baris1=substr($isi,0,200);
						?>
								<p class="date"> <?php echo $tgl;?><p>
								<h3> <?php echo $judul;?></h3>
								<img src="images/<?php echo $gbrberita;?>" width="160" height="160"/>
								<p> <?php echo $baris1;?></p>		
								<p align="right"><?php echo "<a href='berita2.php?page=$idberita'>Continue Reading &raquo;</a>"?></p>	
            </div>
        
        </div> <!-- end of content -->
    	<div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="templatemo_footer">
    
        Copyright © 2013 <a href="#">WebDesaign</a> | Maintenance by <a href="http://www.templatemo.com" target="_parent">OSIS SMP N 3 SLEMAN</a>
        
    </div> <!-- end of templatemo_footer -->
</div> <!-- end of wrapper -->
</div>
</body>
</html>