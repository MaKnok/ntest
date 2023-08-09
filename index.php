<!DOCTYPE html>

<html lang="no" role="document">

<head>
    <!--Genenal Config-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Style -->
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="shortcut icon" href="#" />

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
    <script>
        $(document).ready(function(){

            //menu
            $('#open-menu').click(function(){
                $('.menu').addClass('active');
            });
            $('#close-menu').click(function(){
                $('.menu').removeClass('active');
            });

            //info03 title content
            info03TitleContent();

            $( window ).resize(function() {
	            info03TitleContent();
            });

            function info03TitleContent() {
                if($( window ).width() < 768){
                    $("#info03-title").text("Arrangement");
                }else{
                    $("#info03-title").text("Kommende arrangementer");
                }
            }

        });
    </script>

</head>

<body>

    <!-- Menu content -->
    <aside class="menu" role="complementary">
        <nav class="menu__navbar">
            <div class="menu__navbar__logo">
                <img src="./styles/images/logo.svg" alt="Logo" role="presentation">
            </div>
            <div class="menu__navbar__btn">
                <button type="button" class="menu__navbar__btn--close-menu" id="close-menu">
                    <span>Lukk</span>
                    <div class="close-icon">
                        <img src="./styles/icons/close.svg" alt="close" role="presentation">
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
                                <img src="./styles/icons/icon_profile_circled.svg" alt="login" role="presentation">
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
                <a href="/" role="link"><img src="./styles/images/logo.svg" alt="logo" role="presentation"></a>
            </div>
            <div class="navbar__actions">
                <button type="button" class="navbar__actions__btn__search">
                    <span>Søk</span>
                    <div class="navbar__actions__btn__search--icon">
                       <img src="./styles/icons/icon_search.svg" alt="search" role="presentation">
                    </div>
                </button>
                <div class="navbar__actions__btn">
                    <button type="button" class="navbar__actions__btn__login">
                        <span>Logg inn</span>
                        <div class="navbar__actions__btn__login--icon">
                            <img src="./styles/icons/icon_profile_circled.svg" alt="login" role="presentation">
                        </div>
                    </button>
                </div>
                <div class="navbar__actions__btn">
                    <button type="button" class="navbar__actions__btn__menu" id="open-menu">
                        <span>Meny</span>
                        <div class="navbar__actions__btn__menu--icon">
                            <img src="./styles/icons/hamburger.svg" alt="bars" role="presentation">
                        </div>
                    </button>
                </div>
            </div>
        </nav>
        <!-- End of Navbar section -->
    </header>

    <main>
        <!-- Hero section -->
        <section class="hero" role="region">
            <div class="hero__container">
                <div class="hero__container--center-img" title="Allskog"></div>
                <div class="hero__container__center">

                    <div class="hero__container__center__title">
                        <h1>Allskog er et samvirke av og for skogeiere</h1>
                        <h2>Vi er en robust organisasjon med høy kompetanse innen alle skogtjenester du trenger som skogeier.</h2>
                    </div>

                    <div class="hero__container__center__list">

                        <div class="hero__container__center__list__col">
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false">
                                <img src="./styles/icons/arrow.svg" role="presentation" alt="arrow">
                                <span class="opt-label">Skogtjenester</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false">
                                <img src="./styles/icons/arrow.svg" role="presentation" alt="arrow">
                                <span class="opt-label">Veiledning</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false"> 
                                <img src="./styles/icons/arrow.svg" role="presentation" alt="arrow">
                                <span class="opt-label">Bli andelseier</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false">
                                <img src="./styles/icons/arrow.svg" role="presentation" alt="arrow">
                                <span class="opt-label">Finn skogbruksleder</span>
                            </div>
                        </div>

                        <div class="hero__container__center__list__col">
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false">
                                <img src="./styles/icons/arrow.svg" role="presentation" alt="arrow">
                                <span class="opt-label">Om Allskog</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false">
                                <img src="./styles/icons/arrow.svg" role="presentation" alt="arrow">
                                <span class="opt-label">Bærekraft og miljø</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false">
                                <img src="./styles/icons/arrow.svg" role="presentation" alt="arrow">
                                <span class="opt-label">Arrangementer</span>
                            </div>
                            <div class="hero__container__center__list__col--item" role="button" aria-pressed="false">
                                <img src="./styles/icons/arrow.svg" role="presentation" alt="arrow">
                                <span class="opt-label">Aktuelt</span>
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
            <section class="numbers" role="region">
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
            </section>
            <!-- End of Numbers section -->

            <!-- Search section -->
            <section class="search" role="region">
                <div class="search__description">
                    <h3>Finn din skogbruksleder</h3>
                    <p role="paragraph">Søk etter postnummer, region eller fylke</p>
                </div>
                <form class="search__input">
                    <input type="text" placeholder="Skriv søkeord">
                    <div class="search__input__btn">
                        <button type="button">
                            <span>Søk</span>
                            <div class="search__input__btn__img">
                                <img src="./styles/icons/icon_search_white.svg" alt="search" role="presentation">
                            </div>
                        </button>
                    </div>
                </form>
            </section>
            <!-- End of Search section -->

            <!-- Wood section -->
            <section class="wood" role="region">
                <div class="wood__container">
                <img src="./styles/images/wood.webp" alt="Wood illustrative image" role="presentation">
                <div class="wood__container--box">
                    <h3>Lyst til å bli andelseier i </br>Allskog?</h3>
                    <p role="paragraph">Hvis du eier skog, kan du melde deg inn i Allskog. Da blir du medeier av skogfellesskapet i Norge.</p>
                    <a href="/" role="link"><img src="./styles/icons/arrow.svg" role="presentation" alt="arrow"></a>
                </div>
                </div>
            </section>
            <!-- End of Wood section -->

            <!-- Info01 section -->
            <section class="info01" role="region">
                <div class="info01__container">
                <div class="info01__container__box">
                    <h3>Skal du plante ny skog?</h3>
                    <div class="info01__container__box--desc">
                        <p role="paragraph">Etter hogst skal det plantes innen tre år. Skal du plante selv denne sesongen, må du bestille planter innen 15. april.</p>
                        <a href="/" role="link"><img src="./styles/icons/arrow.svg" role="presentation" alt="arrow"></a>
                    </div>
                </div>
                <div class="info01__container__box">
                    <h3>Er skogen moden for hogst? Avtal hogst nå.</h3>
                    <div class="info01__container__box--desc">
                        <p role="paragraph">Vurderer du å ta ut tømmer fra skogen din? Ta gjerne en prat med en av våre dyktige skogbruksledere. Fra oss i Allskog får du solid veiledning, basert på skogfaglig erfaring og kunnskap.</p>
                        <a href="/" role="link"><img src="./styles/icons/arrow.svg" role="presentation" alt="arrow"></a>
                    </div>
                </div>
                </div>
            </section>
            <!-- End of Info01 section -->

            <!-- Info02 section -->
            <section class="info02" role="region">
                <div class="info02__container">
                <h3>Nyheter</h3>
                <div class="info02__container__wr">
                    <div class="info02__container__wr__box">
                        <figure role="figure">
                            <img src="./styles/images/pic01.webp" alt="Går med rekordoverskudd" role="presentation">
                        </figure>
                        <div class="info02__container__wr__box__desc">
                            <div class="info02__container__wr__box__desc--column">
                                <h4><time datetime="2023-04-17">17.april 2023</time></h4>
                                <span class="desc">Går med rekordoverskudd: – Skogeiere har vært lojale til samvirket</span>
                            </div>
                            <p role="paragraph">Allskog legger bak seg et av mest innbringende år noensinne som konsern. For femte år på rad kan 7 500 skogeiere nord for Stad og Dovre få utbetalt utbytte fra samvirket.</p>
                            <a href="/" role="link"><img src="./styles/icons/arrow.svg" role="presentation" alt="arrow"></a>
                        </div>
                    </div>
                    <div class="info02__container__wr__box">
                        <figure role="figure">
                            <img src="./styles/images/pic02.webp" alt="Bruk rabatten din på kurs i Norsk PEFC Skogstandard" role="presentation">
                        </figure>
                        <div class="info02__container__wr__box__desc">
                            <div class="info02__container__wr__box__desc--column">
                                <h4><time datetime="2023-04-17">17.april 2023</time></h4>
                                <span class="desc">Bruk rabatten din på kurs i norsk pefc skogstandard</span>
                            </div>
                            <p role="paragraph">Skal du hogge selv og levere tømmer? Nå får alle som driver i skogen tilbud om kurs i den nye skogstandarden. Som andelseier i ALLSKOG får du kurset til rabattert pris.</p>
                            <a href="/" role="link"><img src="./styles/icons/arrow.svg" role="presentation"></a>
                        </div>
                    </div>
                    <div class="info02__container__wr__box">
                        <figure role="figure">
                            <img src="./styles/images/pic03.webp" alt="Dette bør du vite om nye miljøhensyn i skogen" role="presentation">
                        </figure>
                        <div class="info02__container__wr__box__desc">
                            <div class="info02__container__wr__box__desc--column">
                                <h4><time datetime="2023-04-17">17.april 2023</time></h4>
                                <span class="desc">Dette bør du vite om nye miljøhensyn i skogen</span>
                            </div>
                            <p role="paragraph">Alt tømmer som ALLSKOG omsetter, er miljøsertifisert etter Norsk PEFC Skogstandard. Industrien og for forbrukerne skal vite at virket kommer fra skog drevet på bærekraftig vis.</p>
                            <a href="/" role="link"><img src="./styles/icons/arrow.svg" role="presentation" alt="arrow"></a>
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
            <section class="info03" role="region">
                <div class="info03__container">
                    <h3 id="info03-title"></h3>
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
                                    <img src="./styles/icons/local.svg" role="presentation" alt="place">
                                    <p class="local" role="paragraph">Mosjøen videregående skole avd. Marka (Landbruksskolen)</p>
                                </div>
                                <div class="local-date-wr">
                                    <img src="./styles/icons/calendar.svg" role="presentation" alt="date">
                                    <p class="date"><time datetime="2023-05-09">9. mai</time></p>
                                </div>
                                <div class="local-date-wr">
                                    <img src="./styles/icons/clock.svg" role="presentation" alt="time">
                                    <p class="time">Kl. <time datetime="19:00">19.00</time> - <time datetime="21:00">21.00</time></p>
                                </div>
                            </div>
                            </div>
                            <div class="info03__container__wr__box__box03">
                                <a href="/" role="link"><img src="./styles/icons/arrow.svg" role="presentation" alt="arrow"></a>
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
                                <img src="./styles/icons/local.svg" role="presentation" alt="place">
                                <p class="local" role="paragraph">Fjellfolkets Hus, Adr. Hattfjelldalsvollen 1, Hattfjelldal.</p>
                            </div>
                            <div class="local-date-wr">
                                <img src="./styles/icons/calendar.svg" role="presentation" alt="date">
                                <p class="date">Onsdag <time datetime="2023-05-24">24. mai</time> og torsdag <time datetime="2023-05-25">25. mai</time></p>
                            </div>
                            <div class="local-date-wr">
                                <img src="./styles/icons/clock.svg" role="presentation" alt="time">
                                <p class="time">Kl. <time datetime="09:00">09.00</time>-<time datetime="15:00">15.00</time> begge dager</p>
                            </div>
                            </div>
                        </div>

                        <div class="info03__container__wr__box__box03">
                            <a href="/" role="link"><img src="./styles/icons/arrow.svg" role="presentation" alt="arrow"></a>
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

    <footer role="contentinfo">
        <!-- Footer section -->
        <div class="footer__logo">
            <a href="/" role="link">
                <img src="./styles/images/logo.svg" alt="logo" role="presentation">
            </a>
        </div>

        <div class="footer__data">
            <div class="footer__data__address-contact">
                <span class="address-contact">Adresse</span>
                <div class="footer__data__address-contact__wr">
                    <p role="paragraph">Ingvald Ystgaards vei 13A</p>
                    <p role="paragraph">7047 Trondheim</p>
                </div>
            </div>

            <div class="footer__data__address-contact">
                <span class="address-contact">Kontakt</span>
                <div class="footer__data__address-contact__wr">
                    <p role="paragraph">Telefon: 73 500 123</p>
                    <p role="paragraph"><a href="mailto:firmapost@allskog.no?subject='kontact'" role="link">firmapost@allskog.no</a></p>
                    <p role="paragraph"><a href="https://kart.1881.no?q=ALLSKOG BA" target="_blank" role="link">Veibeskrivelse</a></p>
                </div>
            </div>

            <div class="footer__data__address-contact">
                <span class="address-contact">Følg oss</span>
                <div class="footer__data__address-contact__wr__social"> 
                    <div class="footer__data__address-contact__wr__social--md"> 
                        <img src="./styles/icons/facebook.svg" role="presentation" alt="facebook">
                        <p>Facebook</p>
                    </div>
                    <div class="footer__data__address-contact__wr__social--md"> 
                        <img src="./styles/icons/youtube.svg" role="presentation" alt="youtube">
                        <p>YouTube</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__copyright">
            <div class="footer__copyright__link">
                <a href="https://www.allskog.no/personvernerklaering-allskog-sa" target="_blank" role="link">
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