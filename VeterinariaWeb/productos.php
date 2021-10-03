<?php  
   $consultar="select * from  productos";
   $query=mysqli_query($conectar,$consultar);
   $array=mysqli_fetch_array($query);


?>