<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
if ((isset($_SESSION['username']) == 'admin')) 
{
    session_destroy();
header('Location: index.php');
}
?>

<html>
    <head>
        <title>Admin Panel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style type="text/css">
body{
  background: #56ab2f; /* fallback for old browsers */
background: -webkit-linear-gradient(180deg, #56ab2f , #a8e063); /* Chrome 10-25, Safari 5.1-6 */
 /*background: linear-gradient( #56ab2f , #a8e063);  W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+  */

}
.validation-error{
    color: red;
}
        </style>
    </head>
    <body class="login_bg">
<div class="login_container row">
<div class="container">
<div class="col m4 s12 offset-m4 card-panel z-depth-4">
    <div id="formstatus"></div>
    <form class="login_form" id="logform">
<div class="row margin">
          <div class="input-field col s12">
          <a href="#">
              <img src="images/rhl_logo.png" alt="rhl_logo" class="responsive-img">
          </a>
          </div>
        </div>
  
<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" name="username" type="text">
            <label for="username"  class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password">
            <label for="password" class="center-align">Password</label>
          </div>
        </div>
                <div class="row margin">
          <div class="input-field col s12">
              <button class="col s12 btn green" id="lgbtn" type="submit" name="action">LOGIN</button>
          </div>
        </div>
    </form>
        <div class="row margin">
          <div class="input-field col s6">
            <p class="margin medium-small">
            <a href="Register.html">Register Now</a>
            </p>
          </div>
                    <div class="input-field col s6 ">
            <p class="margin medium-small right">
            <a href="Register.html">Forgot password</a>
            </p>
          </div>
        </div>
</form>

</div>
</div>

        <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
        <script>
            $(document).ready(function() {
         
            $('#logform').validate({
                errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert 
                rules: {
                    username: {
                        required: true
                    },
                    password: {
                        required: true
                        

                    }
                },
                highlight: function(element) {
                    $(element).closest('.space').addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element).closest('.space').removeClass('has-error');
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(placement).append(error);
                    }
                    else {
                        error.insertAfter(element);
                    }
                },

                submitHandler: function(form) {

                    var result;
                    $(form).ajaxSubmit({
                        type: "POST",
                        data: $(form).serialize(),
                        url: "login.php",
                        success: function(msg) {
                            if (msg === 'OK') {

                                result = '<div class="alert success"><i class="fa fa-check-circle-o"></i>Login Successfully</div>';
                                $('#logform').clearForm();
                                window.location.href="home.php";
                            } else {
                                result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                                $('#logform').clearForm();
                            }
                            $("#formstatus").html(result);


                        },
                        error: function() {
                            alert("not work");

                        }
                    });
                }

            });
            });
        </script>
    </body>

</html>
