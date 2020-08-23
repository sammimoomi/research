<header class="bg-primary mb-5 py-5" style="background-image: url('frontend/img/img2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="container h-100">
      <div class="row h-100 align-items-center" >
        <div class="col-lg-12" >
          <h1 class="display-4 text-white mt-5 mb-2 text-center" href="#">ฐานข้อมูลผลงานการวิจัย</h1>
          <p class="lead mb-5 text-white-50 text-center" >กรมวิชาการเกษตร</p>
          <div class="container my-5">
          <!-- form ค้นหาทั้งหมด -->
            <?php include ('form_search_all.php');?>
            <div class="row">
              <div class="col-md-6">
               <!-- form ค้นหาจากพื้นที่ -->
                  <?php //include ('form_search_area.php');?>
              </div>
              
              <div class="col-md-6">
                  <!-- form ค้นหาจากประเภทส่วนที่ใช้ประโยชน์ -->
                  <?php //include ('form_search_type.php');?>
              </div>
            </div>
            
          </div>
          <div id="dd"></div>
        </div>
        
      </div>
    </div>
  </header>