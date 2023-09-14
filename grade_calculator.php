<html>
    <head>
        <title>Grade Calculator</title>
    </head>
    <body>
        <h1>Grade Calculator</h1>
        <h3>Type your grades to know your result:</h3>
        <form action="" method="post">
            <input type="number" name="n1" placeholder="Bangla Score">
            <input type="number" name="n2" placeholder="Mathematics Score">
            <input type="number" name="n3" placeholder="ICT Score">
            <input type="submit" name="submit" value="CHECK">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $n1=$_POST['n1'];
            $n2=$_POST['n2'];
            $n3=$_POST['n3'];
            $averageGrade=($n1+$n2+$n3)/3;
            echo "Your average score is $averageGrade </br>";
            if($averageGrade>80){
                echo "Your result is: A";
            }
            elseif($averageGrade>70){
                echo "Your result is: B";
            }
            elseif($averageGrade>60){
                echo "Your result is: C";
            }
            elseif($averageGrade>50){
                echo "Your result is: D";
            }
            else {
                echo "Your result is: F";
            }

        }
        ?>
    </body>
</html>