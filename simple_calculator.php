<html>
    <head>
        <title>Simple Calculator</title>
    </head>
    <body>
        <h1>Simple Calculator</h1>
        <h3>Enter 2 numbers to calculate</h3>
        <form action="" method="post">
            <input type="number" name="n1" placeholder="Number 1">
            <input type="number" name="n2" placeholder="Number 2">
            <select name="operators">
                <option name="ops" value="+">Add</option>
                <option value="-">Subtract</option>
                <option value="x">Multiply</option>
                <option value="/">Divide</option> 
            </select>
            <input type="submit" name="submit" value="Calculate">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $n1=$_POST['n1'];
            $n2=$_POST['n2'];
            $operators=$_POST['operators'];
            echo "The given numbers are $n1 and $n2</br>";
            if($operators=="+"){
                $result = ($n1+$n2);
                echo "Sum is <b>$result!!</b>";
            }
            elseif($operators=="-"){
                $result = ($n1-$n2);
                echo "Result is <b>$result!!</b>";
            }
            elseif($operators=="x"){
                $result = ($n1*$n2);
                echo "Result is <b>$result!!</b>";
            }
            elseif($operators=="/"){
                $result = ($n1/$n2);
                echo "Result is <b>$result!!</b>";
            }
        }
        ?>
    </body>
</html>