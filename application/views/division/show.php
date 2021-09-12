<?php


echo 'division view file start'.'<br>'; //var_dump($div);
echo '<table>';
foreach($div as $item){ //var_dump($item);
    echo '<tr>';
    echo '<td>'.$item['id'].'</td>';
    echo '<td>'.$item['name'].'</td>';
    echo '</tr>';
}
echo '</table>';