<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Эко отель</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="mobile-menu">
    <div class="mobile-menu__body">
        <div class="mobile-menu__close" onclick="mobileMenuAction()"></div>
        <div class="mobile-menu__list">
            <a href="about.html" class="mobile-menu__item">о нас</a>
            <a href="rooms.html" class="mobile-menu__item">номера и цены</a>
            <a href="store.html" class="mobile-menu__item">эко магазин</a>
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
            <div class="menu-block__logo menu-block__menu-button_active"></div>
            <div class="menu-block__menu-list">
                <a href="about.html" class="menu-block__menu-button">о нас</a>
                <a href="rooms.html" class="menu-block__menu-button">номера и цены</a>
                <a href="store.html" class="menu-block__menu-button">эко магазин</a>
                <a href="about.html" class="menu-block__menu-button">фотогалерея</a>
                <a href="contacts.html" class="menu-block__menu-button">контакты</a>
            </div>
            <div class="button" onclick="pupUp()">забронировать</div>
        </div>
    </div>
</div>
<div class="start-block block">
    <div class="block__body">
        <h1><span class="padding-between-letters">эко-отель</span><br><b>ДОМБРОВСКИХ</b></h1>
        <a class="button" href="about.html">подробнее</a>
        <div class="start-block__right-bottom-text">Дикая природа с погружением в атмосферу нетронутой экосистемы...
        </div>
    </div>
</div>
<div class="info-block block">
    <div class="block__body">
        <div class="info-block__slice-left">
            <div class="info-block__element"></div>
            <div class="gallery">
                <div class="gallery__top-slice">
                    <div class="gallery__images swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery__images-item" style="background-image: url('images/Block-2-frist-gallery-image.png');"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery__images-item" style="background-image: url('images/Block-2-frist-gallery-image.png');"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery__images-item" style="background-image: url('images/Block-2-frist-gallery-image.png');"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery__images-item" style="background-image: url('images/Block-2-frist-gallery-image.png');"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery__bottom-slice">
                    <div class="gallery__left-button"></div>
                    <div class="gallery__points">
                        <div class="gallery__point"></div>
                        <div class="gallery__point"></div>
                        <div class="gallery__point"></div>
                    </div>
                    <div class="gallery__right-button"></div>
                </div>
            </div>
        </div>
        <div class="info-block__slice-right">
            <b>Эко-отель Домбровских</b> - это дикая природа с погружением в атмосферу настоящей сельской жизни. <br><br>

            <b>Единственный в мире эко-отель с уникальными целебными травами,</b> растущими в естественной среде
            обитания. <br><br>

            <b>В эко-отеле Домбровских собственное производство натуральной косметики, целебных трав, природного мёда,
                мылп, гидролатов, свечей</b> — все это можно не только увидеть в живую и попробовать, но и получить
            мастер
            классы по выращиванию и домашнему производству.
        </div>
    </div>
</div>
<div class="info-block-2 block">
    <div class="block__body">
        <h2>Проживание</h2>
        <div class="info-block-2__element"></div>
        <p>Мы предоставляем комфортабельные домики с размещением от 2-х до 6 человек.
            Все дома выполнены из экологических материалов. Комнаты обогреваются отходами с лесопилки.
            <br><br>
            Внедрены безопасные технологии для экономии воды и света
            . Имеется все необходимое оборудование для приготовления пищи на костре
        </p>
        <div class="info-block-2__buttons">
            <a class="button" href="rooms.html">подробнее</a>
            <div class="button button_white" onclick="pupUp()">забронировать</div>
        </div>
    </div>
</div>
<div class="doing-block block">
    <div class="block__body">
        <div class="doing-block__section-top">
            <div class="doing-block__section-top-left-slice">
                <h2>Чем заняться?</h2>
                <p>
                    <b>На территории эко-отеля находится мастерская,</b> где можно принять участие в мастер классах , а так
                    же приобрести уже готовые чайные сборы, травы, натуральную косметику, мыло свечи , лечебные
                    настойки ручной работы
                    .
                    <br><br>
                    <b>Мастерская Dom Angela</b> - это атмосфера, образ жизни и философия натурального от хозяйки Анжелы
                    Домбровской.
                    Более 10 лет я обучалась травничеству, ароматерапии, парфюмерии, изготовлению натуральной
                    косметики, мыловарению. <b>Сейчас я Создаю индивидуальную косметику и готова делиться знаниями с
                    вами.</b>
                    <br><br>
                    <b>Живя на Земле я научилась сама и хочу научить вас, как жить в гармонии с природой,</b> создавать
                    свою натуральную природную косметику: живое мыло, домашние кремы, выращивать , собирать и
                    заготавливать целебные травы, изготавливать натуральные лечебные средства и просто вдохновляться
                    всем тем, что нам дарит природа.
                    <br><br>
                    <b>Моя мастерская - это не только получение знаний, это изменение стиля жизни и приобретение
                        совершенно новой философии, нового взгляда на мир.</b>
                    У нас вы можете возвратится к истокам, и протянуть руку природе: гулять в лесу, собирать грибы ,
                    травы, ягоды, вдыхать свежий воздух , купаться в водоемах, ходить босиком по траве, наслаждаться
                    тишиной и быть просто очень и очень счастливыми.
                </p>
                <div class="doing-block__sub-text sub-text">
                    С Уважением, Домбровская Анжела
                    <br><br>
                    Руководитель эко отеля
                </div>
            </div>
            <div class="doing-block__section-top-right-slice">
                <div class="doing-block__image">
                    <div class="doing-block__element-1"></div>
                    <div class="doing-block__element-2"></div>
                    <div class="doing-block__element-3"></div>
                </div>
                <div class="doing-block__mobile-sub-text">
                    С Уважением, Домбровская Анжела
                    <br><br>
                    Руководитель эко отеля
                </div>
            </div>
        </div>
        <div class="doing-block__section-bottom">
            <div class="doing gallery desktop" id="doing">
                <div class="doing__top-slice gallery__top-slice">
                    <div class="doing__left-button gallery__left-button"></div>
                    <div class="doing__images">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="doing__images-item" style="background-image: url('images/doing-block-slider/1.png');"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doing__images-item" style="background-image: url('images/doing-block-slider/2.png');"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doing__images-item" style="background-image: url('images/doing-block-slider/3.png');"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doing__images-item" style="background-image: url('images/doing-block-slider/2.png');"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doing__images-item" style="background-image: url('images/doing-block-slider/1.png');"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doing__images-item" style="background-image: url('images/doing-block-slider/3.png');"></div>
                            </div>
                        </div>
                    </div>
                    <div class="doing__right-button gallery__right-button"></div>
                </div>
                <div class="doing__bottom-slice Gallery__bottom-slice">
                    <div class="doing__mobile-left-button gallery__mobile-left-button"></div>
                    <div class="doing__points gallery__points">
                        <div class="doing__point gallery__point"></div>
                        <div class="doing__point gallery__point"></div>
                        <div class="doing__point gallery__point"></div>
                    </div>
                    <div class="doing__mobile-right-button gallery__mobile-right-button"></div>
                </div>
            </div>
            <div class="gallery mobile g2">
                <div class="gallery__top-slice">
                    <div class="gallery__images swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><div class="doing__images-item gallery__images-item" style="background-image: url('images/doing-block-slider/1.png');"></div></div>
                            <div class="swiper-slide"><div class="doing__images-item gallery__images-item" style="background-image: url('images/doing-block-slider/2.png');"></div></div>
                            <div class="swiper-slide"><div class="doing__images-item gallery__images-item" style="background-image: url('images/doing-block-slider/3.png');"></div></div>
                            <div class="swiper-slide"><div class="doing__images-item gallery__images-item" style="background-image: url('images/doing-block-slider/1.png');"></div></div>
                            <div class="swiper-slide"><div class="doing__images-item gallery__images-item" style="background-image: url('images/doing-block-slider/2.png');"></div></div>
                            <div class="swiper-slide"><div class="doing__images-item gallery__images-item" style="background-image: url('images/doing-block-slider/3.png');"></div></div>
                        </div>
                    </div>
                </div>
                <div class="gallery__bottom-slice">
                    <div class="gallery__left-button"></div>
                    <div class="gallery__points">
                        <div class="gallery__point"></div>
                        <div class="gallery__point"></div>
                        <div class="gallery__point"></div>
                    </div>
                    <div class="gallery__right-button"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="programs-block block">
    <div class="block__body">
        <div class="programs-block__top-section">
            <div class="programs-block__top-section-left-slice">
                <h2>Наши программы и мероприятия</h2>
                <p><b>У нас можно заказать и посетить мастер классы:
                    <br><br>
                    «Тихая Красота»</b> - о том как осознанно заботится о себе и окружающем нас мире. Где я расскажу о
                    натуральной косметике и других шагах для нашего баланса. </p>
            </div>
            <div class="programs-block__top-section-right-slice">
                <div class="programs-block__green-element"></div>
                <div class="programs-block__black-element">
                    Вы узнаете что такое медленная красота и как можно найти тихое счастье здесь и сейчас...
                    Познакомимся с ингредиентами, травами, растительными и эфирными маслами и их свойствами.
                </div>
                <div class="programs-block__brackets"></div>
            </div>
        </div>
        <div class="programs-block__bottom-section">
            <div class="programs-block__list">
                <div class="programs-block__list-item programs-block__list-item_active">тихая красота</div>
                <div class="programs-block__list-item">мастер-классы</div>
                <div class="programs-block__list-item">йога</div>
                <div class="programs-block__list-item">ретриты</div>
                <div class="programs-block__list-item">дикая рыбалка</div>
                <div class="programs-block__more" onclick="moreOpen(this)">
                    <div class="programs-block__more-body" style="display: none">

                    </div>
                    Посмотреть все
                </div>
            </div>
        </div>
    </div>
</div>
<div class="images-block block">
    <div class="block__body">
        <div class="images-block__icons-list">
            <div class="images-block__icons-list-icon"
                 style="background-image: url('images/lotion 1.png')">Изготовление
                гидролатов и лосьонов для очищения и тонизирования
                кожи
            </div>
            <div class="images-block__icons-list-icon"
                 style="background-image: url('images/sprites/icons/block-info-2-icons/cream-2.png')">Изготовление
                средств вокруг глаз и для лица(маски, патчи и т.д.)
            </div>
            <div class="images-block__icons-list-icon"
                 style="background-image: url('images/sprites/icons/block-info-2-icons/perfume-1.png')">Изготовление
                твердых духов для нее и для него, диффузоры для
                освежения воздуха
            </div>
            <div class="images-block__icons-list-icon"
                 style="background-image: url('images/sprites/icons/block-info-2-icons/cream-1.png')">Изготовление крема
                для любого типа кожи(на выбор)
            </div>
            <div class="images-block__icons-list-icon"
                 style="background-image: url('images/sprites/icons/block-info-2-icons/lotion-1.png')">Изготовление
                средств по уходу за телом и ногами
                (массажные плитки, маски, баттеры, бальзамы, массажные свечи)
            </div>
            <div class="images-block__icons-list-icon"
                 style="background-image: url('images/sprites/icons/block-info-2-icons/mushroom-1.png')">Изготовление
                грибной косметики
            </div>
            <div class="images-block__icons-list-icon"
                 style="background-image: url('images/sprites/icons/block-info-2-icons/soap-1.png')">Изготовление
                твердого мыла
            </div>
            <div class="images-block__icons-list-icon"
                 style="background-image: url('images/sprites/icons/block-info-2-icons/liquid-soap-1.png')">Изготовление
                жидкого мыла
            </div>
            <div class="images-block__icons-list-icon"
                 style="background-image: url('images/sprites/icons/block-info-2-icons/candle-1.png')">Изготовление
                свечей с травами
            </div>
        </div>
        <div class="images-block__big-text">

        </div>
        <div class="images-block__separator"></div>
        <h2 class="images-block__start-title">У нас можно познакомится и погрузится в мир дикорастущих трав в живой
            природе</h2>
        <p class="images-block__start-text">
            Узнать про их полезные свойства и применение даров природы для молодости,
            красоты и здоровья и для этого у нас есть мастер классы:
        </p>

        <div class="images-block__section images-block__section_1">
            <div class="images-block__section-left">
                <div class="images-block__image-1"
                     style="background-image:url('images/info-block-2-images/1.png');"></div>
                <div class="images-block__header images-block__mobile">Три дня Иван-чая
                </div>
                <div class="images-block__text images-block__mobile">Вы познакомитесь с этим удивительно полезным
                    растением, научитесь его правильно собирать. заготавливать, сушить, ферментировать и конечно же
                    изготавливать тот самый знаменитый и полезный капорский чай.
                </div>
            </div>
            <div class="images-block__section-right">
                <div class="images-block__image-2"
                     style="background-image:url('images/info-block-2-images/2.png');"></div>
                <div class="images-block__header">Три дня Таволги
                </div>
                <div class="images-block__text">Вы познакомитесь с этим удивительно полезным растением, научитесь
                    правильно собирать, ферментировать , изготовим мацерат и гидролат.

                </div>
            </div>
        </div>

        <div class="images-block__section images-block__desktop">
            <div class="images-block__section-left">
                <div class="images-block__header">Три дня Иван-чая
                </div>
                <div class="images-block__text">Вы познакомитесь с этим удивительно полезным растением, научитесь его
                    правильно собирать. заготавливать, сушить, ферментировать и конечно же изготавливать тот самый
                    знаменитый и полезный капорский чай.
                </div>
            </div>
        </div>

        <div class="images-block__section images-block__section_2">
            <div class="images-block__section-left">
                <div class="images-block__image-3"
                     style="background-image:url('images/info-block-2-images/3.png');"></div>
            </div>
            <div class="images-block__section-right">
                <div class="images-block__header">Изготовление косметических средств из трав для омоложения,
                    оздоравления и лечения
                </div>
                <div class="images-block__text">Вы узнаете и научитесь получать из растений биологически полезные
                    вещества различными способами (масляным, водным, спиртовым медовым, уксусным) что на порядок улучшит
                    эффективность ваших домашних уходовых средств.
                </div>
            </div>
        </div>

        <div class="images-block__section images-block__section_3">
            <div class="images-block__section-left">
                <div class="images-block__image-4"
                     style="background-image:url('images/info-block-2-images/4.png');"></div>
            </div>
            <div class="images-block__section-right">
                <div class="images-block__header">Изготовление гидролата из сезонных трав
                </div>
                <div class="images-block__text">Примете участие в процессе изготовления этого удивительно полезного
                    эликсира, узнаете о его полезных свойствах и способах применения для омоложения и оздаровления.
                </div>
            </div>
        </div>


        <div class="images-block__image-5">
            <div class="images-block__green-element"></div>
        </div>

        <h2 class="images-block__bottom-section-title">Мастер-класс “Чайные сборы”</h2>
        <p class="images-block__bottom-section-text">Для тех кто хочет использовать полезные свойства трав ежедневно,
            где вы познакомитесь с травными сборами, технологией приготавления ферментированного чая из трав, листьев
            плодовых и ягодных растений.
            Узнаете о действии доступных трав, об особенностях сотавления сборов для чая, как сочетать травы и какие
            лучше не смешивать.
        </p>

    </div>
</div>
<div class="gallery-block block">
    <div class="block__body">
        <h2>Фото и видео</h2>
        <div class="gallery-block__photos-and-videos">
            <div class="gallery-block__photos-and-videos-right">
                <div class="gallery-block__photo"
                     style="background-image:url('images/photo-and-video-block-images/1.png');"></div>
                <div class="gallery-block__photo"
                     style="background-image:url('images/photo-and-video-block-images/2.png');"></div>
            </div>
            <div class="gallery-block__photos-and-videos-left">
                <div class="gallery-block__photo"
                     style="background-image:url('images/photo-and-video-block-images/3.png');"></div>
                <div class="gallery-block__photo"
                     style="background-image:url('images/photo-and-video-block-images/4.png');"></div>
            </div>
        </div>
        <div class="gallery">
            <div class="gallery__top-slice">
                <div class="gallery__images swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><div class="gallery__images-item" style="background-image: url('images/photo-and-video-block-images/1.png');"></div></div>
                        <div class="swiper-slide"><div class="gallery__images-item" style="background-image: url('images/photo-and-video-block-images/2.png');"></div></div>
                        <div class="swiper-slide"><div class="gallery__images-item" style="background-image: url('images/photo-and-video-block-images/3.png');"></div></div>
                        <div class="swiper-slide"><div class="gallery__images-item" style="background-image: url('images/photo-and-video-block-images/4.png');"></div></div>
                    </div>
                </div>
            </div>
            <div class="gallery__bottom-slice">
                <div class="gallery__left-button"></div>
                <div class="gallery__points">
                    <div class="gallery__point"></div>
                    <div class="gallery__point"></div>
                    <div class="gallery__point"></div>
                    <div class="gallery__point"></div>
                    <div class="gallery__point"></div>
                    <div class="gallery__point"></div>
                </div>
                <div class="gallery__right-button"></div>
            </div>
        </div>
        <div class="button button_white">смотреть все</div>
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

<div class="pop-up" style="display: none">
    <div class="pop-up__body">
        <div class="pop-up__close" onclick="pupUp()"></div>
        <div class="pop-up__title">Вы можете оставить заявку на определенную дату и мы подберем для Вас лучшее предложение</div>
        <div class="pop-up__input-container">
            <div class="pop-up__input">
                <div class="pop-up__input__title">Ваше имя:</div>
                <input type="text" placeholder="Иван Иванов">
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Ваш телефон:</div>
                <input type="text" placeholder="+7 950-000-00-00">
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Email:</div>
                <input type="text" placeholder="ecohotel@yandex.ru">
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Дата заезда</div>
                <input type="text" placeholder="06.12.2021">
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Дата отъезда</div>
                <input type="text" placeholder="10.12.2021">
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Количество взрослых</div>
                <div class="poup-up__count">
                    <div class="poup-up__count-minus-icon">-</div>
                    2
                    <div class="poup-up__count-plus-icon">+</div>
                </div>
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Количество детей</div>
                <div class="poup-up__count">
                    <div class="poup-up__count-minus-icon">-</div>
                    2
                    <div class="poup-up__count-plus-icon">+</div>
                </div>
            </div>
            <div class="pop-up__input">
                <div class="pop-up__input__title">Дополнительные пожелания</div>
                <input type="text" placeholder="Введите текст">
            </div>
        </div>
        <div class="pop-up__button">забронировать</div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>