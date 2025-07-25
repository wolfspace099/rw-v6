<p align="center">
  <img src="images/logo-1000w.png" alt="Robotica Werenfridus Logo" width="200"/>
</p>

<h1 align="center">Robotica Werenfridus v.6</h1>

<p align="center">
  🚀 Code voor mensen om te ontdekken en te zien waartoe wij als leerlingen van deze club in staat zijn, <strong>dankzij de club.</strong><br>
  🌐 <a href="https://roboticawerenfridus.nl" target="_blank">roboticawerenfridus.nl</a>
</p>

---

## ℹ️ Over deze website

**rw-v6** is de zesde versie van de robotica-website, deze keer volledig vernieuwd voor het volgende tijdperk van de club.
In de komende schooljaren willen we onze community uitbreiden, zodat we een geliefde club worden op school – zelfs voor de haters.
Deze site is geschreven door 2 clubleden, meer over hen vind je op de site zelf (ikzelf ook natuurlijk).
De backend developer van deze site is <a href="https://github.com/NathanSchalkwijk">@NathanSchalkwijk</a>, hij werkte aan de login, registratie, router.php enzovoorts.
We hebben aan veel andere sites gewerkt, React geprobeerd (meh), website builders gebruikt (maar dat is geen echt "bouwen"), tot we besloten gewoon lekker ouderwets HTML te gebruiken.
Ik heb eerst de frontend gebouwd, en daarna heeft <a href="https://github.com/NathanSchalkwijk">@NathanSchalkwijk</a> de backend opgezet met PHP.
Waarom PHP?

* Minder bugs, overal te hosten (ook lokaal in je code editor)
* HTML is super eenvoudig
* Geen build of deploy nodig, gewoon hosten
* Alles wat we nodig hebben zit in PHP-bestanden
* PHP werkt goed met databases, hosting en navigatie

<img src="preview.png" alt="Website PREVIEW afbeelding" width="1000"/>

---

## 🔧 Hoe werkt de website? Hoe is het gebouwd?

Voor deze versie hebben we een "Robotica Lid" dashboard toegevoegd.
Hiermee kunnen leden een eigen dashboard gebruiken waarin ze toegang hebben tot documentatie, de nieuwste nieuwsbrieven en het plannen van hun bezoeken aan de club.
De werking van de site is iets anders dan standaard.

* HTML, JS en CSS stack
* PHP toegevoegd voor betere backend functionaliteit (login enz.)
* Wordt uitgevoerd met PHP
* Gehost via Printiacs Hosting, met hun aanvalsbescherming en op maat gemaakte proxy-systeem

---

* Om het zelf te hosten:
* Zorg dat er een map `sessions` in de root van je project staat
* Start de site met het volgende commando: `php -S host:port router.php`
  Bijvoorbeeld: `php -S 0.0.0.0:5000 router.php`
* `router.php` wordt gebruikt voor nette URLs (zonder `.php` extensie) en maakt ook de 404.php en 403.php pagina’s werkend
  Als je die wilt gebruiken is `router.php` dus essentieel.

---

## 🍴 Zelf een versie maken?

Doe je ding! Download de repo, fork het, pas het aan.
Stuur jouw versie in via e-mail of IRL en misschien wordt jouw site wel v7!

```
# Repo klonen
git clone https://github.com/wolfspace099/rw-v6

# Ga de map in
cd rw-v6

# Installeer PHP en afhankelijkheden
apt install php

# Maak de twee databases aan op een SQL-server
CREATE DATABASE IF NOT EXISTS website;
USE website;

CREATE TABLE members (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL,
    student_number VARCHAR(7),
    email VARCHAR(150) NOT NULL,
    parent_contact VARCHAR(150),
    password VARCHAR(255) NOT NULL,
    level VARCHAR(50),
    invoice_agreement TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    admin TINYINT(1) DEFAULT 0,
    PRIMARY KEY (id)
);

# Database 2
CREATE DATABASE IF NOT EXISTS newsletter;
USE newsletter;

CREATE TABLE subscribers (
    id INT(11) NOT NULL AUTO_INCREMENT,
    email VARCHAR(120) NOT NULL,
    PRIMARY KEY (id)
);

# Vul de twee XML-configuratiebestanden in voor de nieuwsbrief en gebruikers
nano sqlconfig.xml # config 1 is voor gebruikers
nano sqlconfig2.xml # config 2 is voor nieuwsbrief
Gebruik CTRL+X, Y en ENTER om op te slaan.

# Maak de sessions map
mkdir sessions

# Controleer de bestanden login.php, wordt-lid.php en dashboard.php en zorg dat ze naar de juiste sessiepad verwijzen
nano <bestand>
Zoek naar de regel: "/home/container/sessions"  
Zorg dat dit verwijst naar het juiste pad op jouw systeem  
Gebruik CTRL+X, Y en ENTER om op te slaan.

# Start de PHP-server
php -S 0.0.0.0:5000 router.php
```
