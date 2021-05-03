<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    //$folderName = $_POST['foldername']; //sol_1
    $userEmail = "yasso@g.com";
    $userPass = "0303";
    $status;
    if (isset($_FILES['file'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if ($email == $userEmail) {
            if ($pass == $userPass) {
                    $img = $_FILES['file'];
                    $imgName = $img['name'];
                    $imgType = $img['type'];
                    $imgTmpName = $img['tmp_name'];
                    $imgError = $img['error'];
                    $imgSize = $img['size'];
                    $ext = pathinfo($imgName,PATHINFO_EXTENSION);
                    // $randomName = uniqid();
                    // $imgNewName = "$randomName.$ext";
                    $staticName = "60889c9a5c4dc.$ext";
                    move_uploaded_file($imgTmpName,"uploads/$staticName");
                    //move_uploaded_file($imgTmpName,"uploads/$staticName");  //for sol_2
                    $status = "file uploaded";
                } else {$status = "wrong password";}
            }else {$status = "wrong email";}
        }
        

    $response = array("username"=>$username,"Status"=>$status);
   // $response = array("username"=>$username, "File1"=>$img,"folder_name"=>$folderName);
    echo json_encode($response);
}
