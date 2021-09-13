<?php
/**
 * Created by PhpStorm.
 * User: yuser
 * Date: 13.09.2021
 * Time: 21:19
 */

//var_dump($employ);
$worker = $employ[0];
?>

<div class="row">
    <div class="col-lg center"><h4>Update employee <?=$worker['name']?></h4></div>
</div>
<div class="row">
    <div class="col-lg">
        <form class="form" action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">name</label>
                <input type="text" name="name" id="name" value="<?=$worker['name']?>">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" name="email" id="email" value="<?=$worker['email']?>">
            </div>
            <div class="form-group">
                <label for="address">address</label>
                <input type="text" name="address" id="address" value="<?=$worker['address']?>">
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="text" name="phone" id="phone" value="<?=$worker['phone']?>">
            </div>
            <div class="form-group">
                <label for="comment">comment</label>
                <textarea name="comment" id="comment" cols="30" rows="10"><?=$worker['comment']?></textarea>
            </div>
            <div class="form-group">
                <label for="div_id">division</label>
                <select name="div_id" id="div_id">
                    <?php
                    foreach ($divisions as $division){
                        if($worker['division_name'] == $division['name']){
                            echo '<option selected value='.$division['id'].'>'.$division['name'].'</option>';
                        }else{
                            echo '<option value='.$division['id'].'>'.$division['name'].'</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <input type="submit" value="Save">

        </form>

    </div>
</div>
