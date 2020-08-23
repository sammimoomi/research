<?php
$year = (isset($_GET['year']) ? $_GET['year'] : '');
$query = "SELECT * FROM $table WHERE year = '$year' ORDER BY id DESC" or die("Error:" . mysqli_error($conn));
$result = mysqli_query($conn, $query); 

?>
<div class="container-fluid">
    <h1 class="mt-4"></h1>
    <div class="card mb-4">
        <div class="card-header">
        <h3 class = "text-center">รายงานผลงานวิจัยและพัฒนา ปี <?php echo $year;?></h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>ชื่อเรื่อง</th>
                            <th>ไฟล์</th>
                            <th>แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)){ 
                            $id = $row['id'];
                        ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['title'];?></td>
                            <td><a href="../pdf/<?=$row["file_name"]?>" target="_blank"><?php echo $row["file_name"];?></a></td>
                            <td class="text-center">
                                <div class="btn-group btn-sm" role="group">
                                    <a href="index.php<?php echo '?page=group&indo=form_edit&id='.$id; ?>" type="button" class="btn btn-sm btn-info">แก้ไข</a>
                                    <a href="manage.php?act=delete<?php echo '&id='.$id; ?>"type="button" onclick="myFunction()"class="btn btn-sm btn-danger">ลบ</a>
                                </div>
                            </td>
                        </tr>
                            <?php } ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>