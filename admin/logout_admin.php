<?php
  session_start();
  session_unset($_SESSION['authority']);
  header('location:index.php');
?>