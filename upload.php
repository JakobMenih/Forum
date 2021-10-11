
<?php
include_once './session.php';
include_once './database.php';

$file_name = $_FILES['file']['name'];
        $file_temp = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $location="upload/".$file_name;
        if($file_size < 5242880){
            if(move_uploaded_file($file_temp, $location)){
                try{

                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO slike(ids, url, objava_ids)  VALUES (NULL,'$location','$objava_ids')";
                    $pdo->exec($sql);
                    header("Location: index.php");
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
            }
        }

?>