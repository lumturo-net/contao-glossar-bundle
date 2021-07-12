# Contao 4 Glossar bundle
Glossarverwaltung für Contao 4.9

## Installation
### SSH
`composer require lumturo-net/contao-glossar-bundle`

### Contao Manager
Das Bundle kann normal im Contao Manager gesucht und installiert werden.

## Konfiguration

Das Install-Tool von Contao unter `https://example.com/contao/install` muss aufgerufen werden,
damit die Änderungen an der Datenbank vorgenommen werden können.

### !!! Wichtig !!!
Falls an dem `fe_page` Template Anpassungen vorgenommen wurden,
ist darauf zu achten, dass folgendes im `<head>` NICHT(!) entfernt
wurde:

```
<?php $this->block('head'); ?>

  ...
  
  <?= $this->head; ?>
  
  ...
  
<?php $this->endblock(); ?>
```

Andernfalls ist Contao nicht in der Lage, das mitglieferte JavaScript über TL_JAVASCRIPT global einzubinden.

## Nutzung

Im Backend befindet sich ein neuer Menüpunk `Glossar`. Dort können entsprechende Begriffe sowie
deren Erklärungen angegeben werden.

Die Ausgabe im Frontend erfolgt über Bearbeitung der Inhaltselement eines Artikels. Dazu kann innerhalb
des Fließtextes ein beliebiges Wort, welches zuvor als Glossar-Begriff angelegt wurde, hinzugeschrieben werden.

Es ist darauf zu achten, dass die Schreibweise exakt (inkl. Groß- und Kleinschreibung) überein stimmen. 
Ansonsten wird der Begriff nicht entsprechend als Glossar-Wort im Frontend markiert ausgegeben.  


## CSS Klassen
> `.glossar-entry`
> 
> Glossar-Wort im Fließtext

> `.glossar-explanation`
> 
> Erklärung für das Glossar-Wort

> `.glossar-close`
> 
> Schließen-Button in der Erklärung

