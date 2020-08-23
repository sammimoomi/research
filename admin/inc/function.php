<?php

function connect_db(){
    include ('../connect.php');
    $conn = mysqli_connect($host,$username,$password,$database_name);
    if($conn == false){
        die("Error: " . mysqli_error($conn));
    }else{
        mysqli_query($conn,'SET NAMES UTF8');
        date_default_timezone_set('Asia/Bangkok');
        return $conn;
    }
}
//function เลือกกลุ่มพืช
function selectGroup(){
    $dblink = connect_db();
    $query = mysqli_query($dblink,"SELECT * FROM groupplant ");
    echo '<select nname="tGroup" class="form-control select2" required>';
    echo '<option value="">-- กลุ่มพืช --</option>';
    foreach($query as $rows){
        echo '<option value="'.$rows['id_plant_group'].'">'.$rows['name_plant_group'].'</option>';
 } 
 echo '</select>';

}
    //function เลือกกลุ่มพืช แก้ไข
    function selectGroupedit($id){
        $dblink = connect_db();
        $query = mysqli_query($dblink,"SELECT * FROM groupplant ");
        foreach($query as $rows){
            echo '<option value="'.$rows['id_plant_group'].'"';
            if($rows['id_plant_group'] == $id)echo ' selected';
            echo '>'.$rows['name_plant_group'].'</option>';
        } 
  
    }

        //function เลือกกลุ่มพืช แก้ไข
        function selectvarnameedit($id){
            $dblink = connect_db();
            $query = mysqli_query($dblink,"SELECT * FROM plantname ");
            foreach($query as $rows){
                echo '<option value="'.$rows['id_plant'].'"';
                if($rows['id_plant'] == $id)echo ' selected';
                echo '>'.$rows['name_plant'].'</option>';
            } 
      
        }
    
    //function เลือกชนิดพืช แก้ไข
    function selectPlantedit($id){
        $dblink = connect_db();
        $query = mysqli_query($dblink,"SELECT name_plant FROM herbdb");
        foreach($query as $rows){
            echo '<option value="'.$rows['name_plant'].'"';
            if($rows['name_plant'] == $id)echo ' selected';
            echo '>'.$rows['name_plant'].'</option>';
        } 
    }

        //function เลือกชนิดพืช สมุนไพร
        function selectPlant($id){
            $dblink = connect_db();
            $query = mysqli_query($dblink,"SELECT * FROM plantname");
            foreach($query as $rows){
                echo '<option value="'.$rows['id_plant'].'"';
                if($rows['id_plant'] == $id)echo ' selected';
                echo '>'.$rows['name_plant'].'</option>';
            } 
        }

        function selectprovinceedit($id){
            $dblink = connect_db();
            $query = mysqli_query($dblink,"SELECT * FROM province");
            foreach($query as $rows){
                echo '<option value="'.$rows['province_th'].'"';
                if($rows['province_th'] == $id)echo ' selected';
                echo '>'.$rows['province_th'].'</option>';
            } 
      
        }

        function selectamphuredit($id){
            $dblink = connect_db();
            $query = mysqli_query($dblink,"SELECT * FROM amphur");
            foreach($query as $rows){
                echo '<option value="'.$rows['amphur_th'].'"';
                if($rows['amphur_th'] == $id)echo ' selected';
                echo '>'.$rows['amphur_th'].'</option>';
            } 
      
        }

        function selecttamboledit($id){
            $dblink = connect_db();
            $query = mysqli_query($dblink,"SELECT * FROM tambol");
            foreach($query as $rows){
                echo '<option value="'.$rows['tambol_th'].'"';
                if($rows['tambol_th'] == $id)echo ' selected';
                echo '>'.$rows['tambol_th'].'</option>';
            } 
      
        }

?>