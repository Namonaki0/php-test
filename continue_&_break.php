<?php

$blogs = [
    ['title' => 'title1', 'author' => 'author1', 'content' => 'lorem', 'likes' => 22],
    ['title' => 'title2', 'author' => 'author2', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'title3', 'author' => 'author3', 'content' => 'lorem', 'likes' => 45],
    ['title' => 'title4', 'author' => 'author4', 'content' => 'lorem', 'likes' => 60],
];


foreach ($blogs as $blog) {
    //? iteration will stop when true
    if ($blog["title"] === "title3") {
        break;
    }
    //? will iterate while condition is true and leave out the value that matches condition
    if ($blog["likes"] > 30) {
        continue;
    }
    echo $blog["title"] . "<br />";
}