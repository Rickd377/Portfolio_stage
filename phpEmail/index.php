<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/29186d169c.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="hobbies">
            <a href="#" data-target="page1" class="active">Hobbies</a>
        </div>
        <div class="projects">
            <a href="#" data-target="page2">Projecten</a>
        </div>
        <div class="contact">
            <a href="#" data-target="page3">Contact</a>
        </div>
        <div class="hamburger">
            <i class="fa-solid fa-bars knop"></i>
            <div class="content">
                <a href="#" data-target="page1">Hobbies</a>
                <a href="#" data-target="page2">Projecten</a>
                <a href="#" data-target="page3">Contact</a>
            </div>
        </div>
    </header>

    <div id="page1" class="page">
    <div class="hobbies-main-content main-content">
        <div id="scroll">
            <h3>Scroll naar beneden voor meer info</h3>
        </div>
        <div class="left" >
            <h1>Verzamelingen</h1>
            <div class="cubeimg">
            <img src="images/cube01.png" style="left: 10%; bottom: 30%; rotate: -40deg;">
            <img src="images/cube02.png" style="right: 15%; bottom: 20%; rotate: 30deg;">
            <img src="images/cubejperm.jpg" style="left: 50%; bottom: 60%; rotate: 20deg;">
            <img src="images/cube04.png" style="right: 30%; bottom: 10%; rotate: -80deg;">
            <img src="images/cube05.png" style="left: 30%; bottom: 40%; rotate: -60deg;">
            </div>
            <div class="monsterimg">
            <img src="images/monster01.png" style="right: 35%; bottom: 30%; rotate: 20deg;">
            <img src="images/monster02.png" style="left: 15%; bottom: 50%; rotate: 70deg;">
            <img src="images/monster03.png" style="left: 30%; bottom: 10%; rotate: -30deg;">
            <img src="images/monster04.png" style="left: 10%; bottom: 70%; rotate: -80deg;">
            <img src="images/monster05.png" style="left: 10%; bottom: 10%; rotate: -10deg;">
            </div>
        </div>
        <div class="center-shape"></div>
        <div class="right">
            <h1>Muziek en Games</h1>
            <div class="music">
                <img src="images/music01.png" style="left: 10%; bottom: 30%; rotate: -40deg;">
                <img src="images/music02.png" style="right: 15%; bottom: 20%; rotate: 30deg;">
                <img src="images/music03.png" style="left: 50%; bottom: 60%; rotate: 20deg;">
                <img src="images/music04.png" style="right: 70%; bottom: 70%; rotate: -80deg;">
                <img src="images/music05.png" style="left: 30%; bottom: 40%; rotate: -60deg;">
                <img src="images/music06.avif" style="right: 35%; bottom: 30%; rotate: 20deg;">
                <img src="images/music07.png" style="left: 15%; bottom: 50%; rotate: 70deg;">
                <img src="images/music08.jpg" style="left: 30%; bottom: 10%; rotate: -30deg;">
                </div>
        </div>
    </div>
    <div class="sub-content">
        <h1>Over mijn hobbies</h1>
        <p>Ik ben Rick Deurloo is en ik heb een paar leuke hobbies. Als eerste hou ik erg van dingen verzamelen zoals Rubik's cubes en Monster Energy blikjes.
            De rubik's cube kan ik al oplossen vanaf mijn 9de, vanaf toen ben ik steeds betere en moeilijkere varianten gaan kopen. Ik weet niet precies hoeveel ik er heb
            maar sowieso boven de 25. ik heb de meeste cubes van de 3x3x3. Naast Rubik's cubes spaar ik ook sinds kort Monster Energy blikjes. inmiddels heb ik daar al ongeveer 56 van.
            ik ben begonnen met sparen sinds een jaar geleden, dus ik ben aardig wat geld verloren. De Monster blikken worden ook steeds zeldzamer dus daarom ben ik eigenlijk gaan sparen.
            sommige gaan echt voor 200 euro en je hebt er ook 1 die wel 3000 euro waard is.
            <br>
            <br>
            Verder hou ik ook van Gamen en muziek luisteren/maken. Ik zit nu iets langer dan een half jaar op elektrische gitaarles dus dat gaat wel redelijk. Ik kan opzich wel een paar liedjes spelen
            zoals Beat it van Michael Jackson en de wel bekende Nokia Ringtone🙃. Ik luister veel naar muziek van artiesten zoals The Weeknd en Michael Jackson.
            Daarnaast Game ik ook graag, met name doe ik Geometry Dash graag. Het is een erg lastige game waarvoor je een enorm goed reactie vermogen voor moet hebben.
            Vaak heb ik fases waarin ik games afwissel. Het is dan ook vaak echt een loopje van de games die ik leuk vind. Meestal Minecraft dan geometry dash dan Gran Turismo 7 en dan weer opnieuw.
        </p>
    </div>
    </div>

    <div id="page2" class="page">
        <div class="project-main-content main-content">
            <div class="project">
                <h1>Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi obcaecati consectetur 
                    voluptatum ullam pariatur voluptate repudiandae excepturi dolores beatae deserunt unde modi maiores sunt. 
                    Nisi, asperiores quam at libero, voluptatum ad saepe officia magnam a odio odit illum! Provident voluptates 
                    delectus id neque velit ratione asperiores sint suscipit quo?</p>
                <div class="dropdown">
                    <button class="project-dropdown-btn"><i class="fa-solid fa-chevron-down"></i></button>
                    <div class="dropdown-content">
                        <img src="https://loremflickr.com/300/300?random=1">
                    </div>
                </div>
            </div>
            <div class="project">
                <h1>Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi obcaecati consectetur 
                    voluptatum ullam pariatur voluptate repudiandae excepturi dolores beatae deserunt unde modi maiores sunt. 
                    Nisi, asperiores quam at libero, voluptatum ad saepe officia magnam a odio odit illum! Provident voluptates 
                    delectus id neque velit ratione asperiores sint suscipit quo?</p>
                <div class="dropdown">
                    <button class="project-dropdown-btn"><i class="fa-solid fa-chevron-down"></i></button>
                    <div class="dropdown-content">
                        <img src="https://loremflickr.com/300/300?random=2">
                    </div>
                    </div>
            </div>
            <div class="project">
                <h1>Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi obcaecati consectetur 
                    voluptatum ullam pariatur voluptate repudiandae excepturi dolores beatae deserunt unde modi maiores sunt. 
                    Nisi, asperiores quam at libero, voluptatum ad saepe officia magnam a odio odit illum! Provident voluptates 
                    delectus id neque velit ratione asperiores sint suscipit quo?</p>
                <div class="dropdown">
                    <button class="project-dropdown-btn"><i class="fa-solid fa-chevron-down"></i></button>
                    <div class="dropdown-content">
                        <img src="https://loremflickr.com/300/300?random=3">
                    </div>
                    </div>
            </div>
            <div class="project">
                <h1>Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi obcaecati consectetur 
                    voluptatum ullam pariatur voluptate repudiandae excepturi dolores beatae deserunt unde modi maiores sunt. 
                    Nisi, asperiores quam at libero, voluptatum ad saepe officia magnam a odio odit illum! Provident voluptates 
                    delectus id neque velit ratione asperiores sint suscipit quo?</p>
                <div class="dropdown">
                    <button class="project-dropdown-btn"><i class="fa-solid fa-chevron-down"></i></button>
                    <div class="dropdown-content">
                        <img src="https://loremflickr.com/300/300?random=4">
                    </div>
                    </div>
            </div>
        </div>
    </div>

    <div id="page3" class="page">
        <div class="main-content contact-main-content">
            <h1 class="contact-title">Contact me</h1>
            <form method="post" action="email.php">
                <label for="name">Name <em>*</em></label>
                <input type="text" name="name" required autocomplete="off">
                
                <label for="email">Email <em>*</em></label>
                <input type="email" name="email" required autocomplete="off">
                
                <label for="subject">Subject <em>*</em></label>
                <input type="text" name="subject" required autocomplete="off">
                
                <label for="message">Message <em>*</em></label>
                <textarea name="message" required maxlength="350"></textarea>
                
                <button type="submit" name="send">Send</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="socials">
            <a href="https://www.linkedin.com/in/rick-deurloo-939934295/"><i class="fa-brands fa-linkedin"></i></a>
            <a href= "mailto: rick-2007@outlook.com"><i class="fa-solid fa-envelope"></i></a>
            <a href="callto:0622035881"><i class="fa-solid fa-phone"></i></a>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>