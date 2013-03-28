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
					<li><a href="berita.php" class="current">Berita</a></li>
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
            <div class="news_box">
						<?php
						$dataPerPage = 5;

							// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
							// sedangkan apabila belum, nomor halamannya 1.
							if(isset($_GET['page']))
							{
								$noPage = $_GET['page'];
							}
							else $noPage = 1;

							// perhitungan offset
							$offset = ($noPage - 1) * $dataPerPage;

							// query SQL untuk menampilkan data perhalaman sesuai offset
							$query = "SELECT * FROM t_berita LIMIT $offset, $dataPerPage";
							$result = mysql_query($query) or die('Error');

							// menampilkan data 
							while($data = mysql_fetch_array($result))
							{	
								list($idberita,$tgl,$gbrberita,$judul,$isi)=$data;
								$isi2=substr($isi,0,150);	
								$isi3=substr($isi2,0,strrpos($isi2," "));
								echo "<h2>".$data ['judul_berita']."</h2>";
								echo "<p class='date'>". $data ['tgl_berita']."</p>";
								echo '<img src="images/'.$data ['gbr_berita'].'" width="160" height="160"/>';
								echo "<p>" .$isi2. "</p><br></br>";							
								echo '<p align="right" >' ."<a href='berita2.php?page=$idberita'>Continue Reading &raquo </a>". '</p><br></br>';
							}

							// mencari jumlah semua data dalam tabel guestbook
							$query   = "SELECT COUNT(*) AS jumData FROM t_berita";
							$hasil  = mysql_query($query);
							$data     = mysql_fetch_array($hasil);
							$jumData = $data['jumData'];

							// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
							$jumPage = ceil($jumData/$dataPerPage);

							// menampilkan link previous
							echo"<center>";
							if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Prev</a>";

							// memunculkan nomor halaman dan linknya
							for($page = 1; $page <= $jumPage; $page++)
							{
									 if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
									 {
										if (($showPage == 1) && ($page != 2))  echo "...";
										if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
										if ($page == $noPage) echo " <b>".$page."</b> ";
										else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
										$showPage = $page;
									 }
							}

							// menampilkan link next
							if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next &gt;&gt;</a>";
							echo"</center>";
							?>
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