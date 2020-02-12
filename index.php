<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="first" placeholder="Firsname">
        <br>
        <input type="text" name="last" placeholder="Lastname">
        <br>
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="Password" name="pwd" placeholder="Password">
        <br>
        <input type="text" name="date" placeholder="Date">
        <br>
        <button type="submit" name="submit">Sign up</button>
    </form>
<?php
/*
$sql = "INSERT INTO `users`(`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `user_data`);"; 
/*
Kabutes viduje yra jos sql kabutes.
Kabutes isoreje jos yra php, todel reikalongos yra dvejos, 
viduje kabuciu ir isoreje.
*/
/*
mysqli_query($conn, $sql);

/*
Kad kazkas kazka darytu reikalingas yra sis kodas:
Mums reikia nusiusti ji i duomenu baze ir ten ji paleisti, 
kad tai padarytum reikia sukurti kintamaji kuris vadinasi $result tada pgp kodas (
    o viduje linkas kuris jungiasi prie duomenu bazes
)
*/
/*
$resultCheck = mysqli_num_rows($result);

/*
Rekomenduotina $resultCheck kad patikrintu ar nera eroru, bet nera butina.
*/
/*
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result) ) {
        echo $row['user_uid'] . "<br>";
        # code...
    }
}
/*
tai mes norsime pasirinkti viskas veiks per if funkcija.
while loopas o forw kintamasis virsta i array funkcija o = mysqli_fetch_assoc
ir pasiema is duomenu bazes.
*/

?>

</body>
</html>
  