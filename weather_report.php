<html>
    <head>
        <title>Weather Report</title>
    </head>
    <body>
        <h1>Weather Report</h1>
        <h3>Enter your weather here:</h3>
        <form method="post" action="">
            <input type="number" name="number" placeholder="Degree Celcius">
            <input type="submit" name="submit" value="Check weather">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $number=$_POST['number'];
            echo "Temperature in Degree Celcius: $number </br>";
            if($number<=14){
                echo "It's freezing!";
            }
            elseif($number>=15 && $number<=22){
                echo "It's cool.";
            }
            else{
                echo "It's warm";
            }
        }
        ?>
    </body>
</html>