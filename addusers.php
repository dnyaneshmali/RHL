<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
 <?php include("includes/header.php"); ?>
                <section id="content">
                    <div id="breadcrumbs-wrapper">
                        <!-- Search for small screen -->
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <h5 class="breadcrumbs-title">Add user</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add User</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">Add User Form</p>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <div id="table-wrap">
                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                <form class="user_form" id="adduserform">

		<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="fname" name="fname" type="text">
            <label for="fname" class="center-align">First Name</label>
          </div>
          </div>
          <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="lname" name="lname" type="text">
            <label for="lname"  class="center-align">Last Name</label>
          </div>
          </div>
          <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="email" name="email" type="text">
            <label for="email"  class="center-align">Email</label>
          </div>
          </div>
		  <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="mnumber" name="mnumber" type="text">
            <label for="mnumber" class="center-align">Number</label>
          </div>
          </div>
          <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="city" name="city" type="text">
            <label for="city" class="center-align">City</label>
          </div>
          </div>
          <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="state" name="state" type="text">
            <label for="state" class="center-align">State</label>
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
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="rpassword" name="rpassword" type="password">
            <label for="rpassword" class="center-align">Reenter Password</label>
          </div>
        </div>
          <div class="row margin">
          <div class="input-field col s12">
              <button class="col s12 btn green" id="lgbtn" type="submit" name="action">Submit</button>
          </div>
        </div>
    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
 <?php include("includes/footer.php"); ?>    
 <script type="text/javascript">
 	$(document).ready(function() {
         $('#adduserform').validate({
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

                submitHandler: function(form){

                    var result;
                    $(form).ajaxSubmit({
                        type: "POST",
                        data: $(form).serialize(),
                        url: "add_user.php",
                        success: function(data) {
                        	
                        	  if (data === '1') {

                                alert('Success');
                                $('#adduserform').clearForm();
                            } else {
                                alert('Fail');
                                $('#adduserform').clearForm();
                            }
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
