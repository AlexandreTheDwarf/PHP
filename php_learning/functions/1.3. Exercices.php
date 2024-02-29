<!DOCTYPE html>
<html>
  <head>
    <title>Générateur d'Acronymes</title>
  </head>
  <body>
    <form method="post" action="">
      <label for="sentence">Phrase :</label>
      <input type="text" name="sentence" id="sentence">
      <input type="submit" value="Générer un Acronyme">
    </form>
    <?php
    // Fonction pour générer un acronyme à partir de la phrase d'entrée
    function generateAcronym($sentence) {
      // Séparer la phrase en mots en utilisant un espace comme délimiteur
      $words = explode(" ", $sentence);
      $acronym = ''; // Initialiser l'acronyme à une chaîne vide
      foreach ($words as $word) {
        // Ajouter la lettre initiale de chaque mot (en majuscule) à l'acronyme
        $acronym .= strtoupper($word[0]);
      }
      return $acronym; // Renvoyer l'acronyme généré
    }

    // Vérifier si le formulaire a été soumis
    if (isset($_POST['sentence'])) {
      $sentence = $_POST['sentence']; // Récupérer la phrase du formulaire
      $acronym = generateAcronym($sentence); // Appeler la fonction pour générer l'acronyme
      echo "Acronyme : $acronym"; // Afficher l'acronyme généré
    }
    ?>
  </body>
</html>
