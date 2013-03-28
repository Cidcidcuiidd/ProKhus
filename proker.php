<?php
session_start ();
include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OSIS SMP NEGERI 3 SLEMAN | Berita </title>
<meta name="keywords" content="spicy, news, theme, webdesign, free templates, website templates, CSS, HTML" />
<meta name="description" content="Spicy Theme News - free website template by templatemo.com" />
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