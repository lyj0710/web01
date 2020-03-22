<?php
// session_start();
// 
if (!session_id()) {
	session_start();
}
if (empty($_SESSION['admin_name']) && $_SESSION['echecked']<>"ok"){
	echo "<script>window.location.href='login.php'</script>";
    exit;
}
?>
