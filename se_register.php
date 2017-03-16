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
                                    <h5 class="breadcrumbs-title">Add Sales Executive</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add Sales Executive </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption"> Sales Executive Registration.</p>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <h4 class="header2">Sales Executive Registration </h4>
                                        <div class="row">
                                            <div id="formstatus"></div>
                                            <form class="col s12" id="regform">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input id="name" type="text" name="name">
                                                        <label for="first_name" class="">Name </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input id="email" name="email" type="email" >
                                                        <label for="email">Email Id</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input id="contact" name="contact" type="text" >
                                                        <label for="contact">Contact</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input id="username" name="username" type="text" >
                                                        <label for="username">username</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input id="password" name="password" type="password" >
                                                        <label for="password">password</label>
                                                    </div>
                                                </div>
                                    <div  class="row">
          <div style="text-align:center" class="input-field col s12 center">
              <button id="regbtn" class="btn green" type="submit"  name="action">Register </button>
          </div>
                                  </div>
                                            </form>
                                    
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
         <?php include("includes/footer.php"); ?>
        <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15, // Creates a dropdown of 15 years to control year
                    format: 'yyyy-mm-dd'
                });

            });


            $('#regform').validate({
                errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert 
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email:true

                    },
                    contact: {
                        required: true,
                        
                    },
                    username:{
                       required: true
                    },
                      password:{
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
                        url: "seform.php",
                        success: function(msg) {
                            if (msg === 'OK') {

                                result = '<div class="alert success"><i class="fa fa-check-circle-o"></i>Register Successfully</div>';
                                $('#regform').clearForm();
                            } else {
                                result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                                $('#regform').clearForm();
                            }
                            $("#formstatus").fadeOut(4000).html(result);


                        },
                        error: function() {
                            alert("not work");

                        }
                    });
                }

            });
//             $.get("listwork.php", function(data) {
//                 console.log(data);
//                 var json = JSON.parse(data);
// //                    console.log(json[0].e_did);
//                 var trHTML = '';
//                 $.each(json, function(i, item) {

//                     trHTML += '<tr><td>' + item.w_id + '</td><td>' + item.w_name + '</td><td>' + item.w_date + '</td><td>' + item.w_image + '</td><td>' + item.w_info + '</td></tr>';
//                 });
//                 $("#worklist_table tbody").append(trHTML);
//                 $("#worklist_table").DataTable();
//             });
        </script>
    </body>

</html>
