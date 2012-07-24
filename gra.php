
<html>
<head></head>

<body>
<?php   
if(!isset($_GET['podaj']) )
{
$first_1 = rand(1,9) ;
$first_2 = rand(0,9) ;
$two_1 = rand(1,9);
$two_2 = rand(0,9);
echo "<p>Ile jest:<br> ".$first_1.$first_2."<br>*<br>".$two_1.$two_2."</p>" ;
echo "<br> = <br>";
$wynik = ($first_1.$first_2) * ($two_1.$two_2);

}
else
{

echo "<p>Ile jest:<br> ".$_GET['first_1'].$_GET['first_2']."<br>*<br>".$_GET['two_1'].$_GET['two_2']."</p>" ;
echo "<br> = <br>";
$wynik = ($_GET['first_1'].$_GET['first_2']) * ($_GET['two_1'].$_GET['two_2']);




}
 ?>
<form id="formularz" method = "GET" action="gra.php" >
<label>Podaj Wynik: <input type="text" name="podaj" id="podaj"> </input></label>
<input name = 'first_1' value="<?php echo $first_1; ?>" type='hidden'/>
<input name = 'first_2' value="<?php echo $first_2; ?>" type='hidden'/>
<input name = 'two_1' value="<?php echo $two_1; ?>" type='hidden'/>
<input name = 'two_2' value="<?php echo $two_2; ?>" type='hidden'/>
<button type= 'submit' > Wyslij</button>
</form>
<button onclick='Przeladuj();'>Nowe!!</button>

<?php
if(isset($_GET['podaj']) and $_GET['podaj'] != '' )
{
$mnozenie = (intval($_GET['first_1'].$_GET['first_2']) * intval($_GET['two_1'].$_GET['two_2'])) ;
if( $mnozenie == $_GET['podaj'] )
{
echo $mnozenie."<br>";
echo "<h1> GOOD FOR YOU !!!!!</h1>";

}
else
{
ECHO "Podales: ".$_GET['podaj']."<br>" ;
echo "<h1> zle !!!!!</h1>";
echo "<br>".$wynik;
}




}


?>

<script type="text/javascript"> 

function Przeladuj()
{
//window.location.reload();
//window.location.replace('<?PHP $_SERVER['REQUEST_URL']. DIRECTORY_SEPARATOR . "gra.php" ?>');
window.location.replace('http://gra-come-back.orchestra.io');

}


</script>

</body>


</html>



