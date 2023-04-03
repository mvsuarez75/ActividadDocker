<?php>

    echo"<html>";
    echo"<p3><b>Script Cabeceras - tarea Manuel Villa</b></p3>";
    echo"<br>";
    echo"<br>";
    echo"</html>";

    foreach (getallheaders() as $name => $value){
        echo "$name: $value\n";
        echo"<html>";
        echo"<br>";
        echo"<html>";
    }

</php>
