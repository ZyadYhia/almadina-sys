<?php
if (isset($_POST['email'])) {
    $userEmail = $_POST['email'];
    $userPass = $_POST['password'];    
    $userHDD = $_POST['codeHDD'];
    $status;
    if ($userEmail == $email) {//check from users table
        if ($userPass == $pass) {//check from users table
            if ($userHDD == $hdd) {//check from users table
                $file = $_FILES['file'];
                $fileName = $file['name'];
                $fileType = $file['type'];
                $fileTmpName = $file['tmp_name'];
                $fileError = $file['error'];
                $fileSize = $file['size'];
                $ext = pathinfo($fileName,PATHINFO_EXTENSION);
                move_uploaded_file($imgTmpName,"uploads/$staticName");
                $status = "Success";
            } else {$status = "HDD changed";}            
        } else {$status = "wrong password";}
    } else {$status = "wrong email";}
    $response = array("Status"=>$status);
    echo json_encode($response);
}