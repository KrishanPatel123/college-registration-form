<?php
$user = "root";
$server = "localhost";
$password = "";
$database = "Collage_Registration";
$conn = mysqli_connect($server, $user, $password, $database);
if ($conn) {
    ?>
    <script>
           // alert("Conn Done")
    </script>
    <?php
} else {
    echo "Some Error" . mysqli_connect_error();
}
?>