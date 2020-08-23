<?php
         if(isset($_GET['year'])!=''){
        $ff = $_GET['year'];
}else{
  $ff = '';
}

          $page = (isset($_GET['page']) ? $_GET['page'] : '');

          $query = "SELECT year,  COUNT(*) as count_rec FROM $table GROUP BY year ORDER BY year DESC" OR die("Error:" . mysqli_error($conn));
          $result = mysqli_query($conn, $query); 

              
          ?>
            <li class="nav-item has-treeview active  ">
            <a href="?page=group&indo=form_add" echo class="nav-link active">
            <i class="fas fa-plus"></i>
              <p>เพิ่มข้อมูล</p>
            </a>
          </li>
          <br>
          <li <?php if($page == 'group'){echo "class='nav-item has-treeview menu-open'";} ?>class="nav-item has-treeview menu-open">
            <a href="#" <?php if($page == 'group'){echo "class='nav-link active'";} ?>class="nav-link">
              
              <p>รายงานผลงานวิจัยและพัฒนา
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <li class="nav-item">
                <a href="?page=group&year=<?php echo $row['year'];?>" 
                <?php if($ff == $row['year']){echo "class='nav-link active'";} ?>class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?php echo $row['year'];?></p>
                  <span class="badge badge-info right"><?php echo $row['count_rec'];?></span>
                </a>
                </li>
                <?php } ?>
            </ul>
          </li>


<HR>


          <li class="nav-item has-treeview">
            <a href="?page=user" <?php if($page == 'user'){echo "class='nav-link active'";} ?>class="nav-link ">
            <i class="fas fa-user-cog"></i>
              <p>จัดการผู้ใช้งาน
              <span class="badge badge-info right"><?php //echo $total_var; ?></span>
              </p>
            </a>

          </li>