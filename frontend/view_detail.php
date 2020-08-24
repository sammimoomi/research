<?php

$id = $_GET['id'];

$query = "SELECT * FROM $table WHERE id = '$id'" or die("Error:" . mysqli_error($conn));
$result = mysqli_query($conn, $query); 

$sql2 = "UPDATE $table SET view_count = view_count + 1 WHERE id = '$id'";
$result2 = mysqli_query($conn, $sql2); 
?>
<?php while($row = mysqli_fetch_assoc($result)){ 
?>

<div class="card border-info mb-5" id="container">
<!-- <div class="card-header text-center list-group-item-info"><h4><?php echo $row['title'];?></h4></div> -->
  <div class="card-body ">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="frontend/img/1.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h4 class="card-title"><B><?php echo $row['title'];?></B></h4>
        <br>
        <B><small>Keyword : </small></B>
        <?php
            $keyword = explode(",",$row['keyword']); 
            $arrayLength = count($keyword);
            $i = 0;
            while ($i < $arrayLength)
            {
                echo "<a href='#' class='badge badge-info'>";
                echo $keyword[$i];
                echo "</a>";
                $i++;
                echo "&nbsp;";
            }
              
       ?>
        <hr>
        <p><B>ผู้วิจัย : </B><?php echo $row['researcher'];?> <br>
        <small> <?php echo $row['co_researcher'];?></small></p>

        <p><B>หน่วยงาน : </B><small><?php echo $row['department'];?></small></p>
        <p><B>จำนวนผู้อ่าน : </B><small><?php echo $row['view_count'];?></small><B> ครั้ง</B></p>

        <hr>
      </div>
    </div>

  </div>
  <h4 class="text-center">บทคัดย่อ (Abstract)</h4>
  <div class="card-body">
              <div class="form-row">
              <div class="form-group col-md">
                <textarea readonly rows="20" name="abstract" class="form-control"><?php echo $row['abstract'];?></textarea>
              </div>
              </div>
            </div>
  <table class="table table-sm table-hover">
  <HR>
  <BUTTON  type="button" class="btn btn-outline-success" >
  <i class="fas fa-file-pdf" style="color: Tomato;"></i>
  <a href="frontend/download.php?id=<?=$row["id"]?>" target="_blank"  ><?php echo $row['file_name'];?></a></BUTTON> (ดาวน์โหลด: <?php echo $row['download_count'];?> ครั้ง)

</table>
<?php
$date_created = $row['date_created'];
$last_updated = $row['last_updated'];

if ($last_updated == '') {
  $setdate = date("d",strtotime($date_created));
  $setmonth = date("m",strtotime($date_created));
  $setyear = date("Y",strtotime($date_created))+543;

}else{
  $setdate = date("d",strtotime($last_updated));
  $setmonth = date("m",strtotime($last_updated));
  $setyear = date("Y",strtotime($last_updated))+543;

}

    ?>
    <p class="card-text text-right"><small class="text-muted">ปรับปรุงข้อมูลเมื่อวันที่ <?php echo $setdate ."-". $setmonth . "-" . $setyear ; ?></small></p>

  </div>
</div>
<?php } ?>


