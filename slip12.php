<?php
 
 $fp = fopen("contact.dat","r");
 #var_dump($fp);

 if(!$fp)
{
    die("File Not Found");
}

echo"<br/>RECORDS<br/>";
echo "<table border=1>";
echo "<tr><th>Roll</th><th>Name</th><th>LandLine</th><th>Cell</th></tr>";

while($data = fscanf($fp, "%s%s%s%s"))
{
    echo "<tr>";
    foreach($data as $val)
    {
        echo "<td> $val </td>"; 
    }
    echo "</tr>";
}
echo "</table>";
fclose($fp);

?>