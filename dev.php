<?php include_once('./src/views/components/header.php'); ?>
<main class="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col s12">
                <h1>Development</h1>
            </div>
        </div>
    </div>

    <!-- Architectuur -->
    <div class="container">
        <div class="row">
            <div class="col s12">
            <h2>Architectuur</h2>
                <table class="four_columns">
                    <tr>
                        <td>10.0 pts</td>
                        <td>
                            6.0 pts
                            <br><br>
                            De student heeft een applicatie gerealiseerd bestaande uit meerdere (sub)modules of eigen libraries. Passende libraries of frameworks zijn gebruikt om de applicatie te ontwerpen. De applicatie is tot stand gekomen via correct opgestelde user stories afgeleid van een overzichtelijk architectuurdiagram.
                        </td>
                        <td>
                            4.0 pts
                            <br><br>
                            De student heeft een applicatie gerealiseerd met een module pattern. Externe libraries zijn gebruikt om de applicatie te ontwerpen. De applicatie is tot stand gekomen via user stories en een schets van de architectuur.
                        </td>
                        <td>0.0 pts</td>
                    </tr>
                </table>
                
                <p>
                    <b>Architectuur schets</b><br>
                    Deze architectuurschets bevat alle aspecten die ervoor zullen zorgen dat de app gaat werken zoals behoord. 
                    <br><br>
                    Voor de backend word gebruik gemaakt van Firebase. Wij zullen meerdere functionaliteiten gebruiken van Firebase, denk hierbij aan authenticatie en data opslag in Fire Store. Buiten dat gaan wij ook gebruik maken van Cloud functions, voor bijvoorbeeld het aanmaken van een user in de database zelf of het versturen van notificaties.
                    <br><br>
                    Voor de globale functionaliteiten en front end van onze app gaan wij gebruik maken van React Native. Hier kiezen wij als groep voor omdat wij vanuit het vorige semester al ervaring hebben met React, en onze kennis hierin willen vergroten en verbreden.
                    <br><br>
                    Natuurlijk is een groot voordeel aan React, dat er veel componenten zijn die wij kunnen gebruiken. Zo is het nergens voor nodig om zelf een datepicker te maken, hier kunnen wij gewoon een component voor installeren.
                    <br><br>
                    Er zijn 2 manieren om React Native apps te maken;
                    <ul>
                        <li>Native door middel van Java en Swift voor de native code</li>
                        <li>Expo</li>
                    </ul>
                    <br>
                    Wij kiezen voor Expo omdat dit het native taal stuk voor ons uit handen neemt.
                    <br><br>
                    Ook maken wij gebruik van Redux om het gebruik van states makkelijker en beheersbaarder te maken tijdens het programmeren.
                </p>

                <img src="./public/images/architectuurschets_v1.jpg" alt="Architectuurschets" class="img-responsive">

                <p>
                    <br>
                    Om de connecties van alle onderdelen en de algemene architectuur beter te omschrijven heb ik een nieuwe architectuur schets gemaakt.
                    <br>
                    <br>
                </p>

                <img src="./public/images/architectuurschets_v2.jpg" alt="Architectuurschets v2" class="img-responsive">

                <p>
                    De app bestaat uit 3 delen:
                    <ul>
                        <li><b>Front-end</b>: alles wat de gebruiker te zien krijgt</li>
                        <li><b>Redux</b>: zorgt voor alle data door de gehele app, en haalt deze ook uit Firestore</li>
                        <li><b>Firebase</b>: dataopslag, authenticatie en cloud functions voor het toevoegen van een gebruiker aan de database na het inloggen.</li>
                    </ul>
                    <br><br>
                    <b>Redux</b> <br>
                    Redux is een javascript library en draait binnen de app. Het zorgt er voor zorgt dat data in de app beschikbaar is op alle schermen van de app. Dit scheelt veel werk met het doorgeven en ophalen van data. Hierdoor is de workflow tijdens het ontwikkelen sneller. Maar het allerbelangrijkste, omdat  alle data bewaart wordt hoef je veel minder vaak data opnieuw op te halen.
                </p>

                <p>
                    <b>React</b> <br>
                    Door de juiste werkwijze van React (Native) te gebruiken zorgen wij ervoor dat alle onderdelen van de applicatie zijn opgebouwd uit componenten. Elk onderdeel van de applicatie zal bestaan uit een component, mogelijk vallen er onder dit component weer meerdere componenten. 
                    <br><br>
                    Neem als voorbeeld een input field, deze zal op meerdere plekken in de applicatie terugkomen, maar de styling van het input veld kopiëren naar de nieuwe pagina zou geen goede manier zijn van werken. Daarom zou je van het input veld een component kunnen maken die de styling automatisch gebruikt zodra je het component aan roept. Ook kan je verschillende data meteen meesturen naar het component, denk hierbij aan placeholder tekst, input name, value en andere attributen.
                    <br><br>
                    Ik vind het heel fijn om met React te werken, reusability is een groot aspect van React en ik ben hier een grote voorstander van. Als programmeur wil ik zo min mogelijk herhalend werk doen en React geeft hier een uitstekende basis voor. Uiteraard is Javascript ook een hele fijne programmeertaal.
                    <br><br>
                    In de user stories hieronder staat vermeld hoe ik met componenten werk en hoe deze worden hergebruikt door mij.
                    <br><br>

                    <b>User stories</b><br>
                    Tijdens het project gebruiken wij scrum voor een goede verdeling van onze taken. Hoe dit allemaal verloopt en welke user stories er zijn opgezet aan het project verwijs ik graag door naar het document <a href="https://docs.google.com/document/d/11eJ1lPo7GzCOf09mF5phCBeJdROOIN2dCMS5FFvUw4Y/edit?usp=sharing" target="_blank">Project Methodiek - scrum</a>
                    <br><br>
                    Ik heb 2 user stories volledig uitgewerkt, hiervan beschrijf ik het volledige proces in een document specifiek voor de user story. Design, testen, development en reflecties staan allemaal vermeld in deze documenten.
                    <br>
                    De user stories die ik heb uitgewerkt van begin tot eind zijn:
                    <ul>
                        <li><a href="https://docs.google.com/document/d/1pl7AqTcleHD_8KdwavQDR_xP7Tcy-oSZsyGGcvpWxco/edit?usp=sharing" target="_blank">Als Parkinson patiënt wil ik een overzicht van alle dagelijkse handelingen die met mijn ziekte te maken hebben.</a></li>
                        <li><a href="https://docs.google.com/document/d/1seq7UdSGGpmRaTNDejiVJ22EDRW3PTystY9_zMNHfgM/edit?usp=sharing" target="_blank">Als gebruiker van de app wil ik een overzicht van alle functionaliteiten die de app te bieden heeft.</a></li>
                    </ul>
                </p>

                <br>
                <h4>Bewijslast</h4>
                <ul>
                    <li><a href="https://github.com/mike-hendriks/Blank-project" target="_blank">Blank project</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br><br><br>

    <!-- Beheerbaarheid -->
    <div class="container">
        <div class="row">
            <div class="col s12">
            <h2>Beheerbaarheid</h2>
                <table class="four_columns">
                    <tr>
                        <td>10.0 pts</td>
                        <td>
                            6.0 pts
                            <br><br>
                            De student laat een onderbouwde Git workflow zien. De code en Git-project is duidelijk beschreven volgens gangbare richtlijnen in de praktijk. Een deel van de code is opgezet om door de open source community gebruikt te worden.
                        </td>
                        <td>
                            4.0 pts
                            <br><br>
                            De student gebruikt Git gedurende het hele traject. De code en Git-project is duidelijk beschreven volgens gangbare richtlijnen in de praktijk.
                        </td>
                        <td>0.0 pts</td>
                    </tr>
                </table>
                
                <p>
                    Tijdens het gehele ontwikkelproces maken wij als groep gebruik van GIT, dit doen wij op Github. Om er voor te zorgen dat alles voorspoedig verloopt en niet iedereen elkaar in de weg zit maken wij gebruik van meerdere branches. 
                    <br>
                    <ul>
                        <li><b>Master</b>, zodra de <b>Dev</b> branche getest en gevalideerd is door een groepsgenoot zal <b>Dev</b> gemerged worden met <b>Master</b>.</li>
                        <li><b>Dev</b>, zodra iemand een functionaliteit af heeft zal deze op de <b>Dev</b> branche komen te staan.</li>
                        <li><b>Feature branches</b>, voor elke functionaliteit die gemaakt moet worden zal een aparte <b>Feature branche</b> aangemaakt worden.</li>
                    </ul>
                    <br>
                    Ik maak gebruik van Git door middel van SourceTree, persoonlijk vind ik het fijn om een GUI te hebben om mee te werken omdat ik hierin een goed overzicht heb van voorafgaande commits en eventuele problemen zoals merge conflicts. Ik kan ook Git gebruiken in de Command line maar dit vind ik minder fijn omdat voor mij hier de duidelijkheid van een GUI ontbreekt.
                    <br>
                    De Git repository: <a href="https://github.com/de-sigaar/TheParkinsonProject" target="_blank">https://github.com/de-sigaar/TheParkinsonProject</a>
                </p>
            </div>
        </div>
    </div>
    <br><br><br>

    <!-- Ontwikkelomgeving -->
    <div class="container">
        <div class="row">
            <div class="col s12">
            <h2>Ontwikkelomgeving</h2>
                <table class="four_columns">
                    <tr>
                        <td>10.0 pts</td>
                        <td>
                            6.0 pts
                            <br><br>
                            De student heeft in zijn ontwikkelomgeving een ontwikkelstraat ingericht voor (front-end) development op basis van in het werkveld gangbare tools.
                        </td>
                        <td>
                            4.0 pts
                            <br><br>
                            De student heeft een onderbouwde (front-end) ontwikkelomgeving samengesteld en laat zien op de hoogte te zijn van de in het werkveld gangbare tools.
                        </td>
                        <td>0.0 pts</td>
                    </tr>
                </table>
                
                <p>
                    Momenteel gebruik ik Visual Studio Code als editor. Om het ontwikkelproces wat makkelijker te maken maak ik gebruik van een aantal plugins. Hieronder staat een overzicht hiervan: 
                    <br>
                    <ul>
                        <li><b>SCSS snippets</b> om autocomplete aan te vullen met SCSS snippets</li>
                        <li><b>ES7 React/Redux/React-native snippets</b> om autocomplete aan te vullen met alle nieuwe snippets die ES7, Redux en React Native te bieden hebben</li>
                        <li><b>Een linter plugin</b> om mogelijke errors vroegtijdig te herkennen en voorkomen</li>
                        <li><b>Gitlens</b> om makkelijker merge conflicts op te lossen, en te zien welke regel voor het laatst is aangepast door welke groepsgenoot</li>
                        <li><b>ES6 snippets</b> om autocomplete aan te vullen met de nieuwe functionaliteiten die ES6 te bieden heeft</li>
                        <li><b>Node.js modules intellisense</b>  een slimmere manier van autocomplete voor Node</li>
                        <li><b>PHP intellisense</b> een slimmere manier van autocomplete voor PHP</li>
                        <li><b>Prettier</b> om mijn code meteen te formatteren zoals ik het vooraf in stel</li>
                        <li><b>Terminal</b> zodat ik geen apart terminal venster hoef te openen en potentiële error direct kan zien onderin mijn ontwikkelomgeving</li>
                        <li><b>Settings sync</b> zodat ik al mijn plugins en settings op kan slaan in een Github Gist, zodat ik deze op al mijn apparaten makkelijk kan hergebruiken</li>
                        <li><b>FTP sync</b> zodat ik gemakkelijk mijn bestanden kan synchroniseren met een ontwikkel server</li>
                    </ul>
                    <br>
                    Verder maak ik nog gebruik van een paar plugins om de styling van de editor aan te passen. <b>Horizon</b> als color theme om de kleuren van de tekst aan te passen.
                    <b>Material file icons</b> om bestand gerelateerde icoontjes toe te voegen in de file tree, hierdoor kan ik sneller de juiste bestanden vinden.
                    <br><br>
                    Al deze plugins zorgen er een voor een voor dat mijn ontwikkelproces sneller is, en ik daardoor sneller bij het einddoel kan komen. Ik ben erg tevreden met Visual Studio Code en de plugins waar ik gebruik van maak.
                    <br><br>

                    <h4>Ontwikkelstraat</h4>
                    <h5>Create React App</h5>
                    Voor react projecten maak ik gebruik van het npm pakket “create react app”. Dit package creëert automatisch de benodigde bestanden om meteen aan de slag te kunnen met het ontwikkelen van een React applicatie. Ook genereert deze een script om het project op een lokale server te draaien. Dit zorgt er voor dat ik zelf veel minder werk heb met de initiële opzet van een nieuw React project en versnelt daarom het algemene ontwikkelproces.
                    <br><br>

                    <h5>Blank project</h5>
                    Voor projecten die geen React gebruiken maak ik gebruik van mijn eigen github repository <a href="https://github.com/mike-hendriks/Blank-project" target="_blank">Blank project</a>. Deze repository bevat de bestanden en file structure waar ik altijd mee werk in HTML projecten. Ook bevat deze scripts om SCSS en ES6 te compilen. Door deze repository hoef ik nooit meer zelf de file structure aan te maken, een Gulp file te schrijven voor het compilen van mijn JS en SCSS. Dit bespaart gemiddeld een half uur per project dat ik op zet.
                    <br><br>

                    <h5>Expo</h5>
                    Expo is een SDK ontwikkeld voor het maken van React Native apps. Expo komt met een grote hoeveelheid aan ingebouwde functies die er voor zorgen dat je geen native code hoeft te schrijven en geen dingen dubbel hoeft te programmeren voor meerdere platformen. Het opzetten van een app met Expo is heel simpel, door command <b>“expo init my-new-project”</b> uit te voeren heb je direct een nieuw project staan en kan je aan de slag met je nieuwe Expo & React Native app.

                </p>
                <br>
                <h4>Reflectie</h4>
                <p>
                    Ik vind mijn manier van werken de fijnste manier die ik tot nu toe heb geprobeerd. De juiste combinatie van plugins en repositories zorgen er voor dat ik snel kan beginnen aan een nieuw project en snel door kan werken tijdens het ontwikkelproces.
                </p>

                <br>
                <h4>Bewijslast</h4>
                <ul>
                    <li><a href="https://github.com/mike-hendriks/Blank-project" target="_blank">Blank project</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br><br><br>



    <div class="container">
        <div class="pagination">
            <a href="/portfolio-s4/ux" class="left button">User Experience</a>
            <a href="/portfolio-s4/sco" class="right button">Strategie & Concepting</a>
        </div>
    </div>

</main>



<?php include_once('./src/views/components/footer.php'); ?>

