<?php
require_once '../../includes/db.php'; 



$tourId = $_POST['tourId'];
$file = $_POST['file'];
$fileName = $_POST['fileName'];
$tourName = $_POST['tourName'];




    if(strpos($file, 'data:image/png;base64,')!== false)
     $img = str_replace('data:image/png;base64,', '', $file );
    if(strpos($file, 'data:image/jpeg;base64,')!== false)
     $img = str_replace('data:image/jpeg;base64,', '', $file );
    if(strpos($file, 'data:image/svg+xml;base64,')!== false)
     $img = str_replace('data:image/svg+xml;base64,', '', $file );
    if(strpos($file, 'data:application/octet-stream;base64,')!== false)
     $img = str_replace('data:application/octet-stream;base64,', '', $file );
    if(strpos($file, 'data:video/mp4;base64,')!== false)
     $img = str_replace('data:video/mp4;base64,', '', $file );
    
    $img = str_replace(' ', '+', $img);


    $serverDir = realpath(dirname(__FILE__)."/../../")."/uploads";//.$directory;

    if (!is_dir($serverDir)) {
      //Create our directory if it does not exist
        mkdir($serverDir);
        $serverDir = $serverDir."/tours";//$directory;
        if (!is_dir($serverDir)) {
          mkdir($serverDir);
          $serverDir = $serverDir."/".$tourName;

          if (!is_dir($serverDir))
            mkdir($serverDir);

        }
        else{

          $serverDir = $serverDir."/".$tourName;

          if (!is_dir($serverDir))
            mkdir($serverDir);

        }
      // echo "Directory created";
      }
      else{

        $serverDir = $serverDir."/tours";//$directory;
        if (!is_dir($serverDir)) {
          mkdir($serverDir);
          $serverDir = $serverDir."/".$tourName;

          if (!is_dir($serverDir))
            mkdir($serverDir);

        }
        else{

          $serverDir = $serverDir."/".$tourName;

          if (!is_dir($serverDir))
            mkdir($serverDir);

        }
      }


      $fileServerPath = $serverDir ."/". $fileName;
      file_put_contents( $fileServerPath, base64_decode($img));

      //dataBase update

      function url(){
        return sprintf(
          "%s://%s%s",
          isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
          $_SERVER['SERVER_NAME'],
         "/backend/uploads/tours/"
        );
      }
      
      

      
      $fileServerPath = str_replace('/', '!@!', $fileServerPath );

      $target_file =  url().$tourName."/".$fileName;

      $target_file = str_replace(' ', '%20', $target_file );

      $query="INSERT INTO tour_images ( id_tour, url, server_path) VALUES ($tourId, '$target_file', '$fileServerPath')";
      
       $res = mysqli_query($mysqli, $query);
      
    

    echo $fileServerPath

  
?>