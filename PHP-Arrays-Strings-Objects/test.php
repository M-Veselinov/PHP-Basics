<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 14-8-24
 * Time: 16:47
 */

$input = '<p>Come and visit <a href="http://softuni.bg">the Software Univ
            ersity</a> to master the art of programming. You can always check our
                <a href="www.softuni.bg/forum">forum</a> if you have any questions.</p>';
$input = preg_replace('/<\s*\/\s*a\s*>/', '[/URL]',$input);
$input = preg_replace('/<a\shref/','[URL',$input);
$input = preg_replace('/>/',']',$input);
$input = preg_replace('/\]/','>',$input);
echo $input;
///<a\shref=\"http(s)*[\:]\/\/[a-zA-z]+\.[a-z]+\">[a-zA-z\s]+<\/a>/