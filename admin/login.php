<?php include ('head.php');?>
<body class="hold-transition login-page">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="card">
  <div class="login-logo">
    <div>
      <img class="mb-4 mt-3" src="img/doaweb.png" alt="" width="80" height="80">
    </div>
    <a href="../index.php"><h3>ฐานข้อมูลผลงานการวิจัย</h3></a>
  </div>
    <div class="card-body login-card-body">
      <!-- <p class="login-box-msg">การแปรรูปวัตถุดิบพืชสมุนไพรให้ได้มาตรฐาน</p> -->

      <form class="form-signin" method="post" action="checklogin.php">

        <div class="form-group">
          <input type="text" class="form-control" id="Username" name="Username" placeholder="Username" required="required">		
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" required="required">	
        </div>
    
    
        <div class="row justify-content-around">
        <div class="col-6">

      </div>
        <div class="col-12 mt-3">
        <button class="btn btn-success btn-block " type="submit"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</button>
        </div>
      </div>
    
    
    </form>
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>