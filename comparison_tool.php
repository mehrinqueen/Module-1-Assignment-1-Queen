<html>
    <head>
        <title>Comparison Tool</title>
    </head>
    <body>
        <h1>Number comparison tool</h1>
        <h3>Enter two numbers in the fields</h3>
        <form action="" method="post">
            <input type="number" name="n1" value="num1">
            <input type="number" name="n2" value="num2">
            <input type="submit" name="submit" value="Check">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $n1=$_POST['n1'];
            $n2=$_POST['n2'];
            if($n1==$n2){
                echo "$n1 and $n2 are equal numbers!";
            }
            else{
                $max=($n1>$n2) ? $n1 : $n2;
                echo "The numbers are $n1 and $n2 </br>";
                echo "Largest number is <b> $max!! </b>";
                
            }
            
        }
        ?>
    </body>
</html>