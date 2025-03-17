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
		$que2=mysql_query("select * from user_secret_quotes where user_id=$userid");
		$rec2=mysql_fetch_array($que2);
		$q2=$rec2[3];
		$a2=$rec2[4];
		if($q2=="" && $a2=="")
		{
			$que3=mysql_query("select * from user_secret_quotes where user_id=$userid");
			$count3=mysql_num_rows($que3);
			if($count3>0)
			{
		
?>
<?php
	if(isset($_POST['Finish']))
	{
		$que2=$_POST['que'];
		$ans2=$_POST['ans'];
		
		mysql_query("update user_secret_quotes set Question2='$que2',Answer2='$ans2' where user_id=$userid");
		
		$que_user_data=mysql_query("select * from users where Email='$user';");
		$user_data=mysql_fetch_array($que_user_data);
		$userid=$user_data[0];
		$user_join_time=$user_data[6];
		mysql_query("insert into user_post(user_id,post_txt,post_time,priority) values($userid,'Join Faceback','$user_join_time','Public');");
		mysql_query("insert into user_status values($userid,'Online')");
		mysql_query("insert into user_info(user_id) values($userid)");
		
		session_start();
		$_SESSION['fbuser']=$user;
		header("location:../../fb_home/Home.php");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ACES | Register</title>

<link rel="SHORTCUT ICON" href="../fb_step1/fb_files/fb_title_icon/fav.ico" />
<link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../../css/template.css" rel="stylesheet" type="text/css" />
	<script src="step3_js/que_check.js" language="javascript"> </script>
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
	<h3>Secret Question 2 </h3>
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
              		<td align="right">Secret Question 2:</td>
              		<td height="47" align="right">&nbsp;</td>
              		<td align="left">
<select name="que" style="height:38;font-size:18px;padding:3;">
		<option value="select one">select one</option>
		<option value="what was your favorite food as a child?">what was your favorite food as a child?</option>
		<option value="what was the last name of your first boss?">what was the last name of your first boss?</option>
		<option value="what is the name of your favorite sports team?">what is the name of your favorite sports team?</option>
		<option value="what was you first pets name?">what was you first pet's name?</option>
		<option value="what is the name of your favorite book?">what is the name of your favorite book?</option>
		<option value="who is your all-time favorite movie character?">who is your all-time favorite movie character?</option>
		<option value="what was the make of your fist car?">what was the make of your fist car?</option>
		<option value="what was the make of your first motorcycle?">what was the make of your first motorcycle?</option>
		<option value="who is you favorite author?">who is you favorite author?</option>
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
           		  <td align="center"><input type="submit" name="Finish" value="Finish" id="Next_button"  class="btn btn-primary"> </td>
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
		include("step3_erorr/step3_erorr.php");
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
			header("location:../../fb_home/Home.php");
		}
	}
	else
	{
		header("location:../../../index.php");
	}
?>