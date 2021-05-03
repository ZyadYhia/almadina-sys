<?php
$response = array();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $img = $_FILES['img'];
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
    $response['username'] = $username;
    $response['file'] = $img;
}
echo json_encode($response);




// if (isset($_POST['submit'])) {
//     $username = $_POST['username'];
//     $folderName = $_POST['foldername']; //sol_1
//     if (isset($_FILES['file'])) {
//         $img = $_FILES['file'];
//         $imgName = $img['name'];
//         $imgType = $img['type'];
//         $imgTmpName = $img['tmp_name'];
//         $imgError = $img['error'];
//         $imgSize = $img['size'];
//         $ext = pathinfo($imgName,PATHINFO_EXTENSION);
//         // $randomName = uniqid();
//         // $imgNewName = "$randomName.$ext";
//         $staticName = "60889c9a5c4dc.$ext";
//         move_uploaded_file($imgTmpName,"$folderName/$staticName");
//         // move_uploaded_file($imgTmpName,"uploads/$staticName");  //for sol_2
//     }else  {$img='no file';}    
//     $response = array("username"=>$username, "File1"=>$img,"folder_name"=>$folderName);
//     echo json_encode($response);
// }
?>


