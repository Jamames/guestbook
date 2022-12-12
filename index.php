<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gästbok</h1>
    <form action="script.php" method="post">
        Name:<br />
        <input type="text" name="name" required />
        <br />
        Email:<br />
        <input type="email" name="email" required />
        <br />
        Comment:<br />
        <input type="text" name="comment" required />
        <br />
        <input type="submit" value="Submit" />
    </form>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login";
        $conn = new mysqli($servername, $username, $password, $dbname);
    
    
        $sql = "SELECT * FROM guestbook";
        $result = $conn->query($sql);
    
    
        while ($row = $result->fetch_assoc()) {
          echo
          "<hr> Name: " . $row["name"] . "<br/>
                        Email: " . $row["email"] . "<br/>
                        Comment: " . $row["comment"] . "<br/ >
                        Time: " . $row["time"];
        }
    
        $conn->close();
    ?>
</body>
</html>

