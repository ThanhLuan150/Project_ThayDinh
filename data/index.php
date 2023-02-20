
<html>
    
    <head>
            <link rel="stylesheet" href="style.css">
    </head>
    <body>
   <center>
    <h1>quick test</h1>
    <h4>Danh sách sinh viên</h4>
    <form action="#" method="post">
    <input type="text" name="masv" id="masv" placeholder="kiếm theo mã sinh viên...">
    <input type="submit" name="tim" value="tìm">
    <input type="submit" value="tất cả" name="show">
    </form>

    <table class="tableStyle">
        <tr>
            <th>Mã Sinh viên</th>
            <th>Họ Và Tên</th>
            <th>Giới Tính</th>
            <th>Quê Quán</th>
            <th>Ngày Sinh</th>
            <th>Nghành Học</th>
            <th>Tác vụ</th>
        </tr>
        <?php foreach($student as $key=>$value){ ?>
        <tr>
            <th><?php echo $key;?></th>
            <th><?php echo $value["Name"];?></th>
            <th><?php echo $value["Gender"];?></th>
            <th><?php echo $value["QueQuan"];?></th>
            <th><?php echo $value["NgaySinh"];?></th>
            <th><?php echo $value["NghanhHoc"];?></th>
            <th><a href="#">Sửa</a><a class="xoa" href="#">Xóa</a></th>
        </tr>
        <?php }?>
    </table>
            <form action="#" method="post"><input type="submit" value=" ADD" name="add"></form>
            


   </center>

    </body>
</html>