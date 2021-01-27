<?php
foreach($annonces as $annonce): ?>

<h2><?=$annonce->getTitre()?></h2>
<p><?=$annonce->getDescription()?></p>

<?php endforeach; ?>