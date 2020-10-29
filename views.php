<html>
<body>

<?php
session_start();
if(isset($_SESSION['views'])) {
$_SESSION['views'] = $_SESSION['views'] + 1;
} else {
$_SESSION['views'] = 1;
}
echo "Hi, You have visited the website ". $_SESSION['views']." times";
?>
</body>
</html>