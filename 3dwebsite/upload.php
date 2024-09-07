<?php
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];

        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('stl');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 500000){
                    $fileNameNew = uniqid(str_replace('.', '', $fileName), true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: index.php?uploadsuccess");
                } else{
                    echo "This file is too big.";
                }
            }else{
                echo "There was an error uploading a file.";
            }
        }else{
            echo "You cannot upload file of this type.";
        }
    }
?>