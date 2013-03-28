<?php
session_start ();
include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OSIS SMP NEGERI 3 SLEMAN | Struktur</title>
<meta name="keywords" content="spicy, blog, theme, webdesign, free templates, website templates, CSS, HTML" />
<meta name="description" content="Spicy Theme Blog page - free website template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
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
                    <li><a href="index.php">Home</a></li>
					<li><a href="profil.php">Profil</a></li>
					<li><a href="berita.php">Berita</a></li>
					<li><a href="artikel.php">Artikel</a></li>
                    <li><a href="galery.php">Gallery</a></li> 
					<li><a href="Struktur.php" class="current">Struktur Organisasi</a></li>					
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="kontak.php">Kontak</a></li> 	
			</div>
            
            <div class="sb_box">
            	<h3>Kontak</h3>
				<?php	
						include "koneksi.php";
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
        	 <div class="content_box">
            	<h2>Struktur Organisasi</h2>
			 </div> 
				<p>Tahun Jabatan : </p>
				<select name='level'>
									<option value='1'>2012/2013</option>
									<option value='2'>2013/2014</option>
									<option value='3'>2014/2015</option>
									</select><br></br><br></br>
            <div class="post_box">
            	<img src="images/blog_image_02.jpg" alt="Image 1" />
                <p class="post_meta"><span class="cat">Posted in <a href="#">CSS Templates</a>, <a href="#">Web Design</a></span> | Date: June 24, 2048</p>
              <h2>Sed mollis elementum lectus rhoncus</h2>
                <p>Nunc varius venenatis sem sed adipiscing. Mauris suscipit mauris in purus mattis placerat. Ut rhoncus imperdiet nibh sit amet sagittis. Aliquam erat volutpat. In pellentesque sagittis dictum. Aliquam erat volutpat. Donec ac aliquam neque.</p>
                <a class="more" href="#"></a>
                <div class="cleaner"></div>
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