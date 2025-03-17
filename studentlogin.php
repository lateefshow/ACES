<?php
	include("Login.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ACES | Login</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/template.css" rel="stylesheet" type="text/css" />

<link rel="SHORTCUT ICON" href="fb_files/fb_title_icon/fav.ico" />
</head>

<body>
<div class="header">
			<img src="image/Aces.png" alt="Aces" width="300" height="100">
			<hr>
			<h5>
				<a href="http://www.joomla.org/" target="_blank"> MAPOLY SOCIAL NETWORK</a><sup>®</sup> helps you to connect and share with
the people in your department.			</h5>
</div>

<div class="container">
			
			<div id="container-installation">
				<ul class="nav nav-tabs"><li class="step active" id="site"></li><li class="step" id="database"></li></ul>
				<div class="btn-toolbar">
	
</div>

<form  method="post">
	<h3>Student's Login</h3>
	<hr class="hr-condensed">

	<div class="row-fluid">
		
		<fieldset>
<!--<legend>PERSONAL DETAILS </legend> -->
          		<table width="989" height="200">
            		<tbody>
            		<tr>
              			<td width="17%" height="42"><span class="error-text">* </span>Matric No :</td>
           			  <td width="33%"><input name="email" type="text" id="email" size="36"></td>
              			<td width="19%">&nbsp;</td>
						<td width="31%" colspan="2" rowspan="4"></td>
           			  </tr>
            	<tr>
              		<td height="47"><span class="error-text">* </span>Password:</td>
              		<td><input name="password" type="password" size="36" maxlength="15"></td>
              		<td>&nbsp;</td>
              		</tr>
            				
				<tr>
              		<td height="64">&nbsp;</td>
           		  <td valign="middle"><input name="Login" type="submit" class="btn btn-primary" value="Login" /></td>
              		<td>&nbsp;</td>
            	</tr>
       	</tbody></table>
        </fieldset>
		
	</div>
	</form>
	</div>
</div>
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%">&nbsp;</td>
    <td width="89%" align="center">Powered by WebGroup<sup>®</sup> 2014-2015&nbsp;</td>
    <td width="5%">&nbsp;</td>
  </tr>
</table>


<?php
	include("fb_files/fb_index_file/fb_erorr_file/fb_erorr.php");
?>	

</body>
</html>
