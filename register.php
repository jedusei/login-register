<?php
    $con = mysqli_connect("sql312.byethost.com", "b8_22891803", "Tb83G3VWKcT9T6b", "b8_22891803_login_register");
    
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
