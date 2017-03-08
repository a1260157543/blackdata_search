<!DOCTYPE HTML>
<?php

  $con =mysql_connect("localhost","root","root")or die ("mysql链接失败"); 
  mysql_select_db("add", $con);
  mysql_query("SET NAMES UTF8");
  $q = $_GET["name"];   
  $grade = $_GET["grade"];  
  $sql = mysql_query("SELECT * FROM $grade WHERE Type='$q' or DeviceId='$q' or Ip='$q'
   or LoginName='$q' or General_contact='$q' or General_Email='$q' or Password='$q'
   or MobilePhone='$q' or Identity_Card='$q' or QQ_Number='$q' or Security_Level='$q' or Description='$q'",$con);//数据查询 
  if(!mysql_num_rows($sql)){
    mysql_query("INSERT INTO records(LoginName) VALUES ('$q')",$con);
  };
	mysql_close($con);//关闭数据库连接
	if($row = mysql_fetch_array($sql)){
		echo "<p>注意了！ 您的数据已经泄露。</p>";
	}
    if(!mysql_num_rows($sql)){
        echo "<p>"."不错，用户信息很安全！"."<p/>";
    };
?>