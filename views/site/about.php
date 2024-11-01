<?php
///* @var $this yii\web\View */
//use yii\helpers\Html;
//$this->title = 'About';
//$this->params['breadcrumbs'][] = $this->title;
//?>
<!--<div class="site-about">-->
<!--    <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->
<!--    <p>-->
<!--        This is the About page. You may modify the following file to customize its content:-->
<!--    </p>-->
<!--    --><?php //= $this->render("_part1") ?>
<!--    --><?php //= $this->render("_part2") ?>
<!--    <code>--><?php //= __FILE__ ?><!--</code>-->
<!--</div>-->
<!---->

<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => 'yii, developing, views,
      meta, tags']);
$this->registerMetaTag(['name' => 'description', 'content' => 'This is the description
      of this page!'], 'description');
?>
<div class = "site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
    <p>
        <b>email:</b> <?= $email ?>
    </p>
    <p>
        <b>phone:</b> <?= $phone ?>
    </p>
    <code><?= __FILE__ ?></code>
</div>