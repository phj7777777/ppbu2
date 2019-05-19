<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin - Create Member</title>
<meta name="description" content="Admin - Create Member">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" href="apple-icon.png">
<link rel="shortcut icon" href="favicon.ico">


<link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
<link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

<link rel="stylesheet" href="assets/css/style.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   
                    <h3 class="menu-title">Create</h3><!-- /.menu-title -->
                        <li>
                            <a href="create_new_member.php"> <i class="menu-icon ti-github"></i>New Member </a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-face-smile"></i>New Resident </a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-wallet"></i>New Payment </a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-car"></i>New Visitor </a>
                        </li>

                    <h3 class="menu-title">View</h3><!-- /.menu-title -->

                             <li>
                                <a href="widgets.html"> <i class="menu-icon ti-github"></i>Member Details </a>
                            </li>
                            <li>
                                <a href="widgets.html"> <i class="menu-icon ti-face-smile"></i>Resident Details </a>
                            </li>
                            <li>
                                <a href="widgets.html"> <i class="menu-icon ti-wallet"></i>Payment Details </a>
                            </li>
                            <li>
                                <a href="widgets.html"> <i class="menu-icon ti-car"></i>Visitor Details </a>
                            </li>

                    <h3 class="menu-title">Extras Resource</h3><!-- /.menu-title -->
                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-github"></i>Applications </a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-face-smile"></i>Report</a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-wallet"></i>Article</a>
                        </li>
                    
                    
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
               
               <h3>Create Member</h3>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">


                    <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>


        </div>
    </div>

</header><!-- /header -->
<!-- Header-->

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Dashboard</a></li>
                    <li class="active">Create New Member</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <strong>New Resident Form</strong> 

            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">

                        <div class="col col-md-3"><label class=" form-control-label">Name(AS PER NRIC):</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="name-input" name="name-input" placeholder="Enter your name" class="form-control"><small class="help-block text-muted">Please enter your name</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="ic-input" class=" form-control-label">NRIC NO:</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="ic-input" name="ic-input" placeholder="Example: 690519-01-5970" class="form-control"><small class="help-block text-muted">Please enter your IC No</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="house-input" class=" form-control-label">House No:</label></div>
                        <div class="col-12 col-md-9"><input type="number" id="house-input" name="house-input" placeholder="Example: 50" class="form-control"><small class="help-block text-muted">Only number available. Etc: 2A = 4,11A =13</small></div>
                    </div>
                    <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class="form-control-label">Road No:</label></div>
                            <div class="col-12 col-md-9">
                                <select name="select" id="select" class="form-control">
                                    <option value="0">-Please select-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                    <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Sex:</label></div>
                            <div class="col col-md-9">
                                <div class="form-check-inline form-check">
                                    <label for="inline-radio1" class="form-check-label ">
                                        <input type="radio" id="male" name="inline-radios" value="male" class="form-check-input">Male
                                    </label>
                                    <label for="inline-radio2" class="form-check-label ">
                                        <input type="radio" id="female" name="inline-radios" value="female" class="form-check-input">Female
                                    </label>
                                </div>
                            </div>
                    </div>
                    <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Type of Residence:</label></div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label ">
                                            <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">OWNER-OCCUPIED HOUSE
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">TENANT-OCCUPIED HOUSE

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="ic-input" class=" form-control-label">Phone No:</label></div>
                        <div class="col-12 col-md-9"><input type="tel" id="phone-input" name="phone-input" placeholder="Example: 010-1234567" class="form-control"><small class="help-block text-muted">Please enter your phone no</small></div>
                    </div>
                     <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Address:</label></div>
                        <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="Example: john@yahoo.com" class="form-control"><small class="help-block text-muted">Please enter your email</small></div>
                    </div>

                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
        </div>

        

    </div>
</div><!-- .animated -->
</div><!-- .content -->
</div><!-- /#right-panel -->
<!-- Right Panel -->


                    <script src="vendors/jquery/dist/jquery.min.js"></script>
                    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                    <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                    <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                    <script src="assets/js/main.js"></script>
</body>
</html>
