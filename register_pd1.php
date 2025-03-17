<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>fb | Register</title>

<link href="../../../Users/t.HP/Desktop/Programs/aces/fb/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../../Users/t.HP/Desktop/Programs/aces/fb/css/template.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="header">
			<img src="../../../Users/t.HP/Desktop/Programs/aces/fb/image/fb.png" alt="fb" width="300" height="100">
			<hr>
			<h5>
				<a href="http://www.joomla.org/" target="_blank"> MAPOLY SOCIAL NETWORK</a><sup>®</sup> helps you to connect and share with
the people in your department.			</h5>
</div>

<div class="container">
			
			<div id="container-installation">
				<ul class="nav nav-tabs"><li class="step active" id="site"><a href="#" onclick="return Install.goToPage('site')"><span class="badge">1</span> Personal Data</a></li><li class="step" id="database"><a href="#" onclick="Install.submitform();"><span class="badge">2</span> Profile Photo</a></li><li class="step" id="database"><a href="#" onclick="Install.submitform();"><span class="badge">3</span> Security Question</a></li></ul><div class="btn-toolbar">
	
</div>

<form action="../../../Users/t.HP/Desktop/Programs/aces/edit/index.php" method="post" id="adminForm" class="form-validate form-horizontal">
	<h3>Sign Up</h3>
	<hr class="hr-condensed">

	<div class="row-fluid">
		
		<fieldset>
<!--<legend>PERSONAL DETAILS </legend> -->
          		<table width="989" height="527">
            		<tbody>
            		<tr>
              			<td width="17%" height="42"><span class="error-text">* </span>Matric No :</td>
           			  <td width="33%"><input name="Matric" id="Matric" maxlength="50" type="text"></td>
              			<td width="19%">&nbsp;</td>
						<td width="31%" colspan="2" rowspan="4"></td>
           			  </tr>
            	<tr>
              		<td height="47"><span class="error-text">* </span>Firstname:</td>
              		<td><input name="firstname" id="firstname" maxlength="50" type="text" /></td>
              		<td>&nbsp;</td>
              		</tr>
            	<tr>
            	  <td height="46"><span class="error-text">* </span>Lastname:</td>
            	  <td><input name="lastname" id="lastname" maxlength="50" type="text"></td>
              		<td>&nbsp;</td>
              		</tr>
            	<tr>
              		<td height="45" valign="middle"><span class="error-text">* </span>Password: </td>
              		<td valign="middle"><input name="password" type="password" id="password" size="36" maxlength="15"></td>
              		<td>&nbsp;</td>
              		<td colspan="2" rowspan="6">&nbsp;</td>
              		</tr>
            	<tr>
              		<td height="44"><span class="error-text">*</span> Confirm Password:</td>
              		<td><input name="confirmpasword" type="password" id="confirmpasword" size="36" maxlength="15"></td> 
              		<td>&nbsp;</td>
            	</tr>
            	<tr>
              		<td height="51"><span class="error-text">*</span> E-mail:</td>
              		<td><input name="email" type="text" id="email" size="36" maxlength="15"></td>
              		<td>&nbsp;</td>
              		</tr>
            	
            	<tr>
              		<td height="45"><span class="error-text">*</span> Gender:</td>
              		<td><select name="gender" id="gender">
                  <option selected="selected">
                    [Select Gender] </option>
                  
                  <option value="Male">
                    MALE  </option>
                   <option value="Female">
                    FEMALE  </option>

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
              		<td height="64">&nbsp;</td>
           		  <td valign="middle"><input name="submit" type="submit" class="btn btn-primary" value="Register" /></td>
              		<td>&nbsp;</td>
            	</tr>
          	</tbody></table>
        </fieldset>
		
	</div>
	</form>
	</div>
</div>
	



</body>
</html>
