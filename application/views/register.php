<html>
<head>
  <meta charset="utf-8">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  
  <title>Register</title>  
  <link  href="http://fonts.googleapis.com/css?family=Cabin:400,500,600,bold" rel="stylesheet" type="text/css" >

<link  href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="http://localhost/spreeci/styles/app.css"/>
<link rel="stylesheet" href="http://localhost/spreeci/css/main.css"/>
  <script src="lib/onsen/js/angular/angular.js"></script>    
  <script src="lib/onsen/js/onsenui.js"></script>   
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 

  <script src="http://localhost/spreeci/cordova.js"></script>
  <script src="http://localhost/spreeci/app.js"></script> 
  

  
  
</head>

<body background="http://localhost/spreeci/img/Drag Layer.png")?>
 
 <div style="padding-top: 50px;" align="center">
 <h1 style="font-size:24px;">Register</h1>
<?php
  echo form_open('','');
  echo "Hello";
  echo "<br><br>";
  echo form_label($register_form["email"]["label"], $register_form["email"]["field"]);
  echo form_input($register_form["email"]["field"],'');
  echo "<br><br>";
  echo form_label($register_form["password"]["label"], $register_form["password"]["field"]);
  echo form_input($register_form["password"]["field"],'');
  echo "<br><br>";
  echo form_label($register_form["conpassword"]["label"], $register_form["conpassword"]["field"]);
  echo form_input($register_form["conpassword"]["field"],'');
  echo "<br><br>";
  echo form_label($register_form["name"]["label"], $register_form["name"]["field"]);
  echo form_input($register_form["name"]["field"],'');
  echo "<br><br>";
  echo form_label($register_form["telno"]["label"], $register_form["telno"]["field"]);
  echo form_input($register_form["telno"]["field"],'');
  echo "<br><br>";
  echo form_label($register_form["collegename"]["label"], $register_form["collegename"]["field"]);
  echo form_input($register_form["collegename"]["field"],'');

  echo "<br><br>";
  echo form_submit('submit','Submit');
  echo form_close();

?>
</div>

</body>
</html>