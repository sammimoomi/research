<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){

	  Header("Location: login.php");

}else{?>

<?php 
include ('head.php');
include ('../connect.php'); 
?>

  <body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-info navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link text-white">ฐานข้อมูลผลงานการวิจัย</a>
      </li>

    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-info">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link text-white navbar-info">

    <i class="fas fa-book"></i>
      <span class="brand-text font-weight-light">กรมวิชาการเกษตร</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3  mb-3 d-flex">
        <!-- <div class="image"> -->
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        <!-- </div> -->
        <!-- <div class="info"> -->
          <!-- <a href="#" class="d-block">Alexander Pierce</!--> 
        <!-- </div> -->
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-sidebar flex-column" data-widget="treeview">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <?php include ('menu_left.php') ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <?php
        $page = (isset($_GET['page']) ? $_GET['page'] : '');
        $indo = (isset($_GET['indo']) ? $_GET['indo'] : '');

                if($page == ''){
                     include ('dashboard.php');

                }elseif($page == 'group'){ 
                  
                    if($indo == 'form_edit' ){
                      include ('form_edit.php');
                    }elseif($indo == 'form_add' ){
                      include ('form_add.php');
                    }else{
                      include ('view_all.php');
                    }
                }elseif($page == 'user'){ 
                  include ('user.php');
                }elseif($page == 'new'){ 
                  include ('dashboard.php');
                }
                  else{
                     include ('dashboard.php');
                  }
                  ?> 
        
          <?php mysqli_close($conn);?>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
    DevBy. SURIYA WONGHAD
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="http://www.doa.go.th/">กรมวิชาการเกษตร</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- sweetalert2 -->
<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#TableGroup").DataTable({
      "responsive": true,
      "autoWidth": false,
    });

  });

$(function () {
//Initialize Select2 Elements
$(".select2").select2({
    theme: "bootstrap4",
  });
});

  $(document).ready(function() {
    var t = $('#dataTable').DataTable( {
      "language": {
      "emptyTable": "ไม่มีข้อมูลในตาราง"
      },
      "responsive": true,
      "autoWidth": false,
      // "iDisplayLength": all,
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 0, 'DESC' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
</script>
<!-- area script -->
<script src="area/script.js"></script>

<!-- group script เลือกกลุ่มพืช-->
<script src="group/script.js"></script>


</body>
</html>
<?php }?>
