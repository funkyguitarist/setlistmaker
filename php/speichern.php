<?php
    
     $inhalt = $_POST['inhalt'];

     $file = fopen("m_daten.txt", "w");
     fwrite($file,$inhalt);
     fclose($file);   
?>