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
		$que2=mysql_query("select * from user_secret_quotes where user_id=$userid");
		$count1=mysql_num_rows($que2);
		if($count1==0)
		{
		
			$que3=mysql_query("select * from user_profile_pic where user_id=$userid");
			$count3=mysql_num_rows($que3);
			if($count3>0)
			{
?>
<?php
	if(isset($_POST['Next']))
	{
		$que1=$_POST['que'];
		$ans1=$_POST['ans'];

		mysql_query("insert into user_secret_quotes(user_id,Question1,Answer1) values('$userid','$que1','$ans1')");
		header("location:../fb_step3/Secret_Question2x.php");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ACES | Register</title>

<link rel="SHORTCUT ICON" href="../fb_step1/fb_files/fb_title_icon/fav.ico" />
<link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../../css/template.css" rel="stylesheet" type="text/css" />
<script src="step2_js/que_check.js" language="javascript"> </script>
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
				<ul class="nav nav-tabs"><li class="step" id="site"><a href="#" onClick="return Install.goToPage('site')"><span class="badge">1</span> Personal Data</a></li><li class="step" id="database"><a href="#" onClick="Install.submitform();"><span class="badge">2</span> Profile Photo</a></li><li class="step active" id="database"><a href="#" onClick="Install.submitform();"><span class="badge">3</span> Security Question</a></li></ul><div class="btn-toolbar">
	
</div>

<form method="post" name="sq" onSubmit="return check()">
	<h3>Secret Question 1 </h3>
	<hr class="hr-condensed">

	<div class="row-fluid">
		
		<fieldset>
<!--<legend>PERSONAL DETAILS </legend> -->
          		<table width="989" height="315">
            		<tbody>
            		<tr>
            		  <td width="3%">&nbsp;</td>
              			<td width="19%" align="right">Matric Number:</td>
              			<td width="4%" height="22" align="right">&nbsp;</td>
           			    <td width="42%" align="left"><b><?php echo $rec[7]; ?> </b></td>
           			    <td width="32%">&nbsp;</td>
           			  </tr>
            	<tr>
            	  <td>&nbsp;</td>
              		<td align="right">Secret Question 1:</td>
              		<td height="47" align="right">&nbsp;</td>
              		<td align="left">
<select name="que" style="height:38;font-size:18px;padding:3;">
		<option value="select one">select one</option>
		<option value="what is the first name of your favorite uncle?">what is the first name of your favorite uncle?</option>
		<option value="where did you meet you spouse?">where did you meet you spouse?</option>
		<option value="what is your oldest cousins name?">what is your oldest cousin's name?</option>
		<option value="what is your youngest childs nickname?">what is your youngest child's nickname?</option>
		<option value="what is your oldest childs nickname?">what is your oldest child's nickname?</option>
		<option value="what is the first name of your oldest niece?">what is the first name of your oldest niece?</option>
		<option value="what is the first name of your oldest nephew?">what is the first name of your oldest nephew?</option>
		<option value="what is the first name of your favorite aunt?">what is the first name of your favorite aunt?</option>
		<option value="where did you spend you honeymoon?">where did you spend you honeymoon?</option>
</select></td>
              		<td>&nbsp;</td>
              		</tr>
            	<tr>
            	  <td>&nbsp;</td>
            	  <td align="right">Your Answer:</td>
            	  <td height="46" align="right">&nbsp;</td>
            	  <td align="left"><input type="text" name="ans" / style="height:35; width:350; font-size:18px;" maxlength="50"> </td>
            	  <td>&nbsp;</td>
              		</tr>
            	
            	<tr>
            	  <td>&nbsp;</td>
              		<td>&nbsp;</td>
              		<td height="49">&nbsp;</td>
           		  <td align="center"><input type="submit" name="Next" value="Next" id="Next_button" class="btn btn-primary"> </td>
              		<td>&nbsp;</td>
            	</tr>
				
				<tr>
				  <td>&nbsp;</td>
              		<td>&nbsp;</td>
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
		include("step2_erorr/step2_erorr.php");
?>
</body>
</html>
<?php
			}
			else
			{
				if($gender=="Male")
				{
					header("location:../fb_step1/Step1_Male2.php");
				}
				else
				{
					header("location:../fb_step1/Step1_Female2.php");
				}
			}
		}
		else
		{
			header("location:../fb_step3/Secret_Question2x.php");
		}
	}
	else
	{
		header("location:../../../index.php");
	}
?>