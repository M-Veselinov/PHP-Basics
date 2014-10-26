<?php
header("Content-Type: text/html; charset=utf-8");
mb_internal_encoding("utf-8");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>URL Replacer</title>
</head>
<body>
<form method="post">
    <label for="text">Text: </label><br/>
    <textarea name="text" id="text" rows="4" cols="50"></textarea><br/>
    <input type="submit" value="Extract sentences"/>
</form>
<br/>
<?php
if(isset($_POST['text'])){
    $input = $_POST['text'];
    $input = preg_replace('/<\s*\/\s*a\s*>/', '[/URL]',$input);
    $input = preg_replace('/<a\shref/','[URL',$input);
    $input = preg_replace('/\">/','"]',$input);
    echo $input;
}
?>
</body>
</html>