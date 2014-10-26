<?php
$text = htmlspecialchars("Companies like
          HP, ORACLE and IBM target their platforms for cloud-based environment.
            IList<T> implements IEnumerable<T>. GoPHP is a PHP library.");
$input = $text;
$arr = preg_split("/[\d\s`~!@#$%^&*()_+=-\?><\/,;.]/",$text,-1,PREG_SPLIT_NO_EMPTY);
$position = 0;
$oldPosition = 0;
for($i = 0;$i < count($arr);$i++){
    $word = $arr[$i];
    if(ctype_upper($word)){
        if(strpos($text,$word)){
            $position = strpos($text,$word);
            if($position == $oldPosition){
                $position = strrpos($text,$word);
            }
            $oldPosition = $position;
            $index = strlen($word) - 1;
            $newWord = "";
            for($j = 0;$j < strlen($word);$j++){
                $text[$position] = $word[$index];
                $newWord .= $word[$index];
                $index--;
                $position++;
            }
            $position = $oldPosition;
              if($newWord == $word){
               $newestWord = "";
             for($k = 0;$k < strlen($word);$k++){
             $char = $word[$k];
              $cognated = $char.$char;
               $newestWord .= $cognated;
             }

               $text = substr_replace($text,$word,$oldPosition,0);
            }
        }
    }
}
$input = str_word_count($text,2);
while($word = current($input)){

}
print_r($text);