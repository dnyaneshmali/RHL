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
                                    <h5 class="breadcrumbs-title">User List </h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="home.php">Dashboard</a>
                                        </li>
                                        <li><a href="#">User List </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">List Of All User</p>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <div id="table-wrap">
                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                    <table class="bordered" id="duser-table">


                                                     <div class="row margin">
          <div class="input-field col s6">
            <select id="urole" name="urole">
            <option value="RSM" selected>RSM</option>
            <option value="ASM">ASM</option>
            <option value="TSO">TSO</option>
            <option value="SE">SE</option>
            </select>
            <label for="urole" class="center-align">Select Role</label>
          </div>
          </div>
             <thead>
                                                            <tr>
                                                            <th data-field="id">ID </th>
                                                            <th data-field="Date">Username </th>
                                                            <th data-field="Email">Password</th>
                                                            <th data-field="Time">First Name </th>
                                                            <th data-field="Name">Last Name</th>
                                                            <th data-field="price">Contact No</th>
                                                            <th data-field="Address">Code</th>
                                                            <th data-field="price">Action</th>
                                                            <th data-field="price">Status</th>
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

         $(document).ready(function() {
$('select').material_select();
});

 $(document).ready(function(){

                var drole = 'RSM';
                $.ajax({
                type: "POST",
                url: "duser_list.php",
                data:{"urole":drole},
                datatype: "json",
                success: function(response)
                {
                    $("#duser-table tbody").html("");
                     //console.log(response);
                    var json = JSON.parse(response);
                         //console.log(json); 
                    var count = json.length;
                     
                    var trHTML = '';
                   for(var i=0; i<count; i++){

                    trHTML += '<tr><td>' +json[i].user_id+ '</td><td>' +json[i].user_name+ '</td><td>' +json[i].user_show_pass+ '</td><td>' +json[i].first_name+ '</td><td>' +json[i].last_name+ '</td><td>' +json[i].user_number+ '</td><td>' +json[i].user_code+ '</td><td><a href="javascript:void(0);" onclick="deleteuser('+json[i].user_id+');" class="btn-floating red delete-btn tooltip" ><i class="small mdi-action-highlight-remove"></i><span class="tooltiptext">Delete</span></a></td>';

                            if (json[i].user_status == 1){
                     trHTML += '<td><a href="javascript:void(0);" onclick="dstatus('+json[i].user_id+');" class="btn-floating green tooltip" ><i class="small mdi-action-visibility"></i><span class="tooltiptext">UnApprove</span></a></td></tr>';
                        }else{
                    trHTML += '<td><a href="javascript:void(0);" onclick="astatus('+json[i].user_id+');" class="btn-floating red tooltip" ><i class="small mdi-action-visibility-off"></i></i><span class="tooltiptext">Approve</span></a></td></tr>';
                        }
                 }
                 //console.log(trHTML);
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



                $('#urole').change(function(){

                 var role = $('select[name=urole]').val();
                //console.log(role);
                $.ajax({
                type: "POST",
                url: "user_list.php",
                data:{"urole":role},
                datatype: "json",
                success: function(response)
                {
                    $("#duser-table tbody").html("");
                     //console.log(response);
                    var json = JSON.parse(response);
                         //console.log(json); 
                    var count = json.length;
                     
                    var trHTML = '';
                   for(var i=0; i<count; i++){

                    trHTML += '<tr><td>' +json[i].user_id+ '</td><td>' +json[i].user_name+ '</td><td>' +json[i].user_show_pass+ '</td><td>' +json[i].first_name+ '</td><td>' +json[i].last_name+ '</td><td>' +json[i].user_number+ '</td><td>' +json[i].user_code+ '</td><td><a href="javascript:void(0);" onclick="deleteuser('+json[i].user_id+');" class="btn-floating red delete-btn tooltip" ><i class="small mdi-action-highlight-remove"></i><span class="tooltiptext">Delete</span></a></td>';

                            if (json[i].user_status == 1){
                     trHTML += '<td><a href="javascript:void(0);" onclick="dstatus('+json[i].user_id+');" class="btn-floating green tooltip" ><i class="small mdi-action-visibility"></i><span class="tooltiptext">UnApprove</span></a></td></tr>';
                        }else{
                    trHTML += '<td><a href="javascript:void(0);" onclick="astatus('+json[i].user_id+');" class="btn-floating red tooltip" ><i class="small mdi-action-visibility-off"></i></i><span class="tooltiptext">Approve</span></a></td></tr>';
                        }
                 }
                     //console.log(trHTML);
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
                 });

         function deleteuser(id)
            {

                //alert(id);
                var deleteuser_id = id;
                 swal({
                          title: "Are you sure?",
                          text: "Your will not be able to recover this imaginary file!",
                          type: "warning",
                          showCancelButton: true,
                          confirmButtonClass: "btn-danger",
                          confirmButtonText: "Yes, delete it!",
                          closeOnConfirm: true
                        },
                        function(){

                            $.ajax({
                        type: "POST",
                        url: "action_status.php",
                        data:{"duser_id":deleteuser_id},
                        datatype: "json",
                        success: function(response)
                        {
                                console.log(response);
                                location.reload();


                            }
                        });


    })
}
                
        
                function dstatus(id){
                   //alert(id);
                var user_id = id;

                swal({
                          title: "Are you sure?",
                          text: "Your will not be able to recover this imaginary file!",
                          type: "warning",
                          showCancelButton: true,
                          confirmButtonClass: "btn-danger",
                          confirmButtonText: "Yes, Deactivate it!",
                          closeOnConfirm: true
                        },
                           function(){

                            $.ajax({
                        type: "POST",
                        url: "action_status.php",
                        data:{"dauser_id":user_id},
                        datatype: "json",
                        success: function(response)
                        {
                                console.log(response);
                                location.reload();

                            }
                        });


    })
}

       /*     if (confirm('Sure to Deactivate ?'))
                    {
                        $.ajax({
                        type: "POST",
                        url: "action_status.php",
                        data:{"dauser_id":user_id},
                        datatype: "json",
                        success: function(response)
                        {
                                console.log(response);
                                location.reload();

                            }
                        });
                    }

                } */

                function astatus(id){
                   //alert(id);
                var user_id = id;

                swal({
                          title: "Are you sure?",
                          text: "Your will not be able to recover this imaginary file!",
                          type: "warning",
                          showCancelButton: true,
                          confirmButtonClass: "btn-danger",
                          confirmButtonText: "Yes, Activate it!",
                          closeOnConfirm: true
                        },
                        function(){

                            $.ajax({
                        type: "POST",
                        url: "action_status.php",
                        data:{"asuser_id":user_id},
                        datatype: "json",
                        success: function(response)
                        {
                                console.log(response);
                                location.reload();


                            }
                        });


    })
                }
         /*   if (confirm('Sure to Active ?'))
                    {
                        $.ajax({
                        type: "POST",
                        url: "action_status.php",
                        data:{"asuser_id":user_id},
                        datatype: "json",
                        success: function(response)
                        {
                                console.log(response);
                                location.reload();


                            }
                        });
                    }  */

                


        </script>
    </body>

</html>
