<?php include "QuadraticEquation.php"?>
<?php
$a = $_POST["value1"];
$b = $_POST["value2"];
$c = $_POST["value3"];
$root1=null;
$root2=null;
$quadratic_equation = new QuadraticEquation($a,$b,$c);
if($quadratic_equation->getDelta()>0){
    $root1 = $quadratic_equation->getRoot1();
    $root2 = $quadratic_equation->getRoot2();
}else if($quadratic_equation->getDelta()===0){
    $root1 = (-$b)/(2*$a);
    $root2 = (-$b)/(2*$a);
}else{
    echo "Phuong trinh vo nghiem";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div id="result">
    <label>Nghiem thu nhat:</label><span><?php echo $root1?></span><br/>
     <label>Nghiem thu hai:</label><span><?php echo $root2?></span>
</div>
</body>
</html>
