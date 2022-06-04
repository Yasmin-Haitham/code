<?php
include_once 'config.php';
$sql = "DELETE FROM books WHERE ISBN='" . $_GET["ISBN"] . "'";
if (mysqli_query($db, $sql)) {
    header('location:  ../library.php');
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
mysqli_close($db);
?>