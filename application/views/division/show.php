<?php


echo 'division view file start'.'<br>'; //var_dump($div);
echo '<table class="table">';
foreach($div as $item){ //var_dump($item);
    echo '<tr>';
    echo '<td>'.$item['id'].'</td>';
    echo '<td>'.$item['name'].'</td>';
    echo '<td><a href="/division/updatedivision/'.$item['id'].'">Edit</a>/<a href="/division/deletedivision/'.$item['id'].'">Delete</a></td>';
    echo '</tr>';
}
echo '</table>';