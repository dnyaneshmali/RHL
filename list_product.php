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
                                    <h5 class="breadcrumbs-title">Product List </h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">Product List </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">List Of Product</p>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <div id="table-wrap">
                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                    <table class="bordered" id="dsr-table" class="display nowrap">
                                                        <thead>
                                                            <tr>
                                                            <th data-field="id">Sr No </th>
                                                            <th data-field="name">Product Name </th>
                                                            <th data-field="price">Product Price </th>
                                                            <th data-field="qt">Product Quantity </th>
                                                             <th data-field="desc">Description </th>
                                                             <th data-field="desc">Date </th>
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
             
                //var idlist="-1";  
            
                $.ajax({
                type: "POST",
                url: "http://localhost/RHL/productlist.php",
                datatype: "json",
                success: function(response, testStatus, jqXHR)
                {
                    var json = JSON.parse(response);
                         //console.log(json); 
                    var count = json.length;
                    var trHTML = '';
                   for(var i=0; i<count; i++){

                    trHTML += '<tr><td>' + i+ '</td><td>' + json[i].product_name+ '</td><td>' + json[i].product_price+ '</td><td>' + json[i].product_quantity+ '</td><td>' + json[i].product_desc+ '</td><td>' + json[i].product_date+ '</td>';
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
