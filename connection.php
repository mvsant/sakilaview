<?php
include("queries.php");
include("credentials.php");

/* Adicione as credenciais em um arquivo credentials por segurança
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "sakila";
*/

//create connection
$con=mysqli_connect($server, $user, $password, $database);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// This SQL statement'
$sql = $actor_table;

// Executes the SQL statement and puts results into $res
$res = $con->query($sql);

// Checks if there's any rows
if($res->num_rows > 0) {

    // defines $data
    $data = array();

    // grabs all data and adds them to the $data array
    while ($row =  $res->fetch_assoc()) {
        array_push($data, $row);
    }

    // echo & encode datas
    //echo json_encode($data);
    //$payload = json_encode($data);
} else {
    echo "no data found";
}

// Close connections
mysqli_close($con);