<?php
    $con = mysqli_connect("sql312.byethost.com", "b8_22891803", "Tb83G3VWKcT9T6b", "b8_22891803_login_register");
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT name FROM users WHERE Email = ? AND Password = ?");
    mysqli_stmt_bind_param($statement, "ss", $email, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $name);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["name"] = $name;
    }

    echo json_encode($response);
?>
