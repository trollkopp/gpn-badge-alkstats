<?php

$Timestamp= date("h:i:sa");
$date = date("d:m:y");


        if( $_REQUEST["voltage"] || $_REQUEST["PPM"] || $_REQUEST["BACsum"])
                {
                        echo " The voltage is: " . $_REQUEST['voltage'] . "Volt<br />";
                        echo " The PPM is: " . $_REQUEST['PPM'] . "<br />";
                        echo " The BACsum is: " . $_REQUEST['BAC'] . "<br />";
						echo " The UID is: " . $_REQUEST['uid'] . "<br />";
                }


//}";

$Data = $date . ";" . $Timestamp . ";" . $_REQUEST['voltage'] . ";" . $_REQUEST['PPM'] . ";" . $_REQUEST['BAC'] . ";" . $_REQUEST['uid'] . "\n";

file_put_contents('test.db' ,$Data , FILE_APPEND);

?>
