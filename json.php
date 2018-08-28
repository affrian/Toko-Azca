<?php 
session_start();
echo json_encode($_SESSION['sts_id']);
 ?>