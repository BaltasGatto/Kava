<?php

include_once 'dbh.inc.php';
//escaple apsaugo duomenu baze nuo pasaliniu vartotoju ir pavaro vdine ( post yra globalus, naudoti tik priskiriant - kitu atveju kodas bus atviras.)
// mysqli_real_escape_string apsaugos eilute!!!!
$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn,  $_POST['last']);    
$email = mysqli_real_escape_string($conn,  $_POST['email']);
$uid = mysqli_real_escape_string($conn,  $_POST['uid']);
$pwd = mysqli_real_escape_string($conn,  $_POST['pwd']);
$data = mysqli_real_escape_string($conn,  $_POST['data']);


$sql = "INSERT INTO `users`(`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `user_data`)
VALUE ('$first','$last','$email','$uid','$pwd','$data');"; 
$resultCheck = mysqli_num_rows($result);

header ("Location: ../index.php?signup=success");

?>