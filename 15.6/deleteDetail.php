<?php
     require('db_connect.php');
     $recordToDelete = $_REQUEST['id'];
    
     $sql = "DELETE FROM notes WHERE noteNumber=" . $recordToDelete;
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    $connection->close();
    header("Location: edit.php");
?>