<?php

$year = $_GET['year'];

    // query นับจำนวน 
    $query_count = "SELECT COUNT(*) As total_records FROM $table WHERE year = '$year' " or die("Error:" . mysqli_error($conn));
    $result_count = mysqli_query($conn, $query_count); 
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];

    if ($total_records == 0) {
      echo "<script>window.location.href='index.php#dd';</script>";
    }else{

  $query = "SELECT * FROM $table WHERE year = '$year' ORDER BY id DESC" or die("Error:" . mysqli_error($conn));
  $result = mysqli_query($conn, $query); 

?>
<div class="card">
              <div class="card-header text-center">
                <h2 class="card-title ">รายงานผลงานวิจัยและพัฒนา ปี<?php echo $year;?>  (<?php echo $total_records;?>)</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>ชื่อเรื่อง</th>
                    <th>view</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php while($row = mysqli_fetch_assoc($result)){ ?>
                   
                  <tr>
                  
                    <td><?php echo $row['id'];?></td>
                    <td> <a class="text-info" href="?act=view_detail&id=<?php echo $row['id'];?>#dd"><?php echo $row['title'];?></a></td>
                    <td><?php echo $row['view_count'];?></td>
                    
                  </tr>
                  
                <?php }?>

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          <?php } ?>