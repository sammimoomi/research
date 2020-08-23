<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("../connect.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);
				//query 
                  $sql="SELECT * FROM user Where Username='".$Username."' and Password='".$Password."' ";

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){

                    $row = mysqli_fetch_array($result);

                    $_SESSION["UserID"] = $row["ID"];
                    $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                    $_SESSION["Userlevel"] = $row["Userlevel"];

                    if($_SESSION["Userlevel"]=="A"){ 

                      Header("Location: index.php");

                    }

                    if ($_SESSION["Userlevel"]=="M"){  

                      Header("Location: user_page.php");

                    }

                }else{
                  echo "<script>";
                      echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                      echo "window.history.back()";
                  echo "</script>";

                }

      }else{


           Header("Location: ../index.php");

      }
?>