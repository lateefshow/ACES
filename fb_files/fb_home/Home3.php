<?php
	include("Login.php");
	include("fb_files/fb_index_file/fb_SignUp_file/SignUp.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ACES | Register</title>

<?php	

?>
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../css/template.css" rel="stylesheet" type="text/css" />

<link rel="SHORTCUT ICON" href="../fb_title_icon/fav.ico" />
	<link href="../fb_index_file/fb_css_file/index_css.css" rel="stylesheet" type="text/css">
    <link href="../fb_font/font.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../fb_index_file/fb_js_file/Registration_validation.js"> </script>
<script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		Reg.fb_join_time.value=time;
	}
</script>
</head>
<script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		Reg.fb_join_time.value=time;
	}
</script>
<body>
<div class="header">
  <img src="../../image/Aces.png" alt="Aces" width="300" height="100" />
  <hr>
			<h5>
				<a href="http://www.joomla.org/" target="_blank"> MAPOLY SOCIAL NETWORK</a><sup>®</sup> helps you to connect and share with
the people in your department.			</h5>
</div>
<table width="100%" height="171" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="16%" height="171">&nbsp;</td>
    <td width="32%" align="center"><img src="img/Warning_icon.png" width="373" height="278"></td>
    <td width="35%"><h1>SITE IS STILL UNDER CONSTRUCTION...!!! </h1></td>
    <td width="17%">&nbsp;</td>
  </tr>
</table>

<?php
	include("fb_files/fb_index_file/fb_erorr_file/fb_erorr.php");
?>
</body>
</html>
