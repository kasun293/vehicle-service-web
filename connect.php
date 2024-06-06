




<?php

    $host = "localhost";
    $dbname = "login_db";
    $username = "root";
    $password = "";

    $conn = mysqli_connnect($host, $username, $password, $dbname);

    if (mysqli_connect_error()) {
        die("connection error: ". mysqli_connect_error());
    }

    echo "connection successful"

   /* $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $eMail = $_POST['eMail'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `register` ('id', 'fName', 'lName', 'eMail', 'password') VALUES ('0', '$fName', '$lName', '$eMail', '$password');"

    $rs = mysqli_query($con, $sql);

    if($rs)
        {
	        echo "Registered successfully";
        }
        */


   /* $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $eMail = $_POST['eMail'];
    $password = $_POST['password'];

    $conn = new mysqli ('localhost', root, '12345', register);
    if ($conn ->  connect_error){
        die ('connection failed :' .$conn -> connect_error)
    }else{
        $stmt = @conn -> prepare ("insert into registrarion(fName, lName, eMail, password)
        values (?, ?, ?, ?)") {
            $stmt -> bind_param("ssss", $fName, $lName, $eMail, $password );
            $stmt -> execute();
            echo "registered successfully"
            $stmt -> close();
            $conn -> close();
        }
    }
*/


?>