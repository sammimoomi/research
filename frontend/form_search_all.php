<?php
if (isset($_GET['search']) != "") {
    $search = $_GET['search'];
} else {
    $search = '';
}
if (isset($_GET['Searchfrom']) != "") {
    $Searchfrom = $_GET['Searchfrom'];
} else {
    $Searchfrom = '';
}
?>
<form action="" method="get">
    <div class="form-row">
        <div class="input-group input-group-lg col-md-12 pt-5 pb-5">
            <div class="input-group-prepend">
                <select class="input-group-text"  name = "myselect" >
                    <option value="title" <?=(isset($_GET['myselect']) && $_GET['myselect']=="title")?" selected":""?> >ชื่อเรื่อง</option>
                    <option value="researcher" <?=(isset($_GET['myselect']) && $_GET['myselect']=="researcher")?" selected":""?> >ผู้วิจัย</option>
                    <option value="abstract" <?=(isset($_GET['myselect']) && $_GET['myselect']=="abstract")?" selected":""?> >บทคัดย่อ</option>
                    <option value="keyword" <?=(isset($_GET['myselect']) && $_GET['myselect']=="keyword")?" selected":""?> >คำสำคัญ</option>
                    <option value="department" <?=(isset($_GET['myselect']) && $_GET['myselect']=="department")?" selected":""?> >หน่วยงาน</option>
                </select>
            </div>

            <input type="text" class="form-control" placeholder="keyword" name="search" value="<?=(isset($_GET['search']))?$_GET['search']:""?>" autofocus>        
            <div class="input-group-append">
                <button class="btn btn-info" type="submit" name="act" value="view_search"><i class="fa fa-search"></i> สืบค้น</button>
            </div>
        </div>
    </div>
</form>