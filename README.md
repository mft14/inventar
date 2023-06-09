# Inventar Datenbank
Projektstart:    
Projektende: 9. Juni 2023     
Mitwirkende: Leon, Jannik, Marc, Lukas, Karim    

# How to use
Um unsere Inventardatenbank zu nutzen, wird ein lokaler Webserver benötigt. Wir haben XAMPP benutzt.  
Die Zip Datei unseres Projektes wird in `C:\xampp\htdocs` entpackt und dann über `localhost` im Browser aufgerufen.  
Bevor es losgeht, muss die Datenbank noch initialsiert werden. Wir haben eine inventardb.sql im Ordner sql und diese 
muss einmal in phpmyadmin im Reiter SQL eingefügt werden.   
   
Dann haben wir zum Testen simple Benutzerdaten. Jeder hat ein Passwort, Benutzernamen und eine Abteilung, 
zu die er zugewiesen ist. Der Benutzername "admin" kann zum Testen in jede Abteilung hinein. 
Die Passwörter sind überall gleich. Es lautet `123456`
Hier eine Liste:

```
('admin', '123456', 'abt'),
('admin', '123456', 'it1'),
('admin', '123456', 'it2'),
('admin', '123456', 'pers'),
('karim', '123456', 'pers'),
('jannik', '123456', 'it1'),
('lukas', '123456', 'it1'),
('lukas', '123456', 'it3'),
('mark', '123456', 'pers'),
('mark', '123456', 'it2'),
('leon', '123456', 'abt'),
('leon', '123456', 'pers'),
('leon', '123456', 'it1');
```

Zum Testen kann also der Adminaccount genutzt werden. Bei der Personalabteilung kann die von Moodle 
bereitgestellte CSV Datei hochgeladen werden.   

Unter PER kann man die Personal.csv einfügen.
Unter ABT kann man Verantwortlichkeiten einsehen.
Unter IT1 kann man neue Verantwortlichkeiten hinzufügen, indem man oben zwei Daten angibt und jeweils einen Eintrag der beiden Tabellen mit der linken Maustaste anklickt (Einträge werden anschließend über der Tabelle angezeigt).
Unter IT2 kann man neue Geräte hinzufügen oder entfernen.
   - Entfernen funktioniert wie bei IT1, es muss also ein Eintrab angeklickt werden und anschließen auf Absenden um den Eintrag zu löschen
   - Um ein neues Gerät hinzuzufügen muss man zuerst alle Felder ausfüllen und anschließend auf den Absenden Knopf drücken


