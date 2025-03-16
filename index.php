<?php
include("connection.php");
// JSON mapper
function build_list($array) {
    $list = '<ul>';
    //Bloco recursivo (alterar qdo preciso)
    foreach($array as $key => $value) {
        if (is_array($value)) {
            $list .= "<strong>$key</strong>: " . build_list($value);
        } else {
            $list .= "<li><strong>$key</strong>: $value</li>";
        }
    }
    $list .= '</ul>';
    return $list;
} 
//Usar echo se precisar
//build_list($data,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sakila</title>
</head>
<body>
    <h1>Hello World</h1>
    <section><?php echo build_list($data,true); ?></section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>