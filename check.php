
<html>
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<link href="normalize.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

                        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <head>
    <meta charset="utf-8">
    <title>Poemy</title>
  </head>
  <body style="text-align:center">
<img src="mono.png"  style="margin-top:2%">

<div id="navbar" class="row" style="color:black; margin-top:5%; " >
    <div class="col-md-3">
<a style="text-decoration:none;color:black;  color: 928D88#; col-md" href="index.php">HOME</a>
</div><div class="col-md-3">
<a  style="text-decoration:none;color:black;color: 928D88#;" href="submit.php">ADD</a>
</div><div class="col-md-3">

<a style="text-decoration:none;color:black;color: 928D88#;" href="FIND">FIND</a>
</div>
<div class="col-md-3">
<a style="text-decoration:none;color:black;" href="about.php">ABOUT</a>

</div>
</div>

<div id="line">

</div>


<div id="content">


<?php


$pdate=$_GET["pdate"];
$name=$_GET["name"];
$poem=$_GET["poem"];

if (empty($pdate) || empty($name) || empty($poem) ) {
    //Empty
echo "please fill all the fields !";


}
else {
  try {
    $db = new PDO("mysql:host=localhost;dbname=poemy", "root", "secret");
} catch ( PDOException $e ){
    print $e->getMessage();
}

$query = $db->prepare("INSERT INTO poem SET
pdate = ?,
name = ?,
poem = ?");
$insert = $query->execute(array(
     "$pdate", "$name", "$poem"
));
if ( $insert ){
    $last_id = $db->lastInsertId();
    print "insert işlemi başarılı!";
}




}


 ?>



</div>



  </body>
</html>
