<?php
if (isset($_GET['myselect']) && $_GET['myselect'] != "") {
    $myselect = $_GET['myselect'];
    $query_count = "SELECT COUNT(*) As total_records FROM $table  WHERE $myselect LIKE '%" . trim($_GET['search']) . "%'" or die("Error:" . mysqli_error($conn));
    $result_count = mysqli_query($conn, $query_count);
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];

    $result = mysqli_query($conn, "SELECT * FROM $table WHERE $myselect LIKE '%" . trim($_GET['search']) . "%' ORDER BY year DESC");

    if (isset($_GET['search']) != "") {
        $search = $_GET['search'];
        echo "<h5 class='card-header text-center list-group-item-info detail' >คำที่ค้นหา : ";
        echo $search;
        echo " (" . $total_records . ") </h5>";
    } else {
        echo "<h5 class='card-header text-center list-group-item-info' >ผลงานวิจัยและพัฒนาทั้งหมด ";
        echo $search;
        echo $total_records . " เรื่อง </h5>";
    }
    ?>

            <div class="card">
              <div class="card-header text-center">
              <!-- <h2 class="card-title ">คำที่ค้นหา :</h2> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>ปี</th>
                    <th>ชื่อเรื่อง</th>
                    <th>view</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php while ($row = mysqli_fetch_assoc($result)) {?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><a class="text-info" href="?act=view_year_group&year=<?php echo $row['year']; ?>#dd"><?php echo $row['year']; ?>
                    </td>
                    <td >
                      <?php 
                      $r_id = $row['id'];
                      $r_title = $row['title'];
                      $r_researcher = $row['researcher'];
                      $r_keyword = $row['keyword'];
                      $r_department = $row['department'];
                      
                      if ($myselect == "title" || $myselect == "abstract") {
                          echo "<a class='text-info light' href='?act=view_detail&id=".$r_id."#dd'>".$r_title." ";
                      }elseif ($myselect == "researcher"){
                        echo " <a class='text-info' href='?act=view_detail&id=".$r_id."#dd'>".$r_title." ";
                        echo "</a><br>";
                        echo " <small class='light2'>".$r_researcher."</small>";
                      }elseif ($myselect == "keyword"){
                        echo " <a class='text-info' href='?act=view_detail&id=".$r_id."#dd'>".$r_title." ";
                        echo "</a><br>";
                        echo " <small class='light2'>".$r_keyword."</small>";
                      }elseif ($myselect == "department"){
                        echo " <a class='text-info' href='?act=view_detail&id=".$r_id."#dd'>".$r_title." ";
                        echo "</a><br>";
                        echo " <small class='light2'>".$r_department."</small>";
                      }else{
                        echo " <a class='text-info' href='?act=view_detail&id=".$r_id."#dd'>".$r_title." ";
                        echo "</a><br>";
                        echo " <small class='light2'>".$r_researcher."</small>";

                      }
                      ?>
                  </td>
                    <td ><?php echo $row['view_count']; ?></td>
                  </tr>
                <?php }?>

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          <?php }?>

          <script src="admin/dist/js/jquery.min.js"></script>
          <script src="admin/dist/js/highlight.js"></script>

          <script>
          $("a.light").highlight("<?php echo $search; ?>");
          $("small.light2").highlight("<?php echo $search; ?>");

          </script>