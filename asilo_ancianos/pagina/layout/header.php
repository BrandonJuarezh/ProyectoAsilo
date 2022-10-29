<?php include '../layout/session.php';?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ASILO DE ANCIANOS CABEZA DE ALGODON</title>

    <!-- Bootstrap -->
    <link href="../layout/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../layout/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../layout/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../layout/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../layout/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../layout/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../layout/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../layout/build/css/custom.min.css" rel="stylesheet">
                <script type="text/javascript" src="../layout/js/jquery.js"></script>
        <script type="text/javascript" src="../layout/js/chartJS/Chart.min.js"></script>




            
	
	<style>
		 h5,h6{
        text-align:center;
      }
      body .container.body .right_col {
  background: #9e9e9e;
}
    
      .nav_menu {
  float: left;
  background: #102027;
  border-bottom: 1px solid #D9DEE4;
  margin-bottom: 10px;
  width: 100%;
  position: relative;
}

*, ::before, ::after {
  color: #e0e0e0;
}
.nav.navbar-nav > li > a {
  color:#e0e0e0  !important;
}

.bg-blue {
  background-color: #006064 !important;
}

.site_title {
  text-overflow: ellipsis;
  overflow: hidden;
  font-weight: 400;
  font-size: 22px;
  width: 100%;
  color: #102027 !important;
  margin-left: 0 !important;
  line-height: 59px;
  display: block;
  height: 55px;
  margin: 0;
    margin-left: 0px;
  padding-left: 10px;
}


.left_col {

    background: #008e76;

}

.nav_title {
  width: 230px;
  float: left;
    background: #102027;
  border-radius: 0;
  height: 57px;
}
.sidebar-footer {
  bottom: 0px;
  clear: both;
  display: block;
  padding: 5px 0 0 0;
  position: fixed;
  width: 230px;
  background: #008e76;
}


      @media print {
          .btn-print {
            display:none !important;
		  }
		  .main-footer	{
			display:none !important;
		  }
		  .box.box-primary {
			  border-top:none !important;
		  }
		  .nav_menu {
			  display:none;
		  }
		  footer{
			  display:none;
		  }
		  
      
          
      }
	
	</style>
	
	
	<!---dataTable--->
	
	<?php include 'dbcon.php';?>
  </head>