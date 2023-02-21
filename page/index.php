
<! merch code lại thành bài hoàn chỉnh-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="">MaSV</label>
    <input type="number" name="id" value="">  <br>
    <label for="">Họ và Tên</label>
    <input type="text" name="name" value="">  <br>
    <label for="">Giới Tính</label>
    <input type="text" name="sex" value="">  <br>
    <label for="">Quê Quán</label>
    <input type="text" name="qquan" value="">  <br>
    <label for="">Năm sinh</label>
    <input type="number" name="year" value="">  <br>
    <label for="">Nghành học</label>
    <input type="text" name="nhoc" value="">  <br>
    <button name="submit">Add</button>
</form>


<?php 
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['students']))$_SESSION['students']=[];
    if(isset($_POST['submit'])){
        $MaSV=$_POST['id'];
        $Name=$_POST['name'];
        $Gioi_tinh=$_POST['sex'];
        $Que_quan=$_POST['qquan'];
        $Nam_sinh=$_POST['year'];
        $Nghanh_hoc=$_POST['nhoc'];
        if($MaSV!="" && $Name!=""&&$Gioi_tinh!=""&&$Que_quan!=""&&$Nam_sinh!=""&&$Nghanh_hoc!=""){
            $arr_student=[$MaSV,$Name,$Gioi_tinh,$Que_quan,$Nam_sinh,$Nghanh_hoc];
            $_SESSION['students'][]=$arr_student;
            header("location:Show_student.php");
        }
        else{
            echo "<script> alert('Vui lòng điền đầy đủ thông tin ') </script>";
        }
        
    }





session_start();
function Show_table()
{
    if (isset($_SESSION['students']) && (is_array($_SESSION['students']))) {
        for ($i = 0; $i < sizeof($_SESSION['students']); $i++) {
    ?>
            <tr>
                <td><?php echo ($i + 1) ?></td>
                <td><?php echo $_SESSION['students'][$i][0] ?></td>
                <td><?php echo $_SESSION['students'][$i][1] ?></td>
                <td><?php echo $_SESSION['students'][$i][2] ?></td>
                <td><?php echo $_SESSION['students'][$i][3] ?></td>
                <td><?php echo $_SESSION['students'][$i][4] ?></td>
                <td><?php echo $_SESSION['students'][$i][5] ?></td>
                <td> <a href="Show_student.php?delete=<?php echo ($i) ?>">Xóa</a> <a href="sua.php?update=<?php echo ($i) ?>">Sửa</td>
            </tr>
<?php
        }
    }
}


// $delete=$_GET['delete'];
// if(isset($_GET['delete'])&&$_GET['delete']==$delete ){
//         unset($_SESSION['students']);
//         // header("location:Show_student.php");
//     }
// $delete=$_GET['delete'];


if (isset($_GET['delete']) && ($_GET['delete'] >= 0)) {
    array_splice($_SESSION['students'], $_GET['delete'], 1);
}
?>
<table style=" border:1px solid black; border-collapse:collapse;">
    <tr>
        <th>STT</th>
        <th>MaSV</th>
        <th>Họ và Tên</th>
        <th>Giới Tính</th>
        <th>Quê Quán</th>
        <th>Năm sinh</th>
        <th>Chuyên nghành</th>
        <th>Hàng động</th>
    </tr>
    <?php Show_table(); ?>
    <p><a href="push.php">Add</a></p>


</table>




<?php
error_reporting(0);
session_start();
// if(isset($_SESSION['students'])&& is_array($_SESSION['students'])){
    if(isset($_GET['update']) && ($_GET['update'])>=0){
        for ($i=0; $i <sizeof($_SESSION['students']); $i++) { 
            $stt=$_SESSION['students'][$i][0];
            $name=$_SESSION['students'][$i][1];
            $gt=$_SESSION['students'][$i][2];
            $qq=$_SESSION['students'][$i][3];
            $ns=$_SESSION['students'][$i][4];
            $nh=$_SESSION['students'][$i][5];
        }
    
    }


    if(isset($_POST['submit'])){
        $MaSV=$_POST['id'];
        $Name=$_POST['name'];
        $Gioi_tinh=$_POST['sex'];
        $Que_quan=$_POST['qquan'];
        $Nam_sinh=$_POST['year'];
        $Nghanh_hoc=$_POST['nhoc'];
        $arr_student=[$MaSV,$Name,$Gioi_tinh,$Que_quan,$Nam_sinh,$Nghanh_hoc];
        $_SESSION['students'][$_GET['update']]=$arr_student;
        header("location:Show_student.php");
      
    }


?>


<form action="" method="post">
    <label for="">MaSV</label>
    <input type="number" name="id" value="<?php  echo $stt; ?>">  <br>
    <label for="">Họ và Tên</label>
    <input type="text" name="name" value="<?php  echo $name; ?>">  <br>
    <label for="">Giới Tính</label>
    <input type="text" name="sex" value="<?php  echo $gt; ?>">  <br>
    <label for="">Quê Quán</label>
    <input type="text" name="qquan" value="<?php  echo $qq; ?>">  <br>
    <label for="">Năm sinh</label>
    <input type="number" name="year" value="<?php  echo $ns; ?>">  <br>
    <label for="">Nghành học</label>
    <input type="text" name="nhoc" value="<?php  echo $nh; ?>">  <br>
    <button name="submit">Cập Nhật</button>
</form>



</body>
</html>