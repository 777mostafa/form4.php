<html>
    <head>
        <title>title</title>
        <style type="text/css">
            *{margin: 0; padding: 0}
            input, label, select, textarea{margin: 5px; display: block}
        </style>
    </head>
    <body>
        <?php 
            if(isset($_GET['calculate'])){
                // collect data
                $firstNumber = $_GET['firstNumber'];
                $secondNumber = $_GET['secondNumber'];
                // check data valid or not 
                // operations 
                $addition = $firstNumber + $secondNumber;
                // output
                echo $addition;
            }
        ?>
        <form action="" method="GET">
            <label>first number</label>
            <input type="text" name="firstNumber" />
            <label>second number</label>
            <input type="text" name="secondNumber" />
            <input type="submit" name="calculate" value="calculate"/>
        </form>
    </body>
</html>
