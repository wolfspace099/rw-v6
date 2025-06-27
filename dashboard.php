<?php
session_save_path('/home/container/sessions');
session_start();
include 'connection.php';

if (!isset($_SESSION['member'])) {
    header("Location: login");
    exit();
}

$voornaam = "Gast";
if (isset($_SESSION['member']['name']['name'])) {
    $voornaam = htmlspecialchars($_SESSION['member']['name']['name']);
}

function fetch_newsletter($url) {
    $content = @file_get_contents($url);
    return $content !== FALSE ? $content : null;
}

function call_gemini($prompt) {
    $apiKey = 'AIzaSyAM-M_xEzndX6-jGQB4I5sQVsjkFnwOHMM';
    $url = 'https://generativelanguage.googleapis.com/v1/models/gemini-1.5-flash:generateContent?key=' . $apiKey;

    $data = [
        "contents" => [[
            "parts" => [[ "text" => $prompt ]]
        ]]
    ];

    $headers = [
        'Content-Type: application/json'
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    if ($response === false) {
        $error = curl_error($ch);
        curl_close($ch);
        return "⚠️ Fout bij cURL-verzoek: $error";
    }

    curl_close($ch);
    $result = json_decode($response, true);

    if (!isset($result['candidates'][0]['content']['parts'][0]['text'])) {
        return "Samenvatting niet beschikbaar.";
    }

    return $result['candidates'][0]['content']['parts'][0]['text'];
}


$newsletters = [
    ['url' => 'https://nieuwsbrief.roboticawerenfridus.nl/news1'],
    ['url' => 'https://nieuwsbrief.roboticawerenfridus.nl/news2'],
    ['url' => 'https://nieuwsbrief.roboticawerenfridus.nl/news3'],
];

foreach ($newsletters as $i => $entry) {
    $raw = fetch_newsletter($entry['url']);

    if ($raw) {
        $prompt = "Vat de volgende HTML-nieuwsbrief samen in maximaal 3 zinnen in het Nederlands. Geef alleen een korte samenvatting voor op de website is, voor ingelogde mensen. Als de nieuwsbrief niet beschikbaar is geef dan een leeg antwoord:\n\n" . strip_tags($raw);
        $ai_result = call_gemini($prompt);

        $lines = explode("\n", trim($ai_result));
        $summary = trim(implode("\n", array_slice($lines, 0, -1)));
        $title = trim(end($lines));

        $newsletters[$i]['summary'] = $summary;
        $newsletters[$i]['title'] = $title;
    } else {
        $newsletters[$i]['title'] = "Nieuwsbrief niet gevonden";
        $newsletters[$i]['summary'] = "Er kon geen inhoud worden opgehaald van {$entry['url']}.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard - Robotica v6</title>
    <meta property="og:title" content="Dashboard - Robotica v6" />
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
      <link href="./dashboard.css" rel="stylesheet" />

      <div class="dashboard-container1">
        <header class="dashboard-navbar">
          <a href="index" class="dashboard-navlink">
            <img
              alt="images/logo-1000w.png"
              src="images/logo-1000w.png"
              class="dashboard-branding-logo"
            />
          </a>
          <div class="dashboard-nav-content">
            <div class="dashboard-nav-links1">
              <a href="/#waarom" class="dashboard-link10 nav-link">
                Over de club
              </a>
              <a href="/#overclub" class="dashboard-link11 nav-link">Waarom aanmelden?</a>
              <a href="/#plans" class="dashboard-link12 nav-link">Robots</a>
              <a
                href="mailto:support@roboticawerenfridus.nl?subject="
                class="dashboard-link13 nav-link"
              >
                Contact
              </a>
              <a href="/logout" class="dashboard-link14 nav-link">Log uit</a>
            </div>
            <div class="dashboard-get-started1 get-started">
              <span class="dashboard-text10">Dashboard</span>
            </div>
            <div id="open-mobile-menu" class="dashboard-hamburger get-started">
              <img
                alt="image"
                src="images/Icons/hamburger-200h.png"
                class="dashboard-image1"
              />
            </div>
          </div>
          <div id="mobile-menu" class="dashboard-mobile-menu">
            <div class="dashboard-branding1">
              <img
                alt="image"
                src="images/logo-700w.png"
                class="dashboard-image2"
              />
              <div id="close-mobile-menu" class="dashboard-container2">
                <svg viewBox="0 0 1024 1024" class="dashboard-icon1">
                  <path
                    d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                  ></path>
                </svg>
              </div>
            </div>
            <div class="dashboard-nav-links2">
              <a href="/#waarom" class="nav-link">Over de club</a>
              <a href="/#overclub" class="nav-link">Waarom aanmelden?</a>
              <a href="/#plans" class="nav-link">Robots</a>
              <a href="mailto:support@roboticawerenfridus.nl" class="nav-link">Contact</a>
            </div>
            <div class="get-started">
              <a class="dashboard-text11">Dashboard</a>
            </div>
          </div>
          <div>
            <div class="dashboard-container4">
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
        <header class="dashboard-header1">
          <h2 class="dashboard-text12">Welkom, <?php echo $voornaam; ?></h2>
          <span class="dashboard-text13">
            Welkom bij het Robotica Lid Dashboard, lees meer over robotica hier.
          </span>
        </header>
        <section id="overclub" class="dashboard-note1">
          <div class="dashboard-image3">
            <img
              alt="image"
              src="images/robot1-500h.jpg"
              class="dashboard-image4"
            />
          </div>
          <div class="dashboard-content1">
            <main class="dashboard-main1">
              <header class="dashboard-caption1">
                <span class="dashboard-section1 section-head">robodocs</span>
              </header>
              <main class="dashboard-heading1">
                <header class="dashboard-header2">
                  <h2 class="section-heading">Handleiding, tips en meer</h2>
                  <p class="section-description">
                    Log nu op op RoboDocs met jouw gegevens!
                  </p>
                </header>
                <div class="dashboard-checkmarks">
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
                        <span>Volledige Handleiding</span>
                      </p>
                    </div>
                  </mark-wrapper>
                  <mark-wrapper-favj class="mark-wrapper-favj">
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
                          Extra ideeen hoe je jouw robot beter en cooler kan
                          maken
                        </span>
                      </p>
                    </div>
                  </mark-wrapper-favj>
                  <mark-wrapper-donu class="mark-wrapper-donu">
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
                          Tips over hoe je dingen makkelijker kan doen
                        </span>
                      </p>
                    </div>
                  </mark-wrapper-donu>
                </div>
              </main>
            </main>
            <a href="#plans" class="dashboard-link19">
              <div class="dashboard-get-started3 button">
                <span class="dashboard-text14">Ga naar RoboDocs</span>
              </div>
            </a>
          </div>
        </section>
        <section class="dashboard-section2">
          <div class="dashboard-note2">
            <div class="dashboard-image5">
              <img
                alt="image"
                src="images/logo-1000w.png"
                class="dashboard-image6"
              />
            </div>
            <div class="dashboard-content2">
              <div class="dashboard-heading3">
                <div class="dashboard-header3">
                  <h2 class="section-heading">
                    Het laatste nieuws van de club!
                  </h2>
                </div>
                <accordion-wrapper
                  class="accordion-wrapper"
                  rootclassname="accordionundefined"
                >
                  <?php foreach ($newsletters as $i => $entry): ?>
  <div data-role="accordion-container" class="accordion-element<?php echo $i + 1; ?> accordion-element">
    <div class="accordion-details<?php echo $i + 1; ?>">
      <span class="accordion-text<?php echo $i * 2 + 1; ?>">
        <a href="<?php echo $entry['url']; ?>" target="_blank"><?php echo $entry['title']; ?></a>
      </span>
      <span data-role="accordion-content" class="accordion-text<?php echo $i * 2 + 2; ?>">
        <?php echo nl2br(htmlspecialchars($entry['summary'])); ?>
      </span>
    </div>
    <svg viewBox="0 0 1024 1024" data-role="accordion-icon" class="accordion-icon<?php echo ($i * 2 + 1); ?>">
      <path d="M366 708l196-196-196-196 60-60 256 256-256 256z"></path>
    </svg>
  </div>
<?php endforeach; ?>
                </accordion-wrapper>
              </div>
            </div>
          </div>
        </section>
        <main class="dashboard-banner">
          <div class="dashboard-header4">
            <h2 class="section-heading">Ken jij iemand voor de club?</h2>
            <p class="dashboard-description section-description">
              Ken jij iemand, die ook graag bij de club wil. Laat ze alvast de
              handleiding verkennen
            </p>
          </div>
          <div class="dashboard-buttons">
            <a href="#plans" class="dashboard-link20">
              <div class="dashboard-get-started4 button">
                <span class="dashboard-text15">Deel de website</span>
              </div>
            </a>
            <a
              href="mailto:support@roboticawerenfridus.nl?subject="
              class="dashboard-link21"
            >
              <div class="dashboard-book-demo button">
                <span class="dashboard-text16">Voeg gast toe</span>
              </div>
            </a>
          </div>
        </main>
        <footer class="dashboard-footer">
          <div class="dashboard-content3">
            <main class="dashboard-main-content">
              <div class="dashboard-content4">
                <header class="dashboard-main2">
                  <div class="dashboard-header5">
                    <img
                      alt="image"
                      src="images/logo-1000w.png"
                      class="dashboard-branding2"
                    />
                    <span class="dashboard-text17">
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
              <section class="dashboard-copyright1">
                <span class="dashboard-text18">
                  © 2015-2025 Robotica Club Werenfridus. All Rights Reserved.
                </span>
              </section>
            </main>
            <main class="dashboard-subscribe">
              <main class="dashboard-main3">
                <h1 class="dashboard-heading6">
                  Wordt lid van onze Nieuwsbrief en lees over nieuwe robots en
                  tech feitjes!
                </h1>
                <form id="subscribeForm">
                <div class="dashboard-input-field">
                  <input
                    type="email"
                    id="nbemail"
                    name="nbemail"
                    placeholder="Voer email in en druk enter"
                    class="dashboard-textinput input"
                  />
                </div>
                </form>
              </main>
              <h1 class="dashboard-notice">
                Door te lid te worden van de nieuwsbrief ga je akkoord met onze
                voorwaarden.
              </h1>
            <div id="message" class="dashboard-heading6" style="display:none;"></div>
              
            </main>
            <section class="dashboard-copyright2">
              <span class="dashboard-text23">
                © 2022 latitude. All Rights Reserved.
              </span>
            </section>
          </div>
        </footer>

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
