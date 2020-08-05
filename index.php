<?php

if (isset($_POST['tempfar'])){

function weatherInfo($temp)
{
  $c = convertToCelsius($temp);
    if ($c > 0) 
    {
      return ($c . " is freezing temperature");
    } else {
      return ($c . " is above freezing temperature");
    }
}
    
function convertToCelsius($temperature)
{
  $celsius = (($temperature) - 32) * (5/9);
  return $celsius;
} 

echo weatherInfo($_POST['tempfar']);

unset($_POST['tempfar']);
header( "refresh:10" ); 

} else {

?>

<form action="" method="POST">
 <p>Температура:</p>
 <p><input type="text" name="tempfar" /> Градус Фаренгейта</p>
 <p><input type="submit" /></p>
</form>

<?php

}



?>
