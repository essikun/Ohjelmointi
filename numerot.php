<?php

if (!isset($_POST["arvaus"])) {
    
     $_POST["numero"] = rand(1,10);
    
} else if ($_POST["arvaus"] > $_POST["numero"]) { 
    
    echo "Pienempi!";

} else if ($_POST["arvaus"] < $_POST["numero"]) {
    
    echo "Isompi!";

} else {
    
    echo "TADAA!"; 
}
?>
<html>
<body>
    <form action="" method="POST">
    <p>Arvaus:
        <input type="number" name="arvaus"></p>
        <input type="hidden" name="numero" value="<?php echo $_POST["numero"]; ?>" ></p>
    <p><input type="submit" value="Arvaa!"/></p>
    </form>
</body>
</html>