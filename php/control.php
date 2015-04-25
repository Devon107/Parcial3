<?php

    include("conexion.php");

    if(isset($_POST["button"]))
    {
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        $count=false;

        if(isset($usuario) && !empty($usuario) && isset($clave) && !empty($clave))
        {
            $sql="SELECT usuario,clave FROM usuario where usuario='".$usuario."' AND estado = 1";
            $encrip=md5($clave);
            $res=mysqli_query($link,$sql);

                while($resultado=@mysqli_fetch_array($res))
                {

                  if($resultado['usuario']==$usuario && $resultado['clave']==$encrip)
                  {              

                       $count=true;
                  }   
                }
            if($count==true)
              {
                    $count=false;
                    session_start();
                     $_SESSION['usuario']=$usuario; 
                     $_SESSION['clave']=$clave;
                     ?>
                     <script>
                     window.location.href="../html/home.php";
                     </script>
               <?php

              }
            else{
            ?>
            <script>
                   alert('Usuario o contrase\u00F1a err\u00F3neos ');
                   window.location.href="../html/index.php";
                   </script>
                   <?php 
                }

        }

  }

?>