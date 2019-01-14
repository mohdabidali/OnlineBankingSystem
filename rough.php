<?php
if(isset($_GET['num']))
{
    $num = $_GET['num'];
    for($i=1;$i<=10;$i++)
    {
        echo $num."*".$i."=".$i*$num."<br>";
    }
}



?>