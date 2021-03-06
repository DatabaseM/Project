<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <header class="main-header">
    <!-- Logo -->
    <a href="../../index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>E</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ambica</b> Enterprises</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
    
          <!-- Notifications: style can be found in dropdown.less -->
 
          <!-- Tasks: style can be found in dropdown.less -->

                  <!-- end task item -->
                  
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Administrator Account
                  <small>Owner</small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                 
                </div>
                <div class="pull-right">
                  <a href="../../login.html" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>   
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
       <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Inventory DB</p>
        
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            
          </ul>
        </li>
        
  
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Stocks</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addp.php#"><i class="fa fa-circle-o"></i>  Add Products</a></li><li><a href="tablep.php#"><i class="fa fa-circle-o"></i>  Inventory List</a></li>
           
            
            <li><a href="upst.php#"><i class="fa fa-circle-o"></i> Update Product</a></li>
            <li><a href="delp.php#"><i class="fa fa-circle-o"></i> Delete Product</a></li>  
          </ul>
        </li>
      
          <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Customers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addc.html#"><i class="fa fa-circle-o"></i> New Customer</a></li>
           
            <li><a href="tablec.php"><i class="fa fa-circle-o"></i> Customer List</a></li>
            <li><a href="upc.php#"><i class="fa fa-circle-o"></i> Update Customer Details</a></li>
            <li><a href="delc.php#"><i class="fa fa-circle-o"></i> Delete Customer</a></li>  
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Suppliers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="adds.html#"><i class="fa fa-circle-o"></i> New Supplier</a></li>
           
            <li><a href="tables.php#"><i class="fa fa-circle-o"></i> Supplier List</a></li>
            <li><a href="ups.php#"><i class="fa fa-circle-o"></i> Update Supplier Details</a></li>
            <li><a href="dels.php#"><i class="fa fa-circle-o"></i> Delete Supplier</a></li>  
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Sell
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="sadd.php#"><i class="fa fa-circle-o"></i> New Transaction</a></li><li><a href="tablest.php#"><i class="fa fa-circle-o"></i> View Transactions</a></li>
                
                <li><a href="sup.php#"><i class="fa fa-circle-o"></i> Update Transaction</a></li>
                <li><a href="sdel.php#"><i class="fa fa-circle-o"></i> Delete Transaction</a></li>  
              </ul>
            </li>
              <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Buy
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="badd.php#"><i class="fa fa-circle-o"></i> New Transaction</a></li><li><a href="tablebt.php#"><i class="fa fa-circle-o"></i> View Transactions</a></li>
                
                <li><a href="bup.php#"><i class="fa fa-circle-o"></i> Update Transaction</a></li>
                <li><a href="bdel.php#"><i class="fa fa-circle-o"></i> Delete Transaction</a></li>  
              </ul>
            </li>
          </ul>
        </li>
          
           <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
           
            <li><a href="salesr.php"><i class="fa fa-circle-o"></i> Sales Report</a></li>
            <li><a href="purchaser.php"><i class="fa fa-circle-o"></i> Purchase Report</a></li>
            
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Transaction
        <small>Inventory</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Stocks</a></li>
        <li class="active">Update Transaction</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
           <!-- general form elements -->   
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Buy Transaction</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="bupt.php">
              <div class="box-body">
                  
                                      <div class="form-group">
                  <label>Transaction</label>
                  <select class="form-control" name="tid">
                   
                      <?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM transbuy";

    $result = mysqli_query($conn, $sql);
    /*if(!mysqli_query($conn, $sql)){

    //    echo "Records added successfully.";

    //} else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }*/
    /*echo "$result";*/
    

    while ($row = mysqli_fetch_array($result)) {
        echo '
             <option value ="'.$row['tbid'].'">'.$row['tbid'].'</option> ';


    }

   

    ?>
   
            
                  </select>
                </div>
                  <div class="form-group">
                  <label>New Product</label>
                  <select class="form-control" name="pid">
                   
                      <?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM stock";

    $result = mysqli_query($conn, $sql);
    /*if(!mysqli_query($conn, $sql)){

    //    echo "Records added successfully.";

    //} else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }*/
    /*echo "$result";*/
    

    while ($row = mysqli_fetch_array($result)) {
        echo '
             <option value ="'.$row['pid'].'">'.$row['name'].'</option> ';


    }

   

    ?>
   
            
                  </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">New Quantity</label>
                  <input type="number" class="form-control" id="exampleInputhsn1" name="qty" placeholder="Enter quantity">
                </div>
                   <div class="form-group">
                  <label for="exampleInputEmail1">New Amount</label>
                  <input type="number" class="form-control" id="exampleInputcost1" name="amt" placeholder="Enter Amount">
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Tax</label>
                  <input type="number" class="form-control" id="exampleInputpaid1" name="tax" placeholder="Enter Tax">
                </div>
                 
                  <div class="form-group">
                  <label for="exampleInputEmail1">New Date Of Transaction</label>
                  <input type="date" class="form-control" id="exampleInputcost1" name="date" placeholder="Enter Date">
                </div>
                     <div class="form-group">
                  <label>Customer</label>
                  <select class="form-control" name="sid">
                   
                      <?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM supplier";

    $result = mysqli_query($conn, $sql);
    /*if(!mysqli_query($conn, $sql)){

    //    echo "Records added successfully.";

    //} else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }*/
    /*echo "$result";*/
    

    while ($row = mysqli_fetch_array($result)) {
        echo '
             <option value ="'.$row['sid'].'">'.$row['name'].'</option> ';


    }

   

    ?>
   
            
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        

        </div>
        <!--/.col (left) -->
       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="#">Pccoe Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
