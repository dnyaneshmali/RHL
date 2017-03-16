<?php
    session_start();
if (!isset($_SESSION['uid']))
    { 
        header('Location: index.php');
    }
?>
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
    <body >
        <header id="header" class="page-topbar ">
            <div class="navbar-fixed">
                <nav class="navbar-color">
                    <div class="nav-wrapper">
                        <ul class="left">
                            <li>
                                <h1 class="logo-wrapper">
                                    <a href="#" class="brand-logo darken-1" >
                                        Royal Herbal Life
                                    </a>    
                                </h1>
                                <span class="logo-text">RHL</span>
                            </li>
                           
                        </ul>
                        <ul class="right hid-mid-screen">
                             <li id="cdate">&nbsp;</li>
                             <li id="time"></li>
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
                <aside id="leftside-nav">
                    <ul id="slide-out" class="side-nav fixed leftside-navigation">
                        <li class="user-details cyan darken-2">
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <!-- <img src="images/rd.jpg" class="circle responsive-img valign profile-image"> -->
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
                                        <li>
                                            <a href="index.php">
                                                <i class="mdi-action-lock-outline"></i>
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="user-roal">Administrator</p>
                                </div>
                            </div>
                        </li> 
                        <li class="bold active">
                            <a href="home.php" class="waves-effect waves-cyan">
                                <i class="mdi-action-dashboard"></i> 
                                Dashboard
                            </a>
                        </li>
                        
                          <li class="no-padding">
                              <ul class="collapsible collapsible-accordion">
                                  <li class="bold">
                                    <a  class="collapsible-header waves-effect waves-cyan">
                                        Sales & Marketing Team
                                    </a>
                                        <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="addusers.php">Add User</a></li>
                                            <li><a href="userlist.php">List of Users</a></li>
                                          <!--  <li><a href="javascript:void(0)">List of ASM</a></li>
                                            <li><a href="javascript:void(0)">List of TSO</a></li>
                                            <li><a href="selist.php">List of SE</a></li> -->
                                        </ul>
                                    </div>
                                  </li>
                              </ul>
                        </li>
                         <li class="bold">
                           
                                    <a href="javascript:void(0)"  class=" waves-effect waves-cyan">
                                        Reporting
                                    </a>
                     
                        </li>
                        
                       <li class="bold ">
                            <a href="distributerslist.php" class="waves-effect waves-cyan">
                                List Distributers

                            </a>
                        </li>
                      
                        <li class="bold">
                           
                                    <a href="javascript:void(0)"  class=" waves-effect waves-cyan">
                                     
                                        List Of MSS
                                    </a>
                            
                        </li>
                         <li class="bold">
                           
                                    <a href="javascript:void(0)"  class=" waves-effect waves-cyan">
                                       
                                        Sales Summery
                                    </a>

                        </li>
                           <li class="bold">
                           
                                    <a href="javascript:void(0)"  class=" waves-effect waves-cyan">
                                       
                                        MSS appointement  form
                                    </a>
                             
                        </li>
                            <li class="bold">
                           
                                    <a href="javascript:void(0)"  class=" waves-effect waves-cyan">
                                       
                                       Distributor appointment  form
                                    </a>
                         
                        </li>
                        <li class="bold">
                            <a href="javascript:void(0)" class="waves-effect waves-cyan">
                             
                                Product range

                            </a>
                        </li>
                          <li class="bold">
                            <a href="javascript:void(0)" class="waves-effect waves-cyan">
                             
                               Invoice/Billing

                            </a>
                        </li>
 

                    </ul>                   
                </aside>
