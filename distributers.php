<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Admin Panel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
        <link href="css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header id="header" class="page-topbar ">
            <div class="navbar-fixed">
                <nav class="navbar-color">
                    <div class="nav-wrapper">
                        <ul class="left">
                            <li>
                                <h1 class="logo-wrapper">
                                    <a href="#" class="brand-logo darken-1" >
                                      Royal Hearbal Life
                                    </a>    
                                </h1>
                                <span class="logo-text">RHL</span>
                            </li>
                        </ul>
                        <ul class="right hid-mid-screen">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                                    <i class="mdi-action-settings-overscan"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                                    <i class="mdi-social-notifications"></i>

                                </a>
                            </li>
                            <li>
                                <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                                    <i class="mdi-communication-chat"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>

        </header>
        <!--header End-->

        <!--start main-->
        <div id="main">
            <div class="wrapper">
            <div class="wrapper">
                <aside id="leftside-nav">
                    <ul id="slide-out" class="side-nav fixed leftside-navigation">
                        <li class="user-details cyan darken-2">
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                  
                                </div>
                                <div class="col col s8 m8 l8">
                                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                                        RHL
                                        <i class="mdi-navigation-arrow-drop-down right"></i>
                                    </a>
                                    <ul id="profile-dropdown" class="dropdown-content">
                                        <li>
                                            <a href="#">
                                                <i class="mdi-action-face-unlock"></i>
                                                Profile
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="user-roal">Administrator</p>
                                </div>
                            </div>
                        </li> 
          <li class="bold ">
                            <a href="home.php" class="waves-effect waves-cyan">
                                <i class="mdi-action-dashboard"></i> 
                                Dashboard
                            </a>
                        </li>
                        <li class="no-padding ">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a href="se_register.php"  class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-view-carousel"></i>
                                        Add Sales Executive
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="bold active">
                            <a href="selist.html" class="waves-effect waves-cyan">
                                <i class="mdi-communication-email"></i>
                                List Sales Executive

                            </a>
                        </li>
                    </ul>                   
                </aside>
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
        <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
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
                     console.log(json[0].s_id);
                    var trHTML = '';

                    $.each(json, function(i, item) {

                        trHTML += '<tr><td>' + item.s_id + '</td><td>' + item.s_name + '</td><td>' + item.s_contact + '</td><td>' + item.s_email + '</td></td><td>' + item.s_username + '</td><td>' + item.s_password + '</td></tr>';
                    });
                    $("#user-table tbody").append(trHTML);
                },
                error: function(response, testStatus, jqXHR)
                {

                }
            });
                        });
            
        </script>
    </body>

</html>
