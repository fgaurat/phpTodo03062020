<?php
include('./vendor/autoload.php');


use App\Data\Todo;



$t = new Todo(1,'une todo',true,12345);

echo $t->title;