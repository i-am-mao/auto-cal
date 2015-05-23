<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
$total_cost = 2500;

$typeA ="";
$typeB ="";
$typeC ="";

if(!empty($_POST['typeA'])){
    $typeA = ($_POST['typeA']);
}
if(!empty($_POST['typeB'])){
    $typeB = ($_POST['typeB']);
}
if(!empty($_POST['typeC'])){
    $typeC = ($_POST['typeC']);
}

 
switch ($typeA)
{
    case "typeA":
    $total_cost += 1000;
    break;         
default:    
}
switch ($typeB)
{
    case "typeB":
    $total_cost += 100000;
    break;         
default:    
}  
switch ($typeC)
{
    case "typeC":
    $total_cost += 5;
    break;         
default:    
}      

    print $total_cost;
    print '円';
?>
</body>
</html>