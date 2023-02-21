<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh sách sinh viên</title>
<body>
    <center>
        <form action="index.php" method="post" class="form">
            <h1>Thông tin sinh viên</h1>
            Tên sinh viên: <input type="text" name="name"> <br> <br>
            Giới tính: <input type="text" name="gender"> <br> <br>
            Quê quán: <input type="text" name="diachi"> <br> <br>
            Ngành học: <input type="text" name="nganhhoc"> <br> <br>
            <button type="submit">OK</button>
        </form>
    </center>
    <br>  <br>
    <?php
        $schools = array(
                'SV01' => array(
                    'name' => 'Lê Trương Thành Luân ',
                    'gender' =>'Nam',
                    'diachi' =>'Bình Định',
                    'nganhhoc' =>'Công nghê thông tin'
                ),
                'SV02' => array(
                    'name' => 'Phan Thanh Lực ',
                    'gender' =>'Nam',
                    'diachi' =>'Quảng Trị',
                    'nganhhoc' =>'Công nghệ thông tin'
                ),
                'SV03' => array(
                    'name' => 'Nguyễn Thành Đạt ',
                    'gender' =>'Nam',
                    'diachi' =>'Bình Định',
                    'nganhhoc' =>'Tài chính ngân hàng'
                ),
                'SV04' => array(
                    'name' => 'Lê Võ Ngọc Hân ',
                    'gender' =>'Nữ',
                    'diachi' =>'Bình Định',
                    'nganhhoc' =>'Ngôn ngữ Anh'
                ),
                'SV05' => array(
                    'name' => 'Nguyễn Thị Ut Viên ',
                    'gender' =>'Nữ',
                    'diachi' =>'Bình Định',
                    'nganhhoc' =>'Giáo dục mầm non'
                ),
                'SV06' => array(
                    'name' => 'Phan Đức Thơ ',
                    'gender' =>'Nam',
                    'diachi' =>'Thừa Thiên Huế',
                    'nganhhoc' =>'Công nghệ thực phẩm'
                ),
                'SV07' => array(
                    'name' => 'Nguyễn Văn Thi',
                    'gender' =>'Nam',
                    'diachi' =>'Kon Tum',
                    'nganhhoc' =>'Kế toán'
                ),
                'SV08' => array(
                    'name' => 'Hồ Thị Kiều',
                    'gender' =>'Nam',
                    'diachi' =>'Quảng Trị',
                    'nganhhoc' =>'Sư phạm Toán'
                )
         )
    ?>
<center>
    <table border="1px" class="tableStyle">
            <tr>
                <th>Mã Sinh viên</th>
                <th>Họ Và Tên</th>
                <th>Giới Tính</th>
                <th>Quê Quán</th>
                <th>Nghành Học</th>
                <th>Tác vụ</th>
            </tr>
            <?php foreach($schools as $key=>$value){ ?>
            <tr>
                <th><?php echo $key;?></th>
                <th><?php echo $value["name"];?></th>
                <th><?php echo $value["gender"];?></th>
                <th><?php echo $value["diachi"];?></th>
                <th><?php echo $value["nganhhoc"];?></th>
                <th><a href="#">Sửa</a><a class="xoa" href="#">Xóa</a></th>
            </tr>
            <?php }?>
        </table>
                <form action="#" method="post"><input type="submit" value=" ADD" name="add"></form>
            
</center>

</body>
</html>