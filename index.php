<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCC | Credit card checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<?php

if( isset($_POST['cardnumber']) )
{
    include("./cardverify.php");
}
else
    include("./form.php");
?>

<footer class="pt-5 my-5 text-muted border-top">
    © <?=date("Y")?> · Created by <a href="https://github.com/Davido8316" target="_blank" rel="noopener noreferrer">Davido8316</a> 
  </footer>
</body>
</html>
