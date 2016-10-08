
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Your Poem's succesfully submitted !
  </body>
</html>

<?php

$poet=$_GET["poet"];
$name=$_GET["name"];
$poem=$_GET["poem"];

mysql_connect("localhost","root","");
mysql_select_db("poemy");
mysql_query("INSERT INTO poem(id,poet,poem,pdate,sdate,name) VALUES ('','$poet','$poem','','','$name') ")








 ?>
