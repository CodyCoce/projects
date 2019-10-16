<?php
    include_once 'tablelogin.php';


$idCard = $_GET['idCard'];

// sql to delete a record
$sql = "DELETE FROM cards WHERE idCard = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: index.php'); //If index.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>