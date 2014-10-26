<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-25
 * Time: 14:06
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        li {
            list-style-type: circle;
            text-decoration:underline;
        }
        div {
            width:150px;
            height:170px;
            position:absolute;
            background-color:#c2d3ea;
            border:1px solid #53585d;
            border-radius:10px;
            padding:10px;
        }
        div:nth-child(2) {
            margin-left:300px;
            margin-top:-100px;
        }
        div:nth-child(3){
            margin-left:300px;
            margin-top:110px;
        }
        div:nth-child(4){
            margin-left:300px;
            margin-top:310px;
        }

    </style>
</head>
<body>
    <form method="post">
        <label for="categories">Categories:</label>
        <input type="text" name="categories" id="categories">
        <br>
        <label for="tags">Tags:</label>
        <input type="text" name="tags" id="tags">
        <br>
        <label for="months">Months:</label>
        <input type="text" name="months" id="months">
        <br>
        <input type="submit">
    </form>
<?php
    if(isset($_POST['categories'])) :
        $catInput = $_POST['categories'];
        $categories = preg_split("/, /",$catInput);
?>
    <div>
        <h3>Categories</h3>
        <hr>
        <ul>
            <?php foreach($categories as $category) :?>
                <li><?php echo $category ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
 <?php endif; ?>
<?php
    if(isset($_POST['tags'])) :
        $tags = preg_split("/, /",$_POST['tags']);
?>
    <div>
        <h3>Tags</h3>
        <hr>
        <ul>
            <?php foreach($tags as $tag) : ?>
            <li><?php echo $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<?php
    if(isset($_POST['months'])) :
    $months = preg_split("/, /",$_POST['months']);
?>
    <div>
        <h3>Months</h3>
        <hr>
        <ul>
            <?php foreach($months as $month) : ?>
            <li><?php echo $month ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif; ?>
</body>
</html>