<!DOCTYPE html>
<? include 'inc/headers.inc.php'; ob_start(); ?>
<html lang="ru-RU">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="icon" type="image/png" href="img/power-button-2.png" />
    <title>Портфолио | Web developer</title>
</head>

<body>
    <div id="conteiner">
        <header>
            <div class="wrap">
                <div class="headerTop">
                    <div class="logo">
                        <h1><a class="logo" href='index.php'>Omeljan Konstantin </a></h1>
                        <p>Web developer portfolio</p>
                    </div>
                    <!--end logo-->
                    <div class="menu">
                        <ul>
                            <li><a href='index.php'>Мои работы</a>
                            </li>
                            <li><a href='index.php?id=services'>Услуги</a>
                            </li>
                            <li><a href='index.php?id=contacts'>Связь со мной</a>
                            </li>
                        </ul>
                    </div>
                    <!--end menu-->
                </div>
                <!--end header_top-->
                <div class="headerBottom">
                    <div class="aboutMe">
                        <h2> Немного обо мне</h2>
                        <p>Приветствую вас у себя на сайте. Зовут меня Константин, мне 21 год. В данный момент я студент 4 курса специальности "инженер-машиностроения"</p>
                        <p>Основная моя специализация создание сайтов любой сложности и на любых CMS, таких как: <span>Joomla 			WordPress</span>. Используя при этом такие технологии как <span>HTML5 CSS3 PHP JS MySQL</span>
                        </p>
                        <p>Помимо сайтов также занимаюсь созданием Desktop программ на таких языках как <span>C++ Python Delphi</span>. Помогаю как студентам так и пишу для собственного пользования.</p>
                    </div>
                    <!--end about me-->
                    <div class="designer">
                        <h2>Нужен веб-разработчик?</h2>
                        <p>Тогда я вас хочу поздравить вы попали по адресу, я готов сделать вам ваш сайт/блог/интернет магазин. За отличную цену и с отличным качеством исполнения.
                        </p>
                        <img src="img/mesage.png" alt="" />
                        <p>При возникновении вопросов или желании заказать работу вы всегда можете написать мне :</p>
                        <p>Перейдя по : <a href="href=index.php?id=contacts">ссылке</a>
                        </p>
                    </div>
                    <!--end designer-->
                </div>
                <!--end header_bottom-->
            </div>
            <!--end wrap-->
        </header>
        <!--end header-->
        <article>
            <div class="wrap">
                <?php include 'inc/download.inc.php'; ?>
            </div>
            <!--end wrap-->
        </article>
        <!--end content-->
        <footer>

            <div class="footerTop">
                <div class="wrap">
                    <div class="services">
                        <h5>SERVICES</h5>
                        <h6>Веб-разработка </h6>
                        <p>Разрабатываю саты на любой CMS, в зависимости от пожелания клиентов.</p>
                        <h6>Вёрстка</h6>
                        <p>Верстаю быстро и качественно любой сложности макеты, без использования каких либо инструкторов.
                        </p>

                        <h6>Веб-приложения</h6>
                        <p>Сделаю веб-приложене вам на ваш сайт, любой сложности и любой концепции.</p>
                    </div>
                    <!--end services-->
                    <div class="tweets">
                        <h5>tweets</h5>	
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante. about 3 hours ago</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante. about 3 hours ago</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante. about 3 hours ago</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante. about 3 hours ago</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante. about 3 hours ago</p>
                    </div>
                    <!--end tweets-->
                    <div class="contact">
                        <h5>contact</h5>
                        <p>Если вы хотите заказать проект, или у вас возникли какие то вопросы свяжитесь со мною и я отвечу вам в ближайшее время.</p>
                        <ul>
                            <li>
                                <img src="img/vk_2.png" alt="" /><a href="#">Vkontakte</a>
                            </li>
                            <li>
                                <img src="img/skype.png" alt="" /><a href="#">Skype: Sipatuj</a>
                            </li>
                            <li>
                                <img src="img/lg_2.png" alt="" /><a href="#">Email</a>
                            </li>
                        </ul>
                    </div>
                    <!--end contact-->
                </div>
                <!--end wrap-->
            </div>
            <!--end footer_top-->
            <div class="footerBottom">
                <div class="wrap">
                    <p>Копирайт в общем, 2014</p>
                </div>
            </div>
            <!--end footer_bottom-->
        </footer>
        <!--footer-->
    </div>
    <!--end conteiner-->
</body>

</html>