<?php

$db = new mysqli('localhost', 'u541379268_treasure', 'Teckzy@123', 'u541379268_treasure');
// $db = new mysqli('localhost', 'root', '', 'treasure');

if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
} else {
    //  echo "connected to database";
}
