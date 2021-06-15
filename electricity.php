<html>
<head>
<title>Electricity bill</title>
</head>
<body style="background-color:grey;color:white; font-family: 'Pattaya', sans-serif;">
     <h1>
        Electricity Bill 
    </h1>
     
    <form method="post">
        <table border="2">
            <tr>
                <td> <input type="text" name="num1" placeholder="Enter previous reading"/>
                </td>
            </tr>
            <tr>
            <td> <input type="text" name="num2"  placeholder="Enter present reading"/>
                </td>
            </tr>
            <tr>
                <td> <input style="background-color:brown;" type="submit" name="submit"
                    value="Submit"/>
                </td>
            </tr>
        </table>
    </form>

 
<?php   
    if($_POST)  
    {   
        $prev = $_POST['num1']; 
        $cur = $_POST['num2'];
        $units = $cur - $prev;
        $total=0;  
        if ($units <= 100)
        {
            $total= $units * 3;
        }
        elseif ($units <= 200)
        {
            $total = (100 * 3) + ($units - 100) * 4;
        }
        elseif ($units <= 300)
        {
            $total = (100 * 3) + (100 * 4) + ($units - 200) * 5;
        }
        elseif ($units > 300)
        {
            $total = (100 * 3) + (100 * 4) + (100 * 5) + ($units - 300) * 6;
        }
        echo " previous Reading : $prev"; 
        echo "</br>";        
        echo " Current Reading : $cur"; 
        echo "</br>";
        echo " Units : $units"; 
        echo "</br>";
        echo " payable amount: $total"; 
        echo "</br>";
    }     
?> 

</body>
</html>

