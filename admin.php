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
<p align="right"><a href="index.php">Kembali ke Home</a></p>
	<div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    
    	<div id="templatemo_sidebar">
        	
            <div id="site_title"><h1><img src="images/smp_logo.jpg" width="220px" height="300px" /></a><span>OSIS SMP NEGERI 3 SLEMAN</span></h1></div>
            <div class="cleaner"></div>
        </div> <!-- end of sidebar -->
        
        <div id="templatemo_content">
        	<div class="content_box">
				<h2> Anda Memasuki Kawasan Admin </h2>	
				<div id="cp_contact_form">
					<h3> Silahkan Login </h3>                                     
                    
                    <form method="post" action="proses_login.php" onsubmit="return validate(this);">
						
                            <label for="author">Username:</label> <input name="author" type="text" class="input_field" id="author" maxlength="60" />
                          	<div class="cleaner_h10"></div>
                            
                            <label for="pass">Password:</label> <input name="pass" type="password" class="input_field" id="pass" maxlength="60" />
                          	<div class="cleaner_h10"></div>
							
							<?php
								echo "<label>Level: &nbsp;</label>";
								echo "<select name='level'>
									<option value='1'>SUPER ADMIN</option>
									<option value='2'>ADMIN1</option>
									<option value='3'>ADMIN2</option>
									</select>"
							?> </br><br>
                                                      
                            <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Login" />
                            <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset" /></br><br>
						                        
                   </form>
    
                </div>
			</div>
        </div> <!-- end of content -->
    	<div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="templatemo_footer">
    
        Copyright � 2013 <a href="#">WebDesaign</a> | Maintenance by <a href="http://www.templatemo.com" target="_parent">OSIS SMP N 3 SLEMAN</a>
    
    </div> <!-- end of templatemo_footer -->
</div> <!-- end of wrapper -->
</div>
</body>
</html>