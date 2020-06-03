<pre>
<?php
include('./vendor/autoload.php');


use App\Data\Todo;
use App\Data\TodoDAO;

$t = new Todo(1,'une todo',true,12345);
echo $t->title;

$dao = new TodoDAO();
$arr_todos = $dao->findAll();
print_r($arr_todos[0]);
echo count($arr_todos);
?>
</pre>