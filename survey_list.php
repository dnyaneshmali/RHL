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
                                    <h5 class="breadcrumbs-title">Distributers List </h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">Distributers List </a>
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
                                                    <table  id="survey-table" class="display nowrap">
                                                        <thead>
                                                            <tr>
                                                            <th data-field="id">ID </th>
                                                            <th data-field="Date"> Name </th>
                                                            <th data-field="Time">Address </th>
                                                                <th data-field="price">State </th>
                                                                <th data-field="Email">Retailer No </th>
                                                                <th data-field="Address">No of Eployee</th>
                                                                <th data-field="price">scheme</th>
                                                                <th data-field="Email">Advertising </th>
                                                                <th data-field="Address">Brand Hair Product</th>
                                                                <th data-field="price">Local Hair Product</th>
                                                                <th data-field="Email">Brand Skin Product</th>
                                                                <th data-field="Address">Local Skin Product</th>
                                                                <th data-field="price">Brand percent</th>
                                                                <th data-field="price">Local percent</th>
                                             
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
                url: "http://localhost/RHL/surveylist.php",
                data:{"idlist":idlist},
                datatype: "json",
                success: function(response, testStatus, jqXHR)
                {
                    console.log(response);
                    var count = Object.keys(response.sid).length;
                     console.log(count);
                    var trHTML = '';
                   for(var i=0; i<count; i++){

                    trHTML += '<tr><td>' + i+ '</td><td>' + response.sname[i]+ '</td><td>' + response.saddress[i]+ '</td><td>' + response.state[i]+ '</td><td>' + response.retailno[i]+ '</td><td>' + response.empno[i]+ '</td><td>' + response.scheme[i]+ '</td><td>' + response.advert[i]+ '</td><td>' + response.brhprod[i]+ '</td><td>' + response.lohprod[i]+ '</td><td>' + response.bskprod[i]+ '</td><td>' + response.lskprod[i]+ '</td><td>' + response.brpercnt[i]+ '</td><td>' + response.lopercnt[i]+ '</td>';
                 }
                    // $.each(json, function(i, item) {

                    //     trHTML += '<tr><td>' + response.id[i]+ '</td></tr>';
                    // });
                    $("#survey-table tbody").append(trHTML);
                      $("#survey-table").DataTable({
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
