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
  <link href="http://localhost/spreeci/assets/css/bootstrap.css" rel="stylesheet">
  <link href="http://localhost/spreeci/assets/css/font-awesome.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 

  <script src="http://localhost/spreeci/cordova.js"></script>
  <script src="http://localhost/spreeci/app.js"></script>   
</head>

<body background="http://localhost/spreeci/img/Drag Layer.png")?>
<div class="container" style="padding-top:70px;">
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title" align="center"><b>Register</b></h3>
        </div>
          <div class="panel-body">
<?php
  echo form_open('','');
  echo "  <fieldset> <div class='form-group'>";
  
  $data = array('name' => $register_form["email"]["field"],
                 'class'=> "form-control",
                  'placeholder'=> "Email" );
  echo form_input($data);
  echo "<br>";
  $data['name']=$register_form["password"]["field"];
  $data['placeholder']="Password";
  echo form_password($data);
  echo "<br>";
  $data['name']=$register_form["conpassword"]["field"];
  $data['placeholder']="Confirm Password";
  echo form_password($data);
  echo "<br>";
  $data['name']=$register_form["name"]["field"];
  $data['placeholder']="Name";
  echo form_input($data);
  echo "<br>";
  $data['name']=$register_form["telno"]["field"];
  $data['placeholder']="Telephone";
  echo form_input($data);
  echo "<br>";
  $data['name']=$register_form["collegename"]["field"];
  $data['placeholder']="College";
  echo form_input($data);

  echo "<br>";
  $datasub= array('name' => "submit" ,
                   'value' => "Register",
                    'class' => "btn btn-lg btn-warning btn-block" );
  echo form_submit($datasub);
  echo "</fieldset>";
  echo form_close();

?>
  </div>
  </div>
  </div>
  </div>
  </div>

</body>
</html>