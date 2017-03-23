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
                                    <h5 class="breadcrumbs-title">Distributers Enquiry List </h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">Distributers Enquiry List </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">List Of All Distributers Enquiry</p>
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
                                                            <th data-field="Date">Date </th>
                                                            <th data-field="Time">Time </th>
                                                                <th data-field="Name">Name </th>
                                                                <th data-field="price">Contact No </th>
                                                                <th data-field="Email">Email </th>
                                                                <th data-field="Address">Address </th>
                                                                <th data-field="price">SE Location </th>
                                                                <th data-field="price">Added By</th>
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
             
                var idlist="-1";  
            
                $.ajax({
                type: "POST",
                url: "distributers_list.php",
                data:{"idlist":idlist},
                datatype: "json",
                success: function(response, testStatus, jqXHR)
                {
                          console.log(response);
                    var count = Object.keys(response.id).length;
                     console.log(count);
                    var trHTML = '';
                   for(var i=0; i<count; i++){

                    trHTML += '<tr><td>' + i+ '</td><td>' + response.date[i]+ '</td><td>' + response.time[i]+ '</td><td>' + response.name[i]+ '</td><td>' + response.contact[i]+ '</td><td>' + response.email[i]+ '</td><td>' + response.location[i]+ '</td><td>' + response.selocation[i]+ '</td><td>' + response.uname[i]+ '</td></tr>'
                 }
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
