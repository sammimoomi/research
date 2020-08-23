<?php 
if(isset($_GET['year'])!=''){
  $ff = $_GET['year'];
}else{
  $ff = '';
}


$query = "SELECT year,  COUNT(*) as count_rec FROM $table GROUP BY year ORDER BY year DESC" OR die("Error:" . mysqli_error($conn));
  $result = mysqli_query($conn, $query); 
?>

<div class="container">
<form action="" method="get">
<div class="list-group ">
    <h5 class="card-header list-group-item list-group-item-info text-center"><B>รายงานผลงานวิจัยและพัฒนา</B></h5>


<?php while($row = mysqli_fetch_assoc($result))

{ ?>

    <a <?php if($ff == $row['year']){
       echo "class='list-group-item list-group-item-action list-group-item-info text-center'"; 
       }?> 

    href="?act=view_year_group&year=<?php echo $row['year'];?>#dd"
    class="list-group-item list-group-item-action text-center" >
    <i class="fas fa-angle-double-right " style="color:#f0b216;"></i> ผลงานวิจัยและพัฒนา ปี<?php echo $row['year'];?>
    <span class="badge badge-pill badge-warning pull-right" ><?php echo $row['count_rec'];?></span>
    </a>
    <?php } ?>

</div>

</form>
</div>

