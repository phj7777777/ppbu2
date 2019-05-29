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

  <title>PPBU2 database panel</title>
    <meta name="description" content="PPBU2 admin panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="../images/icons/favicon.png">


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


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
                            <a href="widgets.html"> <i class="menu-icon ti-face-smile"></i>New Resident </a>
                        </li>
                        <li>
                            <a href="create_payment.php"> <i class="menu-icon ti-wallet"></i>New Payment </a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-pencil-alt"></i>New News/Event </a>
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
                                <a href="widgets.html"> <i class="menu-icon ti-pencil-alt"></i>Visitor Details </a>
                            </li>

                    
                    <h3 class="menu-title">Extras Resource</h3><!-- /.menu-title -->
                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-face-smile"></i>Articles</a>
                        </li> 

                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-wallet"></i>Presentation</a>
                        </li>

                         <li>
                            <a href="widgets.html"> <i class="menu-icon ti-car"></i>Report</a>
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

                        <h3>Database Panel</h3>
                       

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

    
  <div style="margin:15px">

      <div class="row">
       <div class="col-lg-12">
        <div class="panel panel-default">
         <div class="panel-heading">
          <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
           <div class="row">
            <h3 class="panel-title">Database List</h3>
           </div>
          </div>
          
          <div style="clear:both"></div>
         </div>
         <div class="panel-body">
          <div class="row">
           <div class="col-sm-12 table-responsive">
            <span id="alert_action"></span>
            <table id="user_data" class="table table-bordered table-striped"> 
             <thead><tr>

              <th>HouseNo</th>
              <th>Street</th>

              <th>View</th>

             </tr></thead>
            </table>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div></div>



      <div id="userModal" class="modal fade">
       <div class="modal-dialog">
        <form method="post" id="user_form">
         <div class="modal-content">
          <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">House Information</h4>
          </div>
          <div class="modal-body">
           <span id="validation_error"></span>
              <h5>Resident/ Member</h5>
              <hr>

                 <hr>
              <h5>Payment Details</h5>
              <hr>


          </div>
          <div class="modal-footer">
           <input type="hidden" name="id" id="id"/>
           <input type="hidden" name="crud_action" id="crud_action"/>
           <input type="submit" name="action" id="action" class="btn btn-info" value="Add" />
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
         </div>
        </form>
       </div>



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
 
</body>

</html>
    
    
    <script>
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#userModal').modal('show');
  $('#user_form')[0].reset();
  $('.modal-title').html("<i class='fa fa-plus'></i> Add User");
  $('#action').val('Add');
  $('#crud_action').val('Add');
     
      
 });
 
  $('#excel_file').change(function(){  
           $('#export_excel').submit();  
      });  
      $('#export_excel').on('submit', function(event){  
           event.preventDefault();  
           $.ajax({  
                url:"export.php",  
                method:"POST",  
                data:new FormData(this),  
                contentType:false,  
                processData:false,  
                success:function(data){  
                     $('#result').html(data);  
                     $('#excel_file').val('');  
                }  
           });  
      });    
    
 var crud_action = 'fetch_all';
 
 var userdataTable = $('#user_data').DataTable({
      "processing":true,
      "serverSide":true,
      "order":[],
      "ajax":{
       url:"user_action.php",
       type:"POST",
       data:{crud_action:crud_action},
      },
      "columnDefs":[
       {
        "targets":[1,2],
        "orderable":true,
       },
      ],
      "pageLength": 10
 });
 
    
  $(document).on('click', '.view', function(){
  var id = $(this).attr("id");
  crud_action = "fetch_single";
  $.ajax({
   url:"user_action.php",
   method:"POST",
   data:{id:id, crud_action:crud_action},
   dataType:"json",
   success:function(data)
   {
    $(".form-control").prop("readonly", true);
    $('#validation_error').html('');
    $('#userModal').modal('show');

     
    $('#id').val(id);
    $('#crud_action').val('view');
    $('#action').hide();
   }
  });
 });
    
    
});
</script>
