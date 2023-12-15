<?php

if (isset($_GET['Submit'])) {
    // Get input
    $id = $_GET['id'];

    // Check database using a prepared statement
    //В этом коде я заменил вставку переменной $id напрямую в SQL-запросе на использование подготовленного запроса с параметризацией. Это предотвращает возможность SQL-инъекций, так как значения параметров будут правильно экранированы и обработаны.
    $getid  = "SELECT first_name, last_name FROM users WHERE user_id = ?";
    
    // Use prepared statement
    $stmt = mysqli_prepare($GLOBALS["___mysqli_ston"], $getid);
    mysqli_stmt_bind_param($stmt, 's', $id); // 's' specifies the data type as string

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Get results
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        // Feedback for end user
        $html .= '<pre>User ID exists in the database.</pre>';
    } else {
        // User wasn't found, so the page wasn't!
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');

        // Feedback for end user
        $html .= '<pre>User ID is MISSING from the database.</pre>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
    ((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
}
?>
