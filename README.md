# Contao 4 Glossar bundle
Glossarverwaltung für Contao 4.4

## Installation
### SSH
`composer require lumturo-net/contao-glossar-bundle:^1.0`

### Contao Manager
Im Contao Manager ist die Version `^1.0` bei der Paketinstallation anzugeben.

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

Die Ausgabe im Frontend erfolgt über Bearbeitung der Inhaltselement eines Artikels. 

Beispielsweise 
kann bei Bearbeitung eines `Text` Inhaltselements innerhalb des Eingabebereiches für den Text das gewünschte
Wort als Glossarbegriff markiert werden. Dazu gibt es in dem Editor den Button `Als Glossarbegriff markieren`.

Markieren Sie das gewünschte Wort und klicken auf diesen Button, um im Frontend die Erklärung für dieses Wort 
auszugeben. 