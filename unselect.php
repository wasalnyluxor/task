<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CC99CC" >
<!--//<img src="9a2fcd9d0940f3a80a464fe4613affa1.jpg" style="width:80% ;  height:80%;" />
--><a href="index.php" >index </a><br />
<br />
<br />
<br />
<br />

<?php
$HostName="localhost";
$db_name="learndb";
$LoginName="root";
$LoginPassword="";

   
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM university" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
    <form  method="get" >
      <input type="hidden" name="u_id" value="<?php echo "$row[un_id]"?>" />
         <input type="text" name="u_name" value="<?php echo "$row[un_name]"?>" />
            <input type="text" name="u_city" value="<?php echo "$row[un_city]"?>" />
              <input type="radio" name="u_status" value="<?php echo "$row[un_status]"?>" />free
                 <input type="radio" name="u_status" value="<?php echo "$row[un_status]"?>" />paid
               
                                      <a href="unupdate.php" > <input type="submit" value="update" /></a>
                                             <a href="undelete.php" ><input type="submit" value="delete" /></a>

                        <hr />

     </form>
     
     
     
     
  <?php
	;}
	 mysql_close($con);
	?>

</body>
</html>