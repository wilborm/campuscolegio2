<?php   
session_start();
$inactivo=120;
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        
    
    } else{
      header("location: index.php");
      
        exit;
    }

    if(isset($_SESSION['tiempo'])) {
        $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo){
            session_destroy();
            header("location: logout.php");
            exit;
        }
    
    }   
    $_SESSION['tiempo'] = time();
    ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="5;URL=HomeAlum.php" />
  <title>LEGO Loader</title>
   
   
   
      <link rel="stylesheet" href="css/estilos_NexoAlum.css">
 
   
</head>
 
<body>
   
<div id="animationWindow">
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.8.0/bodymovin.min.js'></script>
 
    <script src="js/enEspera.js"></script>
 
</body>
</html>