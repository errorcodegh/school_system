<?php
session_start();
session_destroy();
echo "<script>
alert('you are logged out');
document.location='mainpage.php';
</script>";
?>