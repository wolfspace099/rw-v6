<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Robotica</title>
    <meta property="og:title" content="Robotica" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;  -webkit-font-smoothing: antialiased;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;  color: inherit;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}details {  display: block;  margin: 0;  padding: 0;}summary::-webkit-details-marker {  display: none;}[data-thq="accordion"] [data-thq="accordion-content"] {  max-height: 0;  overflow: hidden;  transition: max-height 0.3s ease-in-out;  padding: 0;}[data-thq="accordion"] details[data-thq="accordion-trigger"][open] + [data-thq="accordion-content"] {  max-height: 1000vh;}details[data-thq="accordion-trigger"][open] summary [data-thq="accordion-icon"] {  transform: rotate(180deg);}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background: var(--dl-color-gray-white);

        fill: var(--dl-color-gray-black);
      }
    </style>
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="shortcut icon"
      href="images/favicon-32x32.png"
      type="icon/png"
      sizes="32x32"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
  </head>
  <body>
    <link rel="stylesheet" href="./style.css" />
    <div>
      <link href="./index.css" rel="stylesheet" />

      <div class="home-container1">
        <navbar-wrapper class="navbar-wrapper" rootclassname="navbarundefined">
          <!--Navbar component-->
          <header class="navbar-navbar navbarroot-class-name">
            <a href="index" class="navbar-navlink1">
              <img
                alt="images/logo-200h.png"
                src="images/logo-200h.png"
                class="navbar-branding-logo"
              />
            </a>
            <div class="navbar-nav-content">
              <div class="navbar-nav-links1">
                <a href="#waarom" class="navbar-link1 nav-link">Over de club</a>
                <a href="#overclub" class="navbar-link2 nav-link">Waarom aanmelden?</a>
                <a href="#plans" class="navbar-link3 nav-link">Robots</a>
                <a
                  href="mailto:support@roboticawerenfridus.nl?subject="
                  class="navbar-link4 nav-link"
                >
                  Contact
                </a>
                <a href="login" class="navbar-link5 nav-link">Log in</a>
              </div>
              <a href="wordt-lid" class="navbar-navlink2">
                <div class="navbar-get-started1 get-started">
                  <span class="navbar-text1">Wordt nu lid</span>
                </div>
              </a>
              <div id="open-mobile-menu" class="navbar-hamburger get-started">
                <img
                  alt="image"
                  src="images/Icons/hamburger-200h.png"
                  class="navbar-image1"
                />
              </div>
            </div>
            <div id="mobile-menu" class="navbar-mobile-menu">
              <div class="navbar-branding">
                <img
                  alt="image"
                  src="images/logo-700w.png"
                  class="navbar-image2"
                />
                <div id="close-mobile-menu" class="navbar-container1">
                  <svg viewBox="0 0 1024 1024" class="navbar-icon1">
                    <path
                      d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="navbar-nav-links2">
                <a href="#waarom" class="nav-link">Over de club</a>
                <a href="#overclub" class="nav-link">Waarom aanmelden?</a>
                <a href="#plans" class="nav-link">Robots</a>
                <a href="mailto:support@roboticawerenfridus.nl" class="nav-link">Contact</a>
                <a href="/login" class="nav-link">Log In</a>
              </div>
              <div class="get-started">
                <a href="/wordt-lid" class="navbar-text2">Wordt nu lid</a>
              </div>
            </div>
            <div>
              <div class="navbar-container3">
                <script defer="">
                      /*
                  Mobile menu - Code Embed
                  */

                  /* listenForUrlChangesMobileMenu() makes sure that if you changes pages inside your app,
                  the mobile menu will still work*/

                  const listenForUrlChangesMobileMenu = () => {
                      let url = location.href;
                      document.body.addEventListener('click', () => {
                          requestAnimationFrame(() => {
                              if (url !== location.href) {
                                  runMobileMenuCodeEmbed();
                                  url = location.href;
                              }
                          });
                      },
                      true
                      );
                  };

                  const runMobileMenuCodeEmbed = () => {
                      // Mobile menu
                      const mobileMenu = document.querySelector('#mobile-menu')

                      // Buttons
                      const closeButton = document.querySelector('#close-mobile-menu')
                      const openButton = document.querySelector('#open-mobile-menu')

                      // On openButton click, set the mobileMenu position left to -100vw
                      openButton && openButton.addEventListener('click', function() {
                          mobileMenu.style.transform = 'translateX(0%)'
                      })

                      // On closeButton click, set the mobileMenu position to 0vw
                      closeButton && closeButton.addEventListener('click', function() {
                          mobileMenu.style.transform = 'translateX(100%)'
                      })
                  }

                  runMobileMenuCodeEmbed()
                  listenForUrlChangesMobileMenu()
                </script>
              </div>
            </div>
          </header>
        </navbar-wrapper>
        <section class="home-section10">
          <div class="home-hero">
            <div class="home-content1">
              <main class="home-main1">
                <header class="home-header10">
                  <h1 class="home-heading10">
                    De beste manier om te leren over de toekomst
                  </h1>
                  <span class="home-caption1">
                    Maak jouw robot en leer meer over technologie, kom bij onze
                    club en leer om te programmeren, bouwen en solderen. Heb je al ervaring met Arduino, dan is er ook een Raspberry Pi versie voor jou.
                  </span>
                </header>
                <div class="home-buttons1">
                  <a href="#prijzen" class="home-link1">
                    <div class="home-get-started1 button">
                      <span class="home-text10">Wordt nu lid</span>
                    </div>
                  </a>
                  <a href="#overclub" class="home-link2">
                    <div class="home-get-started2 button">
                      <span class="home-text11">
                        <span>Bekijk meer</span>
                        <br />
                      </span>
                    </div>
                  </a>
                </div>
              </main>
              <div class="home-highlight">
                <div class="home-avatars">
                  <img
                    alt="image"
                    src="images/robot-workbench-700h.jpg"
                    class="home-image10 avatar"
                  />
                  <img
                    alt="image"
                    src="images/robot1-1000w.jpg"
                    class="home-image11 avatar"
                  />
                  <img
                    alt="image"
                    src="images/bluedot-robot-1200w.jpg"
                    class="home-image12 avatar"
                  />
                </div>
                <label class="home-caption2">
                  <span>Meer dan</span>
                  <a
                    href="https://roboticawerenfridus.nl/stats"
                    target="_blank"
                    rel="noreferrer noopener"
                    class="home-link3"
                  >
                    224
                  </a>
                  <span>robots zijn er gebouwd.</span>
                </label>
              </div>
            </div>
            <div class="home-image13">
              <img
                alt="image"
                src="images/robot-workbench-700h.jpg"
                class="home-image14"
              />
            </div>
            <div class="home-image15"></div>
          </div>
        </section>
        <section id="waarom" class="home-section11">
          <h2 class="home-text16">Wat je leert bij onze club?</h2>
          <div class="home-features1">
            <header class="home-feature1 feature feature-active">
              <h3 class="home-text17">Programmeren</h3>
              <p class="home-text18">Met Python of C++ taal</p>
            </header>
            <header class="feature home-feature2">
              <h3 class="home-text19">Bouwen</h3>
              <p class="home-text20">
                Metaalwerk, bouten en moertjes, solderen
              </p>
            </header>
            <header class="feature home-feature3">
              <h3 class="home-text21">Electronica</h3>
              <p class="home-text22">Resistors, transistoren en veel meer</p>
            </header>
          </div>
          <div id="waarom" class="home-note1">
            <div class="home-content2">
              <main class="home-main2">
                <h2 class="home-heading11">
                  Leer programmeren net even een jaartje eerder
                </h2>
                <p class="home-paragraph1">
                  <span>
                    Bij onze club leer je om te programmeren met Python of C++
                    afhankelijk van welk robot model. Wij laten jou de code
                    overnemen en leggen uit hoe het werkt.
                  </span>
                  <br />
                  <br />
                </p>
              </main>
              <a href="#plans" class="home-link4">
                <div class="home-explore-more">
                  <p class="home-text26">Wordt nu lid -&gt;</p>
                </div>
              </a>
            </div>
            <div class="home-image16">
              <img
                alt="image"
                src="images/code-1200w.jpg"
                class="home-image17"
              />
            </div>
          </div>
        </section>
        <section id="overclub" class="home-section12">
          <header class="home-header11">
            <h2 class="home-text27">Waarom aansluiten bij de club?</h2>
            <span class="home-text28">
              Omdat jij de toekomst bent van de wereld. En technologie is de
              toekomst.
            </span>
          </header>
          <section class="home-note2">
            <div class="home-image18">
              <img alt="image" src="images/wf-logo.svg" class="home-image19" />
            </div>
            <div class="home-content3">
              <div class="home-main3">
                <div class="home-caption3">
                  <span class="home-section13 section-head">over de club</span>
                </div>
                <div class="home-heading12">
                  <h2 class="section-heading">
                    Deze club is in samenwerking met de school.
                  </h2>
                  <p class="section-description">
                    Wij als club zijn een onderdeel van Tabor
                    College Werenfridus. Als je student/leerling bent van deze
                    school kan je je aanmelden!
                  </p>
                </div>
              </div>
              <a
                href="https://werenfridus.nl"
                target="_blank"
                rel="noreferrer noopener"
                class="home-link5"
              >
                <div class="home-get-started3 button">
                  <span class="home-text29">Lees over het Werenfridus</span>
                </div>
              </a>
            </div>
          </section>
          <section id="overclub" class="home-note3">
            <div class="home-image20">
              <img
                alt="image"
                src="images/logo-700w.png"
                class="home-image21"
              />
            </div>
            <div class="home-content4">
              <main class="home-main4">
                <header class="home-caption4">
                  <span class="home-section14 section-head">over de club</span>
                </header>
                <main class="home-heading14">
                  <header class="home-header12">
                    <h2 class="section-heading">Voordelen van onze club</h2>
                    <p class="section-description">
                      Deze club is een echte top club door onderstaande punten:
                    </p>
                  </header>
                  <div class="home-checkmarks">
                    <mark-wrapper class="mark-wrapper">
                      <!--Mark component-->
                      <div id="" class="mark-mark">
                        <div class="mark-icon1">
                          <svg viewBox="0 0 1024 1024" class="mark-icon2">
                            <path
                              d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                            ></path>
                          </svg>
                        </div>
                        <p class="mark-label">
                          <span>
                            Focus op de toekomst en de club is op maat
                          </span>
                        </p>
                      </div>
                    </mark-wrapper>
                    <mark-wrapper-obou class="mark-wrapper-obou">
                      <!--Mark component-->
                      <div id="" class="mark-mark1">
                        <div class="mark-icon4">
                          <svg viewBox="0 0 1024 1024" class="mark-icon5">
                            <path
                              d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                            ></path>
                          </svg>
                        </div>
                        <p class="mark-label1">
                          <span>Website is gemaakt door leden</span>
                        </p>
                      </div>
                    </mark-wrapper-obou>
                    <mark-wrapper-qsip class="mark-wrapper-qsip">
                      <!--Mark component-->
                      <div id="" class="mark-mark2">
                        <div class="mark-icon7">
                          <svg viewBox="0 0 1024 1024" class="mark-icon8">
                            <path
                              d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                            ></path>
                          </svg>
                        </div>
                        <p class="mark-label2">
                          <span>School betaald mee aan lidmaatschap</span>
                        </p>
                      </div>
                    </mark-wrapper-qsip>
                  </div>
                </main>
              </main>
              <a href="#plans" class="home-link6">
                <div class="home-get-started4 button">
                  <span class="home-text30">Kies jouw robot</span>
                </div>
              </a>
            </div>
          </section>
        </section>
        <section class="home-section15">
          <header class="home-header13">
            <header class="home-left1">
              <span class="home-section16 section-head">Test jezelf</span>
              <h2 class="section-heading">Is deze club iets voor jou?</h2>
            </header>
            <div class="home-right1">
              <p class="home-paragraph4 section-description">
                Kijk hieronder of deze club bij jou past, zo weet je of deze club iets voor jou is!
              </p>
            </div>
          </header>
          <main class="home-cards1">
            <card-wrapper class="card-wrapper" rootclassname="cardundefined">
              <!--Card component-->
              <section class="card-card cardroot-class-name">
                <div class="card-icon1">
                  <img
                    alt="image"
                    src="images/Icons/android-200h.png"
                    class="card-icon2"
                  />
                </div>
                <main class="card-content">
                  <h1 class="card-header">
                    <span>"Open-source for the win"</span>
                  </h1>
                  <p class="card-description">
                    <span>
                      Haat je Apple? Weet je wat Linux is? (Dan ben je wel echt een nerd) Dan ben je al automatisch geschikt voor de
                      club.
                    </span>
                  </p>
                </main>
              </section>
            </card-wrapper>
            <card-wrapper-j2oi
              class="card-wrapper-j2oi"
              rootclassname="cardundefined"
            >
              <!--Card component-->
              <section class="card-card1 cardroot-class-name1">
                <div class="card-icon3">
                  <img
                    alt="image"
                    src="images/Icons/group 1314-200h.png"
                    class="card-icon4"
                  />
                </div>
                <main class="card-content1">
                  <h1 class="card-header1"><span>Coole dingen</span></h1>
                  <p class="card-description1">
                    <span>
                      Neem de tijd voor je robot, je bent altijd welkom ook
                      als hij stuk is
                    </span>
                  </p>
                </main>
              </section>
            </card-wrapper-j2oi>
            <card-wrapper-kfw4
              class="card-wrapper-kfw4"
              rootclassname="cardundefined"
            >
              <!--Card component-->
              <section class="card-card2 cardroot-class-name2">
                <div class="card-icon5">
                  <img
                    alt="image"
                    src="images/Icons/group 1317-200h.png"
                    class="card-icon6"
                  />
                </div>
                <main class="card-content2">
                  <h1 class="card-header2"><span>Wees creatief</span></h1>
                  <p class="card-description2">
                    <span>
                      Pas je robot aan hoe jij wilt, wil je dat jouw robot een
                      speaker heeft? Go for it!
                    </span>
                  </p>
                </main>
              </section>
            </card-wrapper-kfw4>
          </main>
        </section>
        <section class="home-section17">
          <div class="home-note4">
            <div class="home-image22">
              <img
                alt="image"
                src="images/robot1-1000w.jpg"
                class="home-image23"
              />
            </div>
            <div class="home-content5">
              <div class="home-heading17">
                <div class="home-header14">
                  <h2 class="section-heading">
                    Wat zit er bij een robot op de club &gt;&gt;&gt;
                  </h2>
                </div>
                <accordion-wrapper
                  class="accordion-wrapper"
                  rootclassname="accordionundefined"
                >
                  <!--Accordion component-->
                  <div class="accordion-accordion accordionroot-class-name">
                    <div
                      data-role="accordion-container"
                      class="accordion-element1 accordion-element"
                    >
                      <div class="accordion-details1">
                        <span class="accordion-text1">
                          <span>Metalen Frame</span>
                        </span>
                        <span
                          data-role="accordion-content"
                          class="accordion-text2"
                        >
                          <span>De robot is geheel van metaal en heeft rupsbanden</span>
                        </span>
                      </div>
                      <svg
                        viewBox="0 0 1024 1024"
                        data-role="accordion-icon"
                        class="accordion-icon1"
                      >
                        <path
                          d="M366 708l196-196-196-196 60-60 256 256-256 256z"
                        ></path>
                      </svg>
                    </div>
                    <div
                      data-role="accordion-container"
                      class="accordion-element2 accordion-element"
                    >
                      <div class="accordion-details2">
                        <span class="accordion-text3">
                          <span>Electronica</span>
                        </span>
                        <span
                          data-role="accordion-content"
                          class="accordion-text4"
                        >
                          <span>
                            Er zitten 2 keer 1/2 breadboard op voor electronica,
                            hiermee ga je nog een schakeling maken
                          </span>
                        </span>
                      </div>
                      <svg
                        viewBox="0 0 1024 1024"
                        data-role="accordion-icon"
                        class="accordion-icon3"
                      >
                        <path
                          d="M366 708l196-196-196-196 60-60 256 256-256 256z"
                        ></path>
                      </svg>
                    </div>
                    <div
                      data-role="accordion-container"
                      class="accordion-element3 accordion-element"
                    >
                      <div class="accordion-details3">
                        <span class="accordion-text5">
                          <span>Componenten</span>
                        </span>
                        <span
                          data-role="accordion-content"
                          class="accordion-text6"
                        >
                          <span>
                            De robot heeft 2 motoren, een USS (Ultra Sonen
                            Sensor) voor het detecteren van objecten en een
                            servo motor voor de USS
                          </span>
                        </span>
                      </div>
                      <svg
                        viewBox="0 0 1024 1024"
                        data-role="accordion-icon"
                        class="accordion-icon5"
                      >
                        <path
                          d="M366 708l196-196-196-196 60-60 256 256-256 256z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </accordion-wrapper>
              </div>
            </div>
          </div>
        </section>
        <section class="home-section18">
          <main class="home-banner">
            <div class="home-header15">
              <h2 class="section-heading">Weet je het nu al?</h2>
              <p class="home-description1 section-description">
                Is dit alle info die je nodig hebt of heb je nog vragen?
              </p>
            </div>
            <div class="home-buttons2">
              <a href="#plans" class="home-link7">
                <div class="home-get-started5 button">
                  <span class="home-text31">Wordt nu lid</span>
                </div>
              </a>
              <a
                href="mailto:support@roboticawerenfridus.nl?subject="
                class="home-link8"
              >
                <div class="home-book-demo button">
                  <span class="home-text32">Neem contact op</span>
                </div>
              </a>
            </div>
          </main>
        </section>
        <section class="home-section19">
          <div class="home-cube">
            <div class="home-top side"></div>
            <div class="home-front side"></div>
            <div class="home-left2 side"></div>
          </div>
          <main id="prijzen" class="home-pricing1">
            <header class="home-header16">
              <header class="home-left3">
                <span class="home-section20 section-head">robots</span>
                <h2 class="section-heading home-heading20">
                  Kies jouw robot op maat, om lid te worden
                </h2>
              </header>
              <div class="home-right2">
                <p class="home-paragraph5 section-description">
                  Je kan je aanmelden, hierdoor wordt je lid. Je betaald
                  eenmalig contributie, dat is alleen kosten voor een robot. Heb je vragen
                  of advies nodig, contacteer ons dan.
                </p>
              </div>
            </header>
            <div class="home-plans-container">
              <div class="home-switch1">
                <div class="switch">
                  <label class="home-text33">Contributie</label>
                </div>
                <div class="home-switch3 switch">
                  <label class="home-text34">Extras</label>
                </div>
              </div>
              <div class="home-pricing2">
                <h1 class="home-price">€60</h1>
                <span class="home-duration">/lidmaatschap</span>
              </div>
              <main id="plans" class="home-plans">
                <div class="home-plan1">
                  <div class="home-details1">
                    <div class="home-header17">
                      <label class="home-name1">Beginner</label>
                    </div>
                    <p class="home-description2">
                      De perfecte robot voor plug-en-play en rijden maar, niet
                      te veel poespas maar wel cool. Met Arduino Uno
                    </p>
                  </div>
                  <div class="home-buy-details1">
                    <a href="wordt-lid" class="home-navlink1">
                      <div class="home-buy1 button">
                        <span class="home-text35">
                          <span>Wordt nu lid</span>
                          <br />
                        </span>
                      </div>
                    </a>
                    <div class="home-features2">
                      <span class="home-heading21">Je krijgt:</span>
                      <div class="home-list1">
                        <includes-wrapper
                          class="includes-wrapper"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark includesroot-class-name">
                            <div class="includes-icon1">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon2"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label">
                              <span>Lidmaatschap</span>
                            </label>
                          </div>
                        </includes-wrapper>
                        <includes-wrapper-t67q
                          class="includes-wrapper-t67q"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark1 includesroot-class-name">
                            <div class="includes-icon4">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon5"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label1">
                              <span>Robot Kit</span>
                            </label>
                          </div>
                        </includes-wrapper-t67q>
                        <includes-wrapper-0q9u
                          class="includes-wrapper-0q9u"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark2 includesroot-class-name">
                            <div class="includes-icon7">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon8"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label2">
                              <span>Handleiding</span>
                            </label>
                          </div>
                        </includes-wrapper-0q9u>
                        <includes-wrapper-2n8f
                          class="includes-wrapper-2n8f"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark3 includesroot-class-name">
                            <div class="includes-icon10">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon11"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label3">
                              <span>Gereedschap</span>
                            </label>
                          </div>
                        </includes-wrapper-2n8f>
                        <excludes-wrapper
                          class="excludes-wrapper"
                          rootclassname="excludesundefined"
                        >
                          <!--Excludes component-->
                          <div class="excludes-mark excludesroot-class-name">
                            <div class="excludes-icon1">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="excludes-icon2"
                              >
                                <path
                                  d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                                ></path>
                              </svg>
                            </div>
                            <label class="excludes-label">
                              <span>WiFi en Bluetooth</span>
                            </label>
                          </div>
                        </excludes-wrapper>
                        <excludes-wrapper-9zmr
                          class="excludes-wrapper-9zmr"
                          rootclassname="excludesundefined"
                        >
                          <!--Excludes component-->
                          <div class="excludes-mark1 excludesroot-class-name">
                            <div class="excludes-icon4">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="excludes-icon5"
                              >
                                <path
                                  d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                                ></path>
                              </svg>
                            </div>
                            <label class="excludes-label1">
                              <span>Mogelijkheid voor Camera</span>
                            </label>
                          </div>
                        </excludes-wrapper-9zmr>
                        <excludes-wrapper-fp12
                          class="excludes-wrapper-fp12"
                          rootclassname="excludesundefined"
                        >
                          <!--Excludes component-->
                          <div class="excludes-mark2 excludesroot-class-name">
                            <div class="excludes-icon7">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="excludes-icon8"
                              >
                                <path
                                  d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                                ></path>
                              </svg>
                            </div>
                            <label class="excludes-label2">
                              <span>Bestuurbaar met telefoon</span>
                            </label>
                          </div>
                        </excludes-wrapper-fp12>
                        <excludes-wrapper-5a7f
                          class="excludes-wrapper-5a7f"
                          rootclassname="excludesundefined"
                        >
                          <!--Excludes component-->
                          <div class="excludes-mark3 excludesroot-class-name">
                            <div class="excludes-icon10">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="excludes-icon11"
                              >
                                <path
                                  d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                                ></path>
                              </svg>
                            </div>
                            <label class="excludes-label3">
                              <span>Huiswerk maken op robot</span>
                            </label>
                          </div>
                        </excludes-wrapper-5a7f>
                        <excludes-wrapper-0r08
                          class="excludes-wrapper-0r08"
                          rootclassname="excludesundefined"
                        >
                          <!--Excludes component-->
                          <div class="excludes-mark4 excludesroot-class-name">
                            <div class="excludes-icon13">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="excludes-icon14"
                              >
                                <path
                                  d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                                ></path>
                              </svg>
                            </div>
                            <label class="excludes-label4">
                              <span>Raspberry Pi 4B 1GB</span>
                            </label>
                          </div>
                        </excludes-wrapper-0r08>
                        <excludes-wrapper-acg4
                          class="excludes-wrapper-acg4"
                          rootclassname="excludesundefined"
                        >
                          <!--Excludes component-->
                          <div class="excludes-mark5 excludesroot-class-name">
                            <div class="excludes-icon16">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="excludes-icon17"
                              >
                                <path
                                  d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                                ></path>
                              </svg>
                            </div>
                            <label class="excludes-label5">
                              <span>Mogelijkheden voor AI</span>
                            </label>
                          </div>
                        </excludes-wrapper-acg4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="home-plan2">
                  <div class="home-details2">
                    <div class="home-header18">
                      <label class="home-name2">Intermediate</label>
                    </div>
                    <p class="home-description3">
                      De balans tussen ervaren en beginner, deze robot is
                      perfect voor besturen met telefoon en meerdere
                      mogelijkheden, in een ding. Met ESP32
                    </p>
                  </div>
                  <div class="home-buy-details2">
                    <a href="wordt-lid" class="home-navlink2">
                      <div class="home-buy2 button">
                        <span class="home-text38">
                          <span>Binnenkort!</span>
                          <br />
                        </span>
                      </div>
                    </a>
                    <div class="home-features3">
                      <span class="home-heading22">Je krijgt:</span>
                      <div class="home-list2">
                        <includes-wrapper-y8qc
                          class="includes-wrapper-y8qc"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark4 includesroot-class-name">
                            <div class="includes-icon13">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon14"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label4">
                              <span>Lidmaatschap</span>
                            </label>
                          </div>
                        </includes-wrapper-y8qc>
                        <includes-wrapper-2oq2
                          class="includes-wrapper-2oq2"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark5 includesroot-class-name">
                            <div class="includes-icon16">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon17"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label5">
                              <span>Robot Kit</span>
                            </label>
                          </div>
                        </includes-wrapper-2oq2>
                        <includes-wrapper-3987
                          class="includes-wrapper-3987"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark6 includesroot-class-name">
                            <div class="includes-icon19">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon20"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label6">
                              <span>Handleiding</span>
                            </label>
                          </div>
                        </includes-wrapper-3987>
                        <includes-wrapper-xrfg
                          class="includes-wrapper-xrfg"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark7 includesroot-class-name">
                            <div class="includes-icon22">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon23"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label7">
                              <span>Gereedschap</span>
                            </label>
                          </div>
                        </includes-wrapper-xrfg>
                        <includes-wrapper-f8og
                          class="includes-wrapper-f8og"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark8 includesroot-class-name">
                            <div class="includes-icon25">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon26"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label8">
                              <span>WiFi en Bluetooth</span>
                            </label>
                          </div>
                        </includes-wrapper-f8og>
                        <includes-wrapper-0q1p
                          class="includes-wrapper-0q1p"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark9 includesroot-class-name">
                            <div class="includes-icon28">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon29"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label9">
                              <span>Mogelijkheid voor Camera</span>
                            </label>
                          </div>
                        </includes-wrapper-0q1p>
                        <includes-wrapper-pkvu
                          class="includes-wrapper-pkvu"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark10 includesroot-class-name">
                            <div class="includes-icon31">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon32"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label10">
                              <span>Bestuurbaar met telefoon</span>
                            </label>
                          </div>
                        </includes-wrapper-pkvu>
                        <excludes-wrapper-7p1o
                          class="excludes-wrapper-7p1o"
                          rootclassname="excludesundefined"
                        >
                          <!--Excludes component-->
                          <div class="excludes-mark6 excludesroot-class-name">
                            <div class="excludes-icon19">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="excludes-icon20"
                              >
                                <path
                                  d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                                ></path>
                              </svg>
                            </div>
                            <label class="excludes-label6">
                              <span>Huiswerk maken op robot</span>
                            </label>
                          </div>
                        </excludes-wrapper-7p1o>
                        <excludes-wrapper-fb8c
                          class="excludes-wrapper-fb8c"
                          rootclassname="excludesundefined"
                        >
                          <!--Excludes component-->
                          <div class="excludes-mark7 excludesroot-class-name">
                            <div class="excludes-icon22">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="excludes-icon23"
                              >
                                <path
                                  d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                                ></path>
                              </svg>
                            </div>
                            <label class="excludes-label7">
                              <span>Raspberry Pi 4B 1GB</span>
                            </label>
                          </div>
                        </excludes-wrapper-fb8c>
                        <excludes-wrapper-t9cj
                          class="excludes-wrapper-t9cj"
                          rootclassname="excludesundefined"
                        >
                          <!--Excludes component-->
                          <div class="excludes-mark8 excludesroot-class-name">
                            <div class="excludes-icon25">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="excludes-icon26"
                              >
                                <path
                                  d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                                ></path>
                              </svg>
                            </div>
                            <label class="excludes-label8">
                              <span>Mogelijkheden voor AI</span>
                            </label>
                          </div>
                        </excludes-wrapper-t9cj>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="home-plan3">
                  <div class="home-details3">
                    <div class="home-header19">
                      <label class="home-name3">Ervaren</label>
                    </div>
                    <p class="home-description4">
                      Deze robot heeft een computer, krachtiger dan een oude PC,
                      perfect voor ervaren leden. Met een Raspberry Pi model 4B
                      met 1 GB RAM
                    </p>
                  </div>
                  <div class="home-buy-details3">
                    <a href="wordt-lid" class="home-navlink3">
                      <div class="home-buy3 button">
                        <span class="home-text41">
                          <span>Wordt nu lid</span>
                          <br />
                        </span>
                      </div>
                    </a>
                    <div class="home-features4">
                      <span class="home-heading23">Je krijgt:</span>
                      <div class="home-list3">
                        <includes-wrapper-ll35
                          class="includes-wrapper-ll35"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark11 includesroot-class-name">
                            <div class="includes-icon34">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon35"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label11">
                              <span>Lidmaatschap</span>
                            </label>
                          </div>
                        </includes-wrapper-ll35>
                        <includes-wrapper-b18b
                          class="includes-wrapper-b18b"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark12 includesroot-class-name">
                            <div class="includes-icon37">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon38"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label12">
                              <span>Robot Kit</span>
                            </label>
                          </div>
                        </includes-wrapper-b18b>
                        <includes-wrapper-i73a
                          class="includes-wrapper-i73a"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark13 includesroot-class-name">
                            <div class="includes-icon40">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon41"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label13">
                              <span>Handleiding</span>
                            </label>
                          </div>
                        </includes-wrapper-i73a>
                        <includes-wrapper-7bvf
                          class="includes-wrapper-7bvf"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark14 includesroot-class-name">
                            <div class="includes-icon43">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon44"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label14">
                              <span>Gereedschap</span>
                            </label>
                          </div>
                        </includes-wrapper-7bvf>
                        <includes-wrapper-p5vc
                          class="includes-wrapper-p5vc"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark15 includesroot-class-name">
                            <div class="includes-icon46">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon47"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label15">
                              <span>WiFi en Bluetooth</span>
                            </label>
                          </div>
                        </includes-wrapper-p5vc>
                        <includes-wrapper-fitn
                          class="includes-wrapper-fitn"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark16 includesroot-class-name">
                            <div class="includes-icon49">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon50"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label16">
                              <span>Mogelijkheid voor camera</span>
                            </label>
                          </div>
                        </includes-wrapper-fitn>
                        <includes-wrapper-ooie
                          class="includes-wrapper-ooie"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark17 includesroot-class-name">
                            <div class="includes-icon52">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon53"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label17">
                              <span>Bestuurbaar met telefoon</span>
                            </label>
                          </div>
                        </includes-wrapper-ooie>
                        <includes-wrapper-4u97
                          class="includes-wrapper-4u97"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark18 includesroot-class-name">
                            <div class="includes-icon55">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon56"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label18">
                              <span>Huiswerk maken op robot</span>
                            </label>
                          </div>
                        </includes-wrapper-4u97>
                        <includes-wrapper-l93u
                          class="includes-wrapper-l93u"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark19 includesroot-class-name">
                            <div class="includes-icon58">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon59"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label19">
                              <span>Raspberry Pi 4B 1GB</span>
                            </label>
                          </div>
                        </includes-wrapper-l93u>
                        <includes-wrapper-55cj
                          class="includes-wrapper-55cj"
                          rootclassname="includesundefined"
                        >
                          <!--Includes component-->
                          <div class="includes-mark20 includesroot-class-name">
                            <div class="includes-icon61">
                              <svg
                                viewBox="0 0 1024 1024"
                                class="includes-icon62"
                              >
                                <path
                                  d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                                ></path>
                              </svg>
                            </div>
                            <label class="includes-label20">
                              <span>Mogelijkheden voor AI</span>
                            </label>
                          </div>
                        </includes-wrapper-55cj>
                      </div>
                    </div>
                  </div>
                </div>
              </main>
            </div>
          </main>
        </section>
        <section class="home-section21">
          <header class="home-header20">
            <header class="home-left4">
              <span class="home-section22 section-head">reviews</span>
              <h2 class="home-heading24 section-heading">
                Wat zeggen leden over de club
              </h2>
            </header>
            <div class="home-right3">
              <p class="home-paragraph6 section-description">
                Lees hier wat de leden zeggen over de club, dan weet je wat je
                moet verwachten.
              </p>
            </div>
          </header>
          <main class="home-cards2">
            <div class="home-container2">
              <review-wrapper
                class="review-wrapper"
                rootclassname="reviewundefined"
              >
                <!--Review component-->
                <section class="review-card reviewroot-class-name">
                  <div class="review-stars">
                    <svg viewBox="0 0 1024 1024" class="review-icon10">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon12">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon14">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon16">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon18">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path>
                    </svg>
                  </div>
                  <main class="review-content">
                    <p class="review-quote">
                      <span>
                        "Leuke club, is altijd super gezellig, je kan er ook
                        gewoon leren en dingen 3D printen, echt tof"
                      </span>
                    </p>
                    <div class="review-author1">
                      <img
                        alt="images/robot1-1000w.jpg"
                        src="images/robot1-1000w.jpg"
                        class="review-avatar"
                      />
                      <div class="review-details">
                        <h1 class="review-author2"><span>Thijmen</span></h1>
                        <label class="review-position"><span>Lid</span></label>
                      </div>
                    </div>
                  </main>
                </section>
              </review-wrapper>
              <review-wrapper-x846
                class="review-wrapper-x846"
                rootclassname="reviewundefined"
              >
                <!--Review component-->
                <section class="review-card1 reviewroot-class-name">
                  <div class="review-stars1">
                    <svg viewBox="0 0 1024 1024" class="review-icon20">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon22">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon24">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon26">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon28">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path>
                    </svg>
                  </div>
                  <main class="review-content1">
                    <p class="review-quote1">
                      <span>
                        "Echt een geweldige website jongens, ben verrast wat
                        jullie allemaal doen voor deze club. Dank jullie
                        wel.
                      </span>
                    </p>
                    <div class="review-author3">
                      <img
                        alt="images/logo-700w.png"
                        src="images/logo-700w.png"
                        class="review-avatar1"
                      />
                      <div class="review-details1">
                        <h1 class="review-author4">
                          <span>Ton Schuckman</span>
                        </h1>
                        <label class="review-position1">
                          <span>Founder</span>
                        </label>
                      </div>
                    </div>
                  </main>
                </section>
              </review-wrapper-x846>
            </div>
            <div class="home-container3">
              <review-wrapper-9q4j
                class="review-wrapper-9q4j"
                rootclassname="reviewundefined"
              >
                <!--Review component-->
                <section class="review-card2 reviewroot-class-name">
                  <div class="review-stars2">
                    <svg viewBox="0 0 1024 1024" class="review-icon30">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon32">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon34">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon36">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon38">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path>
                    </svg>
                  </div>
                  <main class="review-content2">
                    <p class="review-quote2">
                      <span>
                        "Super coole club, heb deze website gemaakt met veel
                        plezier voor de club"
                      </span>
                    </p>
                    <div class="review-author5">
                      <img
                        alt="images/code-1200w.jpg"
                        src="images/code-1200w.jpg"
                        class="review-avatar2"
                      />
                      <div class="review-details2">
                        <h1 class="review-author6"><span>Nathan</span></h1>
                        <label class="review-position2">
                          <span>Team/lid</span>
                        </label>
                      </div>
                    </div>
                  </main>
                </section>
              </review-wrapper-9q4j>
              <review-wrapper-9fic
                class="review-wrapper-9fic"
                rootclassname="reviewundefined"
              >
                <!--Review component-->
                <section class="review-card3 reviewroot-class-name">
                  <div class="review-stars3">
                    <svg viewBox="0 0 1024 1024" class="review-icon40">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon42">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon44">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon46">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon48">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path>
                    </svg>
                  </div>
                  <main class="review-content3">
                    <p class="review-quote3">
                      <span>"Heb echt een leuke tijd gehad hier."</span>
                    </p>
                    <div class="review-author7">
                      <img
                        alt="image"
                        src="images/robot1-1000w.jpg"
                        class="review-avatar3"
                      />
                      <div class="review-details3">
                        <h1 class="review-author8"><span>Raphael</span></h1>
                        <label class="review-position3">
                          <span>Voormalig Lid</span>
                        </label>
                      </div>
                    </div>
                  </main>
                </section>
              </review-wrapper-9fic>
            </div>
            <div class="home-container4">
              <review-wrapper-twg5
                class="review-wrapper-twg5"
                rootclassname="reviewundefined"
              >
                <!--Review component-->
                <section class="review-card4 reviewroot-class-name">
                  <div class="review-stars4">
                    <svg viewBox="0 0 1024 1024" class="review-icon50">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon52">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon54">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon56">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon58">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path>
                    </svg>
                  </div>
                  <main class="review-content4">
                    <p class="review-quote4">
                      <span>
                        "Echt een super club, dit heeft mijn leven op deze
                        school echt veranderd."
                      </span>
                    </p>
                    <div class="review-author9">
                      <img
                        alt="images/robot-workbench-700h.jpg"
                        src="images/robot-workbench-700h.jpg"
                        class="review-avatar4"
                      />
                      <div class="review-details4">
                        <h1 class="review-author10"><span>Flynn</span></h1>
                        <label class="review-position4">
                          <span>Team/lid</span>
                        </label>
                      </div>
                    </div>
                  </main>
                </section>
              </review-wrapper-twg5>
              <review-wrapper-qfg7
                class="review-wrapper-qfg7"
                rootclassname="reviewundefined"
              >
                <!--Review component-->
                <section class="review-card5 reviewroot-class-name">
                  <div class="review-stars5">
                    <svg viewBox="0 0 1024 1024" class="review-icon60">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon62">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon64">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon66">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path></svg
                    ><svg viewBox="0 0 1024 1024" class="review-icon68">
                      <path
                        d="M512 736l-264 160 70-300-232-202 306-26 120-282 120 282 306 26-232 202 70 300z"
                      ></path>
                    </svg>
                  </div>
                  <main class="review-content5">
                    <p class="review-quote5"><span>"Gewoon geweldig"</span></p>
                    <div class="review-author11">
                      <img
                        alt="image"
                        src="images/robot-workbench-700h.jpg"
                        class="review-avatar5"
                      />
                      <div class="review-details5">
                        <h1 class="review-author12"><span>Anoniem</span></h1>
                        <label class="review-position5"><span>Lid</span></label>
                      </div>
                    </div>
                  </main>
                </section>
              </review-wrapper-qfg7>
            </div>
          </main>
          <div class="home-view-more"><p class="home-text44">View more</p></div>
        </section>
        <section class="home-section23">
          <header class="home-header21">
            <span class="home-section24 section-head">FAQ</span>
            <h2 class="home-heading25 section-heading">
              Veel gevraagde vragen
            </h2>
          </header>
          <main class="home-accordion">
            <faq-wrapper class="faq-wrapper" rootclassname="fa-qundefined">
              <!--FAQ component-->
              <div class="faq-accordion fa-qroot-class-name">
                <div
                  data-role="accordion-container"
                  class="faq-element1 accordion-element"
                >
                  <div class="faq-details1">
                    <span class="faq-text10">
                      Kan ik als ik op deze school kom meteen aanmelden?
                    </span>
                    <span data-role="accordion-content" class="faq-text11">
                      Ja, de club is voor alle leeftijden van de 1ste tot de en met 6de
                      klas mag je je aanmelden. Meld je aan via de site of mail
                      naar support@roboticawerenfridus.nl
                    </span>
                  </div>
                  <div data-role="accordion-icon">
                    <svg viewBox="0 0 1024 1024" class="faq-icon10">
                      <path
                        d="M366 708l196-196-196-196 60-60 256 256-256 256z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <div
                  data-role="accordion-container"
                  class="faq-element2 accordion-element"
                >
                  <div class="faq-details2">
                    <span class="faq-text12">
                      Wanneer mag ik dan komen bij de club?
                    </span>
                    <span data-role="accordion-content" class="faq-text13">
                      Je mag elke donderdag en maandag middag komen na het 5de
                      lesuur, als je uit bent. Ook als je een tussen uur hebt
                      het 6de bijvoorbeeld mag je komen tussendoor!
                    </span>
                  </div>
                  <div data-role="accordion-icon">
                    <svg viewBox="0 0 1024 1024" class="faq-icon12">
                      <path
                        d="M366 708l196-196-196-196 60-60 256 256-256 256z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <div
                  data-role="accordion-container"
                  class="faq-element3 accordion-element"
                >
                  <div class="faq-details3">
                    <span class="faq-text14">Is de robot echt van mij?</span>
                    <span data-role="accordion-content" class="faq-text15">
                      Ja, je mag de robot, als hij af is, mee naar huis nemen. Als je problemen
                      hebt dan kan je ons mailen of kom op een maandag,
                      donderdag of vrijdag naar lokaal 42a
                    </span>
                  </div>
                  <div data-role="accordion-icon">
                    <svg viewBox="0 0 1024 1024" class="faq-icon14">
                      <path
                        d="M366 708l196-196-196-196 60-60 256 256-256 256z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <div
                  data-role="accordion-container"
                  class="faq-element4 accordion-element"
                >
                  <div class="faq-details4">
                    <span class="faq-text16">Hoezo is de club zo duur?</span>
                    <span data-role="accordion-content" class="faq-text17">
                      Bij onze club betaal je alleen voor de onderdelen. Elektronica en dergelijke zijn erg duur, dit komt ook door inflatie etc. De
                      school en jij betalen ieder de helft van de onderdelen.
                    </span>
                  </div>
                  <div data-role="accordion-icon">
                    <svg viewBox="0 0 1024 1024" class="faq-icon16">
                      <path
                        d="M366 708l196-196-196-196 60-60 256 256-256 256z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <div
                  data-role="accordion-container"
                  class="faq-element5 accordion-element"
                >
                  <div class="faq-details5">
                    <span class="faq-text18">
                      Ik wil even langskomen om te kijken, wanneer kan dat?
                    </span>
                    <span data-role="accordion-content" class="faq-text19">
                      Op onze openingstijden: maandagmiddag en donderdagmiddag
                      zijn wij open voor kijkers. Mail ons eerst wel even over
                      jouw komst.
                    </span>
                  </div>
                  <div data-role="accordion-icon">
                    <svg viewBox="0 0 1024 1024" class="faq-icon18">
                      <path
                        d="M366 708l196-196-196-196 60-60 256 256-256 256z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <div
                  data-role="accordion-container"
                  class="faq-element6 accordion-element"
                >
                  <div class="faq-details6">
                    <span class="faq-text20">Mag ik 2 robots?</span>
                    <span data-role="accordion-content" class="faq-text21">
                      Kan je niet kiezen, wil je er 2? Dan mag dat, maar je moet dan wel 2 keer contributie betalen.
                    </span>
                  </div>
                  <div data-role="accordion-icon">
                    <svg viewBox="0 0 1024 1024" class="faq-icon20">
                      <path
                        d="M366 708l196-196-196-196 60-60 256 256-256 256z"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>
            </faq-wrapper>
          </main>
        </section>
        <section class="home-section25">
          <main class="home-content6">
            <header class="home-header22">
              <h2 class="home-heading26 section-heading">
                Download de BlueDot app en bestuur je robot, als hij een Raspberry Pi heeft.
              </h2>
              <div class="home-buttons3">
                <div class="home-android button">
                  <img
                    alt="image"
                    src="images/Icons/android-200h.png"
                    class="home-icon"
                  />
                  <span class="home-text45">Download de app nu!</span>
                </div>
              </div>
            </header>
            <img
              alt="image"
              src="images/bluedot-robot-1200w.jpg"
              class="home-image24"
            />
          </main>
        </section>
        <footer class="home-footer">
          <div class="home-content7">
            <main class="home-main-content">
              <div class="home-content8">
                <header class="home-main5">
                  <div class="home-header23">
                    <img
                      alt="image"
                      src="images/logo-700w.png"
                      class="home-branding"
                    />
                    <span class="home-text46">
                      Robotica Werenfridus, de beste tech club van Hoorn.&nbsp;
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Officieel
                      is het geen Robot maar een MER, maar goed, niemand weet
                      toch wat dat is.
                    </span>
                  </div>
                </header>
              </div>
              <section class="home-copyright1">
                <span class="home-text47">
                  © 2015-2025 Robotica Club Werenfridus. All Rights Reserved.
                </span>
              </section>
            </main>
            <main class="home-subscribe">
              <main class="home-main6">
                <h1 class="home-heading27">
                  Wordt lid van onze Nieuwsbrief en lees over nieuwe robots en
                  tech feitjes!
                </h1>
                <div class="home-input-field">
                  	<form id="subscribeForm">
        				<input class="home-textinput input" type="email" placeholder="Vul email in en druk op enter" id="nbemail" name="email" required>
                  </form>
                </div>
              </main>
              <h1 class="home-notice">
                Door te lid te worden van de nieuwsbrief ga je akkoord met onze
                voorwaarden.
              </h1>
              <div id="message" class="home-heading27" style="display:none;"></div>
            </main>
            <section class="home-copyright2">
              <span class="home-text52">
                © 2022 Robotica. All Rights Reserved.
              </span>
            </section>
          </div>
        </footer>
        <div>
          <div class="home-container6">
            <script>
                  /*
              Accordion - Code Embed
              */

              /* listenForUrlChangesAccordion() makes sure that if you changes pages inside your app,
              the Accordions will still work*/

              const listenForUrlChangesAccordion = () => {
                    let url = location.href;
                    document.body.addEventListener(
                      'click',
                      () => {
                        requestAnimationFrame(() => {
                          if (url !== location.href) {
                            runAccordionCodeEmbed();
                            url = location.href;
                          }
                        });
                      },
                      true
                    );
                  };


              const runAccordionCodeEmbed = () => {
                  const accordionContainers = document.querySelectorAll('[data-role='accordion-container']'); // All accordion containers
                  const accordionContents = document.querySelectorAll('[data-role='accordion-content']'); // All accordion content
                  const accordionIcons = document.querySelectorAll('[data-role='accordion-icon']'); // All accordion icons

                  accordionContents.forEach((accordionContent) => {
                      accordionContent.style.display = 'none'; //Hides all accordion contents
                  });

                  accordionContainers.forEach((accordionContainer, index) => {
                      accordionContainer.addEventListener('click', () => {
                          accordionContents.forEach((accordionContent) => {
                          accordionContent.style.display = 'none'; //Hides all accordion contents
                          });

                          accordionIcons.forEach((accordionIcon) => {
                              accordionIcon.style.transform = 'rotate(0deg)'; // Resets all icon transforms to 0deg (default)
                          });

                          accordionContents[index].style.display = 'flex'; // Shows accordion content
                          accordionIcons[index].style.transform = 'rotate(180deg)'; // Rotates accordion icon 180deg
                      });
                  });
              }

              runAccordionCodeEmbed()
              listenForUrlChangesAccordion()
 
            </script>
            <script>
    const form = document.getElementById('subscribeForm');
    const messageBox = document.getElementById('message');

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        const email = document.getElementById('nbemail').value;

        const response = await fetch('https://nieuwsbrief.roboticawerenfridus.nl/subscribe', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({ email })
        });

        const text = await response.text();

        messageBox.classList.remove('success', 'error');

        if (response.ok) {
            messageBox.textContent = text;
            messageBox.classList.add('message', 'success');
        } else {
            messageBox.textContent = text;
            messageBox.classList.add('message', 'error');
        }

        messageBox.style.display = 'block';
    });
</script>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>



