<?php
$games = $_GET['game'];
$a = array("Hockey", "Football", "Cricket", "Basket Ball", "Kho-Kho", "Tennis", "Dough Ball");
echo "<h3>List of Games</h3>";
// for($i=0;$i){
// echo $a[$i]."<br>";
// }
foreach ($a as $val) {
    echo $val . "<br/>";
}
