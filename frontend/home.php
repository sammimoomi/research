
<?php
$query = "SELECT * FROM $table ORDER BY view_count DESC LIMIT 5" or die("Error:" . mysqli_error($conn));
  $result = mysqli_query($conn, $query); 
?>
<div class="row">
<div class="col-md-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">เข้าชมสูงสุด <i class="fab fa-gripfire"></i></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                    <tr class = "text-center">
                      <th style="width: 10px">ปี</th>
                      <th>เรื่อง</th>
                      <th>view</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)){ ?>
                      <tr>
                      <td class = "text-center"><?php echo $row['year'];?></td>
                      <td> <a class="text-info" href="?act=view_detail&id=<?php echo $row['id'];?>#dd"><?php echo $row['title'];?></a>
                      <br><small><?php //echo $row['researcher'];?></small></td>
                      <td class = "text-center"><?php echo $row['view_count'];?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
</div>
<br><br>

<?php
$query2 = "SELECT * FROM $table ORDER BY download_count DESC LIMIT 5" or die("Error:" . mysqli_error($conn));
  $result2 = mysqli_query($conn, $query2); 
?>
        <div class="row">
          <div class="col-md-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">ดาวน์โหลดสูงสุด <i class="fas fa-star"></i></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                    <tr class = "text-center">
                        <th style="width: 10px">ปี</th>
                        <th>เรื่อง</th>
                        <th>download</th>
                        <!-- <th style="width: 40px">Label</th> -->
                      </tr>
                    </thead>
                    <tbody>
                    <?php while($row = mysqli_fetch_assoc($result2)){ ?>
                      <tr>
                      <td class = "text-center"><?php echo $row['year'];?></td>
                      <td> <a class="text-info" href="?act=view_detail&id=<?php echo $row['id'];?>#dd"><?php echo $row['title'];?></a>
                      <br><small><?php //echo $row['researcher'];?></small></td>
                      <td class = "text-center"><?php echo $row['download_count'];?></td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>


