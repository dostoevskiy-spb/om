<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<main id="barba-wrapper">
    <section class="barba-container">
        <section class="container-wrapper-header-title">
            <!--.block-img(data-parallax="scroll" data-image-src="img/bg/bg-equipment.png")-->
            <div class="block-img" style="background-image:url('img/bg/bg-com-proj.jpg');"></div>
            <div class="block-wrapper-title">
                <div class="block-wrapper-title_title-bread-crumbs">
                    <h1>Ошибка 404</h1>
                    <div class="bread-crumbs"><a href="#">Главная</a><span>Ошибка 404</span></div>
                </div>
            </div>
        </section>
        <section class="container-wrapper-card-product">
            <div class="wrapper-card-product">
                <div class="wrapper-contant-right">
                    <div class="wrapper-content-right">
                        <div class="wrapper-content-right_txt content-404">
                            <h3>Страница не найдена</h3>
                            <p>Страницу, которую вы запрашиваете, не существует. Возможно она была удалена, возможно вы набрали неправильный адрес.</p>
                            <p>Вы всегда можете вернуться на <a href="#"><span>главную страницу сайта</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>