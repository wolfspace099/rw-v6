<?php
$host = "db.printiacs.nl";
$user = "u21_7PZQpfWyxW";
$password = "7Qkb=!xFaw0TrafvT1F^hkvP";
$database = "robotica";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) die("Database connection failed: " . $conn->connect_error);

$success = null;
$error = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $student_number = trim($_POST["student_number"]);
    $email = trim($_POST["email"]);
    $parent_contact = trim($_POST["parent_contact"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $level = $_POST["level"];
    $invoice_agreement = isset($_POST["invoice_agreement"]) ? 1 : 0;

    if ($password !== $confirm_password) {
        $error = "Wachtwoorden komen niet overeen.";
    } else {
        $hashed_pw = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO member (name, student_number, email, parent_contact, password, level, invoice_agreement) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssi", $name, $student_number, $email, $parent_contact, $hashed_pw, $level, $invoice_agreement);

        if ($stmt->execute()) {
            $success = "Je bent succesvol ingeschreven!";

            if ($invoice_agreement === 1) {
                $postData = array(
                    "name" => $name,
                    "email" => $email,
                    "parent_email" => $parent_contact
                );

                $ch = curl_init("https://nieuwsbrief.roboticawerenfridus.nl/send_invoice_email");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json'
                ));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $flaskResponse = curl_exec($ch);
                if (curl_errno($ch)) {
                    $error .= " Email versturen mislukt: " . curl_error($ch);
                }
                curl_close($ch);
            }

        } else {
            $error = "Fout bij opslaan: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Wordt-lid - Robotica</title>
    <meta property="og:title" content="Wordt-lid - Robotica" />
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
      <link href="./wordt-lid.css" rel="stylesheet" />

      <div class="wordt-lid-container1">
        <navbar-wrapper class="navbar-wrapper" rootclassname="navbarundefined">
          <!--Navbar component-->
          <header class="navbar-navbar navbarroot-class-name2">
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
                <a href="/login" class="navbar-link5 nav-link">Log in</a>
              </div>
              <a href="/wordt-lid" class="navbar-navlink2">
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
        <div class="wordt-lid-container2 member-page">
          <div class="member-wrapper wordt-lid-container3">
            <h2 class="member-title wordt-lid-text10">Wordt nu lid!</h2>
            <form method="POST" class="member-wrapper wordt-lid-container3">
            <input
              type="text"
              placeholder="Volledige naam"
              name="name"
              class="member-input input wordt-lid-textinput1"
            />
            <input
              type="text"
              pattern="\d{7}"
              placeholder="Leerling nummer"
              name="student_number"
              class="member-input input wordt-lid-textinput2"
            />
            <input
              type="email"
              placeholder="Email"
              name="email"
              class="member-input input wordt-lid-textinput3"
            />
            <input
              type="email"
              placeholder="Email of telefoon ouder"
              name="parent_contact"
              class="member-input input wordt-lid-textinput4"
            />
            <input
              type="password"
              placeholder="Wachtwoord"
              name="password"
              class="member-input input wordt-lid-textinput5"
            />
            <input
              type="password"
              placeholder="Bevestig Wachtwoord"
              name="confirm_password"
              class="member-input input wordt-lid-textinput6"
            />
            <select name="level" class="member-select">
              <option value="" disabled="" selected="">
                Select your level
              </option>
              <option value="beginner">Beginner</option>
              <option value="intermediate">Intermediate</option>
              <option value="ervaren">Ervaren</option>
            </select>
            <label class="member-checkbox wordt-lid-text12">
              <input type="checkbox" required="" name="invoice_agreement" class="input" />
              <span>
                Ik begrijp dat er een factuur naar mijn ouders/verzorgers wordt verstuurd,
                en ik ga akkoord met de Club voorwaarden.
              </span>
            </label>
            <button class="member-button button" type="submit">Submit</button>
            </form>
        <?php if ($success): ?>
  		    <div class="success"><?= htmlspecialchars($success) ?></div>
	    <?php elseif ($error): ?>
  			<div class="error"><?= htmlspecialchars($error) ?></div>
		<?php endif; ?>
            <a
              rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap"
            ></a>
          </div>
        </div>
        <section class="wordt-lid-section1">
          <main class="wordt-lid-content1"></main>
        </section>
        <section class="wordt-lid-section2">
          <main class="wordt-lid-content2">
            <header class="wordt-lid-header1">
              <h2 class="wordt-lid-heading1 section-heading">
                Download de BlueDot app en bestuur je robot, als hij een Raspberry Pi heeft.
              </h2>
              <div class="wordt-lid-buttons">
                <div class="wordt-lid-android button">
                  <img
                    alt="image"
                    src="images/Icons/android-200h.png"
                    class="wordt-lid-icon"
                  />
                  <span class="wordt-lid-text14">Download de app nu!</span>
                </div>
              </div>
            </header>
            <img
              alt="image"
              src="images/bluedot-robot-1200w.jpg"
              class="wordt-lid-image"
            />
          </main>
        </section>
        <footer class="wordt-lid-footer">
          <div class="wordt-lid-content3">
            <main class="wordt-lid-main-content">
              <div class="wordt-lid-content4">
                <header class="wordt-lid-main1">
                  <div class="wordt-lid-header2">
                    <img
                      alt="image"
                      src="images/logo-700w.png"
                      class="wordt-lid-branding"
                    />
                    <span class="wordt-lid-text15">
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
              <section class="wordt-lid-copyright1">
                <span class="wordt-lid-text16">
                  © 2015-2025 Robotica Club Werenfridus. All Rights Reserved.
                </span>
              </section>
            </main>
            <main class="wordt-lid-subscribe">
              <main class="wordt-lid-main2">
                <h1 class="wordt-lid-heading2">
                  Wordt lid van onze Nieuwsbrief en lees over nieuwe robots en
                  tech feitjes!
                </h1>
                <div class="wordt-lid-input-field">
                  	<form id="subscribeForm">
        				<input class="wordt-lid-textinput8" type="email" placeholder="Vul email in en druk enter" id="nbemail" name="email" required>
                  </form>
                </div>
              </main>
              <h1 class="wordt-lid-notice">
                Door te lid te worden van de nieuwsbrief ga je akkoord met onze
                voorwaarden.
              </h1>
              <div id="message" class="wordt-lid-heading2" style="display:none;"></div>
            </main>
          </div>
        </footer>
        <div>
          </div>
        </div>
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


