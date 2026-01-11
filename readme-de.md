<p align="right"><a href="readme-de.md">Deutsch</a> &nbsp; <a href="readme.md">English</a></p>

# Memo 0.9.1

Zufällige Kurzmitteilungen anzeigen.


## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-memo/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/readme-de.md).

## Wie man Kurzmitteilungen anzeigt

Erstelle eine `[memo]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle Argumente sind optional:

`Label` = Beschriftung für die Schaltfläche zum Öffnen der Kurzmitteilung.  
`CloseLabel` = Beschriftung für die Schaltfläche zum Schließen der Kurzmitteilung.  

Diese Erweiterung zeigt eine zufällige Textnachricht als Toast-Benachrichtigung an, wenn die Memo-Schaltfläche geklickt wird. Ursprünglich war es eine Idee für eine Spaß-Webseite, um Besucher mit albernen Botschaften zu belästigen, aber man kann die Erweiterung im Grunde für alles Mögliche einsetzen. Sprüche, Zitate, virtuelle Glückskekse, Tipps und Tricks, was auch immer euch in den Sinn kommt. Ich verwende sie beispielsweise als kleine Spielerei auf einer Webseite für blinde Android-Nutzer, um ihnen einen zufälligen Tipp zur Nutzung des Betriebssystems zu geben. Es sind nur Textnachrichten erlaubt, Markdown und HTML funktionieren nicht. 

## Beispiele

Eine Memo-Schaltfläche erstellen:

    [memo]
    [memo "Gib mir einen Tipp"]
    [memo - "Schließen"]  

Konfigurationsdatei mit Beispiel-Kurzmitteilungen, JSON-Format: 

```
{
    "messages":
    [
        "Fun to use: Edit your website in a web browser. Log in with your user account. You can use the normal navigation, make some changes and see the result immediately. It is a great way to update your website. No database, no admin panel. Datenstrom Yellow doesn't get in your way.",
        "Just files and folders: Edit your website in a text editor. Create small web pages, wikis and blogs. You can use your favorite text editor and change everything on your computer. This is convenient for developers, designers and translators. Datenstrom Yellow adapts to you.",
        "Installed in a few minutes: Download one file, unzip it and copy everything to your web server. Your website is immediately available. The most important things are included. There are extensions with additional features, languages and themes that you can install. Datenstrom Yellow is open source."
    ]
}
```

## Einstellungen

Die folgende Einstellung kann in der Datei `system/extensions/yellow-system.ini` konfiguriert werden:

`MemoMessageFile` = Dateiname zum Speichern der Kurzmitteilungen  

Die folgende Datei kann angepasst werden:

`system/extensions/memo.json` = Konfigurationsdatei für Kurzmitteilungen, JSON-Format  

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/yellow/help/).
