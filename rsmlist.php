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
                                    <h5 class="breadcrumbs-title">RSM List </h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">RSM List </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">List Of All Registered RSM.</p>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <div id="table-wrap">
                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                    <table class="bordered" id="duser-table">
                                                        <thead>
                                                            <tr>
                                                            <th data-field="id">ID </th>
                                                            <th data-field="Date">Username </th>
                                                            <th data-field="Time">First Name </th>
                                                                <th data-field="Name">Last Name</th>
                                                                <th data-field="price">Contact No</th>
                                                                <th data-field="Email">Email</th>
                                                                <th data-field="Address">Code</th>
                                                                <th data-field="price">Date</th>
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
                //alert('in');
                $.ajax({
                type: "POST",
                url: "rsm_list.php",
                datatype: "json",
                success: function(response)
                {
                    
                          console.log(response);
                          var json = JSON.parse(response);
                         console.log(json); 
                    var count = json.length;
                     
                    var trHTML = '';
                   for(var i=0; i<count; i++){

                    trHTML += '<tr><td>' + i+ '</td><td>' + json[i].first_name+ '</td></tr>'
                 }
                 console.log(trHTML);
                    // $.each(json, function(i, item) {

                    //     trHTML += '<tr><td>' + response.id[i]+ '</td></tr>';
                    // });
                    $("#duser-table tbody").append(trHTML);
                      $("#duser-table").DataTable();
                },
                error: function(response, testStatus, jqXHR)
                {

                }
            });
                        });
            
        </script>
    </body>

</html>
