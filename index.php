<!DOCTYPE html>

<html lang="sv">

<head>
    <!--Genenal Config-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Style -->
    <link rel="stylesheet" href="./styles/styles.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans&display=swap" rel="stylesheet">

    <title>Frontend test</title>
    
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
            integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE="
            crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function(){
            $('#open-menu').click(function(){
                $('.menu').addClass('active');
            });
            $('#close-menu').click(function(){
                $('.menu').removeClass('active');
            });
        });
    </script>

</head>

<body>

    <!-- Menu content -->
    <aside class="menu">
        <nav class="menu__navbar" role="navigation">
            <div class="menu__navbar__logo">
                <img src="./styles/images/logo.png" alt="Logo">
            </div>
            <div class="menu__navbar__btn">
                <button type="button" class="menu__navbar__btn--close-menu" id="close-menu">
                    <span>Lukk</span>
                    <div class="close-icon">
                        <img src="./styles/icons/close.png" alt="bars">
                    </div>
                </button>
            </div>
        </nav>
        <section class="menu__content">

            <div class="menu__content__items">
                <div class="menu__content__items__box">
                    <div class="menu__content__items__box__title">
                        <span class="title-items">Skogtjenester</span>
                    </div>
                    <div class="menu__content__items__box__wr">
                        <span class="item-option">Skogbruksplanlegging</span>
                        <span class="item-option">Skogsdrift, hogst og tømmersalg</span>
                        <span class="item-option">Hjelp til tømmeroppgjør</span>
                        <span class="item-option">Skogkultur, planting og pleie</span>
                        <span class="item-option">Frivillig vern av skog</span>
                        <span class="item-option">Reguleringsplan for areal</span>
                    </div>
                </div>
                <div class="menu__content__items__box">
                    <div class="menu__content__items__box__title">
                        <span class="title-items">Bli andelseier</span>
                    </div>
                    <div class="menu__content__items__box__wr">
                        <span class="item-option">Skogeierlag</span>
                        <span class="item-option">Skogforsikring</span>
                        <span class="item-option">Tømmertransport</span>
                        <span class="item-option">Kartlegging av eiendom</span>
                    </div>
                </div>
                <div class="menu__content__items__box">
                    <div class="menu__content__items__box__title">
                        <span class="title-items">Bærekraft og miljø</span>
                    </div>
                    <div class="menu__content__items__box__wr">
                        <span class="item-option">Sertifisering av tømmer</span>
                        <span class="item-option">Miljøkrav</span>
                        <span class="item-option">Biologisk mangfold</span>
                        <span class="item-option">Skog og klima</span>
                    </div>
                </div>
            </div>

            <div class="menu__content__bottom">
                <div class="menu__content__bottom__box">
                    <div class="menu__content__bottom__box__items">
                        <div class="menu__content__bottom__box__items__wr">
                            <span class="title-items">Finn din skogbruksleder</span>
                            <span class="title-items">Om Allskog</span>
                        </div>
                        <div class="menu__content__bottom__box__items__wr">
                            <span class="title-items">Arrangementer</span>
                            <span class="title-items">Aktuelt</span>
                        </div>
                    </div>
                    <div class="menu__content__bottom__box__button">
                        <button type="button" class="menu__content__bottom__box__button__login">
                            <span>Logg inn</span>
                            <div class="menu__content__bottom__box__button__login--icon">
                                <img src="./styles/icons/icon_profile_circled.png" alt="profile">
                            </div>
                        </button>
                    </div>
                </div>
            </div>

        </section>
    </aside>

    <header>
        <!-- Navbar section -->
        <nav class="navbar" role="navigation">
            <div class="navbar__logo">
                <a href="/"><img src="./styles/images/logo.png" alt="logo"></a>
            </div>
            <div class="navbar__actions">
                <button type="button" class="navbar__actions__btn__search">
                    <span>Søk</span>
                    <div class="navbar__actions__btn__search--icon">
                       <img src="./styles/icons/icon_search.png" alt="search">
                    </div>
                </button>
                <div class="navbar__actions__btn">
                    <button type="button" class="navbar__actions__btn__login">
                        <span>Logg inn</span>
                        <div class="navbar__actions__btn__login--icon">
                            <img src="./styles/icons/icon_profile_circled.png" alt="profile">
                        </div>
                    </button>
                </div>
                <div class="navbar__actions__btn">
                    <button type="button" class="navbar__actions__btn__menu" id="open-menu">
                        <span>Meny</span>
                        <div class="navbar__actions__btn__menu--icon">
                            <img src="./styles/icons/hamburger.png" alt="bars">
                        </div>
                    </button>
                </div>
            </div>
        </nav>
        <!-- End of Navbar section -->
    </header>

    <main>
        <!-- Hero section -->
        <section class="hero">
            <div class="hero__container">
                <div class="hero__container--center-img">
                    
                </div>
                <div class="hero__container__center">

                    <div class="hero__container__center__title">
                        <h1>Allskog er et samvirke av og for skogeiere</h1>
                        <h4>Vi er en robust organisasjon med høy kompetanse innen alle skogtjenester du trenger som skogeier.</h4>
                    </div>

                    <div class="hero__container__center__list">

                        <div class="hero__container__center__list__col">
                            <div class="hero__container__center__list__col--item">
                                <img src="./styles/icons/arrow.png">
                                <h6>Skogtjenester</h6>
                            </div>
                            <div class="hero__container__center__list__col--item">
                                <img src="./styles/icons/arrow.png">
                                <h6>Veiledning</h6>
                            </div>
                            <div class="hero__container__center__list__col--item"> 
                                <img src="./styles/icons/arrow.png">
                                <h6>Bli andelseier</h6>
                            </div>
                            <div class="hero__container__center__list__col--item">
                                <img src="./styles/icons/arrow.png">
                                <h6>Finn skogbruksleder</h6>
                            </div>
                        </div>

                        <div class="hero__container__center__list__col">
                            <div class="hero__container__center__list__col--item">
                                <img src="./styles/icons/arrow.png">
                                <h6>Om Allskog</h6>
                            </div>
                            <div class="hero__container__center__list__col--item">
                                <img src="./styles/icons/arrow.png">
                                <h6>Bærekraft og miljø</h6>
                            </div>
                            <div class="hero__container__center__list__col--item">
                                <img src="./styles/icons/arrow.png">
                                <h6>Arrangementer</h6>
                            </div>
                            <div class="hero__container__center__list__col--item">
                                <img src="./styles/icons/arrow.png">
                                <h6>Aktuelt</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End of Hero section -->

        <!-- Info section -->
        <section class="info-sections">

             <!-- Numbers section -->
            <section class="numbers">
                <div class="numbers__container">
                    <div class="numbers__container__box">
                    <div class="numbers__container__box--item">
                        <span class="main-number">70</span>
                    </div>
                    <div class="numbers__container__box--item">
                        <span class="desc-number">skogeierlag</span>
                    </div>
                    </div>
                    <div class="numbers__container__box">
                    <div class="numbers__container__box--item">
                        <span class="main-number">7600</span>
                    </div>
                    <div class="numbers__container__box--item">
                        <span class="desc-number">andelseiere</span>
                    </div>
                    </div>
                    <div class="numbers__container__box">
                    <div class="numbers__container__box--item">
                        <span class="main-number">1 million</span>
                    </div>
                    <div class="numbers__container__box--item">
                        <span class="desc-number">m3 tømmer per år</span>
                    </div>
                    </div>
                </div>
                <div class="numbers__carousel">
                  <div class="numbers__carousel__img">
                    <img src="./styles/icons/carousel.png" alt="numbers">
                  </div>
                </div>
            </section>
            <!-- End of Numbers section -->

            <!-- Search section -->
            <section class="search">
                <div class="search__description">
                    <h3>Finn din skogbruksleder</h3>
                    <p>Søk etter postnummer, region eller fylke</p>
                </div>
                <div class="search__input">
                    <input type="text" placeholder="Skriv søkeord">
                    <div class="search__input__btn">
                        <button type="button">
                            <span>Søk</span>
                            <div class="search__input__btn__img">
                                <img src="./styles/icons/icon_search_white.png" alt="search">
                            </div>
                        </button>
                    </div>
                </div>
            </section>
            <!-- End of Search section -->

            <!-- Wood section -->
            <section class="wood">
            <div class="wood__container">
                <figure>
                </figure>
                <div class="wood__container--box">
                    <h3>Lyst til å bli andelseier i </br>Allskog?</h3>
                    <p>Hvis du eier skog, kan du melde deg inn i Allskog. Da blir du medeier av skogfellesskapet i Norge.</p>
                    <a><img src="./styles/icons/arrow.png"></a>
                </div>
            </div>
            </section>
            <!-- End of Wood section -->

            <!-- Info01 section -->
            <section class="info01">
                <div class="info01__container">
                <div class="info01__container__box">
                    <h4>Skal du plante ny skog?</h4>
                    <div class="info01__container__box--desc">
                        <p>Etter hogst skal det plantes innen tre år. Skal du plante selv denne sesongen, må du bestille planter innen 15. april.</p>
                        <img src="./styles/icons/arrow.png">
                    </div>
                </div>
                <div class="info01__container__box">
                    <h4>Er skogen moden for hogst? Avtal hogst nå.</h4>
                    <div class="info01__container__box--desc">
                        <p>Vurderer du å ta ut tømmer fra skogen din? Ta gjerne en prat med en av våre dyktige skogbruksledere. Fra oss i Allskog får du solid veiledning, basert på skogfaglig erfaring og kunnskap.</p>
                        <img src="./styles/icons/arrow.png">
                    </div>
                </div>
                </div>
            </section>
            <!-- End of Info01 section -->

            <!-- Info02 section -->
            <section class="info02">
                <div class="info02__container">
                <h3>Nyheter</h3>
                <div class="info02__container__wr">
                    <div class="info02__container__wr__box">
                        <figure class='fig01'>
                            <img src="./styles/images/pic01.png" alt="pic-01">
                        </figure>
                        <div class="info02__container__wr__box__desc">
                            <div class="info02__container__wr__box__desc--column">
                                <h5>17.april 2023</h5>
                                <h4>Går med rekordoverskudd: – Skogeiere har vært lojale til samvirket</h4>
                            </div>
                            <p>Allskog legger bak seg et av mest innbringende år noensinne som konsern. For femte år på rad kan 7 500 skogeiere nord for Stad og Dovre få utbetalt utbytte fra samvirket.</p>
                            <img src="./styles/icons/arrow.png">
                        </div>
                    </div>
                    <div class="info02__container__wr__box">
                        <figure class='fig02'>
                            <img src="./styles/images/pic02.png" alt="pic-02">
                        </figure>
                        <div class="info02__container__wr__box__desc">
                            <div class="info02__container__wr__box__desc--column">
                                <h5>17.april 2023</h5>
                                <h4>Bruk rabatten din på kurs i norsk pefc skogstandard</h4>
                            </div>
                            <p>Skal du hogge selv og levere tømmer? Nå får alle som driver i skogen tilbud om kurs i den nye skogstandarden. Som andelseier i ALLSKOG får du kurset til rabattert pris.</p>
                            <img src="./styles/icons/arrow.png">
                        </div>
                    </div>
                    <div class="info02__container__wr__box">
                        <figure class='fig03'>
                            <img src="./styles/images/pic03.png" alt="pic-03">
                        </figure>
                        <div class="info02__container__wr__box__desc">
                            <div class="info02__container__wr__box__desc--column">
                                <h5>17.april 2023</h5>
                                <h4>Dette bør du vite om nye miljøhensyn i skogen</h4>
                            </div>
                            <p>Alt tømmer som ALLSKOG omsetter, er miljøsertifisert etter Norsk PEFC Skogstandard. Industrien og for forbrukerne skal vite at virket kommer fra skog drevet på bærekraftig vis.</p>
                            <img src="./styles/icons/arrow.png">
                        </div>
                    </div>
                </div>
                <div class="info02__container--btn">
                    <button type="button">
                        <span>Se alle nyheter</span>
                    </button>
                </div>
                </div>
            </section>
            <!-- End of Info02 section -->

            <!-- Info03 section -->
            <section class="info03">
                <div class="info03__container">
                    <h3>Kommende arrangementer</h3>
                    <div class="info03__container__wr">
                        <div class="info03__container__wr__box">
                        <div class="info03__container__wr__box__box01">
                            <span>9. mai</span>
                            <p>Temakveld: Etablering av nytt sagbruk i Vefsn</p>
                        </div>

                        <div class="info03__container__wr__box__box02">
                            <p>Vefsn skogeierlag inviterer til temakveld, etablering av nytt sagbruk i Vefsn.</p>
                            <div class="info03__container__wr__box__box02__local-date">
                                <div class="local-date-wr">
                                    <img src="./styles/icons/local.png">
                                    <p class="local">Mosjøen videregående skole avd. Marka (Landbruksskolen)<p>
                                </div>
                                <div class="local-date-wr">
                                    <img src="./styles/icons/calendar.png">
                                    <p class="date">9. mai<p>
                                </div>
                                <div class="local-date-wr">
                                    <img src="./styles/icons/clock.png">
                                    <p class="time">Kl. 19.00 - 21.00<p>
                                </div>
                            </div>
                        </div>

                        <div class="info03__container__wr__box__box03">
                            <img src="./styles/icons/arrow.png">
                        </div>
                    
                        </div>
                        <div class="info03__container__wr__box">
                        <div class="info03__container__wr__box__box01">
                            <span>24. -25. mai</span>
                            <p>Elgbeitetaksering i Hattfjelldal, 24. og 25. mai 2023</p>
                        </div>

                        <div class="info03__container__wr__box__box02">
                            <p>Kurset bygger på «Veileder og standard for taksering av elgbeite i skog» – utviklet av Skogkurs</p>
                            <div class="info03__container__wr__box__box02__local-date">
                            <div class="local-date-wr">
                                <img src="./styles/icons/local.png">
                                <p class="local">Fjellfolkets Hus, Adr. Hattfjelldalsvollen 1, Hattfjelldal.<p>
                            </div>
                            <div class="local-date-wr">
                                <img src="./styles/icons/calendar.png">
                                <p class="date">Onsdag 24. mai og torsdag 25. mai<p>
                            </div>
                            <div class="local-date-wr">
                                <img src="./styles/icons/clock.png">
                                <p class="time">Kl. 09.00-15.00 begge dager<p>
                            </div>
                            </div>
                        </div>

                        <div class="info03__container__wr__box__box03">
                            <img src="./styles/icons/arrow.png">
                        </div>
                        </div>
                    </div>
                    <div class="info03__container--btn">
                        <button type="button">
                            <span>Se alle arrangementer</span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- End of Info03 section -->

        </section>
        <!-- End of Info section -->
    </main>

    <footer>
        <!-- Footer section -->
        <div class="footer__logo">
            <a href="/">
                <img src="./styles/images/logo.png" alt="logo">
            </a>
        </div>

        <div class="footer__data">
            <div class="footer__data__address-contact">
                <h6>Adresse</h6>
                <div class="footer__data__address-contact__wr">
                    <p>Ingvald Ystgaards vei 13A</p>
                    <p>7047 Trondheim</p>
                </div>
            </div>

            <div class="footer__data__address-contact">
                <h6>Kontakt</h6>
                <div class="footer__data__address-contact__wr">
                    <p>Telefon: 73 500 123</p>
                    <p>firmapost@allskog.no</p>
                    <p>Veibeskrivelse</p>
                </div>
            </div>

            <div class="footer__data__address-contact">
                <h6>Følg oss</h6>
                <div class="footer__data__address-contact__wr__social"> 
                    <div class="footer__data__address-contact__wr__social--md"> 
                        <img src="./styles/icons/facebook.png">
                        <p>Facebook</p>
                    </div>
                    <div class="footer__data__address-contact__wr__social--md"> 
                        <img src="./styles/icons/youtube.png">
                        <p>YouTube</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__copyright">
            <div class="footer__copyright__link">
                <a href="https://www.allskog.no/personvernerklaering-allskog-sa" target="_blank">
                    <span>Personvern</span>
                </a>
            </div>
            <div class="footer__copyright__year">
                <span>© 2013 Allskog SA</span>
            </div>
            
        </div>
            
    </footer>
    
</body>
</html>