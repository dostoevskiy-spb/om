<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jade Layout Template</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <link rel="stylesheet" media="all" href="css/screen.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDeIX-qPM-OiBUCqhMfrcfp9tPwQdTZtM"></script>
</head>
<body>
<script type="text/javascript">!function (e) {
        function t(o) {
            if (n[o]) return n[o].exports;
            var c = n[o] = {exports: {}, id: o, loaded: !1};
            return e[o].call(c.exports, c, c.exports, t), c.loaded = !0, c.exports
        }

        var n = {};
        return t.m = e, t.c = n, t.p = "/assets/", t(0)
    }({
        0: function (e, t, n) {
            n(18), n(19)
        }, 18: function (e, t) {
            !function () {
                "use strict";

                function e(e, t, n) {
                    e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent && e.attachEvent("on" + t, n)
                }

                function t(e) {
                    return window.localStorage && localStorage.font_css_cache
                }

                function n() {
                    if (window.localStorage && window.XMLHttpRequest) if (t(c)) o(localStorage.font_css_cache); else {
                        var e = new XMLHttpRequest;
                        e.open("GET", c, !0), e.onreadystatechange = function () {
                            4 === e.readyState && (o(e.responseText), localStorage.font_css_cache = e.responseText, localStorage.font_css_cache_file = c)
                        }, e.send()
                    } else {
                        var n = document.createElement("link");
                        n.href = c, n.rel = "stylesheet", n.type = "text/css", document.getElementsByTagName("head")[0].appendChild(n), document.cookie = "font_css_cache"
                    }
                }

                function o(e) {
                    var t = document.createElement("style");
                    t.setAttribute("type", "text/css"), t.styleSheet ? t.styleSheet.cssText = e : t.innerHTML = e, document.getElementsByTagName("head")[0].appendChild(t), window.onFontLoad && window.onFontLoad()
                }

                var c = window.fonts_href || "css/font.css";
                window.localStorage && localStorage.font_css_cache || document.cookie.indexOf("font_css_cache") > -1 ? n() : e(window, "load", n)
            }()
        }, 19: function (e, t) {
        }
    });</script>
<script type="text/javascript">
    function checkForFlex() {
        var curAddress = window.location.toString(),
            // поменять ссылку
            targetAddress = "/old_browser.php";

        function NaiveFlexBoxSupport(d) {
            var f = "flex", e = d.createElement('b');
            e.style.display = f;
            return e.style.display == f;
        }

        if (document.addEventListener) {
        } else {
            window.location.replace(targetAddress);
        }
        if (NaiveFlexBoxSupport(document) == false && (targetAddress.toString() != curAddress)) {
            window.location.replace(targetAddress);
        }

    }

    checkForFlex();
</script>
<!--BEGIN out-->
<div class="wrapper-map-site hidden js-map-site pad-0">
    <div class="wrapper-map-site-content">
        <div class="map-site-content">
            <div class="wrapp_close js-search-close-map">
                <img src="/img/icon-close.png"/>
            </div>
            <div class="map-site-content_content">
                <div class="block-header-logo_txt">
                    <div class="block-header-logo_logo">Omnicomm Санкт-Петербург</div>
                    <div class="block-header-logo_dealer" style="height: 30px;"><span class="icon-dealer"></span></div>
                </div>
                <div class="container-map-menu">
                    <div class="wrapper-menu-map">
                        <div class="wrapper-menu-map_list">
                            <div class="wrapper-menu-map_list-title">О компании</div>
                            <ul>
                                <li class="wrapper-menu-map_list-link"><a href="#">О компании</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Новости</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Вакансии</a></li>
                            </ul>
                        </div>
                        <div class="wrapper-menu-map_list"><a class="wrapper-menu-map_list-title" href="#">Оборудование
                                <div class="icon-link">
                                    <img src="/img/icon-right-arrow.png"/>
                                </div>
                            </a>
                            <ul>
                                <li class="wrapper-menu-map_list-link"><a href="#">Датчики уровня топлива</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Терминалы Omnicomm</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Дополнительное оборудование</a></li>
                            </ul>
                        </div>
                        <div class="wrapper-menu-map_list"><a class="wrapper-menu-map_list-title" href="#">Omnicomm
                                online
                                <div class="icon-link">
                                    <img src="/img/icon-right-arrow.png"/>
                                </div>
                            </a></div>
                        <div class="wrapper-menu-map_list"><a class="wrapper-menu-map_list-title" href="#">Купить
                                <div class="icon-link">
                                    <img src="/img/icon-right-arrow.png"/>
                                </div>
                            </a></div>
                        <div class="wrapper-menu-map_list">
                            <div class="wrapper-menu-map_list-title">Эффективность</div>
                            <ul>
                                <li class="wrapper-menu-map_list-link"><a href="#">Как это работает</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Экспертные советы</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Реализованные проекты</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Отзывы</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Калькулятор окупаемости</a></li>
                            </ul>
                        </div>
                        <div class="wrapper-menu-map_list"><a class="wrapper-menu-map_list-title" href="#">Решения
                                <div class="icon-link">
                                    <img src="/img/icon-right-arrow.png"/>
                                </div>
                            </a>
                            <ul>
                                <li class="wrapper-menu-map_list-link"><a href="#">Спецтехника</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Сельхозтехника</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Топливозаправщики</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Коммерческий транспорт</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Грузовой транспорт</a></li>
                                <li class="wrapper-menu-map_list-link"><a href="#">Карьерная техника</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-telefon-menu">
                    <div class="wrapper-telefon-header">
                        <div class="wrapper-telefon-header_title">Отдел продаж</div>
                        <a class="wrapper-telefon-header_link-tel" href="tel:+7 (7212) 980-980">+7 (7212) 980-980</a><a
                                class="wrapper-telefon-header_link-email" href="mailto:info@omnicomm.kz"><span>info@omnicomm.kz</span></a>
                    </div>
                    <div class="wrapper-telefon-header">
                        <div class="wrapper-telefon-header_title">Техническая поддержка</div>
                        <a class="wrapper-telefon-header_link-tel" href="tel:+7 (7212) 980-101">+7 (7212) 980-101</a><a
                                class="wrapper-telefon-header_link-email" href="mailto:support@omnicomm.kz"><span>ssupport@omnicomm.kz</span></a>
                    </div>
                    <div class="wrapper-adress">Г. Караганда, пр. Бухар-Жырау, 82</div>
                    <div class="wrapper-contact_link-soc"><a class="link-soc" href="#"><img
                                    src="img/icon-soc/icon-inst-m.png"></a><a class="link-soc" href="#"><img
                                    src="img/icon-soc/icon-g-pluspng.png"></a><a class="link-soc" href="#"><img
                                    src="img/icon-soc/icon-vk.png"></a><a class="link-soc" href="#"><img
                                    src="img/icon-soc/icon-youtube.png"></a><a class="link-soc" href="#"><img
                                    src="img/icon-soc/icon-face.png"></a><a class="link-soc" href="#"><img
                                    src="img/icon-soc/icon-twit.png"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-header-top">
    <div class="container-top-block">
        <div class="block-header-telefon"><a class="container-top-block_tel" href="tel:+7 7212 980 980"><span>+7 (7212) 980-980</span></a>
            <div class="container-telefon">
                <div class="wrapper-telefon-header">
                    <div class="wrapper-telefon-header_title">Отдел продаж</div>
                    <a class="wrapper-telefon-header_link-tel" href="tel:+7 (7212) 980-980">+7 (7212) 980-980</a><a
                            class="wrapper-telefon-header_link-email" href="mailto:info@omnicomm.kz"><span>info@omnicomm.kz</span></a>
                </div>
                <div class="wrapper-telefon-header">
                    <div class="wrapper-telefon-header_title">Техническая поддержка</div>
                    <a class="wrapper-telefon-header_link-tel" href="tel:+7 (7212) 980-101">+7 (7212) 980-101</a><a
                            class="wrapper-telefon-header_link-email" href="mailto:support@omnicomm.kz"><span>ssupport@omnicomm.kz</span></a>
                </div>
                <a class="pop-up-call-back" href="javascript:;" data-fancybox data-src="#hidden-feedback"><span>Перезвоните мне</span></a>
                <div class="wrapper-adress">Г. Караганда, пр. Бухар-Жырау, 82</div>
            </div>
        </div>
        <div class="container-top-block_name-comany">Omnicomm kazakstan</div>
        <div class="container-top-block_icon-mobile"><img src="img/icon-mobile-top.png"></div>
        <div class="container-top-block_diler"><span class="icon-dealer"><img src="/img/dealer.png" height="30" style="display:inline-block"/></span></div>
    </div>
    <div class="container-wrapper-header">
        <div class="block-header"><a class="block-header-logo" href="#"><img class="block-header-logo_img"
                                                                             src="img/logo.png" alt="">
                <div class="block-header-logo_txt">
                    <div class="block-header-logo_logo">Omnicomm <br> kazakstan</div>
                </div>
            </a>
            <div class="block-header-menu">
                <nav class="js-menu-category">
                    <ul class="menu_categories">
                        <li><a class="active-link" href="#" data-index="1">О компании</a></li>
                        <li class="hidden-menu"><a class="active-link" href="#">Omnicomm online</a></li>
                        <li class="hidden-menu"><a class="active-link" href="#" data-index="2">Оборудование</a></li>
                        <li><a class="active-link" href="#" data-index="3">Решения</a></li>
                        <li><a class="active-link" href="#" data-index="4">Эффективность</a></li>
                        <li class="hidden-menu"><a class="active-link" href="#" data-index="5">Купить</a></li>
                    </ul>
                    <div class="wrapp_menu_categories-content js-menu-category-content">
                        <div class="menu_categories-content js-menu-category-content-item" data-index="1">
                            <div class="menu-list"><a class="menu-list_link" href="#">О компании</a><a
                                        class="menu-list_link" href="#">Новости</a><a class="menu-list_link" href="#">Вакансии</a>
                            </div>
                        </div>
                        <div class="menu_categories-content js-menu-category-content-item" data-index="2">
                            <div class="menu-list-box">
                                <a class="menu-list-box_link" href="#">
                                    <div class="menu-list-box_link-icon icon-datch-omnicom">
                                        <img src="/img/innovation.png"/>
                                    </div>
                                    <div class="menu-list-box_link-txt">Инновационное оборудование</div>
                                </a>

                                <a class="menu-list-box_link" href="#">
                                    <div class="menu-list-box_link-icon icon-datch-omnicom">
                                        <img src="/img/fuel-level-sensor.png"/>
                                    </div>
                                    <div class="menu-list-box_link-txt">Датчики уровня топлива Omnicomm LLS</div>
                                </a>

                                <a class="menu-list-box_link" href="#">
                                    <div class="menu-list-box_link-icon icon_terminal-omnicom"><img
                                                src="/img/terminal.png"/>
                                    </div>
                                    <div class="menu-list-box_link-txt">Терминалы Omnicomm</div>
                                </a>

                                <a class="menu-list-box_link" href="#">
                                    <div class="menu-list-box_link-icon icon_dop-omnicom"><img
                                                src="/img/additional-equipment.png"/>
                                    </div>
                                    <div class="menu-list-box_link-txt">Дополнительное оборудование Omnicomm</div>
                                </a>
                            </div>
                        </div>
                        <div class="menu_categories-content js-menu-category-content-item" data-index="3">
                            <div class="menu-list"><a class="menu-list_link" href="#">Спецтехника</a><a
                                        class="menu-list_link" href="#">Топливозаправщики</a><a class="menu-list_link"
                                                                                                href="#">Грузовой
                                    транспорт</a><a class="menu-list_link" href="#">Сельхозтехника</a><a
                                        class="menu-list_link" href="#">Коммерческий <br> транспорт</a><a
                                        class="menu-list_link" href="#">Карьерная техника</a></div>
                        </div>
                        <div class="menu_categories-content js-menu-category-content-item" data-index="4">
                            <div class="menu-list"><a class="menu-list_link" href="#">Как это работает</a><a
                                        class="menu-list_link" href="#">Отзывы</a><a class="menu-list_link" href="#">Калькулятор
                                    окупаемости</a><a class="menu-list_link" href="#">Экспертные советы</a><a
                                        class="menu-list_link" href="#">Реализованные <br> проекты</a></div>
                        </div>
                        <div class="menu_categories-content js-menu-category-content-item" data-index="5">
                            <div class="menu-list"><a class="menu-list_link" href="#">Екатеринбург</a><a
                                        class="menu-list_link" href="#">Тюмень</a><a class="menu-list_link" href="#">Челябинск</a><a
                                        class="menu-list_link" href="#">Каменск-уралский</a></div>
                        </div>
                    </div>
                </nav>
                <div class="block-scroll-tel"><a href="#">+7 (7212) 980-980</a></div>
            </div>
            <a class="block-map-site js-search-open-map-site" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 15">
                    <style type="text/css">.st0 {
                            fill: #ffffff;
                        }</style>
                    <g>
                    </g>
                    <g>
                        <g id="svg_1">
                            <path id="svg_2"
                                  d="m26.5,0l-26.2,0c-0.2,0 -0.3,0.1 -0.3,0.3l0,1.5c0,0.1 0.1,0.2 0.3,0.2l26.3,0c0.1,0 0.3,-0.1 0.3,-0.3l0,-1.4c-0.1,-0.2 -0.2,-0.3 -0.4,-0.3z"
                                  class="st0"/>
                            <path id="svg_3"
                                  d="m26.5,5.1l-26.2,0c-0.2,0 -0.3,0.1 -0.3,0.2l0,1.5c0,0.2 0.1,0.3 0.3,0.3l26.3,0c0.1,0 0.3,-0.1 0.3,-0.3l0,-1.5c-0.1,-0.1 -0.2,-0.2 -0.4,-0.2z"
                                  class="st0"/>
                            <path id="svg_4"
                                  d="m26.5,10.1l-26.2,0c-0.1,0 -0.3,0.1 -0.3,0.3l0,1.5c0,0.1 0.1,0.3 0.3,0.3l26.3,0c0.1,0 0.3,-0.1 0.3,-0.3l0,-1.5c-0.1,-0.2 -0.2,-0.3 -0.4,-0.3z"
                                  class="st0"/>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="out">
    <?= $content ?>
</div>
<!--END out-->
<footer class="footer">
    <div class="footer-wrapper">
        <div class="footer-wrapper-row">
            <div class="footer-wrapper-menu">
                <div class="footer-wrapper-menu_row"><a class="link_title" href="#">О компании</a><a class="link_title"
                                                                                                     href="#">Omnicomm
                        online</a><a class="link_title" href="#">Эффективность</a><a class="link_title"
                                                                                     href="#">Купить</a></div>
                <div class="footer-wrapper-menu_row"><a class="link_title" href="#">Оборудование</a><a class="link_txt"
                                                                                                       href="#">Датчики
                        уровня топлива LLS</a><a class="link_txt" href="#">Терминалы Omnicomm</a><a class="link_txt"
                                                                                                    href="#">Дополнительное
                        оборудование Omnicomm</a></div>
                <div class="footer-wrapper-menu_row"><a class="link_title" href="#">Отраслевые решения</a><a
                            class="link_txt" href="#">Спецтехника</a><a class="link_txt" href="#">Сельхозтехника</a><a
                            class="link_txt" href="#">Топливозаправщики</a><a class="link_txt" href="#">Коммерческий
                        транспорт</a><a class="link_txt" href="#">Грузовой транспорт</a><a class="link_txt" href="#">Карьерная
                        техника</a></div>
            </div>
            <div class="footer-wrapper-contact-info">
                <div class="footer-wrapper-contact_title">Контактная информация</div>
                <a class="link_tel" href="tel:+7 7212 980-98">+7 (7212) 980-980</a><a class="link_email"
                                                                                      href="mailto:info@omnicomm.kz"><span>info@omnicomm.kz</span></a>
                <div class="footer-wrapper-contact_adress">Г. Караганда, пр. Бухар-Жырау, 82</div>
                <div class="footer-wrapper-contact_link-soc"><a class="link-soc" href="#"><img
                                src="img/icon-soc/icon-inst.png"></a><a class="link-soc" href="#"><img
                                src="img/icon-soc/icon-g-pluspng.png"></a><a class="link-soc" href="#"><img
                                src="img/icon-soc/icon-vk.png"></a><a class="link-soc" href="#"><img
                                src="img/icon-soc/icon-youtube.png"></a><a class="link-soc" href="#"><img
                                src="img/icon-soc/icon-face.png"></a><a class="link-soc" href="#"><img
                                src="img/icon-soc/icon-twit.png"></a></div>
            </div>
        </div>
        <div class="footer-wrapper-row">
            <div class="footer-wrapper-bottom">
                <div class="footer-wrapper_cop">© 2017, Omnicomm</div>
                <div class="footer-wrapper_logo-dealer">
                    <div class="footer-wrapper_logo">Omnicomm kazakstan</div>
                    <div class="footer-wrapper_dealer"><span class="icon-dealer"><svg width="30" height="30"
                                                                                      xmlns="http://www.w3.org/2000/svg">
<style type="text/css">.st0 {
        fill: #F64224;
    }</style>
<g>
<path id="svg_1"
      d="m15,0c-8.3,0 -15,6.7 -15,15s6.7,15 15,15s15,-6.7 15,-15s-6.7,-15 -15,-15zm5.5,22.9l-5.5,-2.9l-5.5,2.9l1.1,-6.2l-4.6,-4.3l6.2,-0.9l2.8,-5.6l2.8,5.6l6.2,0.9l-4.5,4.4l1,6.1z"
      class="st0"/>
</g>
</svg></span><a href="#">Золотой <br> дилер</a></div>
                </div>
                <div class="footer-wrapper_map-site"><a href="#">
                        <div class="icon-map-site">
                            <svg width="17.5" height="15" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path class="st0" id="svg_1"
                                          d="m17.5,10.9l0,3.1c0,0.3 -0.1,0.5 -0.3,0.7s-0.4,0.3 -0.6,0.3l-3.1,0c-0.3,0 -0.5,-0.1 -0.7,-0.3s-0.3,-0.4 -0.3,-0.7l0,-3.1c0,-0.3 0.1,-0.5 0.3,-0.7s0.4,-0.3 0.7,-0.3l0.9,0l0,-1.8l-5,0l0,1.9l0.9,0c0.3,0 0.5,0.1 0.7,0.3s0.3,0.4 0.3,0.7l0,3.1c0,0.3 -0.1,0.5 -0.3,0.7s-0.4,0.2 -0.7,0.2l-3.1,0c-0.3,0 -0.5,-0.1 -0.7,-0.3s-0.3,-0.4 -0.3,-0.7l0,-3.1c0,-0.3 0.1,-0.5 0.3,-0.7s0.4,-0.2 0.7,-0.2l0.9,0l0,-1.9l-5,0l0,1.9l0.9,0c0.3,0 0.5,0.1 0.7,0.3s0.3,0.4 0.3,0.6l0,3.1c0,0.3 -0.1,0.5 -0.3,0.7s-0.4,0.3 -0.6,0.3l-3.2,0c-0.3,0 -0.5,-0.1 -0.7,-0.3s-0.2,-0.4 -0.2,-0.6l0,-3.1c0,-0.3 0.1,-0.5 0.3,-0.7s0.4,-0.3 0.6,-0.3l0.9,0l0,-1.9c0,-0.3 0.1,-0.6 0.4,-0.9s0.5,-0.4 0.9,-0.4l5,0l0,-1.8l-0.9,0c-0.3,0 -0.5,-0.1 -0.7,-0.3s-0.2,-0.4 -0.2,-0.6l0,-3.2c0,-0.3 0.1,-0.5 0.3,-0.7s0.3,-0.2 0.6,-0.2l3.1,0c0.3,0 0.5,0.1 0.7,0.3s0.3,0.4 0.3,0.7l0,3.1c0,0.3 -0.1,0.5 -0.3,0.7s-0.4,0.2 -0.7,0.2l-0.9,0l0,1.9l5,0c0.3,0 0.6,0.1 0.9,0.4s0.4,0.5 0.4,0.9l0,1.8l0.9,0c0.3,0 0.5,0.1 0.7,0.3s0.2,0.4 0.2,0.6z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="txt">Карта сайта</div>
                    </a></div>
                <div class="footer-wrapper_developer"><a href="#">Разработка сайта:<span>FLEX.MEDIA</span></a></div>
            </div>
        </div>
    </div>
</footer>
<div class="w-p" id="hidden-one-click" style="display: none;">
    <div class="wrapper-container_title">Купить в один клик</div>
    <form class="js-form">
        <div class="wrapper-form">
            <div class="box-input">
                <div class="form-label">
                    <label class="input-label">ФИО</label>
                </div>
                <div class="form-input">
                    <input class="input-box">
                </div>
            </div>
            <div class="box-input-t">
                <div class="box-input w-50">
                    <div class="form-label">
                        <label class="input-label">Телефон<span>*</span></label>
                    </div>
                    <div class="form-input">
                        <input class="input-box" type="txt">
                    </div>
                </div>
                <div class="box-input w-50">
                    <div class="form-label">
                        <label class="input-label">E-mail</label>
                    </div>
                    <div class="form-input">
                        <input class="input-box">
                    </div>
                </div>
            </div>
            <div class="box-check">
                <div class="input-wrapp">
                    <input class="ch" type="checkbox" id="m">
                    <label for="m">Даю согласие на обработку моих <a href="#"> <span> персональных данных *</span> </a></label>
                </div>
            </div>
            <div class="box-btn-form">
                <button class="btn-form">Отправить</button>
            </div>
        </div>
    </form>
</div>
<div class="w-p" id="hidden-feedback" style="display: none;">
    <div class="wrapper-container_title">Купить в один клик</div>
    <form class="js-form">
        <div class="wrapper-form">
            <div class="box-input">
                <div class="form-label">
                    <label class="input-label">ФИО<span>*</span></label>
                </div>
                <div class="form-input">
                    <input class="input-box" data-validation="required" type="txt"
                           data-validation-error-msg="Name is not correct">
                </div>
            </div>
            <div class="box-input">
                <div class="form-label">
                    <label class="input-label">Телефон<span>*</span></label>
                </div>
                <div class="form-input">
                    <input class="input-box" data-validation="required" type="txt"
                           data-validation-error-msg="Name is not correct">
                </div>
            </div>
            <div class="box-check">
                <div class="input-wrapp">
                    <input class="ch" type="checkbox" id="m">
                    <label for="m">Даю согласие на обработку моих <a href="#"> <span> персональных данных *</span> </a></label>
                </div>
            </div>
            <div class="box-btn-form">
                <button class="btn-form">Заказать</button>
            </div>
        </div>
    </form>
</div>
<div class="w-p" id="hidden-question-expert" style="display: none;">
    <div class="wrapper-container_title">Купить в один клик</div>
    <form class="js-form">
        <div class="wrapper-form">
            <div class="box-input">
                <div class="form-label">
                    <label class="input-label">ФИО<span>*</span></label>
                </div>
                <div class="form-input">
                    <input class="input-box" data-validation="required" type="txt"
                           data-validation-error-msg="Name is not correct">
                </div>
            </div>
            <div class="box-input">
                <div class="form-label">
                    <label class="input-label">Организация<span>*</span></label>
                </div>
                <div class="form-input">
                    <input class="input-box" data-validation="required" type="txt"
                           data-validation-error-msg="Name is not correct">
                </div>
            </div>
            <div class="box-input-t">
                <div class="box-input w-50">
                    <div class="form-label">
                        <label class="input-label">Телефон<span>*</span></label>
                    </div>
                    <div class="form-input">
                        <input class="input-box" type="txt">
                    </div>
                </div>
                <div class="box-input w-50">
                    <div class="form-label">
                        <label class="input-label">E-mail</label>
                    </div>
                    <div class="form-input">
                        <input class="input-box">
                    </div>
                </div>
            </div>
            <div class="box-input">
                <div class="form-label">
                    <label class="input-label">Вопрос<span>*</span></label>
                </div>
                <div class="form-input">
                    <textarea class="input-box textarea-box" data-validation="required" type="text"
                              data-validation-error-msg="Message is not correct"></textarea>
                </div>
            </div>
            <div class="box-check">
                <div class="input-wrapp">
                    <input class="ch" type="checkbox" id="m">
                    <label for="m">Даю согласие на обработку моих <a href="#"> <span> персональных данных *</span> </a></label>
                </div>
            </div>
            <div class="box-btn-form">
                <button class="btn-form">Отправить</button>
            </div>
        </div>
    </form>
</div>
<div class="w-p" id="hidden-feedback2" style="display: none;">
    <div class="wrapper-container_title">Форма обратной связи</div>
    <form class="js-form">
        <div class="wrapper-form">
            <div class="box-input">
                <div class="form-label">
                    <label class="input-label">ФИО<span>*</span></label>
                </div>
                <div class="form-input">
                    <input class="input-box" data-validation="required" type="txt"
                           data-validation-error-msg="Name is not correct">
                </div>
            </div>
            <div class="box-input">
                <div class="form-label">
                    <label class="input-label">Организация<span>*</span></label>
                </div>
                <div class="form-input">
                    <input class="input-box" data-validation="required" type="txt"
                           data-validation-error-msg="Name is not correct">
                </div>
            </div>
            <div class="box-input-t">
                <div class="box-input w-50">
                    <div class="form-label">
                        <label class="input-label">Телефон<span>*</span></label>
                    </div>
                    <div class="form-input">
                        <input class="input-box" type="txt">
                    </div>
                </div>
                <div class="box-input w-50">
                    <div class="form-label">
                        <label class="input-label">E-mail</label>
                    </div>
                    <div class="form-input">
                        <input class="input-box">
                    </div>
                </div>
            </div>
            <div class="box-input">
                <div class="form-label">
                    <label class="input-label">Комментарий</label>
                </div>
                <div class="form-input">
                    <textarea class="input-box textarea-box"></textarea>
                </div>
            </div>
            <div class="box-check">
                <div class="input-wrapp">
                    <input class="ch" type="checkbox" id="m">
                    <label for="m">Даю согласие на обработку моих <a href="#"> <span> персональных данных *</span> </a></label>
                </div>
            </div>
            <div class="box-btn-form">
                <button class="btn-form">Отправить</button>
            </div>
        </div>
    </form>
</div>
<div class="w-p" id="hidden-consultation" style="display: none;">
    <div class="wrapper-container_title">Купить в один клик</div>
    <form class="js-form">
        <div class="wrapper-form">
            <div class="box-input">
                <div class="form-label">
                    <label class="input-label">ФИО<span>*</span></label>
                </div>
                <div class="form-input">
                    <input class="input-box" data-validation="required" type="txt"
                           data-validation-error-msg="Name is not correct">
                </div>
            </div>
            <div class="box-input">
                <div class="form-label">
                    <label class="input-label">Организация<span>*</span></label>
                </div>
                <div class="form-input">
                    <input class="input-box" data-validation="required" type="txt"
                           data-validation-error-msg="Name is not correct">
                </div>
            </div>
            <div class="box-input-t">
                <div class="box-input w-50">
                    <div class="form-label">
                        <label class="input-label">Телефон<span>*</span></label>
                    </div>
                    <div class="form-input">
                        <input class="input-box" type="txt">
                    </div>
                </div>
                <div class="box-input w-50">
                    <div class="form-label">
                        <label class="input-label">E-mail</label>
                    </div>
                    <div class="form-input">
                        <input class="input-box">
                    </div>
                </div>
            </div>
            <div class="box-check">
                <div class="input-wrapp">
                    <input class="ch" type="checkbox" id="m">
                    <label for="m">Даю согласие на обработку моих <a href="#"> <span> персональных данных *</span> </a></label>
                </div>
            </div>
            <div class="box-btn-form">
                <button class="btn-form">Отправить</button>
            </div>
        </div>
    </form>
</div>
<script src="js/lib.min.js"></script>
<script src="js/common.min.js"></script>
</body>
</html>
