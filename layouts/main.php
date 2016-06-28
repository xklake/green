<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

frontend\web\template\green\GreenAssets::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Robots" Content="All">
    <meta name="googlebot" content="All">
    <meta name="keywords" content="<?= Html::encode(Yii::$app->params['keywords']) ?>" />
    <meta name="description" content="<?= Html::encode(Yii::$app->params['description']) ?>" />
    <meta name="author" content="Panda blog Team" />
    <meta name="Copyright" content="Panda blog" />
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

    <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="/assets/css/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
    <link href="/assets/css/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="/assets/css/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="/assets/css/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="/assets/css/carousel/style.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/camera.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Allura" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Calligraffitti" rel="stylesheet" type="text/css">

    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css" />



    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->params['title']) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('header.php') ?>

<?= $content ?>

<?= $this->render('footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
