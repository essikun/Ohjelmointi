<html>
<body>
    <form action="" method="post">
        <input type="number" name="numero">
        <?php echo $_POST ?>
        <input type="submit" value="RAKENNA!">
    </form>
</body>
</html>
<?php

for($i=1;$i<=5;$i++){
    for($x=1;$x<=$i;$x++){
        echo "* ";
    }
    echo "<br />";
}

?>