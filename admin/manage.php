
<?php 
      include ('../connect.php');

       $act = (isset($_GET['act']) ? $_GET['act'] : '');
//เพิ่ม ------------------------------------------------------------------------------------
       if($act == 'add'){ 
          
           if (!isset($_FILES['upload1']['tmp_name'])) {
               }else{
                    $upload1=$_FILES['upload1']['tmp_name'];
                    $upload1_name=$_FILES['upload1']['name'];
                    $upload1_size=$_FILES['upload1']['size'];
                    $upload1_type=$_FILES['upload1']['type'];

                    $error = $_FILES["upload1"] ["error"];
          
               if ($error > 0){
                    die("Error uploading file! Code $error.");
               }else{
                    if($size > 10000000) //conditions for the file
                    {
                         die("Format is not allowed or file size is too big!");
                    }else{
                         move_uploaded_file($_FILES["upload1"]["tmp_name"],"../pdf/" . $_FILES["upload1"]["name"]);
                         $file_name=$_FILES["upload1"]["name"];

                         $title= $_POST['title'];
                         $abstract= $_POST['abstract'];
                         $researcher=$_POST['researcher'];
                         $co_researcher=$_POST['co_researcher'];
                         $department=$_POST['department'];
                         $year= $_POST['year'];
                         $keyword= $_POST['keyword'];

          
                         $sql1 = "INSERT INTO $table (title,abstract,researcher,co_researcher,department,year,keyword,file_name)
                                   VALUES ('$title','$abstract','$researcher','$co_researcher','$department','$year','$keyword','$file_name')";
                                             mysqli_query($conn,$sql1);
          
                              }
                         header('location:index.php?page=new');
                    }
               }
        }
//แก้ไข ------------------------------------------------------------------------------------

     if($act == 'update'){ 
          $date=date("Y-m-d H:i:s");

          $id=$_POST['id'];
          $title= $_POST['title'];
          $abstract= $_POST['abstract'];
          $researcher=$_POST['researcher'];
          $co_researcher=$_POST['co_researcher'];
          $department=$_POST['department'];
          $year= $_POST['year'];
          $keyword= $_POST['keyword'];

          $upload1 = (isset($_POST['upload1']) ? $_POST['upload1'] : '');
          $file2 = $_POST['file2'];
          $file_name=$_FILES["upload1"]["name"];

	if($file_name !='') { 
          $newname=$_FILES["upload1"]["name"];
          move_uploaded_file($_FILES["upload1"]["tmp_name"],"../pdf/" . $_FILES["upload1"]["name"]);
	}else {
		$newname = $file2;
     }
          $sql = "UPDATE $table SET 
             title = '$title',
             abstract = '$abstract',
             researcher = '$researcher',
             co_researcher = '$co_researcher',
             department = '$department',
             year = '$year',
             file_name = '$newname',
             keyword = '$keyword',
             last_updated = '$date'

              WHERE id = '$id'";
             mysqli_query($conn, $sql);


          mysqli_close($conn);

                    echo "<script>window.location.href='index.php';</script>";
                 exit;
}


//ลบ ------------------------------------------------------------------------------------

       if($act == 'delete'){ 
            $id = $_GET['id'];
            $sql ="DELETE FROM $table WHERE id = '$id';";  
            mysqli_query($conn, $sql); 
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
       
 ?>