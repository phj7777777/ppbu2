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
<title>Admin - Create Payment</title>
<meta name="description" content="Admin - Create Payment">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" href="apple-icon.png">
<link rel="shortcut icon" href="../images/icons/logo.png">


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
                <a class="navbar-brand" href="./"><img src="../images/icons/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="../images/icons/logo.png" alt="Logo"></a>
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
               
               <h3>Create Payment</h3>
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
                    <li class="active">Create New Payment</li>
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
                <strong>New Payment Form</strong> 
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
               
                    
                      
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">House No</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="text-input" placeholder="0" class="form-control"><small class="form-text text-muted">Only number available. Etc: 2A = 4, 11A = 13</small></div>
                        </div>
                    
                      <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label"> Road</label></div>
                            <div class="col-12 col-md-9">
                                <select name="select" id="select" class="form-control">
                                    <option value="0">Please Select</option>
                                    <option value="1">BU2/1</option>
                                    <option value="2">BU2/2</option>
                                    <option value="3">BU2/3</option>
                                     <option value="4">BU2/4</option>
                                    <option value="5">BU2/5</option>
                                    <option value="6">BU2/6</option>
                                     <option value="7">BU2/7</option>
                                    <option value="8">BU2/8</option>
                                    <option value="9">BU2/9</option>
                                </select>
                            </div>
                        </div>
                    
                    
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Membership Fees：</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">RM 730 (Including two (2) Free Car Stickers)</p>
                        </div>
                    </div>

                    
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Additional Car Stickers</label></div>
                            <div class="col-12 col-md-9">
                                <select name="select" id="select" class="form-control">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                     <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                     <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Gate Keys</label></div>
                            <div class="col-12 col-md-9">
                                <select name="select" id="select" class="form-control">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                     <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                     <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Donation (RM)</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="text-input" placeholder="0" class="form-control"><small class="form-text text-muted">RM200 or more, Free will Basis</small></div>
                        </div>
                    
                    
                    
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Payment Method</label></div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label ">
                                            <input type="radio" id="radio1" name="radios" onclick="myFunction()" value="option1" class="form-check-input">Cheque
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="radio2" name="radios" value="option2" onclick="myFunction()" class="form-check-input">Online Banking
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio3" class="form-check-label ">
                                            <input type="radio" id="radio3" name="radios" onclick="myFunction()" value="option3" class="form-check-input">Mytaman App
                                        </label>
                              </div>
                                </div>   
                            </div> 
                               
                            </div>
                    
                   <!-- Cheque method -->
                  <div id="bank" style="display:none" class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Bank</label></div>
                            <div class="col-12 col-md-9">
                                <select name="select" id="select" class="form-control">
                                    <option value="0">Affin Bank</option>
                                    <option value="1">Alliance Bank Malaysia</option>
                                    <option value="2">AmBank (M)</option>
                                    <option value="3">BNP Paribas Malaysia</option>
                                     <option value="4">Bangkok Bank</option>
                                    <option value="5">Bank of America Malaysia</option>
                                    <option value="6">Bank of China (Malaysia)</option>
                                     <option value="7">CIMB Bank</option>
                                    <option value="8">China Construction Bank (Malaysia)</option>
                                    <option value="9">Citibank</option>
                                     <option value="0">Deutsche Bank (Malaysia)</option>
                                    <option value="1">Industrial and Commercial Bank of China (Malaysia)</option>
                                    <option value="2">Hong Leong Bank</option>
                                    <option value="3">India International Bank (Malaysia)</option>
                                     <option value="4">J.P. Morgan Chase Bank</option>
                                    <option value="5">MUFG Bank (Malaysia)</option>
                                    <option value="6">Malayan Banking</option>
                                     <option value="7">OCBC Bank (Malaysia)</option>
                                    <option value="8">Public Bank</option>
                                    <option value="9">RHB Bank</option>
                                     <option value="6">Standard Chartered Bank Malaysia</option>
                                     <option value="7">Sumitomo Mitsui Banking Corporation Malaysia</option>
                                    <option value="8">The Bank of Nova Scotia</option>
                                    <option value="9">United Overseas Bank (Malaysia)</option>
                                </select>
                            </div>
                        </div>
                    
                    <div id="chequeNo" style="display:none" class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cheque No</label></div>
                            <div class="col-12 col-md-9"><input type="number_format" id="text-input" name="text-input" placeholder="Make sure the cheque no is correct" class="form-control"></div>
                        </div>
                    
                       <div id="transactionDate" style="display:none" class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Transfer Date</label></div>
                            <div class="col-12 col-md-9"><input type="number_format" id="text-input" name="text-input" placeholder="Example:12/7/18" class="form-control"></div>
                        </div>
                    
                    <div id="amount" style="display:none" class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Amount (RM)</label></div>
                            <div class="col-12 col-md-9"><input type="number_format" id="text-input" name="text-input" placeholder="0" class="form-control"></div>
                        </div>
                    
            
                       
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-success float-right btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
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
     <script src="assets/js/payment.js"></script>
</body>
</html>
