  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ฐานข้อมูลผลงานการวิจัย</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css" />
  <link rel="stylesheet" href="admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.css">
  <!-- Google Font: Source Sarabun -->
  <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;300;500;700&display=swap" rel="stylesheet">
  <?php include ('../connect.php');
  $id = $_GET['id']; 
    $query = "SELECT * FROM $table WHERE id = '$id'" or die("Error:" . mysqli_error($conn));
    $result = mysqli_query($conn, $query); 

    $sql2 = "UPDATE $table SET download_count = download_count + 1 WHERE id = '$id'";
    $result2 = mysqli_query($conn, $sql2); 
?>
</head>
  <body>
    <?php while($row = mysqli_fetch_assoc($result)){ ?>

    <iframe src="../pdf/<?=$row["file_name"]?>" width="100%" height="1000">
    
    </iframe>
    <?php } ?>
  </body>
</html>