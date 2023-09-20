<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Make sure to escape input to prevent SQL injection
    // $name = mysqli_real_escape_string($con, $name);
    // $email = mysqli_real_escape_string($con, $email);

    $sql = "INSERT INTO login VALUES ('sambha', '123@hshhs', '123')";
    if ($con->query( $sql)===TRUE) {
        echo "<script>alert('New record added successfully');</script>";
        echo "<h1>Your Form has been submitted 👩‍💻</h1>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    echo "hLo mai aagya hu";
    mysqli_close($con);
}
?>
