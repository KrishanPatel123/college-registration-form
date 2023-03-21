<?php
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $Email = $_POST['email'];
    $Pass = $_POST['password'];
    $course = $_POST['Course'];
    $qua = $_POST['Qualification'];
    $hobb = $_POST['Hobbies'];
    $query = $_POST['text_are'];
    $Pin = $_POST['City'];
    $State = $_POST['Code_Pin'];
    $Country = $_POST['State'];
    $Count = $_POST['Country'];
    $querry = "insert into registration (name,email,password,course,qualification,hobbies,query,City,Pin,State,Country)VALUES('$name','$Email','$Pass','$course','$qua','$hobb','$query','$Pin','$State',' $Country',' $Count')";
    $result = mysqli_query($conn, $querry);
    if ($result) {
        ?>
        <script>
            alert("Data Insert");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Sorry Some Bug Your Code Please Fix");
        </script>
        <?php

    }
}




?>