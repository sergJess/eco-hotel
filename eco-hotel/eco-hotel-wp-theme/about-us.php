<?php 
/*
Template name: About-us
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>О нас</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="mobile-menu">
    <div class="mobile-menu__body">
        <div class="mobile-menu__close" onclick="mobileMenuAction()"></div>
        <div class="mobile-menu__list">
            <a href="about-us" class="mobile-menu__item mobile-menu__menu-button_active">о нас</a>
            <a href="rooms" class="mobile-menu__item">номера и цены</a>
            <a href="store" class="mobile-menu__item">эко магазин</a>
            <a href="home-page/#gallery" class="mobile-menu__item">фотогалерея</a>
            <a href="contacts" class="mobile-menu__item">контакты</a>
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
<div class="menu-block block">
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
            <a class="menu-block__logo" href="home-page"></a>
            <div class="menu-block__menu-list">
                <a href="about-us" class="menu-block__menu-button menu-block__menu-button_active">о нас</a>
                <a href="rooms" class="menu-block__menu-button">номера и цены</a>
                <a href="store" class="menu-block__menu-button">эко магазин</a>
                <a href="home-page/#gallery" class="menu-block__menu-button">фотогалерея</a>
                <a href="contacts" class="menu-block__menu-button">контакты</a>
            </div>
            <div class="button button_menu_black" onclick="pupUp()">забронировать</div>
        </div>
    </div>
</div>
<div class="about-start-block block">
    <div class="block__body">
        <h1>Эко-отель Домбровских</h1>
        <p>это более 55 гектаров дикой природы с погружением в атмосферу настоящей сельской жизни...</p>
    </div>
</div>
<div class="about-block block">
    <div class="block__body">
        <h1>Единственный в мире эко-отель с уникальными целебными и оздоровительными травами, растущими в естественной
            среде обитания</h1>
        <p>В Эко-отеле Домбровских собственное производство натуральной косметики, целебные травы, природный мед, мыло,
            гидролаты, свечи — все это можно не только увидеть в живую и попробовать, но и получить мастер классы по
            выращиванию и домашнему производству</p>
    </div>
</div>
<div class="about-images-block block">
    <div class="block__body">
        <h1><b>Отель Домбровских</b> – является членом клуба природного земледелия</h1>
        <div class="dual-section">
            <div class="dual-section__left-slice">
                Мы развиваем экотуризм индивидуальных и семейных туров в малых группах, с очищением духа и тела,
                воспитанием
                любви к земле и природе. Экскурсии, просветительская деятельность, сад для терапии и многое другое ждет
                наших отдыхающих.
            </div>
            <div class="dual-section__right-slice">
                <div class="about-images-block__image" style="background-image: url('http://eco-hotel.melon.su/wp-content/uploads/2022/08/1-3.png')">
                    <div class="about-images-block__element-1"></div>
                </div>
            </div>
        </div>
        <div class="dual-section">
            <div class="dual-section__left-slice">
                <div class="about-images-block__image" style="background-image: url('http://eco-hotel.melon.su/wp-content/uploads/2022/08/2-3.png')">
                    <div class="about-images-block__element-2"></div>
                </div>
            </div>
            <div class="dual-section__right-slice">
                Можно заниматься рыбалкой, имеются пруды для купания и отдыха. Здесь находится производство натуральной
                косметики. Целебные травы, мед, природная косметика, мыло, гидролаты , свечи — все это можно найти в
                этом подворье.
            </div>
        </div>
        <div class="dual-section">
            <div class="dual-section__left-slice">
                Также проводятся Мастер-классы по работе с травами. Сушка и консервация; космецевтика полного цикла.
                Компостирование и вермикультура для собственных нужд.<br><br>Выращивание лекарственных трав, пчеловодство и
                производство продуктов на основе трав и продуктов пчеловодства.
            </div>
            <div class="dual-section__right-slice">
                <div class="about-images-block__image" style="background-image: url('http://eco-hotel.melon.su/wp-content/uploads/2022/08/3-3.png')">
                    <div class="about-images-block__element-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-block block">
    <div class="block__body">
        <div class="footer-block__top-slice">
            <a href="home-page" class="footer-block__logo"></a>
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