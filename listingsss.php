<?php
$url = "http://3.143.68.102:5000/listings";
$json = file_get_contents($url);
$arr = json_decode($json, true);

echo '<table>';
echo '<tr><th>Title</th><th>Price</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Views</th></tr>';
$n = 0;

foreach ($arr as $key => $jsons) {
    foreach ($jsons as $key => $value) {
        echo '<tr>';
    echo '<td>'.$arr[$n]['title'].'</td>';
    echo '<td>'.$arr[$n]['price'].'</td>';
    echo '<td>'.$arr[$n]['address'].'</td>';
    echo '<td>'.$arr[$n]['city'].'</td>';
    echo '<td>'.$arr[$n]['state'].'</td>';
    echo '<td>'.$arr[$n]['zip'].'</td>';
    echo '<td>'.$arr[$n]['views'].'</td>';
    echo '</tr>';

    $n++;
} 
}
echo '</table>';
?>