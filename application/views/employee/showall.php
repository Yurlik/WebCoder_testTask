<?php
/**
 * Created by PhpStorm.
 * User: yuser
 * Date: 12.09.2021
 * Time: 16:22
 */

//var_dump($employ);


echo '<h4>All workers</h4>'.'<br>';
echo '<table class="table">';
echo '<tr>';
foreach($employ[0] as $k => $v ){
    echo '<th>'.$k.'</th>';
}
echo '</tr>';

foreach($employ as $item){
    echo '<tr>';
    echo '<td>'.$item['id'].'</td>';
    echo '<td><a href="/employee/show/'.$item['id'].'">'.$item['name'].'</a></td>';
    echo '<td>'.$item['address'].'</td>';
    echo '<td>'.$item['email'].'</td>';
    echo '<td>'.$item['phone'].'</td>';
    echo '<td>'.$item['comment'].'</td>';
    echo '<td>'.$item['division_name'].'</td>';
    echo '</tr>';
}
echo '</table>';