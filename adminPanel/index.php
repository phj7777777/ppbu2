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

  <title>PPBU2 admin panel</title>
    <meta name="description" content="PPBU2 admin panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="../images/icons/favicon.png">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">
     <link href="../css/analytics.css" rel="stylesheet" type="text/css"/>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
    
       
   <!-- Added for Donut Chart -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
   <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                 <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="100" height="100" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png"  alt="Logo"></a>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   
                    <h3 class="menu-title">Create</h3><!-- /.menu-title -->

                        <li>
                            <a href="create_new_member.php"> <i class="menu-icon ti-github"></i>New Member </a>
                        </li>
                        <li>
                            <a href="create_new_resident.php"> <i class="menu-icon ti-face-smile"></i>New Resident </a>
                        </li>
                        <li>
                            <a href="create_payment.php"> <i class="menu-icon ti-wallet"></i>New Payment </a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-pencil-alt"></i>New News/Event </a>
                        </li>
                    
                    <h3 class="menu-title">View</h3><!-- /.menu-title -->

                             <li>
                                <a href="resident_admin.php"> <i class="menu-icon ti-github"></i>Resident Details </a>
                            </li>
                            <li>
                                <a href="database_admin.php"> <i class="menu-icon ti-face-smile"></i>House Details </a>
                            </li>
                            <li>
                                <a href="payment_admin.php"> <i class="menu-icon ti-wallet"></i>Payment Details </a>
                            </li>
                            <li>
                                <a href="visitor_admin.php"> <i class="menu-icon ti-pencil-alt"></i>Visitor Details </a>
                            </li>

                    
                    <h3 class="menu-title">Extras Resource</h3><!-- /.menu-title -->
                        <li>
                            <a href="export.php"> <i class="menu-icon ti-face-smile"></i>Excel Import</a>
                        </li> 

                        <li>
                            <a href="presentation.php"> <i class="menu-icon ti-wallet"></i>Presentation</a>
                        </li>

                         <li>
                            <a href="report.php"> <i class="menu-icon ti-car"></i>Report</a>
                        </li>
               

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">

                        <h3>Welcome Back to Admin Panel</h3>
                       

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
                            <li class="active">Dashboard</li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

       <div class="col-sm-12 mb-4">
        <div class="card-group">
            <div class="card col-lg-3 col-md-6 no-padding bg-flat-color-1">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-users text-light"></i>
                    </div>

                    <div class="h4 mb-0 text-light">
                        <span class="count">87500</span>
                    </div>
                    <small class="text-uppercase font-weight-bold text-light">Member</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-lg-3 col-md-6 no-padding no-shadow">
                <div class="card-body bg-flat-color-2">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-user-plus text-light"></i>
                    </div>
                    <div class="h4 mb-0 text-light">
                        <span class="count">385</span>
                    </div>
                    <small class="text-uppercase font-weight-bold text-light">Residents</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-lg-3 col-md-6 no-padding no-shadow">
                <div class="card-body bg-flat-color-3">
                    <div class="h1 text-right mb-4">
                        <i class="fa fa-male text-light"></i>
                    </div>
                    <div class="h4 mb-0 text-light">
                        <span class="count">1238</span>
                    </div>
                    <small class="text-light text-uppercase font-weight-bold">Male Member</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-lg-3 col-md-6 no-padding no-shadow">
                <div class="card-body bg-flat-color-5">
                    <div class="h1 text-right text-light mb-4">
                        <i class="fa fa-female"></i>
                    </div>
                    <div class="h4 mb-0 text-light">
                        <span class="count">28</span>%
                    </div>
                    <small class="text-uppercase font-weight-bold text-light">Female Member</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            
            
        </div>
           
           

    </div>
            
            
    
        <div class="content mt-3">
            <div class="animated fadeIn">

             
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pie Chart</h4>
                                <div class="flot-container">
                                    <div id="flot-pie" class="flot-pie-container"></div>
                                </div>
                            </div>
                        </div><!-- /# card -->
                    </div><!-- /# column -->

                </div><!-- /# row -->
                  

            </div><!-- .animated -->
        </div><!-- .content -->


           

  <div class="container" style="margin-top: 200px;">


  <div class="row">	
    <div class="col-md-6">
      <div class="card">
        <div class="card-header"> Total Members&nbsp;</div>
        <div class="card-body">
          <h4>
          <?php
     
          $sql3= "SELECT COUNT(DISTINCT NRIC) FROM resident;";
            $residentCount=mysqli_query($con,$sql3);
                
            while ($row=mysqli_fetch_row($residentCount)){
                $residentNo= $row[0] ;
            }
                
                echo $residentNo;

          ?>
          </h4>
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="card">
        <div class="card-header"> Total Representative</div>
        <div class="card-body">
          <h4>
            <?php
          $sql4= "SELECT COUNT(DISTINCT NRIC) FROM representative";
            $repResult=mysqli_query($con,$sql4);
                
            while ($row=mysqli_fetch_row($repResult)){
                $repNo= $row[0] ;
            }
                
                echo $repNo;

          ?>      
          </h4>
        </div>
      </div>
    </div>
    </div>




  <br />
  <h4 align="center">Last updated :  <?php echo date("Y/m/d h:i:sa")?></h4>
  
  
  <h2 align="center">BURA Age Group Analysis</h2>
  <br />
  <div class="container">
   <div id="chart"></div>
          <div id="legend" class="donut-legend"></div>
  </div>


	<hr/>
  <br />
  <h2 align="center">BURA Gender Analysis</h2>
  <div class="container">
      <div id="chart-gender"></div>
      <div id="legend_gender" class="donut-legend-gender"></div>
  </div>
  <br />



  <hr/>
  <br />
  <h2 align="center">BURA Total Unpaid and Paid Payment Analysis</h2>
  <div class="container">
      <div id="chart-payment"></div>
      <div id="legend_payment" class="donut-legend-payment"></div>
  </div>
  <br />

  <hr/>
  <br />
  <h2 align="center">BURA Mode of  Payment Analysis</h2>
  <div class="container">
      <div id="chart-mode"></div>
      <div id="legend_mode" class="donut-legend-mode"></div>
  </div>
  <br />

</div>
<?php include "footer.php";?>
     <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/clean-blog.min.js"></script>
    
 </body>
</html>



<?php



include('function.php');

include('analytics_action.php');


$sqlIC = "
SELECT NRIC FROM resident
";


$resultIC = $con->query($sqlIC);

if($resultIC->num_rows >0) {

    $ic = array();
    while ($row = $resultIC->fetch_assoc()) {
        $text = convert_string('decrypt', clean_text($row["NRIC"]));
        $ic[] = $text;
    }

    $YAcounter = 0;        // Youth
    $MAcounter = 0;       // Adult
    $SAcounter = 0;      //  Senior
    $maleCount = 0;     // male
    $femaleCount = 0;  // female

    foreach ($ic as $value) {
        $myic = new MyIC;

        $detail = $myic->get($value, 'Y');  // get the year only


        if (getAge($detail['dob']) > 15 && getAge($detail['dob']) <= 30) {
            $YAcounter += 1;
        } elseif (getAge($detail['dob']) > 30 && getAge($detail['dob']) <= 59) {
            $MAcounter += 1;
        } elseif (getAge($detail['dob']) >= 60) {
            $SAcounter += 1;
        }


        // gender count
        if ($detail['gender'] == 'Male') {
            $maleCount += 1;

        } elseif ($detail['gender'] == 'Female') {
            $femaleCount += 1;
        }


    }

    // set values for age age group
    $label = array("Youth: 15-30 yrs", "Adult: 31-59 yrs", "Senior: 60 yrs above");
    $value = array($YAcounter, $MAcounter, $SAcounter);

    for ($i = 0; $i < 3; $i++) {
        $data[] = array(
            'label' => $label[$i],
            'value' => $value[$i],
        );
    }


    // set value for gender
    $labelGen = array("Male", "Female");
    $valueGen = array($maleCount, $femaleCount);

    for ($j = 0; $j < 2; $j++) {
        $dataGender[] = array(
            'label' => $labelGen[$j],
            'value' => $valueGen[$j],
        );
    }


}

    //////////////////////////////// PAYMENT ANALYSIS ///////////////////////////////////////

    $unpaidCount = 0;
    $paidCount = 0;

        $sqlUnpaid = "
        select count(NRIC) from payment where payment_status = \"Unpaid\"
        ";

        $sqlPaid = "
        select count(NRIC) from payment where payment_status = \"Paid\"
        ";


        $resultUnpaid = $con->query($sqlUnpaid);

        while ($row=mysqli_fetch_row($resultUnpaid)){
            $unpaidCount= $row[0] ;
        }


        $resultPaid = $con->query($sqlPaid);

        while ($row=mysqli_fetch_row($resultPaid)){
            $paidCount= $row[0] ;
        }

    // set value for payment
    $labelPay = array("Paid", "Unpaid");
    $valuePay = array($paidCount, $unpaidCount);

    for($z = 0; $z <2; $z++){
        $dataPayment[] = array(
            'label'  => $labelPay[$z],
            'value'  => $valuePay[$z],
        );
    }

  //////////////////////////////// MODE OF PAYMENT ANALYSIS  ///////////////////////////////////////

    $sqlPaymentMethod = "
    SELECT mode_of_payment as mode , COUNT(*) as amt from payment group by mode_of_Payment
    ";


    $resultPM = $con->query($sqlPaymentMethod);

    if($resultPM->num_rows>0){
        while ($row = $resultPM->fetch_assoc()) {
        
          $mop[] = $row['mode'];
          $amt[] = $row["amt"];
         
       }
    } 
    
   
    $MOPlength = count($mop);
   
    for($z = 0; $z <$MOPlength ; $z++){
        $dataMOP[] = array(
            'label'  => $mop[$z], 
            'value'  => $amt[$z],
        );    
    }


   

?>

<script>

$(document).ready(function(){

    ///////////////////////////// Age Group Analysis /////////////////////////////

    // Set donut value
    var donut_chart = Morris.Donut({
     element: 'chart',
     data: <?php  echo json_encode($data); ?>
    });


    // Set legend item
   donut_chart.options.data.forEach(function(label, i) {
        var legendItem = $('<span></span>').text( label['label'] + " [ " +label['value'] + " ]  " ).prepend('<br><span>&nbsp;</span>');
        legendItem.find('span')
            .css('backgroundColor', donut_chart.options.colors[i])
            .css('width', '20px')
            .css('display', 'inline-block')
            .css('margin', '5px');
        $('#legend').append(legendItem)
    });


   ///////////////////////////// Gender Analysis /////////////////////////////

    // Set donut value
    var donut_chart_gender = Morris.Donut({
        element: 'chart-gender',
        data: <?php  echo json_encode($dataGender); ?>
    });


    // Set legend item
    donut_chart_gender.options.data.forEach(function(label, j) {
        var legendItemGender = $('<span></span>').text( label['label'] + " [ " +label['value'] + " ]  " ).prepend('<br><span>&nbsp;</span>');
        legendItemGender.find('span')
            .css('backgroundColor', donut_chart_gender.options.colors[j])
            .css('width', '20px')
            .css('display', 'inline-block')
            .css('margin', '5px');
        $('#legend_gender').append(legendItemGender)
    });


    ///////////////////////////// Paid and Unpaid Payment Analysis /////////////////////////////


    // Set donut value
    var donut_chart_payment = Morris.Donut({
        element: 'chart-payment',
        data: <?php  echo json_encode($dataPayment); ?>
    });


    // Set legend item
    donut_chart_payment.options.data.forEach(function(label, z) {
        var legendItemPayment = $('<span></span>').text( label['label'] + " [ " +label['value'] + " ]  " ).prepend('<br><span>&nbsp;</span>');
        legendItemPayment.find('span')
            .css('backgroundColor', donut_chart_payment.options.colors[z])
            .css('width', '20px')
            .css('display', 'inline-block')
            .css('margin', '5px');
        $('#legend_payment').append(legendItemPayment)
    });


   /////////////////////////////Mode of Payment Analysis /////////////////////////////


    // Set donut value
    var donut_chart_mode = Morris.Donut({
        element: 'chart-mode',
        data: <?php  echo json_encode($dataMOP); ?>
    });


    // Set legend item
    donut_chart_mode.options.data.forEach(function(label, z) {
        var legendItemMode = $('<span></span>').text( label['label'] + " [ " +label['value'] + " ]  " ).prepend('<br><span>&nbsp;</span>');
        legendItemMode.find('span')
            .css('backgroundColor', donut_chart_mode.options.colors[z])
            .css('width', '20px')
            .css('display', 'inline-block')
            .css('margin', '5px');
        $('#legend_mode').append(legendItemMode)
    });



}); //end function

</script>




        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    



    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
    
    
</body>

</html>
