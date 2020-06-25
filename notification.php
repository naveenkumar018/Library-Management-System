<?php
session_start();
include "header.php";
include "connection.php";
?>
<div class="right col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3></h3>
</div>

<div class="title_right">
<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
<div class="input-group">
<input type="text" class="form-control" placeholder="search for...">
<span class="input-group-btn">
<button class="btn btn-default" type="button">Go!</button>
</span>
</div>
</div>
</div>
</div>

<div class="clearfix"></div>
<div class="row" style="...">
<div class="col-md-5 col-sm-5 col-xs-12">
<div class="x_panel":
<div class="x_title":
<h2>Send Message To Student</h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
<form name="form1"action="" method="post" class="col-lg-6" enctype="multipart/form-data>
<table class="table table-bordered">
<tr>
<td>
<select class="form-control" name="dusername">
<?php
$res=mysql_query($link,"select * from login");
while($row=mysql_fetch_array($res))
{
	?><option value="<?php echo $row["USER_NAME"]?">
	<?php echo $row["USER_NAME"]."(".$row["EMAIL_ID"].")";?>
</option><?php
}
?>
</select>
</td>
</tr>
<tr>
<td><input type="text" class="form-control" name="title" placeholder="Enter title"></td>
</tr>
<tr>
<td>
Message <br>
<textarea name="message" class="form-control">
</textarea>
</td>
</tr>

<tr>
<td><input type="submit" name="submit" value="send message"></td>
</tr>
</table>
</form>

</div>
</div>
</div>
</div>
</div>
</div>

<?php
if(isset($POST["submit1"]))
{
mysql_query($link,"insert into message values('','$_SESSION[librarion]','$_POST[dusername]',$_POST[title]','$_POST[message]','n')") or die (mysql_error($link);
?>
<script type="text/javascript">
alert("message send successfully");
</script>
}
	
<?php
include "footer.php"
?>