<?php 


?>

<!-- wp:template-part {"slug":"store","tagName":"header"} /-->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Эко Отель магазин 2022</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="mobile-menu">
    <div class="mobile-menu__body">
        <div class="mobile-menu__close" onclick="mobileMenuAction()"></div>
        <div class="mobile-menu__list">
            <a href="about.html" class="mobile-menu__item">о нас</a>
            <a href="rooms.html" class="mobile-menu__item">номера и цены</a>
            <a href="store.html" class="mobile-menu__item mobile-menu__menu-button_active">эко магазин</a>
            <a href="about.html" class="mobile-menu__item">фотогалерея</a>
            <a href="contacts.html" class="mobile-menu__item">контакты</a>
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
            <a href="#" class="menu-block__instagram-icon"></a>
            <a href="#" class="menu-block__telegram-icon"></a>
            <div class="menu-block__mobile-button"  onclick="mobileMenuAction()"></div>
        </div>
        <div class="menu-block__bottom-slice">
            <a class="menu-block__logo" href="index.html"></a>
            <div class="menu-block__menu-list">
                <a href="about.html" class="menu-block__menu-button">о нас</a>
                <a href="rooms.html" class="menu-block__menu-button">номера и цены</a>
                <a href="store.html" class="menu-block__menu-button menu-block__menu-button_active">эко магазин</a>
                <a href="about.html" class="menu-block__menu-button">фотогалерея</a>
                <a href="contacts.html" class="menu-block__menu-button">контакты</a>
            </div>
            <div class="button" onclick="pupUp()">забронировать</div>
        </div>
    </div>
</div>
<div class="store-block block">
    <div class="block__body">
        <h2>В нашем ЭКО магазине представлены товары созданные природой</h2>
        <div class="store">
            <div class="store__item">
                <img class="store__item-image" src="images/store-page/venik.png">
                <div class="store__item-title">Барбарис, корень</div>
                <div class="store__item-text">Пряно-кислый аромат. Для плова, мясных блюд, компотов. Барбарис повышает
                    аппетит. Часто входит в состав леденцов.
                </div>
                <div class="store__item-bottom">
                    <div class="store__item-price">100 р.</div>
                    <div class="button" onclick=popUpStoreOpen()>заказать</div>
                </div>
            </div>
            <div class="store__item">
                <img class="store__item-image" src="images/store-page/venik.png">
                <div class="store__item-title">Барбарис, корень</div>
                <div class="store__item-text">Пряно-кислый аромат. Для плова, мясных блюд, компотов. Барбарис повышает
                    аппетит. Часто входит в состав леденцов.
                </div>
                <div class="store__item-bottom">
                    <div class="store__item-price">100 р.</div>
                    <div class="button" onclick=popUpStoreOpen()>заказать</div>
                </div>
            </div>
            <div class="store__item">
                <img class="store__item-image" src="images/store-page/venik.png">
                <div class="store__item-title">Барбарис, корень</div>
                <div class="store__item-text">Пряно-кислый аромат. Для плова, мясных блюд, компотов. Барбарис повышает
                    аппетит. Часто входит в состав леденцов.
                </div>
                <div class="store__item-bottom">
                    <div class="store__item-price">100 р.</div>
                    <div class="button" onclick=popUpStoreOpen()>заказать</div>
                </div>
            </div>
            <div class="store__item">
                <img class="store__item-image" src="images/store-page/venik.png">
                <div class="store__item-title">Барбарис, корень</div>
                <div class="store__item-text">Пряно-кислый аромат. Для плова, мясных блюд, компотов. Барбарис повышает
                    аппетит. Часто входит в состав леденцов.
                </div>
                <div class="store__item-bottom">
                    <div class="store__item-price">100 р.</div>
                    <div class="button" onclick=popUpStoreOpen()>заказать</div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-block block">
    <div class="block__body">
        <div class="footer-block__top-slice">
            <a href="index.html" class="footer-block__logo"></a>
            <div class="footer-block__menu-list">
                <a href="about.html" class="footer-block__menu-button">о нас</a>
                <a href="rooms.html" class="footer-block__menu-button">номера и цены</a>
                <a href="store.html" class="footer-block__menu-button">эко магазин</a>
                <a href="about.html" class="footer-block__menu-button">фотогалерея</a>
                <a href="contacts.html" class="footer-block__menu-button">контакты</a>
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
        <button class="pop-up__button" onclick="()=>{console.log('Jess')}" type="submit">забронировать</button>
    </div>
</form>

<div class="pop-up-store">
  <div class="pop-up-store-inner">
    <div class="pop-up-store-close" onclick=popUpStoreClose()></div>
    <h3 class="pop-up-store-title">Напишите ваш номер телефона, мы с вами свяжемся</h3>
    <input class="pop-up-store__phone" type="text" placeholder="Введите номер телефона" oninput=popUpStorePhone(this)>
    <button class="button" type="submit" onclick=popUpStoreSubmit(this)>Отправить</button>
  </div>
</div>
<?php wp_footer(); ?>
</body>

</html>