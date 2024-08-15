# 157-sprachpaket-lithuanian
Sprachpaket LITAUISCH für Zen Cart 1.5.7 deutsch 

Hinweis: 
Freigegebene getestete Versionen für den Einsatz in Livesystemen ausschließlich unter Releases herunterladen:
* https://github.com/zencartpro/157-sprachpaket-lithuanian/releases

Anpassung des alten Lithuanian Language Pack von zanas 
(https://www.zen-cart.com/downloads.php?do=file&id=429) 
für die deutsche Zen Cart Version 1.5.7

* utf-8
* Frontend von native speaker und Deepl übersetzt 

Dieses Sprachpaket stellt eine umfangreiche litauische Übersetzung (Übersetzunggrad 90%) für das Frontend der Grundversion bereit. 

Die Sprachdefinitionen sind vollständig für die deutsche Zen Cart Version angepasst, so dass es auch mit PHP8 keine Probleme geben sollte. 

Dieses Sprachpaket geht davon aus, dass im Shop CSS Buttons verwendet werden und liefert keine litauischen Grafikbuttons mit. 

Da es seit Zen Cart 1.5.7 deutsch nicht mehr nötig ist, die Administration auf andere Sprachen umzuschalten (außer zum Bearbeiten von Define Pages unter Tools > Seiteneditor) stellt dieses Sprachpaket keine litauische Übersetzung für den Adminbereich bereit.

Im Adminbereich gibt es nur wenige Dateien, die litauische Texte für Kunden enthalten müssen, da sie für die Bestellstatusaktualisierung, Emailversand, usw. an Kunden herangezogen werden, die auf litauisch bestellt haben:

* DEINADMIN/includes/languages/lithuanian/extra_definitions/orders_status_updates_admin.php
* DEINADMIN/includes/languages/lithuanian/email_extras.php
* DEINADMIN/includes/languages/lithuanian/orders.php 

Die entsprechenden Definitionen dieser Dateien sind auf litauisch übersetzt, alle andere Definitionen des Adminbereichs sind auf deutsch.

Falls Sie einen komplett litauischen Adminbereich benötigen, z.B. weil Ihr Shop von einer Person administriert wird, die ausschließlich litauisch spricht, dann müssen Sie die entsprechenden Admin Definitionen selbst übersetzen.
