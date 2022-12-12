<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login";
        $conn = new mysqli($servername, $username, $password, $dbname);

        $name = $_POST["name"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];
        $sql = "INSERT INTO Guestbook (name, email, comment, time) VALUES (?, ?, ?, now())";
        $prepare = $conn->prepare($sql);
        $prepare->bind_param("sss", $name, $email, $comment);
        
        $prepare->execute();

        header("Location: index.php");
        die();
    ?>


