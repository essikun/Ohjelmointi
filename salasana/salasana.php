<?php
$nimi = $_POST['nimi'];
$salasana = $_POST['salasana'];

if($nimi == "Bond"
&& $salasana == "007")
{
        include("salasana.html");
}
else
{
    if(isset($_POST))
    {?>

            <form method="POST" action="salasana.php">
            Nimi <input type="text" name="nimi"></input><br/>
            Salasana <input type="password" name="salasana"></input><br/>
            <input type="submit" name="submit" value="Kirjaudu"></input>
            </form>
    <?}
}
?>