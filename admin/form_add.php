
</style>
<div class="container-fluid">
<h1 class="mt-4"></h1>
  <div class="card mb-4">
    <div class="card-body bg-light">
    <form class="form-horizontal" method="post" action="manage.php?act=add"  enctype="multipart/form-data">

      <div class="form-row">
      <div class="form-group col-md-1">
            <label for="colFormLabelSm">ปี</label>
            <input type="text" maxlength="4" name="year"class="form-control">
          </div>
          <div class="form-group col-md">
            <label for="colFormLabelSm">ชื่อเรื่อง</label>
            <input type="text" name="title"class="form-control" >
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md">
            <label for="fullname_farmer">ชื่อผู้วิจัย</label>
            <textarea rows="4" name="researcher" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="fullname_farmer">ชื่อผู้วิจัย</label>
            <textarea rows="4" name="co_researcher" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-row">
              <div class="form-group col-md">
                <label for="trunk">หน่วยงาน</label>
                <textarea rows="4" name="department" class="form-control"></textarea>
              </div>
          </div>
          <div class="form-row">
          <div class="form-group col-md">
            <label for="fullname_farmer">Keyword</label>
            <input type="text" name="keyword" class="form-control" >
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
                <textarea rows="20" name="abstract" class="form-control"></textarea>
              </div>
              </div>
              <div class="form-row">
              <div class="col-md-12 ">
              <input type="file" name="upload1" class="form-control" >
              </div>
            </div>


            </div>
          </div>
        </div>


          <button type="submit"  name="submit" class="btn btn-info float-right"><i class="glyphicon glyphicon-edit"></i> บันทึกข้อมูล</button>

      </form>