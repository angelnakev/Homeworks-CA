<?php 
// your code here
if (isset($_GET['id'])) {

    $db = new DB();
    $result = $db->delete('DELETE FROM users WHERE id='.$_GET['id']);
    $db->close();
    
    header("Location: index.php");
}
