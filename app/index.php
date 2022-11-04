<?php

if (!empty($_GET['name'])) {
    $response = file_get_contents("https://api.agify.io?name={$_GET['name']}");

    $data = json_decode($response, true);

    $age = $data['age'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Example</title>
</head>
<body>

<?php
if (isset($age)) : ?>

    Age: <?= $age ?>

<?php endif; ?>
<form>
    <label for="name">Name</label>
    <input name="name" id="name">

    <button>Guess age</button>
</form>
</body>
</html>
