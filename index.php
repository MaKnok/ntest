<!DOCTYPE html>

<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans&display=swap" rel="stylesheet">
    <title>Frontend test</title>
</head>

<body>

    <header>
        <!-- Navbar section -->
        <nav class="navbar">
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
                    <button type="button" class="navbar__actions__btn__menu" data-toggle="collapse" data-target="#">
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
                        <div class="hero__container__center____list__col--item">
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

        <!-- Numbers section -->
        <section class="numbers">
            <div class="numbers__container">
                <div class="numbers__container--box">
                    <h1>70</h1>
                    <span>skogeierlag</span>
                </div>
                <div class="numbers__container--box">
                    <h1>7600</h1>
                    <span>andelseiere</span>
                </div>
                <div class="numbers__container--box">
                    <h1>1 million</h1>
                    <span>m3 tømmer per år</span>
                </div>
            </div>
        </section>
        <!-- End of Numbers section -->

        <!-- Search section -->
        <section class="search">
            <div class="search__container">
                <div class="search__container--box">
                    <h3>Finn din skogbruksleder</h3>
                    <p>Søk etter postnummer, region eller fylke</p>
                    <input type="text" placeholder="Skriv søkeord">
                    <button type="button" class="search__actions--btn--search">
                        <span>Søk</span>
                        <div class="search__search">
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
                    <img src="./styles/images/wood.png" alt="wood-img"/>
                </figure>
                <div class="wood__container--box">
                    <h3>Lyst til å bli andelseier i Allskog?</h3>
                    <p>Hvis du eier skog, kan du melde deg inn i Allskog. Da blir du medeier av skogfellesskapet i Norge.</p>
                    <a><img src="./styles/icons/arrow.png"></a>
                </div>
            </div>
        </section>
        <!-- End of Wood section -->

        <!-- Info01 section -->
        <section class="info01">
            <div class="info01__container">
                <div class="info01__container--box">
                    <h4>Skal du plante ny skog?</h4>
                    <p>Etter hogst skal det plantes innen tre år. Skal du plante selv denne sesongen, må du bestille planter innen 15. april.</p>
                    <img src="./styles/icons/arrow.png">
                </div>
                <div class="info01__container--box">
                    <h4>Er skogen moden for hogst? Avtal hogst nå.</h4>
                    <p>Vurderer du å ta ut tømmer fra skogen din? Ta gjerne en prat med en av våre dyktige skogbruksledere. Fra oss i Allskog får du solid veiledning, basert på skogfaglig erfaring og kunnskap.</p>
                    <img src="./styles/icons/arrow.png">
                </div>
            </div>
        </section>
        <!-- End of Info01 section -->

        <!-- Info02 section -->
        <section class="info02">
            <div class="info02__container">
                <h3>Nyheter</h3>
                <div class="info02__container--box">
                    <figure>
                        <img src="./styles/images/pic01.png" alt="pic-01">
                        <figcaption>17.april 2023</figcaption>
                    </figure>
                    <h4>Går med rekordoverskudd: – Skogeiere har vært lojale til samvirket</h4>
                    <p>Allskog legger bak seg et av mest innbringende år noensinne som konsern. For femte år på rad kan 7 500 skogeiere nord for Stad og Dovre få utbetalt utbytte fra samvirket.</p>
                    <img src="./styles/icons/arrow.png">
                </div>
                <div class="info02__container--box">
                    <figure>
                        <img src="./styles/images/pic02.png" alt="pic-02">
                        <figcaption>17.april 2023</figcaption>
                    </figure>
                    <h4>Bruk rabatten din på kurs i norsk pefc skogstandard</h4>
                    <p>Skal du hogge selv og levere tømmer? Nå får alle som driver i skogen tilbud om kurs i den nye skogstandarden. Som andelseier i ALLSKOG får du kurset til rabattert pris.</p>
                    <img src="./styles/icons/arrow.png">
                </div>
                <div class="info02__container--box">
                    <figure>
                        <img src="./styles/images/pic03.png" alt="pic-03">
                        <figcaption>17.april 2023</figcaption>
                    </figure>
                    <h4>Dette bør du vite om nye miljøhensyn i skogen</h4>
                    <p>Alt tømmer som ALLSKOG omsetter, er miljøsertifisert etter Norsk PEFC Skogstandard. Industrien og for forbrukerne skal vite at virket kommer fra skog drevet på bærekraftig vis.</p>
                    <img src="./styles/icons/arrow.png">
                </div>
                <button type="button" class="info02__--btn">
                    <span>Se alle nyheter</span>
                </button>
            </div>
        </section>
        <!-- End of Info02 section -->

        <!-- Info03 section -->
        <section class="info03">
            <div class="info03__container">
                <h3>Kommende arrangementer</h3>
                <div class="info03__container--box">
                    <div>
                        <span>9. mai</span>
                        <p>Temakveld: Etablering av nytt sagbruk i Vefsn</p>
                    </div>

                    <div>
                        <p>Vefsn skogeierlag inviterer til temakveld, etablering av nytt sagbruk i Vefsn.</p>
                        <div>
                            <img src="./styles/icons/local.png">
                            <p>Mosjøen videregående skole avd. Marka (Landbruksskolen)<p>
                        </div>
                        <div>
                            <img src="./styles/icons/calendar.png">
                            <p>9. mai<p>
                        </div>
                        <div>
                            <img src="./styles/icons/clock.png">
                            <p>Kl. 19.00 - 21.00<p>
                        </div>
                    </div>

                    <div>
                        <img src="./styles/icons/arrow.png">
                    </div>
                    
                </div>
                <div class="info03__container--box">
                    <div>
                        <span>24. -25. mai</span>
                        <p>Elgbeitetaksering i Hattfjelldal, 24. og 25. mai 2023</p>
                    </div>

                    <div>
                        <p>Kurset bygger på «Veileder og standard for taksering av elgbeite i skog» – utviklet av Skogkurs</p>
                        <div>
                            <img src="./styles/icons/local.png">
                            <p>Fjellfolkets Hus, Adr. Hattfjelldalsvollen 1, Hattfjelldal.<p>
                        </div>
                        <div>
                            <img src="./styles/icons/calendar.png">
                            <p>Onsdag 24. mai og torsdag 25. mai<p>
                        </div>
                        <div>
                            <img src="./styles/icons/clock.png">
                            <p>Kl. 09.00-15.00 begge dager<p>
                        </div>
                    </div>

                    <div>
                        <img src="./styles/icons/arrow.png">
                    </div>
                </div>
                <button type="button" class="info03__--btn">
                    <span>Se alle arrangementer</span>
                </button>
            </div>
        </section>
        <!-- End of Info03 section -->

        
    </main>

    <footer>
        <!-- Footer section -->
        <div class="footer__logo">
            <a href="/">LOGO</a>
        </div>

        <div class="footer__address">
            <h6>Adresse</h6>
            <p>Ingvald Ystgaards vei 13A, 7047 Trondheim</p>
        </div>

        <div class="footer__contact">
            <h6>Kontakt</h6>
            <p>Telefon: 73 500 123</p>
            <p>firmapost@allskog.no</p>
            <p>Veibeskrivelse</p>
        </div>

        <div class="footer__social">
            <h6>Følg oss</h6>
            <div> 
                <img src="./styles/icons/facebook.png">
                <p>Facebook</p>
            </div>
            <div> 
                <img src="./styles/icons/youtube.png">
                <p>YouTube</p>
            </div>
            <span>Personvern© 2013 Allskog SA</span>
        </div>

    </footer>
    
</body>
</html>