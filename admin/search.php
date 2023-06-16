<?php

  session_start();  
?>


<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
            <link rel="shortcut icon" href="assets/images/favicon.ico">
    
            <title>Search</title>
    
          
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    
            <script src="assets/js/modernizr.min.js"></script>
    
    </head>


    <body class="fixed-left">


   <div id="wrapper">

        <div class="topbar">


            <div class="topbar-left">
                <a href="index.php" class="logo"><span>Intern<span>System</span></span><i class="mdi mdi-layers"></i></a>
            </div>

            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">


                <ul class="nav navbar-nav list-inline navbar-left">
                        <li class="list-inline-item">
                            <button class="button-menu-mobile open-left">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="list-inline-item">
                            <h4 class="page-title">Search By</h4>
                        </li>
                    </ul>

                    </div>
                </div>
            </div>
        


            <div class="left side-menu">
                    <div class="sidebar-inner slimscrollleft">
    
        
                    <div class="user-box">
                            <div class="user-img">
                                <img src="assets/images/users/avatar-1.png" alt="user-img" title="admin" class="rounded-circle img-thumbnail img-responsive">
                                <div class="user-status online"><i class="mdi mdi-adjust"></i></div>
                            </div>
                            <h5><a href="index.php"><?php echo $_SESSION['username']; ?></a> </h5>
                            <ul class="list-inline">
                                
    
                                <li class="list-inline-item">
                                    <a href="logout.php" class="text-custom">
                                        <i class="mdi mdi-power"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
              
                        <div id="sidebar-menu">
                            <ul>
                                
                                <li>
                                    <a href="index.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                                </li>
    
                                <li>
                                    <a href="admin.php" class="waves-effect"><i class="mdi mdi-account-box"></i> <span> Manage Admins </span> </a>
                                </li>
    
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Manage Students </span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="view.php">Update or Delete</a></li>
                                        <li><a href="search.php">Search By</a></li>            
                                    </ul>
                                </li>
    
                            </ul>
                            <div class="clearfix"></div>
                        </div>
              
                        <div class="clearfix"></div>
    
                    </div>
    
                </div>
              

            <div class="content-page">
        
                <div class="content" >
                    <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-box">
                                            <h4 class="m-t-0 m-b-30 header-title">Search</h4>
        
                                            <form action="searching.php" name="search" target="mainframe" method="POST">
                    
                                                <div class="form-group">
                                                        <label for="search">Search By ID : </label>
                                                        <input type="text" class="form-control" name="sidno" pattern="[a-zA-Z]{}">
                                                       
                                                </div>
                                                <div class="form-group row">
                                                    <label for="search" class="col-3 col-form-label">Search By College Name:</label>
                                                    <div class="col-9">
                                                        <input type="text" name="sname" id="inputsname" class="form-control" value="" pattern="[a-zA-Z]{}"  >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="search" class="col-3 col-form-label">Search By Degree:</label>
                                                    <div class="col-9">
                                                            <select name="degree" class="form-control selectpicker">
                                                                    <option></option>
                                                                    <option value='B.E(CSE)'>B.E(CSE)</option>
                    <option  value='B.E(IT)'>B.E(IT)</option>
                    <option  value='B.E(ECE)' >B.E(ECE)</option>
                    <option  value='B.E(AI&DS)'>B.E(AI&DS)</option>
                    <option  value='B.E(CIVIL)'>B.E(CIVIL)</option>
                    <option  value='B.E(EEE)'>B.E(EEE)</option>
                                                                </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                        <label for="search" class="col-3 col-form-label">Search By Duration:</label>
                                                        <div class="col-9">
                                                                <select name="duration" class="form-control selectpicker">
                                                                        <option></option>
                                                                        <option value="2 Week" name="duration">2 Week</option>
                                                                        <option value="4 Week" name="duration">4 Week</option>
                                                                        <option value="6 Week" name="duration">6 Week</option>
                                                                        <option value="8 Week" name="duration">8 Week</option>
                                                                        <option value="12 Week" name="duration">12 Week</option>
                                                                      </select>
                                                         </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                            <label for="search" class="col-3 col-form-label">Search By Technology:</label>
                                                            <div class="col-9">
                                                                    <select name="technology" class="form-control selectpicker">
                                                                            <option></option>
                                                                            <option value="PHP">PHP</option>
                  <option value=".net">.net</option>
                  <option value="Android">Android</option>
                  <option value="Java">Java</option>
                  <option value="Python">Python</option>
                  <option value="IOT">IOT</option>
                  <option value="Cyber Security">Cyber Security </option>
                  <option value="Blockchain">Blockchain</option>
				  <option value="Cloud Computing">Cloud Computing</option>
				  <option value="App development">App Development</option>
				  <option value="Artificial Intelligence">Artificial Intelligence</option>
				  <option value="Web Development">Web Development</option>



                                                                          </select>
    
                                                             </div>
                                                        </div>
                                               
                                                         
                                                        <div class="form-group row">
                                                        <label for="search" class="col-3 col-form-label">Search By Company:</label>
                                                        <div class="col-9">
                                                            <input type="text" name="guide" id="inputsname" class="form-control" value="" pattern="[a-zA-Z]{}" >
                                                        </div>
                                                        </div>

                                                        <div class="form-group mb-0 justify-content-center row">
                                                                <input type="submit" class="btn btn-primary" name="submit">
                                                            </div>

            
                                        </div>
                                    </div>
        

                                                              


                                            </form>
                                        </div>
                                    </div>
        
                                </div>
                                
                                <br>
                                    <iframe style="border-width: 0px" height="900px" width="100%"  name="mainframe" scrolling="no">
                                    </iframe>

                    </div> 
        
                </div> 

                

            </div>


           
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>