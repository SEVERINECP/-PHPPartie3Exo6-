<?php
// On déclare un tableau avec un array et une variable $department
$departments = array(
  // On met des côtes pour les nombres sinon le zéro de s'affiche pas
  '02' => 'Aisne',
  '80' => 'Somme',
  '60' => 'Oise',
  '59' => 'Nord',
  '62' => 'Pas-de-Calais');
  ?>
  <!DOCTYPE html>
  <html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP3Ex6</title>
  </head>
  <body>
    <?php
    // Foreach (pour chaque éléments) on demande d'afficher l'index qui sont les numéros et les values qui sont les départements
    foreach($departments as $index => $value){ ?>
      <!-- On demande d'afficher les départements (value) avec la phrase en HTML et enfin les numéros (index) -->
      <p><?php echo $value; ?> a le numéro de département <?= $index; ?></p>
      <!-- Autre méthode avec une phrase défférente -->
      <p>Le Département <?php echo $value; ?> a le numéro <?php echo $index; ?></p>
    <?php }; ?>
  </body>
  </html>
