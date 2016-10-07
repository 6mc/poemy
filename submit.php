
<?php

//if(isset($_POST("gonder")));
// mysql_connect("localhost","root","");
//  $poet=$_POST["poet"];
//    $name=$_POST["name"];
  //    $poem=$_POST["poem"]
//


//mysql_query("INSERT INTO poem(id,poet,poem,pdate,sdate,name) VALUES ('','$poet','$poem','','','$name') ")
?>



<head>
  <title>
    submit a poem
  </title>
</head>
<body>


  <form action="" method="post">
    Poet name:<br>
    <input type="text" name="poet"><br>
    poem name:<br>
    <input type="text" name="name"><br>
    poem<br>
    <textarea type="text" rows="4" name="poem" cols="50">
</textarea>
    <input type="submit" value="gonder" name="gonder">

  </form>




</body>
</html>
