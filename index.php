<?php

$connection = mysqli_connect("vesta.uclan.ac.uk", "ufarooq6", "pDgQAKWe", "ufarooq6");

if (mysqli_connect_errno())
{
    echo "ERROR: could not connect to database: " . mysqli_connect_error();
}
else
{
    echo "Connected to database.";
}

$result = mysqli_query($connection, "SELECT * FROM modules");


?>
