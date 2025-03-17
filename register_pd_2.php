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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/template.css" rel="stylesheet" type="text/css" />

<link rel="SHORTCUT ICON" href="fb_files/fb_title_icon/Faceback.ico" />
	<link href="fb_files/fb_index_file/fb_css_file/index_css.css" rel="stylesheet" type="text/css">
    <link href="fb_files/fb_font/font.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="fb_files/fb_index_file/fb_js_file/Registration_validation.js"> </script>
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
  <img src="image/Aces.png" alt="Aces" width="300" height="100" />
  <hr>
			<h5>
				<a href="http://www.joomla.org/" target="_blank"> MAPOLY SOCIAL NETWORK</a><sup>®</sup> helps you to connect and share with
the people in your department.			</h5>
</div>

<div class="container">
			
			<div id="container-installation">
				<ul class="nav nav-tabs"><li class="step active" id="site"><a href="#" onclick="return Install.goToPage('site')"><span class="badge">1</span> Personal Data</a></li><li class="step" id="database"><a href="#" onclick="Install.submitform();"><span class="badge">2</span> Profile Photo</a></li><li class="step" id="database"><a href="#" onclick="Install.submitform();"><span class="badge">3</span> Security Question</a></li></ul><div class="btn-toolbar">
	
</div>

<form  method="post" onSubmit="return check();" name="Reg">
	<h3>Sign Up</h3>
	<hr class="hr-condensed">

	<div class="row-fluid">
		
		<fieldset>
<!--<legend>PERSONAL DETAILS </legend> -->
          		<table width="989" height="527">
            		<tbody>
            		<tr>
              			<td width="17%" height="42"><span class="error-text">* </span>Matric No :</td>
           			  <td width="33%"><input name="matric_no" maxlength="50" type="text"></td>
              			<td width="19%">&nbsp;</td>
						<td width="31%" colspan="2" rowspan="4"></td>
           			  </tr>
            	<tr>
              		<td height="47"><span class="error-text">* </span>Firstname:</td>
              		<td><input name="first_name" maxlength="50" type="text" /></td>
              		<td>&nbsp;</td>
              		</tr>
            	<tr>
            	  <td height="46"><span class="error-text">* </span>Lastname:</td>
            	  <td><input name="last_name" maxlength="50" type="text"></td>
              		<td>&nbsp;</td>
              		</tr>
            	<tr>
              		<td height="45" valign="middle"><span class="error-text">* </span>Password: </td>
              		<td valign="middle"><input name="password" type="password" size="36" maxlength="15"></td>
              		<td>&nbsp;</td>
              		<td colspan="2" rowspan="6">&nbsp;</td>
              		</tr>
            	<tr>
              		<td height="44"><span class="error-text">*</span> Confirm Password:</td>
              		<td><input name="confirmpasword" type="password" size="36" maxlength="15"></td> 
              		<td>&nbsp;</td>
            	</tr>
            	<tr>
              		<td height="51"><span class="error-text">*</span> E-mail:</td>
              		<td><input name="email" type="text" size="36"></td>
              		<td>&nbsp;</td>
              		</tr>
            	
            	<tr>
              		<td height="45"><span class="error-text">*</span> Gender:</td>
              		<td><select name="sex">
                  <option value="Select Sex:"> Select Sex: </option>
			<option value="Female"> Female </option>
			<option value="Male"> Male </option>

              		        </select></td>
              		<td>&nbsp;</td>
                    </tr>
            	<tr>
              		<td height="49"><span class="error-text">*</span> Birthday:</td>
              		<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="24%"><select name="month">
	<option value="Month:"> Month: </option>
	
	<script type="text/javascript">
	
		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}	
	</script>
	
	</select></td>
                        <td width="20%"><select name="day">
	<option value="Day:"> Day: </option>
	
	<script type="text/javascript">
	
		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
		
	</script>
	
	</select></td>
                        <td width="56%"><select name="year">
	<option value="Year:"> Year: </option>
	
	<script type="text/javascript">
	
		for(i=1996;i>=1960;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
	
	</script>
	
	</select></td>
                      </tr>
                    </table></td>
              		<td>&nbsp;</td>
            	</tr>
				
				<tr>
              		<td height="64"><input type="hidden" name="fb_join_time"></td>
           		  <td valign="middle"><input type="submit" name="signup" value="Sign Up" id="sign_button" / onClick="time_get()"></td>
              		<td>&nbsp;</td>
            	</tr>
          	</tbody></table>
        </fieldset>
		
	</div>
	</form>
	</div>
</div>
	
<?php
	include("fb_files/fb_index_file/fb_erorr_file/fb_erorr.php");
?>	


</body>
</html>
