<?php 
/*
Template name: Contacts
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контакты</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="mobile-menu">
    <div class="mobile-menu__body">
        <div class="mobile-menu__close" onclick="mobileMenuAction()"></div>
        <div class="mobile-menu__list">
            <a href="about-us" class="mobile-menu__item">о нас</a>
            <a href="rooms" class="mobile-menu__item">номера и цены</a>
            <a href="store" class="mobile-menu__item">эко магазин</a>
            <a href="home-page/#gallery" class="mobile-menu__item">фотогалерея</a>
            <a href="contacts" class="mobile-menu__item mobile-menu__menu-button_active">контакты</a>
        </div>
        <div class="mobile-menu__button" onclick="pupUp()">забронировать</div>
        <div class="mobile-menu__link-list">
            <a href="tel:+79155555555" class="mobile-menu__phone-number">
                <div class="mobile-menu__phone-number-icon"></div>
                +7 915 555-55-55
            </a>
            <a href="" class="mobile-menu__instagram-link"></a>
            <a href="" class="mobile-menu__telegram-link"></a>
        </div>

        <div class="mobile-menu__location">
            <div class="mobile-menu__location-icon"></div>
            <div class="mobile-menu__location-text">Московская область, ферма Ильинское, ул. Красного Знамени, стр.
                100
            </div>
        </div>

    </div>
</div>
<div class="menu-block menu-block_white block">
    <div class="block__body">
        <div class="menu-block__top-slice">
            <div class="menu-block__location">
                <div class="menu-block__location-icon"></div>
                Московская область, ферма Ильинское, ул. Красного Знамени, стр. 100
            </div>
            <a href="tel:+79671581113" class="menu-block__phone">
                <div class="menu-block__phone-icon"></div>
                +7 967 158-11-13
            </a>
            <a href="" class="menu-block__instagram-icon"></a>
            <a href="" class="menu-block__telegram-icon"></a>
            <div class="menu-block__mobile-button" onclick="mobileMenuAction()"></div>
        </div>
        <div class="menu-block__bottom-slice">
            <a href="index.html" class="menu-block__logo"></a>
            <div class="menu-block__menu-list">
                <a href="about-us" class="menu-block__menu-button">о нас</a>
                <a href="rooms.html" class="menu-block__menu-button">номера и цены</a>
                <a href="store" class="menu-block__menu-button">эко магазин</a>
                <a href="home-page/#gallery" class="menu-block__menu-button">фотогалерея</a>
                <a href="contacts" class="menu-block__menu-button menu-block__menu-button_active">контакты</a>
            </div>
            <div class="button" onclick="pupUp()">забронировать</div>
        </div>
    </div>
</div>
<div class="contacts-block block">
    <div class="block__body">
        <div class="contacts-block__left-side">
            <h2>Контакты</h2>
            <h3>Телефон:</h3>
            <p>+7 967 158-11-13</p>
            <h3>Почта:</h3>
            <p>angeldoma13@gmail.com</p>
            <h3>Как добраться:</h3>
            <p>Московская область, Шаховской район, близ деревни Рябинки</p>
        </div>
        <div class="contacts-block__right-side"></div>
    </div>
</div>
<footer class="footer-block block">
    <div class="block__body">
        <div class="footer-block__top-slice">
            <a href="index.html" class="footer-block__logo"></a>
            <div class="footer-block__menu-list">
                <a href="about-us" class="footer-block__menu-button">о нас</a>
                <a href="rooms" class="footer-block__menu-button">номера и цены</a>
                <a href="store" class="footer-block__menu-button">эко магазин</a>
                <a href="home-page/#gallery" class="footer-block__menu-button">фотогалерея</a>
                <a href="contacts" class="footer-block__menu-button">контакты</a>
            </div>
        </div>
        <div class="footer-block__bottom-slice">
            <a href="tel:+79155555555" class="footer-block__phone-text">
                <div class="footer-block__phone-icon"></div>
                +7 915 555-55-55</a>
            <div class="footer-block__instogram-icon"></div>
            <div class="footer-block__telegram-icon"></div>
            <div class="footer-block__location-text">
                <div class="footer-block__location-icon"></div>
                Московская область, ферма Ильинское, ул. Красного Знамени, стр. 100
            </div>
        </div>
    </div>
</footer>
<form class="pop-up" style="display: none" id="form-reserve">
    <div class="pop-up__body">
        <div class="pop-up__close" onclick="pupUp()"></div>
        <div class="pop-up__title">Вы можете оставить заявку на определенную дату и мы подберем для Вас лучшее предложение</div>
        <div class="pop-up__input-container">
            <div class="pop-up__input">
                <div class="pop-up__input__title">Ваше имя:</div>
                <input type="text" placeholder="Иван Иванов" required>
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Ваш телефон:</div>
                <input type="text" placeholder="+7 950-000-00-00" onfocus="formPhoneFocus(this)" required>
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Email:</div>
                <input type="email" placeholder="ecohotel@yandex.ru" required>
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Дата заезда</div>
                <input type="text" placeholder="06.12.2021" onchange="dateReserve(this)" required>
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Дата отъезда</div>
                <input type="text" placeholder="10.12.2021" onchange="dateReserve(this)" required>
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Количество взрослых</div>
                <div class="poup-up__count">
                    <div class="poup-up__count-minus-icon" onclick="increaceCount(this)" data-count="-">-</div>
                    <div class="poup-up__count-value" data-count-value="2">2</div> 
                    <div class="poup-up__count-plus-icon" onclick="increaceCount(this)" data-count="+">+</div>
                </div>
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Количество детей</div>
                <div class="poup-up__count">
                    <div class="poup-up__count-minus-icon" onclick="increaceCount(this)" data-count="-">-</div>
                    <div class="poup-up__count-value" data-count-value="2">2</div> 
                    <div class="poup-up__count-plus-icon" onclick="increaceCount(this)" data-count="+">+</div>
                </div>
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Дополнительные пожелания</div>
                <input type="text" placeholder="Введите текст">
            </div>
        </div>
        <button class="pop-up__button" onclick="" type="submit">забронировать</button>
    </div>
</form>
<?php wp_footer(); ?>
</body>
</html>