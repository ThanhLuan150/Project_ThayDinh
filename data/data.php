<?php
 <?php
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
 