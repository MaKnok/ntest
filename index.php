<!DOCTYPE html>

<html lang="no">

<head>
    <!--Genenal Config-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Style -->
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="shortcut icon" href="./favicon.png">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans&display=swap" rel="stylesheet">

    <meta name="description" content="Vi er en robust organisasjon med høy kompetanse innen alle skogtjenester du trenger som skogeier.">
    <title>Frontend test</title>
    
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
            integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE="
            crossorigin="anonymous">
    </script>
    <script src="jquery.js"></script>

</head>

<body>

    <!-- Menu content -->
    <aside class="menu">
        <nav class="menu__navbar">
            <div class="menu__navbar__logo">
                <img src="./styles/images/logo.svg" alt="Logo" >
            </div>
            <div class="menu__navbar__btn">
                <button type="button" class="menu__navbar__btn--close-menu" id="close-menu">
                    <span>Lukk</span>
                    <span class="close-icon">
                        <img src="./styles/icons/close.svg" alt="close" >
                    </span>
                </button>
            </div>
        </nav>
        <section class="menu__content">

            <div class="menu__content__items">
                <div class="menu__content__items__box">
                    <div class="menu__content__items__box__title">
                        <h3 class="title-items">Skogtjenester</h3>
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
                        <h3 class="title-items">Bli andelseier</h3>
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
                        <h3 class="title-items">Bærekraft og miljø</h3>
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
                            <span class="menu__content__bottom__box__button__login--icon">
                                <img src="./styles/icons/icon_profile_circled.svg" alt="login">
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </section>
    </aside>

    <header>
        <!-- Navbar section -->
        <nav class="navbar">
            <div class="navbar__logo">
                <a href="/"><img src="./styles/images/logo.svg" alt="logo"></a>
            </div>
            <div class="navbar__actions">
                <button type="button" class="navbar__actions__btn">
                    <span>Søk</span>
                    <span class="navbar__actions__btn__search--icon">
                       <img src="./styles/icons/icon_search.svg" alt="search">
                    </span>
                </button>
                <div class="navbar__actions__btn-secondary">
                    <button type="button" class="navbar__actions__btn-secondary__login" id="login">
                        <span>Logg inn</span>
                        <span class="navbar__actions__btn-secondary__login--icon">
                            <img src="./styles/icons/icon_profile_circled.svg" alt="login" class="profile">
                        </span>
                    </button>
                </div>
                <div class="navbar__actions__btn-primary">
                    <button type="button" class="navbar__actions__btn-primary__menu" id="open-menu">
                        <span>Meny</span>
                        <span class="navbar__actions__btn-primary__menu--icon">
                            <img src="./styles/icons/hamburger.svg" alt="bars" class="hamburger">
                        </span>
                    </button>
                </div>
            </div>
        </nav>
        <!-- End of Navbar section -->
    </header>

    <main>
        <!-- Hero section -->
        <section class="hero" >
            <div class="hero__container">
                <div class="hero__container--center-img" title="Allskog"></div>
                <div class="hero__container__center">

                    <div class="hero__container__center__title">
                        <h1>Allskog er et samvirke av og for skogeiere</h1>
                        <h2>Vi er en robust organisasjon med høy kompetanse innen alle skogtjenester du trenger som skogeier.</h2>
                    </div>

                    <div class="hero__container__center__list">

                        <div class="hero__container__center__list__col">
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false" id="opt-link-01">
                                <img src="./styles/icons/arrow.svg" alt="arrow" id="opt-img-01">
                                <span class="opt-label opt-label-01">Skogtjenester</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false" id="opt-link-02">
                                <img src="./styles/icons/arrow.svg" alt="arrow" id="opt-img-02">
                                <span class="opt-label opt-label-02">Veiledning</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false" id="opt-link-03"> 
                                <img src="./styles/icons/arrow.svg" alt="arrow" id="opt-img-03">
                                <span class="opt-label opt-label-03">Bli andelseier</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false" id="opt-link-04">
                                <img src="./styles/icons/arrow.svg" alt="arrow" id="opt-img-04">
                                <span class="opt-label opt-label-04">Finn skogbruksleder</span>
                            </div>
                        </div>

                        <div class="hero__container__center__list__col">
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false" id="opt-link-05">
                                <img src="./styles/icons/arrow.svg" alt="arrow" id="opt-img-05">
                                <span class="opt-label opt-label-05">Om Allskog</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false" id="opt-link-06">
                                <img src="./styles/icons/arrow.svg" alt="arrow" id="opt-img-06">
                                <span class="opt-label opt-label-06">Bærekraft og miljø</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false" id="opt-link-07">
                                <img src="./styles/icons/arrow.svg" alt="arrow" id="opt-img-07">
                                <span class="opt-label opt-label-07">Arrangementer</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false" id="opt-link-08">
                                <img src="./styles/icons/arrow.svg" alt="arrow" id="opt-img-08">
                                <span class="opt-label opt-label-08">Aktuelt</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- End of Hero section -->

        <!-- Info section -->
        <div class="info-sections" role="region">

            <!-- Numbers section -->
            <div class="numbers" role="article"> 
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
                    <img src="./styles/icons/carousel.svg" alt="numbers">
                  </div>
                </div>
            </div>
            <!-- End of Numbers section -->

            <!-- Search section -->
            <article class="search">
                <div class="search__description">
                    <h3>Finn din skogbruksleder</h3>
                    <p >Søk etter postnummer, region eller fylke</p>
                </div>
                <form class="search__input" name="search-form" id="search-form">
                    <input type="text" placeholder="Skriv søkeord">
                    <div class="search__input__btn">
                        <button type="button">
                            <span>Søk</span>
                            <span class="search__input__btn__img">
                                <img src="./styles/icons/icon_search_white.svg" alt="search">
                            </span>
                        </button>
                    </div>
                </form>
            </article>
            <!-- End of Search section -->

            <!-- Wood section -->
            <article class="wood">
                <div class="wood__container">
                <img src="./styles/images/wood.webp" alt="Wood illustrative image">
                <div class="wood__container--box">
                    <h3>Lyst til å bli andelseier i Allskog?</h3>
                    <p >Hvis du eier skog, kan du melde deg inn i Allskog. Da blir du medeier av skogfellesskapet i Norge.</p>
                    <a href="/"><img src="./styles/icons/arrow.svg" alt="arrow"></a>
                </div>
                </div>
            </article>
            <!-- End of Wood section -->

            <!-- Info01 section -->
            <article class="info01">
                <div class="info01__container">
                <div class="info01__container__box">
                    <h3>Skal du plante ny skog?</h3>
                    <div class="info01__container__box--desc">
                        <p >Etter hogst skal det plantes innen tre år. Skal du plante selv denne sesongen, må du bestille planter innen 15. april.</p>
                        <a href="/"><img src="./styles/icons/arrow.svg" alt="arrow"></a>
                    </div>
                </div>
                <div class="info01__container__box">
                    <h3>Er skogen moden for hogst? Avtal hogst nå.</h3>
                    <div class="info01__container__box--desc">
                        <p >Vurderer du å ta ut tømmer fra skogen din? Ta gjerne en prat med en av våre dyktige skogbruksledere. Fra oss i Allskog får du solid veiledning, basert på skogfaglig erfaring og kunnskap.</p>
                        <a href="/"><img src="./styles/icons/arrow.svg" alt="arrow"></a>
                    </div>
                </div>
                </div>
            </article>
            <!-- End of Info01 section -->

            <!-- Info02 section -->
            <article class="info02">
                <div class="info02__container">
                <h3>Nyheter</h3>
                <div class="info02__container__wr">
                    <div class="info02__container__wr__box">
                        <figure>
                            <img src="./styles/images/pic01.webp" alt="Går med rekordoverskudd">
                        </figure>
                        <div class="info02__container__wr__box__desc">
                            <div class="info02__container__wr__box__desc--column">
                                <h4><time datetime="2023-04-17">17.april 2023</time></h4>
                                <span class="desc">Går med rekordoverskudd: – Skogeiere har vært lojale til samvirket</span>
                            </div>
                            <p >Allskog legger bak seg et av mest innbringende år noensinne som konsern. For femte år på rad kan 7 500 skogeiere nord for Stad og Dovre få utbetalt utbytte fra samvirket.</p>
                            <a href="/"><img src="./styles/icons/arrow.svg" alt="arrow"></a>
                        </div>
                    </div>
                    <div class="info02__container__wr__box">
                        <figure>
                            <img src="./styles/images/pic02.webp" alt="Bruk rabatten din på kurs i Norsk PEFC Skogstandard">
                        </figure>
                        <div class="info02__container__wr__box__desc">
                            <div class="info02__container__wr__box__desc--column">
                                <h4><time datetime="2023-04-17">17.april 2023</time></h4>
                                <span class="desc">Bruk rabatten din på kurs i norsk pefc skogstandard</span>
                            </div>
                            <p >Skal du hogge selv og levere tømmer? Nå får alle som driver i skogen tilbud om kurs i den nye skogstandarden. Som andelseier i ALLSKOG får du kurset til rabattert pris.</p>
                            <a href="/"><img src="./styles/icons/arrow.svg" alt="arrow"></a>
                        </div>
                    </div>
                    <div class="info02__container__wr__box">
                        <figure>
                            <img src="./styles/images/pic03.webp" alt="Dette bør du vite om nye miljøhensyn i skogen">
                        </figure>
                        <div class="info02__container__wr__box__desc">
                            <div class="info02__container__wr__box__desc--column">
                                <h4><time datetime="2023-04-17">17.april 2023</time></h4>
                                <span class="desc">Dette bør du vite om nye miljøhensyn i skogen</span>
                            </div>
                            <p >Alt tømmer som ALLSKOG omsetter, er miljøsertifisert etter Norsk PEFC Skogstandard. Industrien og for forbrukerne skal vite at virket kommer fra skog drevet på bærekraftig vis.</p>
                            <a href="/"><img src="./styles/icons/arrow.svg" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="info02__container--btn">
                    <button type="button">
                        <span>Se alle nyheter</span>
                    </button>
                </div>
                </div>
            </article>
            <!-- End of Info02 section -->

            <!-- Info03 section -->
            <article class="info03">
                <div class="info03__container">
                    <h3 id="info03-title">&nbsp;</h3>
                    <div class="info03__container__wr">
                        <div class="info03__container__wr__box">
                            <div class="info03__container__wr__box__box01">
                                <span><time datetime="2023-05-09">9. mai</time></span>
                                <h4>Temakveld: Etablering av nytt sagbruk i Vefsn</h4>
                            </div>
                            <div class="info03__container__wr__box__box02">
                            <h4>Vefsn skogeierlag inviterer til temakveld, etablering av nytt sagbruk i Vefsn.</h4>
                            <div class="info03__container__wr__box__box02__local-date">
                                <div class="local-date-wr">
                                    <img src="./styles/icons/local.svg" alt="place">
                                    <p class="local" >Mosjøen videregående skole avd. Marka (Landbruksskolen)</p>
                                </div>
                                <div class="local-date-wr">
                                    <img src="./styles/icons/calendar.svg" alt="date">
                                    <p class="date"><time datetime="2023-05-09">9. mai</time></p>
                                </div>
                                <div class="local-date-wr">
                                    <img src="./styles/icons/clock.svg" alt="time">
                                    <p class="time">Kl. <time datetime="19:00">19.00</time> - <time datetime="21:00">21.00</time></p>
                                </div>
                            </div>
                            </div>
                            <div class="info03__container__wr__box__box03">
                                <a href="/"><img src="./styles/icons/arrow.svg" alt="arrow"></a>
                            </div>
                        </div>
                        <div class="info03__container__wr__box">
                        <div class="info03__container__wr__box__box01">
                            <span><time datetime="2023-05-24">24.</time> -<time datetime="2023-05-25">25. mai</time></span>
                            <h4>Elgbeitetaksering i Hattfjelldal, <time datetime="2023-05-24">24.</time>  og <time datetime="2023-05-25">25. mai 2023</time></h4>
                        </div>

                        <div class="info03__container__wr__box__box02">
                            <h4>Kurset bygger på «Veileder og standard for taksering av elgbeite i skog» – utviklet av Skogkurs</h4>
                            <div class="info03__container__wr__box__box02__local-date">
                            <div class="local-date-wr">
                                <img src="./styles/icons/local.svg" alt="place">
                                <p class="local" >Fjellfolkets Hus, Adr. Hattfjelldalsvollen 1, Hattfjelldal.</p>
                            </div>
                            <div class="local-date-wr">
                                <img src="./styles/icons/calendar.svg" alt="date">
                                <p class="date">Onsdag <time datetime="2023-05-24">24. mai</time> og torsdag <time datetime="2023-05-25">25. mai</time></p>
                            </div>
                            <div class="local-date-wr">
                                <img src="./styles/icons/clock.svg" alt="time">
                                <p class="time">Kl. <time datetime="09:00">09.00</time>-<time datetime="15:00">15.00</time> begge dager</p>
                            </div>
                            </div>
                        </div>

                        <div class="info03__container__wr__box__box03">
                            <a href="/"><img src="./styles/icons/arrow.svg" alt="arrow"></a>
                        </div>
                        </div>
                    </div>
                    <div class="info03__container--btn">
                        <button type="button">
                            <span>Se alle arrangementer</span>
                        </button>
                    </div>
                </div>
            </article>
            <!-- End of Info03 section -->

        </div>
        <!-- End of Info section -->
    </main>

    <footer>
        <!-- Footer section -->
        <div class="footer__logo">
            <a href="/">
                <img src="./styles/images/logo.svg" alt="logo" >
            </a>
        </div>

        <div class="footer__data">
            <div class="footer__data__address-contact">
                <span class="address-contact">Adresse</span>
                <div class="footer__data__address-contact__wr">
                    <p>Ingvald Ystgaards vei 13A</p>
                    <p>7047 Trondheim</p>
                </div>
            </div>

            <div class="footer__data__address-contact">
                <span class="address-contact">Kontakt</span>
                <div class="footer__data__address-contact__wr">
                    <p>Telefon: 73 500 123</p>
                    <p><a href="mailto:firmapost@allskog.no?subject='kontact'">firmapost@allskog.no</a></p>
                    <p><a href="https://kart.1881.no?query=ALLSKOG%20BA" target="_blank">Veibeskrivelse</a></p>
                </div>
            </div>

            <div class="footer__data__address-contact">
                <span class="address-contact">Følg oss</span>
                <div class="footer__data__address-contact__wr__social"> 
                    <div class="footer__data__address-contact__wr__social--md"> 
                        <img src="./styles/icons/facebook.svg"  alt="facebook">
                        <p>Facebook</p>
                    </div>
                    <div class="footer__data__address-contact__wr__social--md"> 
                        <img src="./styles/icons/youtube.svg"  alt="youtube">
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