<!DOCTYPE html>
<html lang="en">
    <!-- head -->
    <?php include ('frontend/head.php');?>

    <!-- Navigation style="opacity: 0.4;" -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
    <div class="container">
      <a class="navbar-brand" href="index.php">ฐานข้อมูลผลงานการวิจัย กรมวิชาการเกษตร</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item" >
            <a class="nav-link" href="admin/login.php"><i class="fas fa-user-lock"></i> Admin</a>
          </li>
        </ul>
      </div> 
    </div>
  </nav>    

  <body >
    <!-- Header -->
    <?php include ('frontend/header.php');?>
    

      <!-- Page Content ++++++++++++++++++++++++++++++++++++-->
        <div class="container-fluid " >

              <!-- row Search ----------------------------------->
                <div class="row"> 
                  <div class="col-md-3 col-mx-5">
                    <?php include ('frontend/menu_left.php');?>
                  </div>

                  <div class="col-md-9 "> 
                  <?php 

                  $act = (isset($_GET['act']) ? $_GET['act'] : '');
                  if($act == ''){
                     include ('frontend/home.php');

                  }elseif($act == 'view_year_group'){
                    include ('frontend/view_year_group.php');

                  }elseif($act == 'view_detail'){
                    include ('frontend/view_detail.php');

                  }elseif($act == 'view_search'){
                    include ('frontend/view_search.php');

                  }
                  ?>                      
                  </div>
                </div>

      </div>
      <!-- /.Page container +++++++++++++++++++++++++++++++++++-->

      <!-- Footer -->
      <?php include ('frontend/footer.php');?>
  </body>

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
<script src="admin/dist/js/highlight.js"></script>
</html>
<!-- <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "order": [[ 0, "desc" ]],
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> -->
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
    var t = $('#example2').DataTable( {
      "language": {
      "emptyTable": "ไม่มีข้อมูลในตาราง"
      },
      "searching": false,
      "lengthChange": false,
      "responsive": true,
      "autoWidth": false,
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


