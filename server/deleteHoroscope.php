  
<?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == 'DELETE') {
    if (isset($_SESSION["sign"])) {
        unset($_SESSION["sign"]);
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
  }
?>