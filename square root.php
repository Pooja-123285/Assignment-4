<html>
<head><title>Random</title></head>
<body style="background-color: grey;color: white;">
<h2><p>Number generated randomly is  <?php
    $choice = rand(1, 50);
    echo $choice;
?>.</p><p> And its square root is <?php
    echo sqrt($choice);
?>.</p></h2>
</body>
</html>