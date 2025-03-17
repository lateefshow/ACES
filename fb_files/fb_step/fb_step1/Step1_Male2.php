<?php
	session_start();
	if(isset($_SESSION['tempfbuser']))
	{
		mysql_connect("localhost","root","");
		mysql_select_db("aces");
		$user=$_SESSION['tempfbuser'];
		$que1=mysql_query("select * from users where Email='$user' ");
		$rec=mysql_fetch_array($que1);
		$userid=$rec[0];
		$gender=$rec[4];
		if($gender=="Male")
		{
			$que2=mysql_query("select * from user_profile_pic where user_id=$userid");
			$count1=mysql_num_rows($que2);
			if($count1==0)
			{
?>
<?php

	if(isset($_POST['file']) && ($_POST['file']=='Upload'))
	{
		$path = "../../../fb_users/Male/".$user."/Profile/";
		$path2 = "../../../fb_users/Male/".$user."/Post/";
		$path3 = "../../../fb_users/Male/".$user."/Cover/";
		mkdir($path, 0, true);
		mkdir($path2, 0, true);
		mkdir($path3, 0, true);
		
		$img_name=$_FILES['file']['name'];
    	$img_tmp_name=$_FILES['file']['tmp_name'];
    	$prod_img_path=$img_name;
    	move_uploaded_file($img_tmp_name,"../../../fb_users/Male/".$user."/Profile/".$prod_img_path);
		
		mysql_query("insert into user_profile_pic(user_id,image) values('$userid','$img_name')");
		header("location:../fb_step2/Secret_Question1x.php");
	} 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ACES | Register</title>

<link rel="SHORTCUT ICON" href="fb_files/fb_title_icon/fav.ico" />
<link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../../css/template.css" rel="stylesheet" type="text/css" />
<script src="step1_js/Image_check.js" language="javascript"> </script>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:308px;
	height:115px;
	z-index:1061;
	left: 618px;
	top: 215px;
}
#Layer2 {
	position:absolute;
	width:614px;
	height:115px;
	z-index:999;
	left: 297px;
	top: 214px;
}
-->
</style>
</head>

<body>
<div class="header">
			<img src="../../../image/Aces.png" alt="Aces" width="300" height="100">
			<hr>
			<h5>
				<a href="http://www.joomla.org/" target="_blank"> MAPOLY SOCIAL NETWORK</a><sup>®</sup> helps you to connect and share with
the people in your department.			</h5>
</div>

<div class="container">
			
			<div id="container-installation">
				<ul class="nav nav-tabs"><li class="step" id="site"><a href="#" onClick="return Install.goToPage('site')"><span class="badge">1</span> Personal Data</a></li><li class="step active" id="database"><a href="#" onClick="Install.submitform();"><span class="badge">2</span> Profile Photo</a></li><li class="step" id="database"><a href="#" onClick="Install.submitform();"><span class="badge">3</span> Security Question</a></li></ul><div class="btn-toolbar">
	
</div>

<form method="post" enctype="multipart/form-data" name="uimg" onSubmit="return Img_check();">
	<h3>Upload</h3>
	<hr class="hr-condensed">

	<div class="row-fluid">
		
		<fieldset>
<!--<legend>PERSONAL DETAILS </legend> -->
          		<table width="989" height="315">
            		<tbody>
            		<tr>
              			<td width="17%" height="22">&nbsp;</td>
           			    <td width="33%" align="center"><b>Matric Number: <?php echo $rec[7]; ?> </b></td>
           			    <td width="19%">&nbsp;</td>
           			  </tr>
            	<tr>
              		<td height="47">&nbsp;</td>
              		<td align="center"><img src="../../../image/Male.jpg" width="160" height="160" /></td>
              		<td></td>
              		</tr>
            	<tr>
            	  <td height="46">&nbsp;</td>
            	  <td align="center"><input type="file" name="file" id="img"/></td>
            	  <td>&nbsp;</td>
              		</tr>
            	
            	<tr>
              		<td height="49">&nbsp;</td>
           		  <td align="center"><input type="submit" value="Upload" name="file" id="upload_button" class="btn btn-primary"/></td>
              		<td>&nbsp;</td>
            	</tr>
				
				<tr>
              		<td height="22">&nbsp;</td>
           		  <td valign="middle"></td>
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
    <td width="89%" align="right">Powered by WebGroup<sup>®</sup> 2014-2015&nbsp;</td>
    <td width="5%">&nbsp;</td>
  </tr>
</table>

<?php
		include("step1_erorr/step1_erorr.php");
	?>

</body>
</html>
<?php
			}
			else
			{
				header("location:../fb_step2/Secret_Question1x.php");
			}
		
		}
		else
		{
			header("location:../fb_step1/Step1_Female2.php");
		}
	}
	else
	{
		header("location:../../../index.php");
	}
?>