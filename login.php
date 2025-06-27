<?php
session_save_path('/home/container/sessions');
session_start();
include 'connection.php';

$error = null;

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($email) && !empty($password)) {
        $stmt = $db->prepare("SELECT * FROM member WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            unset($user['password']);
            $_SESSION['member']['name'] = $user;
            header("Location: dashboard");
            exit();
        } else {
            $error = "Ongeldige inloggegevens.";
        }
    } else {
        $error = "Vul zowel e-mail als wachtwoord in.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login - Robotica</title>
    <meta property="og:title" content="Login - Robotica" />
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
      <link href="./login.css" rel="stylesheet" />

      <div class="login-container1">
        <navbar-wrapper class="navbar-wrapper" rootclassname="navbarundefined">
          <!--Navbar component-->
          <header class="navbar-navbar navbarroot-class-name1">
            <a href="index" class="navbar-navlink1">
              <img
                alt="images/logo-200h.png"
                src="images/logo-200h.png"
                class="navbar-branding-logo"
              />
            </a>
            <div class="navbar-nav-content">
              <div class="navbar-nav-links1">
                <a href="/#waarom" class="navbar-link1 nav-link">Over de club</a>
                <a href="/#overclub" class="navbar-link2 nav-link">Waarom aanmelden?</a>
                <a href="/#plans" class="navbar-link3 nav-link">Robots</a>
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
                  src="images/logo-1500h.png"
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
                <a href="/#waarom" class="nav-link">Over de club</a>
                <a href="/#overclub" class="nav-link">Waarom aanmelden?</a>
                <a href="/#plans" class="nav-link">Robots</a>
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
        <div class="login-container2">
          <div class="login-hero">
            <div class="login-content1">
              <main class="login-main1">
                <header class="login-header1">
                  <h1 class="login-heading1">Ben je al lid? Log dan hier in!</h1>
                  <span class="login-caption1">
                    Krijg toegang tot documentatie, nieuws en nog veel meer. Dit geeft jou toegang tot een gesloten deel online, en zit gewoon bij jouw lidmaatschap!
                  </span>
                </header>
                <div class="login-buttons1">
                  <a href="/#prijzen" class="login-link1">
                    <div class="login-get-started1 button">
                      <span class="login-text10">Wordt nu lid</span>
                    </div>
                  </a>
                  <a href="/#overclub" class="login-link2">
                    <div class="login-get-started2 button">
                      <span class="login-text11">
                        <span>Meer info</span>
                        <br />
                      </span>
                    </div>
                  </a>
                </div>
              </main>
            </div>
            <div class="login-image1"></div>
          </div>
          <form method="POST">
          <div class="login-container3 login-wrapper">
            <img
              alt="Logo"
              src="images/logo-1500h.png"
              class="login-logo login-image2"
            />
            <h2 class="login-title login-text14">Login</h2>
            <input
              type="text"
              id="email"
              placeholder="Email"
              name="email"
              required
              class="login-input input login-textinput1"
            />
            <input
              type="password"
              placeholder="Wachtwoord"
              id="password"
              name="password"
              required
              class="login-input input login-textinput2"
            />
            <button type="submit" name="login" value="Login" class="login-button button">Log In</button>
            <h2 class="login-title login-text14"> </h2>
            <span class="login-text16">
              Wachtwoord of email vergeten? Mail ons
            </span>
          <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
          </div>
          </form>
        </div>
        <section id="overclub" class="login-section1">
          <header class="login-header2">
            <h2 class="login-text15">Wat krijg je bij een Lidmaatschap?</h2>
            <span class="login-text16">
              Toegang tot coole extras en nog veel meer.
            </span>
          </header>
          <section class="login-note1">
            <div class="login-image3">
              <img
                alt="image"
                src="images/code-400h.jpg"
                class="login-image4"
              />
            </div>
            <div class="login-content2">
              <div class="login-main2">
                <div class="login-caption2">
                  <span class="login-section2 section-head">
                    eigen geschreven code
                  </span>
                </div>
                <div class="login-heading2">
                  <h2 class="section-heading">
                    Krijg meer code, voor coolere dingen.
                  </h2>
                  <p class="section-description">
                    Op de RoboDocs kan je lezen en leren over coole extras. Een
                    deel is gesloten, hiervoor heb je een Lidmaatschap nodig.
                  </p>
                </div>
              </div>
              <a
                href="https://werenfridus.nl"
                target="_blank"
                rel="noreferrer noopener"
                class="login-link3"
              >
                <div class="login-get-started3 button">
                  <span class="login-text17">Ga naar RoboDocs</span>
                </div>
              </a>
            </div>
          </section>
          <section id="overclub" class="login-note2">
            <div class="login-image5">
              <img
                alt="image"
                src="images/logo-1500h.png"
                class="login-image6"
              />
            </div>
            <div class="login-content3">
              <main class="login-main3">
                <header class="login-caption3">
                  <span class="login-section3 section-head">robotica lid</span>
                </header>
                <main class="login-heading4">
                  <header class="login-header3">
                    <h2 class="section-heading">
                      Wat krijg je nou precies, geheel gratis bij jouw
                      lidmaatschap?
                    </h2>
                    <p class="section-description">
                      <span>
                        Deze dingen krijg je inbegrepen bij een Lidmaatschap
                      </span>
                      <br />
                    </p>
                  </header>
                  <div class="login-checkmarks">
                    <mark-wrapper class="mark-wrapper">
                      <!--Mark component-->
                      <div id="Mark" class="mark-mark">
                        <div class="mark-icon1">
                          <svg viewBox="0 0 1024 1024" class="mark-icon2">
                            <path
                              d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                            ></path>
                          </svg>
                        </div>
                        <p class="mark-label">
                          <span>Custom code voor jouw robot</span>
                        </p>
                      </div>
                    </mark-wrapper>
                    <mark-wrapper-zzk8 class="mark-wrapper-zzk8">
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
                          <span>
                            Instructies over hoe je jouw robot kan upgraden
                          </span>
                        </p>
                      </div>
                    </mark-wrapper-zzk8>
                    <mark-wrapper-vuhi class="mark-wrapper-vuhi">
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
                          <span>
                            Krijg informatie over de club met Robotica Nieuws
                          </span>
                        </p>
                      </div>
                    </mark-wrapper-vuhi>
                  </div>
                </main>
              </main>
              <a href="#plans" class="login-link4">
              </a>
            </div>
          </section>
          <section class="login-section4">
            <main class="login-content4">
              <header class="login-header4">
                <h2 class="login-heading6 section-heading">
                  Download de BlueDot app en bestuur je robot, als hij een Raspberry Pi heeft.
                </h2>
                <div class="login-buttons2">
                  <div class="login-android button">
                    <img
                      alt="image"
                      src="images/Icons/android-200h.png"
                      class="login-icon"
                    />
                    <span class="login-text21">Download de app nu!</span>
                  </div>
                </div>
              </header>
              <img
                alt="image"
                src="images/bluedot-robot-1000w.jpg"
                class="login-image7"
              />
            </main>
          </section>
          <footer class="login-footer">
            <div class="login-content5">
              <main class="login-main-content">
                <div class="login-content6">
                  <header class="login-main4">
                    <div class="login-header5">
                      <img
                        alt="image"
                        src="images/logo-1500h.png"
                        class="login-branding"
                      />
                      <span class="login-text22">
                        Robotica Werenfridus, de beste tech club van
                        Hoorn.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;Officieel is het geen Robot maar een MER, maar
                        goed, niemand weet toch wat dat is.
                      </span>
                    </div>
                  </header>
                </div>
                <section class="login-copyright1">
                  <span class="login-text23">
                    © 2015-2025 Robotica Club Werenfridus. All Rights Reserved.
                  </span>
                </section>
              </main>
              <main class="login-subscribe">
                <main class="login-main5">
                  <h1 class="login-heading7">
                    Wordt lid van onze Nieuwsbrief en lees over nieuwe robots en
                    tech feitjes!
                  </h1>
                  <div class="login-input-field">
                    <div class="login-input-field">
                  	<form id="subscribeForm">
        				<input class="login-textinput3" type="email" placeholder="Vul email in en druk op enter" id="nbemail" name="email" required>
                  </form>
                </div>
                  </div>
                </main>
                <h1 class="login-notice">
                  Door te lid te worden van de nieuwsbrief ga je akkoord met
                  onze voorwaarden.
                </h1>
                <div id="message" class="login-heading7" style="display:none;"></div>
              </main>
              <section class="login-copyright2">
                <span class="login-text28">
                  © 2022 latitude. All Rights Reserved.
                </span>
              </section>
            </div>
          </footer>
        </section>
      </div>
    </div>
  </body>
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
</html>


