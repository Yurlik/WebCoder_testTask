<?php
/**
 * Created by PhpStorm.
 * User: yuser
 * Date: 12.09.2021
 * Time: 11:28
 */


echo 'division view file start'.'<br>';
echo '<table>';
foreach($div as $item){
    echo '<tr>';
    echo '<td>'.$item['id'].'</td>';
    echo '<td>'.$item['name'].'</td>';
    echo '</tr>';
}
echo '</table>';
