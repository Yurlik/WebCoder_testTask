<?php
/**
 * Created by PhpStorm.
 * User: yuser
 * Date: 12.09.2021
 * Time: 20:58
 */


//var_dump($employ);



echo '<h4>Worker '.$employ[0]['name'].'</h4>'.'<br>';
echo '<table class="table">';
echo '<tr>';
foreach($employ[0] as $k => $v ){
    echo '<th>'.$k.'</th>';
}
echo '<th></th>';
echo '</tr>';

foreach($employ as $item){
    echo '<tr>';
    echo '<td>'.$item['id'].'</td>';
    echo '<td>'.$item['name'].'</td>';
    echo '<td>'.$item['address'].'</td>';
    echo '<td>'.$item['email'].'</td>';
    echo '<td>'.$item['phone'].'</td>';
    echo '<td>'.$item['comment'].'</td>';
    echo '<td>'.$item['division_name'].'</td>';
    echo '<td><a href="/employee/updateemployee/'.$item['id'].'">Edit</a>/<a href="/employee/deleteemployee/'.$item['id'].'">Delete</a></td>';
    echo '</tr>';
}
echo '</table>';