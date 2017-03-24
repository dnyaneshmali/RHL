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
                                    <h5 class="breadcrumbs-title">Daily Report List </h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">Daily Report List </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">List Of Daily Sales Report.</p>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <div id="table-wrap">
                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                    <table class="display nowrap" id="dsr-table" class="display nowrap">
                                                        <thead>
                                                            <tr>
                                                            <th data-field="id">ID </th>
                                                            <th data-field="Date">Name </th>
                                                            <th data-field="Time">Designation </th>
                                                                <th data-field="Name">Teritary </th>
                                                                <th data-field="price">Head Qtr </th>
                                                                <th data-field="Email">state </th>
                                                                <th data-field="Address">Date </th>
                                                                <th data-field="price">WorkWith</th>
                                                                <th data-field="Email">Trade Name </th>
                                                                <th data-field="Address">Trade Contact</th>
                                                                <th data-field="price">Trade Address</th>
                                                                <th data-field="Email">Visit Purpose</th>
                                                                <th data-field="Address">Order</th>
                                                                <th data-field="price">Order Amt</th>
                                                                <th data-field="price">Remark</th>
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
                url: "http://localhost/RHL/dsrlist.php",
                data:{"idlist":idlist},
                datatype: "json",
                success: function(response, testStatus, jqXHR)
                {
                    console.log(response);
                    var count = Object.keys(response.id).length;
                     console.log(count);
                    var trHTML = '';
                   for(var i=0; i<count; i++){

                    trHTML += '<tr><td>' + response.id[i]+ '</td><td>' + response.name[i]+ '</td><td>' + response.design[i]+ '</td><td>' + response.terit[i]+ '</td><td>' + response.headqtr[i]+ '</td><td>' + response.state[i]+ '</td><td>' + response.date[i]+ '</td><td>' + response.workwith[i]+ '</td><td>' + response.tradename[i]+ '</td><td>' + response.trdcon[i]+ '</td><td>' + response.trdadd[i]+ '</td><td>' + response.purvisit[i]+ '</td><td>' + response.orderb[i]+ '</td><td>' + response.ordamt[i]+ '</td><td>' + response.trdrmk[i]+ '</td></tr>';
                 }
                    // $.each(json, function(i, item) {

                    //     trHTML += '<tr><td>' + response.id[i]+ '</td></tr>';
                    // });
                    $("#dsr-table tbody").append(trHTML);
                      $("#dsr-table").DataTable({
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
