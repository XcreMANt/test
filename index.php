<?php

use App\View;

require __DIR__ . '/autoload.php';

$url = $_SERVER['REQUEST_URI'];

//switch ($_GET['ctrl']) {
//    case 'admin':
//        $controller = new \App\Controllers\AdminController();
//        $action = $_GET['act'] ?: 'AllNews';
//        break;
//    case 'news':
//        $controller = new \App\Controllers\News();
//        $action = $_GET['act'] ?: 'Index';
//        break;
//    default:
//        $controller = new \App\Controllers\News();
//        $action = $_GET['act'] ?: 'Index';
//}

?>
<a href="admin.php?act=allnews">Админка</a>
<?php
try {
    $controller = new \App\Controllers\News();
    $action = $_GET['act'] ?: 'Index';
    $controller->action($action);
} catch (\App\Exceptions\Db $e) {
    $controller->action('Exception', $e);
} catch (\App\Exceptions\Error404 $e) {
    $controller->action('Exception', $e);
}


//$view->users = \App\Models\User::findAll();

//$view->display(__DIR__ . '/App/Views/index.php');

//$view->articles = \App\Models\Article::findAll();
//$view->display(__DIR__ . '/App/Views/articlenew.php');
//var_dump(\App\Models\Author::findById(2));
//var_dump($view->articles->getAuthor()->name);

//$users = \App\Models\User::findAll();

//var_dump(\App\Models\User::asd());
//$users[0]->setName('Фрол');
//var_dump($users);


//$test = new \Tests\Test();
//$test->findByIdTest(78);
//echo $test->findAllArticleTest();

//$articles = \App\Models\Article::lastRecords(3);

//var_dump($articles);
//echo $articles[2]->text;

//$user = new \App\Models\User();
//$user->name = 'Vasya';
//$user->email = 'v@pupkin.ru';
//$id = $user->insert();
//var_dump($id);
//echo $db->lastInsertId();

//include __DIR__.'/App/Views/article.php';

//$user = \App\Models\User::findById(193);
//$user = new \App\Models\User();
//var_dump($user);
//$user->name = 'rrrrrrrr';
//$user->email = 'rrrrrr@rrrrrrr.ru';
//$res = $user->save();
//echo $res;
//$user->delete();
