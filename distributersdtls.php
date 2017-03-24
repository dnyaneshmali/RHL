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
                                    <h5 class="breadcrumbs-title">Distributors Details List </h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">Distributors Details List </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">List Of All Distributors Details</p>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <div id="table-wrap">
                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                    <table class="display nowrap" id="duser-table">
                                                        <thead>
                                                            <tr>
                                                            <th data-field="id">ID </th>
                                                            <th data-field="id">Firm Name </th>
                                                            <th data-field="Date">Address </th>
                                                            <th data-field="Time">Contact </th>
                                                                <th data-field="Name">Name Of Proprietor </th>
                                                                <th data-field="price">Email </th>
                                                                <th data-field="Email">TIN No </th>
                                                                <th data-field="Address">CST No </th>
                                                                <th data-field="price">PAN No </th>
                                                                <th data-field="price">Bank Name</th>
                                                                <th data-field="price">Account No</th>
                                                                <th data-field="price">IFSC No</th>
                                                                <th data-field="price">Preferred Transporters</th>
                                                                <th data-field="price">Local Holiday</th>
                                                                <th data-field="price">Agencies currently held</th>
                                                                <th data-field="price">Agencies held in past</th>
                                                                <th data-field="price">Other Business</th>
                                                                <th data-field="price">Mode Of distribution</th>
                                                                <th data-field="price">Expected Area Of distribution</th>
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
                url: "distributers_dtls.php",
                datatype: "json",
                success: function(response)
                {
                         var json = JSON.parse(response);
                         //console.log(json); 
                    var count = json.length;
                     
                    var trHTML = '';
                   for(var i=0; i<count; i++){

                    trHTML += '<tr><td>'+json[i].id+ '</td><td>'+json[i].fr_name+ '</td><td>' +json[i].fr_address+ '</td><td>' +json[i].fr_contact+ '</td><td>' +json[i].fr_propname+ '</td><td>' +json[i].fr_email+ '</td><td>' +json[i].fr_tin+ '</td><td>' +json[i].fr_cst+ '</td><td>' +json[i].fr_pan+ '</td><td>' +json[i].fr_bank+ '</td><td>' +json[i].fr_baccont+ '</td><td>'+json[i].fr_bifsc+ '</td><td>' +json[i].fr_transport+ '</td><td>' +json[i].fr_holiday+ '</td><td>' +json[i].fr_agencurnt+ '</td><td>' +json[i].fr_agenprev+ '</td><td>' +json[i].fr_obusiness+ '</td><td>' +json[i].fr_mdistrb+ '</td><td>'+json[i].fr_exparea+ '</td>';
                 }
                    // $.each(json, function(i, item) {

                    //     trHTML += '<tr><td>' + response.id[i]+ '</td></tr>';
                    // });
                    $("#duser-table tbody").append(trHTML);
                      $("#duser-table").DataTable({
                          "scrollX": true
                      });
                },
                error: function(response, testStatus, jqXHR)
                {

                }
            });
                        });
            
        </script>
    </body>

</html>
