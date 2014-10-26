<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HTML Tags Counter</title>
    <style type="text/css">
        .info {
            font-size: 28px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<form method="post">
    <label for="tag">Enter HTML tags:</label><br/><br/>
    <input type="text" name="tag" id="tag"/>
    <input type="submit" name="submit"><br/><br/>
    <?php
    // I got all tags from http://www.w3.org/TR/html-markup/elements.html
    // with a bit of JavaScript :)
    $tags = array("a","abbr","address","area","article","aside","audio","b","base","bdi","bdo",
                    "blockquote","body","br","button","canvas","caption","cite","code","col","colgroup",
                        "command","datalist","dd","del","details","dfn","div","dl","dt","em","embed","fieldset",
                            "figcaption","figure","footer","form","h1","h2","h3","h4","h5","h6","head","header","hgroup",
                                "hr", "html","i","iframe","img","input","ins","kbd","keygen","label","legend","li","link","map",
                                    "mark","menu","meta","meter","nav","noscript","object","ol","optgroup","option","output","p","param",
                                        "pre","progress","q","rp","rt","ruby","s","samp","script","section","select","small","source","span","strong",
                                            "style","sub","summary","sup","table","tbody","td","textarea","tfoot","th","thead","time","title","tr","track","u",
                                                "ul","var","video","wbr");
    $score = 0;
    if(isset($_POST['submit'])){
        $input = $_POST['tag'];
        $check = in_array($input,$tags);
        if($check == true){
            echo "Valid HTML tag!" . "<br>";
            if(isset($_SESSION['score'])) {
                $_SESSION['score']++;
            }
            else {
                $_SESSION['score'] = 0;
            }
            echo "Score: " . $_SESSION['score'] . "<br>";
        } else {
            echo "Invalid HTML tag!" . "<br>";
            echo "Score: " . $_SESSION['score'] . "<br>";
        }
    }
    ?>
</form>
</body>
</html>