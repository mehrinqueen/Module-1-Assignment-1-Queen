<html>
    <head>
        <title>Even & Odd number checker</title>
    </head>
    <body>
        <h1>Even & Odd number checker</h1>
        <h3>Input your number..</h3>
        <form action="" method="post">
            <input type="number" name="Number" value="Number">
            <input type="submit" name="submit" value="Calculate">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $number=$_POST['Number'];
            if($number%2==0){
                echo "$number is an even number";
            }
            else{
                echo "$number is an odd number";
            }
        }
        ?>
    </body>
</html>