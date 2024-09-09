<?php
include 'dbconfig.php';
$id=isset($_GET['id'])? $_GET['id']: header('location:index.php');;
$sql = "DELETE FROM Products WHERE pID=$id";
$res = mysqli_query($conn,$sql);
if(!$res){
    die(mysqli_error($conn));
}
else{
    $sql1 = "SET  @num := 0";
						$result1 = (mysqli_query($conn, $sql1));
						$sql1="UPDATE Products SET pID = @num := (@num+1)";
						$result1 = (mysqli_query($conn, $sql1));
						$sql1="ALTER TABLE `Products` AUTO_INCREMENT = 1;";
						$result1 = (mysqli_query($conn, $sql1));
    echo "<script>alert('Deleted')</script>";
    echo "<script> location.replace('index.php'); </script>";
}
?>
