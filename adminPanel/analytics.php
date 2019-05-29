<?php
//analytics.php
session_start();
include('../php/db.php'); //connect to database : $con
?>


<!DOCTYPE html>
<html>
 <head>
  <title>BURA Analytics</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">
     <link href="../css/analytics.css" rel="stylesheet" type="text/css"/>
	

     <!-- This page icon -->
     <link rel="icon" href="../img/logo.png" sizes="16x16" type="image/png"> 
   
   
   <!-- Added for Donut Chart -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
   <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
   
 </head>
    
 <body>
 <?php     /*Logout if not logged in */   
    //if($_SESSION['logged_in'] == false){
        //header("Location: logout.php ");
   //}
?>


  <div class="container" style="margin-top: 200px;">


  <div class="row">	
    <div class="col-md-6">
      <div class="card">
        <div class="card-header"> Total Members&nbsp;</div>
        <div class="card-body">
          <h4>
          <?php
     
              //to display total member
          $sql3= "SELECT COUNT(DISTINCT icNo) FROM member;";
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
        <div class="card-header"> Total Registered Resident&nbsp;</div>
        <div class="card-body">
          <h4>
          <?php
     
              //to display total member
          $sql3= "SELECT COUNT(DISTINCT icNo) FROM resident;";
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
        <div class="card-header"> Total Male</div>
        <div class="card-body">
          <h4>
            <?php
          $sql4= "SELECT COUNT(DISTINCT icNo) FROM member where sex = 'male'";
            $maleResult=mysqli_query($con,$sql4);
                
            while ($row=mysqli_fetch_row($maleResult)){
                $repNo= $row[0] ;
            }
                
                echo $repNo;

          ?>      
          </h4>
        </div>
      </div>
    </div>
      
      
      
       <div class="col-md-6">
      <div class="card">
        <div class="card-header"> Total Female</div>
        <div class="card-body">
          <h4>
            <?php
          $sql4= "SELECT COUNT(DISTINCT icNo) FROM member where sex = 'female'";
            $maleResult=mysqli_query($con,$sql4);
                
            while ($row=mysqli_fetch_row($maleResult)){
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

     <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/clean-blog.min.js"></script>
    
 </body>
</html>



<?php




include('analytics_action.php');


$sqlIC = "
SELECT icNo FROM resident
";


$resultIC = $con->query($sqlIC);

if($resultIC->num_rows >0) {

    $ic = array();
    while ($row = $resultIC->fetch_assoc()) {
        $text = $row["icNo"];
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
        select count(*) from payment 
        ";

        $sqlPaid = "
        select count(*) from payment 
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
