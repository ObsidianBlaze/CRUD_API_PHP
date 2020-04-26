<?php
    require_once "delete_user.php";
    $db = new delete_user();


    // json response array
    $response = array("error" => FALSE);

    if (isset($_POST['email'])) {
        $email = $_POST['email'];

    // check if user is already existed with the email to delete
        if ($db->deleteUser($email)) {
        $response["error"] = FALSE;
        $response["success"] = "User Deleted!";
        echo json_encode($response);
    }
    else{
        $response["error"] = TRUE;
        $response["error_msg"] = "User Not Deleted!";
        echo json_encode($response);

    }

    }
?>