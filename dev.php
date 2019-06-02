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
                    <b>React</b> 
                    Door de juiste werkwijze van React (Native) te gebruiken zorgen wij ervoor dat alle onderdelen van de applicatie zijn opgebouwd uit componenten. Elk onderdeel van de applicatie zal bestaan uit een component, mogelijk vallen er onder dit component weer meerdere componenten. 
                    <br><br>
                    Neem als voorbeeld een input field, deze zal op meerdere plekken in de applicatie terugkomen, maar de styling van het input veld kopiëren naar de nieuwe pagina zou geen goede manier zijn van werken. Daarom zou je van het input veld een component kunnen maken die de styling automatisch gebruikt zodra je het component aan roept. Ook kan je verschillende data meteen meesturen naar het component, denk hierbij aan placeholder tekst, input name, value en andere attributen.
                    <br><br>
                    Ik vind het heel fijn om met React te werken, reusability is een groot aspect van React en ik ben hier een grote voorstander van. Als programmeur wil ik zo min mogelijk herhalend werk doen en React geeft hier een uitstekende basis voor. Uiteraard is Javascript ook een hele fijne programmeertaal.
                    <br><br>

                    <b>User stories</b><br>
                    Tijdens het project gebruiken wij scrum voor een goede verdeling van onze taken. Hoe dit allemaal verloopt en welke user stories er zijn opgezet aan het project verwijs ik graag door naar het document <a href="https://docs.google.com/document/d/11eJ1lPo7GzCOf09mF5phCBeJdROOIN2dCMS5FFvUw4Y/edit?usp=sharing" target="_blank">Project Methodiek - scrum</a>
                </p>
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
                    Momenteel gebruik ik Visual Studio Code als editor. Om het leven als programmeur wat makkelijker te maken maak ik gebruik van een aantal plugins. Een kleine greep hiervan:                    <br>
                    <ul>
                        <li>SCSS snippets</li>
                        <li>ES7 React/Redux/React-native snippets</li>
                        <li>Een linter plugin</li>
                        <li>Gitlens om makkelijker merge conflicts op te lossen, en te zien welke regel voor het laatst is aangepast door welke groepsgenoot</li>
                        <li>ES6 snippets</li>
                        <li>Laravel en Laravel blade snippets (Voor als ik aan Laravel projecten werk)</li>
                        <li>Node.js modules intellisense</li>
                        <li>PHP intellisense</li>
                        <li>Prettier</li>
                        <li>Terminal</li>
                        <li>Settings sync</li>
                    </ul>
                    <br>
                    Verder maak ik nog gebruik van een paar plugins om de styling van de editor aan te passen.
                    <br><br>
                    Voor react project maak ik gebruik van het npm pakket “create react app”. Deze package creëert automatisch de benodigde bestanden om meteen aan de slag te kunnen met het ontwikkelen van een React applicatie. Ook genereert deze een script om het project op een lokale server te draaien.
                    <br><br>
                    Voor projecten die geen React gebruiken maak ik gebruik van mijn eigen github repository <a href="https://github.com/mike-hendriks/Blank-project" target="_blank">Blank project</a>. Deze repository bevat de bestanden en file structure waar ik altijd mee werk in HTML projecten. Ook bevat deze scripts om SCSS en ES6 te compilen.
                    <br><br>
                    <b>Expo</b><br>
                    Tijdens het project "The Parkinson Project" maken we gebruik van Expo, een ontwikkel tool die het maken van cross platform apps een stuk sneller kan maken. Dit komt door de meerdere "snacks" die beschikbaar zijn om inspiratie uit te halen. Ook zijn veel native functionaliteiten ingebouwd waardoor je ze makkelijk kan gebruiken door een simpele import.

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
            <a href="/portfolio-s4/ptm" class="left button">Proftaak</a>
            <a href="/portfolio-s4/ux" class="right button">User Experience</a>
        </div>
    </div>

</main>



<?php include_once('./src/views/components/footer.php'); ?>

