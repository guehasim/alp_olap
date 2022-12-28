 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>

     <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/fontawesome-free/css/all.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/dist/css/adminlte.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

      <!-- daterange picker -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/daterangepicker/daterangepicker.css">
      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- Bootstrap Color Picker -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
      <!-- Tempusdominus Bootstrap 4 -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

      <!-- Select2 -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/select2/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
      <!-- Bootstrap4 Duallistbox -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
      <!-- BS Stepper -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/bs-stepper/css/bs-stepper.min.css">

      <!-- Toastr -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/content2/plugins/toastr/toastr.min.css">

     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pivot/c3.min.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/pivot/d3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/pivot/c3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/pivot/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/pivot/jquery-ui.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pivot/pivot.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/pivot/pivot.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/pivot/c3_renderers.js"></script>
    <style>
      .c3-line, .c3-focused {stroke-width: 3px !important;}
      .c3-bar {stroke: white !important; stroke-width: 1;}
      .c3 text { font-size: 12px; color: grey;}
      .tick line {stroke: white;}
      .c3-axis path {stroke: grey;}
      .c3-circle { opacity: 1 !important; }
      .c3-xgrid-focus {visibility: hidden !important;}
    </style>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/pivot/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/pivot/show_code.js"></script>

      

      <script src="<?php echo base_url() ?>assets/content2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>assets/content2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/content2/dist/js/adminlte.js"></script>  

<style>
  .upnya {
    color: white;
    background-color: #b07227;
    border-radius: 5px;
  }
  .no_aksi{
    color: black;
    background-color: white;
  }
  .downnya{
    background-color: #f5ad42;
    color: white;
    border-radius: 5px;
  }

  #myBtn {
  display: none;
  width: 60px;
  height: 60px;
  position: fixed;
  bottom: 100px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 50%;
}

#myBtn:hover {
  background-color: #555;
}
</style>

<style type="text/css">
  @media print{
    @page {
      size: A4 portrait;
      margin: 2mm;
    }
    .form-control{
      display: none;
    }
    .btn{
      display: none;
    }
    .sd{
      display: none;
    }
    .pvtRenderer{
      display: none;
    }
    .pvtVals{
      display: none;
    }
    .pvtAxisContainer{
      display: none;
    }
    .card-header{
      display: none;
    }
    .main-header{
      display: none;
    }
    .act-btn{
      display: none;
    }
    .fa{
      display: none;
    }
    .content-wrapper{
      padding-top: 0px;
    }


  }
</style>
<style>
  @media screen{
    .oke{
      position: fixed;
    }
    .content-wrapper{
      padding-top: 70px;
    }
  }
</style>
 </head>
 <body> 
  <div style="position: fixed;">
    <img src="<?php echo base_url() ?>assets/pivot/logo.png" style="width: 80px;height: 70px;padding-left: 30px;">
  </div>
  <div style="position: fixed;">
    <p style="font-family:Arial; font-size: 25px; color: black;padding-top: 20px;padding-left: 90px;">PT. ALP Petro Industry</p>
  </div>
  <div style="position: fixed;">
    <p style="font-family:Arial; font-size: 13px; color: black;padding-top: 50px;padding-left: 90px;">Jl. Raya Kebonsari Desa No.KM. 1, Legok, Kec. Gempol, Pasuruan, Jawa Timur 67155</p>
  </div>
  <div class="oke" style="padding-top: 70px;">
    <hr size="10px" style="background-color:black;">
  </div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><li class="fa fa-arrow-up"></li></button>

  <?php 

  if ($menu == 'dashboard') {
    $dashboard  = "upnya";
    $user       = "no_aksi";
    $order      = "no_aksi";
    $purchase   = "no_aksi";
  }elseif($menu == 'user'){
    $dashboard  = "no_aksi";
    $user       = "upnya";
    $order      = "no_aksi"; 
  }elseif($menu = 'order entry'){
    $dashboard  = "no_aksi";
    $user       = "no_aksi";
    $order      = "upnya"; 
  }

  ?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand" id="atas" style="margin-left:0px;background-color: #fa7202;position: fixed;width: 100%;">
    <!-- Left navbar links -->
    
    <ul class="navbar-nav">
      <img src="<?php echo base_url() ?>assets/pivot/logo.png" style="width: 50px;height: 60px;padding-left: 5px;">
      <h3 style="font-family:Arial;color: white;padding-top: 20px;padding-left: 10px;">PT. ALP Petro Industry</h3>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-th-large" style="color: white;"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="margin: -2.875rem 0 0;">
          <a href="<?php echo base_url() ?>Login/logout" class="dropdown-item">
            <i class="fas fa-lock mr-2"></i> Sign Out
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar --> 
 <div style="padding-top:80px;"></div> 
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand" style="margin-left:0px;background-color: white;position: fixed;width: 100%;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>Dashboard" class="nav-link <?php echo $dashboard;?>"
          <?php
          $id1 = $this->session->userdata('ses_dashboard');
          if ($id1 == '1') {
             
           }else{
            echo "hidden";
           }
           ?>
        >Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>User" class="nav-link <?php echo $user;?>"
          <?php
          $id2 = $this->session->userdata('ses_user');
          if ($id2 == '1') {
             
           }else{
            echo "hidden";
           }
           ?>
          >User</a>
      </li>
      <li class="nav-item dropdown"
      <?php
        $id3 = $this->session->userdata('ses_order_entry');
        if ($id3 == 1) {
           
         }else{
          echo "hidden";
         }
      ?>
      >
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle <?php echo $order;?>">Order Entry</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          <li><a href="<?php echo base_url() ?>Penjualan" class="dropdown-item">Order View </a></li>
          <li><a href="#" class="dropdown-item">Shipment View</a></li>
          <li><a href="#" class="dropdown-item">Invoice / Sales View</a></li>
          <li><a href="#" class="dropdown-item">Credit Note View</a></li>
          <li><a href="#" class="dropdown-item">Payable View</a></li>
          <li><a href="#" class="dropdown-item">Customer List View</a></li>
          <li><a href="#" class="dropdown-item">Tracking List View</a></li>
          <li><a href="#" class="dropdown-item">Invoice VS Account Receivable</a></li>
          <li><a href="#" class="dropdown-item">AR Aged Trial Balance</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown"
      <?php
        $id4 = $this->session->userdata('ses_purchase_order');
        if ($id4 == 1) {
           
         }else{
          echo "hidden";
         }
      ?>
      >
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: black;">Purchase Order</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          
        </ul>
      </li>
      <li class="nav-item dropdown"
      <?php
        $id5 = $this->session->userdata('ses_inventory_control');
        if ($id5 == 1) {
           
         }else{
          echo "hidden";
         }
      ?>
      >
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: black;">Inventory Control</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          <li><a href="#" class="dropdown-item">Stock</a></li>
          <li><a href="#" class="dropdown-item">Transfer</a></li>
          <li><a href="#" class="dropdown-item">Internal Usage</a></li>
          <li><a href="#" class="dropdown-item">Adjustment</a></li>
          <li><a href="#" class="dropdown-item">Receipts View</a></li>
          <li><a href="#" class="dropdown-item">Shipment View</a></li>
          <li><a href="#" class="dropdown-item">Stock Review Details</a></li>
          <li><a href="#" class="dropdown-item">Price List View</a></li>
          <li><a href="#" class="dropdown-item">Transaction Log History</a></li>
          <li><a href="#" class="dropdown-item">ITEM</a></li>
          <li><a href="#" class="dropdown-item">Mutasi</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown"
      <?php
        $id6 = $this->session->userdata('ses_manufacturing');
        if ($id6 == 1) {
           
         }else{
          echo "hidden";
         }
      ?>
      >
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: black;">Manufacturing</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          
        </ul>
      </li>
      <li class="nav-item dropdown"
      <?php
        $id7 = $this->session->userdata('ses_blending');
        if ($id7 == 1) {
           
         }else{
          echo "hidden";
         }
      ?>
      >
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: black;">Blending</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          
        </ul>
      </li>
      <li class="nav-item dropdown"
      <?php
        $id8 = $this->session->userdata('ses_refinery');
        if ($id8 == 1) {
           
         }else{
          echo "hidden";
         }
      ?>
      >
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: black;">Refinery</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          
        </ul>
      </li>
      <li class="nav-item dropdown"
      <?php
        $id9 = $this->session->userdata('ses_maintenance');
        if ($id9 == 1) {
           
         }else{
          echo "hidden";
         }
      ?>
      >
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: black;">Maintenance</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          
        </ul>
      </li>
      <li class="nav-item dropdown"
      <?php
        $id10 = $this->session->userdata('ses_accounting');
        if ($id10 == 1) {
           
         }else{
          echo "hidden";
         }
      ?>
      >
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: black;">Accounting</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          
        </ul>
      </li>
    </ul>
    <ul class="navbar-nav">
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      
      
    </ul>
  </nav>
  <!-- /.navbar --> 