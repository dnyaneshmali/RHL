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
                                    <h5 class="breadcrumbs-title">Add Product</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add Product</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">Add Product Form</p>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <div id="table-wrap">
                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                <form class="user_form" id="addproductform">

		<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-view-module prefix"></i>
            <input id="pname" name="pname" type="text">
            <label for="pname" class="center-align">Product Name</label>
          </div>
          </div>
          <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-editor-attach-money prefix"></i>
            <input id="pprice" name="pprice" type="text">
            <label for="pprice"  class="center-align">Price</label>
          </div>
          </div>
          <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-subject prefix"></i>
            <input id="pqty" name="pqty" type="text">
            <label for="pqty" class="center-align">Quantity</label>
          </div>
        </div>
      <div class="row margin">
        <div class="input-field col s12">
        <i class="mdi-communication-comment prefix"></i>
          <textarea id="desc" class="materialize-textarea" name="desc"></textarea>
            <label for="desc">Description</label>
        </div>
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
$('select').material_select();
});


 	$(document).ready(function() {
         $('#addproductform').validate({
                errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert 
                rules: {
                  pname: {
                        required: true,
                    },
                    pprice: {
                        required: true,
                        number: true
                    },
                     pqty: {
                        required: true,
                        number: true
                    },
                    desc: {
                        required: true,
                    },
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
                        url: "addproduct.php",
                        success: function(data) {
                        	console.log(data);
                        	  if (data == '1') {
                                swal(
                                      'Good job!',
                                      'You clicked the button!',
                                      'success'
                                    )
                                //alert('Success');
                                //$('#adduserform').clearForm();
                            } else {

                                swal(
                                      'Oops...',
                                      'Something went wrong!',
                                      'error'
                                    )
                                //alert('Fail');
                                $('#addproductform').clearForm();
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
