
  <?php

  //if(isset($_POST("gonder")));
  // mysql_connect("localhost","root","");
  //  $poet=$_POST["poet"];
  //    $name=$_POST["name"];
    //    $poem=$_POST["poem"]
  //



  //mysql_query("INSERT INTO poem(id,poet,poem,pdate,sdate,name) VALUES ('','$poet','$poem','','','$name') ")
  ?>

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
  <title>
    Monoblog
  </title>
</head>
<body>
  <body style="text-align:center">
  <img src="mono.png"  style="margin-top:2%">

  <div id="navbar" class="row" style="color:black; margin-top:5%; " >
    <div class="col-md-3">
  <a style="text-decoration:none;color:black;  color: 928D88#; col-md" href="index.php">HOME</a>
  </div><div class="col-md-3">
  <a  style="text-decoration:none;color:black;color: 928D88#;" href="submit.php">ADD</a>
  </div><div class="col-md-3">

  <a style="text-decoration:none;color:black;color: 928D88#;" href="find.php">FIND</a>
  </div>
  <div class="col-md-3">
  <a style="text-decoration:none;color:black;" href="about.php">ABOUT</a>

  </div>
  </div>

  <div id="line">

  </div>
<div id="form">


  <form action="check.php" method="get">
    <br>
    <input type="text" class="glowing-border" Placeholder="date"
    value="
    <?php echo date('Y-m-d H:i:s'); ?>
    "
     name="pdate"><br>
    <div id="smline">

    </div>
    <br>
    <div class="col-md-12">


    <input type="text"class="glowing-border" Placeholder="Title" name="name"><br>
    <div id="smline">

    </div>
    </div>
    <br>
<div class="pom">






    <textarea type="text" class="glowing-border" id=poem Placeholder="Content" rows="8" name="poem" cols="50">
</textarea>
<div id="mline">

</div>
</div>
<br>
<input type="submit" style="border: none;background-color:white;" value="ADD" name="gonder">

  </form>
</div>
<div id="button" >


    </div>



</body>
</html>
