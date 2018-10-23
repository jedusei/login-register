<?php
    $con = mysqli_connect("sql7.freesqldatabase.com", "sql7262438", "cUtBIEPwFm", "sql7262438");
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    
    $statement = mysqli_prepare($con, "INSERT INTO users (name, email, password, phone) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssss", $name, $username, $age, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
