# Contao 4 Glossar bundle

Glossarverwaltung für Contao 4

## !!! Wichtig !!!
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