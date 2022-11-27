<?php
$cn = $_POST['cardnumber'];
$cnlengh = strlen($cn);

$sumTable = "";

$valid = false;
$output = "Invalid";
$outputtype = "";

if (8 < $cnlengh && $cnlengh > 16)
{

    if(is_valid_luhn($cn)==10)
    {
        $valid = true;
    }
}


if ($valid == true)
{
    $output = "Valid";
}

?>

<h1>Your credit card has been checked!</h1>
<?php
If ($valid == true)
{
    $output = "VALID";
    $outputtype = "valid";
}
else
{
    $output = "INVALID";
    $outputtype = "danger";
}

?>

    <ul class="list-group">
        <li class="list-group-item list-group-item-<?=$outputtype?>">Your Credit Card number "<?=$cn?>" is <strong><?=$output?></strong>!</li>
    </ul>

<form action="index.php" method="post">
    <input id="back" type="submit" value="Get back">
</form>

<?php

function is_valid_luhn($cn) {
  settype($cn, 'string');
  $sumTable = array(
    array(0,1,2,3,4,5,6,7,8,9), 
    array(0,2,4,6,8,1,3,5,7,9));
  $sum = 0;
  $flip = 0;
  for ($i = strlen($cn) - 1; $i >= 0; $i--) {
    $sum += $sumTable[$flip++ & 0x1][$cn[$i]];
  }
  return $sum % 10 === 0;
}
?>