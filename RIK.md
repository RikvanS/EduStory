Log Rik van Straaten CodeGorilla eindproject (Team Pixel Monkeys)

<a href = "README.md">terug naar Readme</a>

Week 1 samenvatting:
Basale Laravel installatie met auth opgezet. Primaire routing, views en controllers aangemaakt (Samen met Dorieke).
Javascript sliding game gemaakt, debugged (Herhaaldelijk).

Maandag t/m woensdag besteed aan gezamelijke planning, uitschrijven van concepten, schetsen maken, informatie en afbeeldingen verzamelen en projectplan indienen.
Donderdag en vrijdag besteed aan daadwerkelijk programmeren:
Donderdag in circa 1 uur het basale laravel skelet opgezet met minimaal vereiste routes voor testdoeleinden.
Rest van de dag hoofdzakelijk bezig geweest met Javascript game maken en debuggen.
Enkele kleine stijlaanpassingen en opschonen van code tussendoor.

Vrijdag: Pushen van styling brak Javascript game. Ochtend gevuld met presentaties, middag (1 - 3) besteed aan debuggen en weer werkend krijgen van JS game. Tevens extra heroku client opgezet, main heroku app updatet automatisch vanaf master branch, secundaire heroku app updatet vanaf development branch. Deze functionaliteit toegevoegd om op live server effecten van toekomstige merges te testen voor commiten naar master.

Vrijdag 15:30 - 17:00:
Kleine functionaliteit toevoegen, code opschonen.

-------------

Ma 3/12 2018 14:05
Ochtend gespendeerd aan research, verhaallijn uitwerken en takenverdeling maken.
Gehele verhaallijn is nu in principe present, enkel details nog uitwerken.
Vanaf 14:00 tot 17:00 bezig met interactief element voor Hoofdstuk1 (Lübeck): Een memory game in JavaScript. In de verhaallijn stoot de protagonist per ongeluk de marktkraam om en moet helpen alles op te ruimen.

Di 4/12 12:30

Lunch review:

Ochtend gespendeerd aan debuggen en werkend krijgen in project van memory game. Gepushed naar dev branch, heroku dev app werkt alles correct.
Research gedaan naar volgende minigame: Zeeslagje voor het Visby hoofdstuk.

Post-lunch: Beginnen aan zeeslagje minigame.

16:30:
Zeeslag minigame research gedaan, morgen (5/12) hieraan beginnen.
Verhaallijn voor marktkraam memory game geschreven en gepushed naar dev branch.

--------------------
5/12 10:00

Morning standup gehouden, takenverdeling besproken, Anna gezamelijk up to speed gebracht.
Mijn taak voor vandaag is de Zeeslag JS game voor in Visby.
Als referentie/basis gebruik ik een codepen gevonden op https://codepen.io/collosic/pen/JpDfn

15:00
Zeeslag game toegevoegd aan project, gelokaliseerd, styling meer in lijn gebracht met verhaal. Getest, werkt volledig op Firefox en chrome.
Verhaalstructuur aangepast, restant van hoofdstuk verborgen in hidden div die getoond wordt na voltooien van zeeslag, plus autoscroll naar de net getoonde div.

----------------------

6/12 13:30

Ochtend gespendeerd aan opschonen van code. Alle ongebruikte, onnodige code/routes/views verwijderd. Code meer uniform gemaakt, elke view op zelfde manier gestructureerd.

Nu bezig met knoppen toevoegen aan minigames die de game over/succes events firen zodat we tijdens testen snel door de pagina's kunnen lopen zonder eerst elk minigame te moeten voltooien.

14:00
Testknoppen aangemaakt.
Volgende mini feature is een difficulty selector voor de slide game.

15:30
Difficulty radio selector optie toegevoegd aan slide game, standaard ingesteld op 4x4 met opties voor 5x5 en 6x6.

