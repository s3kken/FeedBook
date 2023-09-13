<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <a href="<?= Yii::$app->urlManager->createUrl('/')?>"><img id="logo" src="<?= Yii::$app->request->baseUrl?>/web/images/logo-book.png" width = "50px"></a>
    <?php if (!Yii::$app->user->isGuest): ?>

        <?php if (Yii::$app->user->identity->role): ?>
            <a href="<?= Yii::$app->urlManager->createUrl('user/index')?>">Пользователи</a>
            <a href="<?= Yii::$app->urlManager->createUrl('book/index')?>">Книги</a>
            <a href="<?= Yii::$app->urlManager->createUrl('genre/index')?>">Жанры</a>
            <a href="<?= Yii::$app->urlManager->createUrl('author/index')?>">Авторы</a>
            <a href="<?= Yii::$app->urlManager->createUrl('review/index')?>">Отзывы</a>

            <?php else: ?>
                <a href="<?= Yii::$app->urlManager->createUrl('users/account')?>">Личный кабинет</a>
                <a href="<?= Yii::$app->urlManager->createUrl('users/userbook')?>">Книги</a>
                <a href="<?= Yii::$app->urlManager->createUrl('users/userreview')?>">Отзывы</a>
        <?php endif ?>

        <?= Html::a("Выход",['site/logout'],
            ['data' => ['method' => 'post'],
                ['class' => 'while text-center']]);?>
        
    <?php else: ?>
        <a href="<?= Yii::$app->urlManager->createUrl('site/login')?>">Вход</a>
        <a href="<?= Yii::$app->urlManager->createUrl('site/register')?>">Регистрация</a>
    <?php endif ?>


</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light-one">
    <div class="container">
        <div class="row text-muted">
            <div class="myCompany">&copy; FeedBook <?= date('Y') ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<style>
    #logo{
        width: 65px;
    }
    body{
         background-color: #FAF8EE; 

    }
    header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 141px 0px 141px;
        background-color: #E2CDF5;
    }
    a{
        text-decoration: none;
        font-family: "roman";
        font-size: 22px;
        color: #694B8E;
    }
    a:hover{
        color: #433E50;
    }
    .bg-light-one{
        background-color: #E2CDF5;
        padding: 0px 250px 0px 250px;
    }
    .myCompany{
        color: #694B8E;
        font-family: "roman";
        font-size: 22px;
    }
</style>