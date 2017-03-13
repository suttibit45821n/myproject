<?php
if($_POST['username']=="sutti"&& $_POST ['password']=="1234") {
  echo "ยินดีต้อนรับคุณ". $_POST['username'];
  echo"<a href='http://www.huntra.bait.rmutsb.ac.th'>BIT Site </a>";
  }
  else {
    echo "คุณป้อนข้อมูลไม่ถูกต้อง";
    echo "<a href='loginform.php'>กลับหน้า Loginform </a>"; //ล็อกอินกลับ
    }
?>
