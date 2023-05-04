
<!DOCTYPE html>
<html lang="en">
    <!--/*In this assignment, you will design and develop a PHP page that accepts 6 input numbers (double) and one button. Once we click on the button, some mathematical calculation (steps 1 to 5) should happen to generate the final result as follow in the picture below. The result should be steps 6 to 8 which represent the following:
        •	# of PV panels
        •	# of batteries.
        •	# of inverters.
You can use a label to show the results of these variables. */-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $A = $To = $Wn = $Q = $h = $PVr = 0.00;
        $Pp = 1000 * 9.81 * $Q * $h;
        $E = $To * $Pp;
        $NofP = ($Wn*$A)/($Q * 10 * 3600);
        $Et = $N * $E;
        $PV = $Et / 4.5;
        
        $NumberOfPanels  = ((5 * $PV) * 1000) / $PVr;
        $NumberOfBatteries = (($Et/10)*3)/10;
        $NumberOfInverters = (5 * $PV)/40; 

        

    ?>
    <form action="calculator.php" method="post">
        Area of form in m2: <input name="A" type="double"/> <br>
        Pump operation time in hours/day: <input name="To" type="double"/><br>
        Water needed in m3/m2/day: <input name="Wn" type="double"/><br>
        Pump water flow in m3/s: <input name="Q" type="double"/><br>
        Depth in m: <input name="h" type="double"/><br>
        Rated power of PV panel: <input name="PVr" type="double"/><br>
        <input type="submit" name="submit" value="submit"/><br>
    </form>
    <?php
        echo "$NumberOfPanels";
        echo "$NumberOfBatteries";
        echo "$NumberOfInverters"
    ?>
    
</body>
</html>