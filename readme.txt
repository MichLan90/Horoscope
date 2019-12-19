OM REST

Rest är ett protokoll för hur man kommunicerar mellan maskiner, vanligtvis mellan en server och klienter. REST är skapat av grundarna till HTTP och därför tätt sammankopplat med den tekniken.

Det är vanligt idag att bygga "REST API"-er som andra utvecklare, hemsidor och appar kan använda för att kommunicera med sin tjänst. Github, Slack, Wordpress och västtrafik har alla varsitt Rest API för att man ska kunna bygga appar runt deras tjänster.

här kan ni läsa mer om rest:

https://sv.wikipedia.org/wiki/Representational_State_Transfer

 

Rest definierar fem typer av anrop man kan göra:

 

GET

läser information

POST lägger upp ny information

PUT skriver över med ny information

PATCH uppdaterar befintlig information

DELETE tar bort information

 

här kan ni se ett exempel på hur REST anrop kan se mellan javascript och en server:

https://reqres.in

 

UPPGIFTEN

Målet med uppgiften är att bygga ett enkelt REST API för sitt horoskop. Ni ska minst använda följande php filer i ert projekt: 

 

addHoroscope.php

sidan ska bara gå att begära via POST,  den ska kolla efter ett födelsedatum i $_POST, räkna ut vilket horoskop födelsedatumet tillhör och spara det i $_SESSION.

Om ett horoskop redan finns sparat ska det inte skrivas över. Om det inte gick att räkna ut horoskopet ska ingenting sparas.

Sidan ska inte använda echo eller skriva någon output förutom true eller false, beroende på om horoskopet sparades.

 

viewHoroscope.php

sidan ska bara gå att begära via GET, den ska kolla om ett horoskop finns sparat i $_SESSION och i så fall skriva ut det i output. Annars ska sidan inte skriva ut någonting.

 

 

updateHoroscope.php

sidan ska bara gå att begära via PUT,  den ska kolla efter ett födelsedatum i PUT datan, det finns ingen inbyggd $_PUT men ni kan skapa den själva genom att köra denna raden längst upp i filen:

parse_str(file_get_contents("php://input"), $_PUT);

räkna ut vilket horoskop födelsedatumet tillhör och uppdaterade det sparade horoskopet som finns i $_SESSION och skriva ut true.

Om inget horoskop finns i $_SESSION ska sidan inte uppdatera något och skriva ut false

 

deleteHoroscope.php

sidan ska bara gå att begära via DELETE,  den ska ta bort det sparade horoskopet i $_SESSION och echo:a true. Om inget finns sparat ska den echo:a false.

 

index.html (alternativt index.php)

index sidan ska innehålla ett område (en div) där ens horoskop skrivs ut när sidan laddas. Den ska dessutom innehålla en input för ens födelsenummer och tre knappar:

knapparna ska ha varsin onClick som kör varsin Javascriptfunktion:

 

Knapp: "spara mitt horoskop" 

onClick: ska göra ett anrop via fetch eller $.ajax till addHoroscope.php med innehållet i input:en.

Efter anropet,  ska innehållet i div:en uppdateras.

Om ni vill ha stilpoäng så ska denna knapp bara synas om horoskopet inte är sparat ännu, eller annars inaktiveras - detta är inget krav

 

Knapp: "uppdatera mitt horoskop" 

onClick: ska göra ett anrop via fetch eller $.ajax till updateHoroscope.php med innehållet i input:en. Efter anropet ska innehållet i div:en uppdateras.

Om ni vill ha stilpoäng så ska denna knapp inte synas eller vara inaktiverat om horoskopet inte är sparat ännu - detta är inget krav

 

Knapp: "radera mitt horoskop" 

onClick: ska göra ett anrop via fetch eller $.ajax till deleteHoroscope.php. Efter anropet ska innehållet i div:en uppdateras om horoskopet togs bort.

Om ni vill ha stilpoäng så ska denna knapp inte synas eller vara inaktiverat om horoskopet inte är sparat ännu - detta är inget krav

När man först går ut på sidan ska även div:en uppdateras via ett anrop till viewHoroscope, det är smart att spara detta anrop i en funktion och anropa det i slutet av varje knapps onClick funktion.
