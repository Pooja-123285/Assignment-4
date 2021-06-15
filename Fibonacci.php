<html>
<head>
    <title>fibonacci</title>
</head>
<body style="background-color: grey;color: white; @import url('https://fonts.googleapis.com/css2?family=Pattaya&display=swap'); font-family: 'Pattaya', sans-serif;">

     <h1><b>
        Fibonacci series and Prime numbers</b>
    </h1>
     
    <form method="post">
        <table border="2">
            <tr>
                <td> <input type="text" name="num1" placeholder="Enter the number"/>
                </td>
            </tr>
            <tr>
                <td> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input  type="submit"  name="submit"
                    value="Submit" style="background-color:brown; color:black;"/>
                </td>
            </tr>
        </table>
    </form>

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num1'];
        $i = 3;
        $n1 = 0;  
        $n2 = 1;  
        $last = $n2;
        echo "<h3>Fibonacci series and prime numbers for first $num numbers: </h3>";  
        echo "\n";  
        echo $n1.' '.$n2.' ';  
        while ($i <= $num )  
        {  
            $n3 = $n2 + $n1;  
            echo $n3.' ';  
            $n1 = $n2;  
            $n2 = $n3;  
            $i = $i + 1;  
            $last = $n2;

        } 

    
        $count = 0; 
        $num1 = $_POST['num1']; 
        $num = 2;   
        $n1 = 1;
        $n2 = 1;  
        $n3 = 2;    
       // echo "<h3>Prime Numbers  are in the above fibonnaci series </h3>";  
       // echo "\n"; 
while ($count < $last )  
{  
$div_count=0;  
while($num == $n3)
{
    if($last > 2){
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$div_count++;  
}  
} 
if ($div_count<3)  
{  
echo $num." , ";
} 
}
$n1=$n2;
$n2=$n3;
$n3 = $n1 + $n2;
} 
$num=$num+1;
$count =$count+1;
}  
    }    
?> 
</body>
</html>
