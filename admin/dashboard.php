<?php
$query2 = "SELECT * FROM $table ORDER BY id DESC LIMIT 10" or die("Error:" . mysqli_error($conn));
  $result2 = mysqli_query($conn, $query2); 
?>
<div class="container-fluid">
    <h1 class="mt-4"></h1>
    <div class="card mb-4">
        <div class="card-header">
            <h3 class = "text-center">เรื่องล่าสุด</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>ปี</th>
                            <th>ชื่อเรื่อง</th>
                            <th>ไฟล์</th>
                            <th>แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result2)){ 
                            $id = $row['id'];
                            ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['year'];?></td>
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