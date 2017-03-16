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
                                    <h5 class="breadcrumbs-title">Sales Executive List </h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">Sales Executive List </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">List Of All Registered Sales Executive.</p>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <div id="table-wrap">
                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                    <table class="bordered" id="user-table">
                                                        <thead>
                                                            <tr>
                                                            <th data-field="id">ID </th>
                                                                <th data-field="id">Name </th>
                                                                <th data-field="price">Contact No </th>
                                                                <th data-field="name">Email </th>
                                                                <th data-field="price">Username </th>
                                                                <th data-field="price">Password </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                       

                                                        </tbody>
                                                    </table>
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


        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function(){
              
               
            
                        $.ajax({
                type: "POST",
                url: "listseuser.php",
                datatype: "json",
                success: function(response, testStatus, jqXHR)
                {
                          console.log(response);
                    var json = JSON.parse(response);
                     console.log(json.length);
                    var trHTML = '';

                    $.each(json, function(i, item) {

                        trHTML += '<tr><td>' + item.s_id + '</td><td>' + item.s_name + '</td><td>' + item.s_contact + '</td><td>' + item.s_email + '</td></td><td>' + item.s_username + '</td><td>' + item.s_password + '</td></tr>';
                    });
                    $("#user-table tbody").append(trHTML);
                     $("#user-table").DataTable();
                },
                error: function(response, testStatus, jqXHR)
                {

                }
            });
                        });
            
        </script>
    </body>

</html>
