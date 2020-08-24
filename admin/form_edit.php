<?php
$id = (isset($_GET['id']) ? $_GET['id'] : ''); //รับค่า id
$query = mysqli_query($conn,"SELECT * FROM $table where id='$id'");
$row = mysqli_fetch_array($query);
include ('head.php'); 
?>

<div class="container-fluid">
<h1 class="mt-4"></h1>
  <div class="card mb-4">
    <div class="card-body bg-light">
    <form class="form-horizontal" method="post" action="manage.php?act=update" enctype="multipart/form-data">
      <div class="form-row">
      <div class="form-group col-md-1">
            <label for="colFormLabelSm">ปี</label>
            <input type="text" name="year"class="form-control" value="<?php echo $row['year'];?>" autocomplete="off">
          </div>
          <div class="form-group col-md">
            <label for="colFormLabelSm">ชื่อเรื่อง</label>
            <input type="text" name="title"class="form-control" value="<?php echo $row['title'];?>" autocomplete="off">
          </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <input type="hidden" name="file2" value="<?php echo $row['file_name'];?>">

        <div class="form-row">
          <div class="form-group col-md">
            <label for="fullname_farmer">ชื่อผู้วิจัย</label>
            <textarea rows="4" name="researcher" class="form-control"><?php echo $row['researcher'];?></textarea>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md">
            <label for="fullname_farmer">ชื่อร่วมผู้วิจัย</label>
            <textarea rows="4" name="co_researcher" class="form-control"><?php echo $row['co_researcher'];?></textarea>
          </div>
        </div>

        <div class="form-row">
              <div class="form-group col-md">
                <label for="trunk">หน่วยงาน</label>
                <textarea rows="4" name="department" class="form-control"><?php echo $row['department'];?></textarea>
              </div>
          </div>

          <div class="form-row">
          <div class="form-group col-md">
            <label for="fullname_farmer">Keyword</label>
            <input type="text" name="keyword" class="form-control" value="<?php echo $row['keyword'];?>">
          </div>
        </div>
<!-- -------------------------------------------------------------------------------------- -->
<!-- บทคัดย่อ -->
<!-- -------------------------------------------------------------------------------------- -->
<div class="form-row">
          <div class="card col-md bg-gradient-light" >
            <div class="card-header text-center"><h5>บทคัดย่อ </h5></div>
            <div class="card-body">
              <div class="form-row">
              <div class="form-group col-md">
                <textarea rows="20" name="abstract" class="form-control"><?php echo $row['abstract'];?></textarea>
              </div>
              </div>

              <div class="form-row">

              <div class="col-md">
              <label>ชื่อไฟล์: <a href="../pdf/<?=$row["file_name"]?>" target="_blank"> <?php echo $row["file_name"];?></a></label>
                    <input type="file" class="form-control" name="upload1"  value="<?php echo $row['file_name'];?>"><br>
        </div>
      </div>
            </div>
          </div>
        </div>
          <button type="submit"  name="update" class="btn btn-info float-right"><i class="glyphicon glyphicon-edit"></i> แก้ไขข้อมูล</button>
      </form>
    </div>
  </div>
</div>
