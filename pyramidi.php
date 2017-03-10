<html>
<body>
    <form action="" method="post">
        <input type="number" name="numero">
        <input type="submit" value="RAKENNA!">
    </form>
</body>
</html>
<?php if(!isset($_POST["numero"])){ 
    for($_POST["numero"]<=10;$_POST["numero"]++;) {
            for($x=1;$x<=$_POST["numero"];$x++){
                echo "* ";
            } echo "<br />";
        }}
        ?>