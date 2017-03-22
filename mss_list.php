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
                                    <h5 class="breadcrumbs-title">MSS List </h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">MSS List </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">MSS REPORT LIST.</p>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <div id="table-wrap">
                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                    <table  id="mss-table" class="display nowrap">
                                                        <thead>
                                                            <tr>
                                                            <th data-field="id">ID </th>
                                                            <th data-field="Date">Firm Name </th>
                                                            <th data-field="Time">Address </th>
                                                                <th data-field="Name">contact </th>
                                                                <th data-field="price">Prop Name </th>
                                                                <th data-field="Email">Email Id </th>
                                                                <th data-field="Address">Tin No</th>
                                                                <th data-field="price">CST No</th>
                                                                <th data-field="Email">Pan No </th>
                                                                <th data-field="Address">Bank</th>
                                                                <th data-field="price">Bank Account</th>
                                                                <th data-field="Email">IFSC</th>
                                                                <th data-field="Address">Transport</th>
                                                                <th data-field="price">Holiday</th>
                                                                <th data-field="price">Current Agency</th>
                                                                <th data-field="price">Prev Agency</th>
                                                                <th data-field="price">Other Business</th>
                                                                 <th data-field="price">Distrib Mode</th>
                                                                 <th data-field="price">Expected Area</th>
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
                url: "http://localhost/RHL/msslist.php",
                data:{"idlist":idlist},
                datatype: "json",
                success: function(response, testStatus, jqXHR)
                {
                    console.log(response);
                    var count = Object.keys(response.id).length;
                     console.log(count);
                    var trHTML = '';
                   for(var i=0; i<count; i++){

                    trHTML += '<tr><td>' + i+ '</td><td>' + response.name[i]+ '</td><td>' + response.address[i]+ '</td><td>' + response.contact[i]+ '</td><td>' + response.propname[i]+ '</td><td>' + response.email[i]+ '</td><td>' + response.tin[i]+ '</td><td>' + response.cst[i]+ '</td><td>' + response.pan[i]+ '</td><td>' + response.bank[i]+ '</td><td>' + response.baccont[i]+ '</td><td>' + response.bifsc[i]+ '</td><td>' + response.transport[i]+ '</td><td>' + response.holiday[i]+ '</td><td>' + response.agencurnt[i]+ '</td><td>' + response.agenprev[i]+ '</td><td>' + response.obusiness[i]+ '</td><td>' + response.mdistrb[i]+ '</td> <td>' + response.exparea[i]+ '</td></tr>';
                 }
                    // $.each(json, function(i, item) {

                    //     trHTML += '<tr><td>' + response.id[i]+ '</td></tr>';
                    // });
                    $("#mss-table tbody").append(trHTML);
                      $("#mss-table").DataTable({
                          "scrollX": true
                      });
                },
                error: function(response, testStatus, jqXHR)
                {
                    alert(jqXHR);
                }
            });
                        });
            
        </script>
    </body>

</html>
