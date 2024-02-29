<html>
  <head><title>Excuse Generator</title></head>
  <link rel="stylesheet" href="style.css">
  <body>
    <h1>Excuse Generator</h1>
    <form action="" method="get">
        <label for="child" >Name of the child :</label> 
        <input type="text" name="child" id="child" value="">
        <br>
        <label for="gender">Gender of the child:</label>
        <label for="girl">girl</label>
        <input type="radio" name="gender" id="girl" value="ma fille">
        <label for="boy">boy</label>
        <input type="radio" name="gender" id="boy" value="mon fils">
        <br>
        <label for="teacher" >Name of the teacher :</label> 
        <input type="text" name="teacher" id="teacher" value="">
        <br>
        <label for="absence">Reason of the absence :</label>
        <label for="illness">illness</label>
        <input type="radio" name="absence" id="illness" value="illness">
        <label for="death">death</label>
        <input type="radio" name="absence" id="death" value="death">
        <label for="extra">extra</label>
        <input type="radio" name="absence" id="extra" value="extra">
        <label for="dontwant">don't want</label>
        <input type="radio" name="absence" id="dontwant" value="dontwant">
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php 
        if (isset($_GET['child']) && isset($_GET['gender']) && isset($_GET['teacher']) && isset($_GET['absence'])) {
            $child = $_GET['child'];
            $gender = $_GET['gender'];
            $teacher = $_GET['teacher'];
            $absence = $_GET['absence'];

            date_default_timezone_set('Europe/Paris');
            $now = date("d:m:Y");

            $sick = 
            
            "
            <div class='container'>
              <p>$teacher,</p>

              <p>$gender, élève en classe de 4ième dans votre collège, ne pourra pas assister au cours aujourd’hui.</p>
              <p>Son état de santé justifie cette absence. Le médecin de famille lui a préconisé une période de repos.</p>
              
              <p>Je vous prie de bien vouloir l’excuser pour la journée du $now.</p>
              
              <p>Le papa de $child</p>
            </div>
            ";

            $death =

            "
            <div>
              <p>$teacher,</p>

              <p>$gender $child devrait nous accompagner , mon épouse et moi, ce lundi à l’enterrement de sa grand-mère décédée inopinément samedi.</p>

              <p>Pouvez-vous donc lui accorder une autorisation de sortie pour cette matinée?</p>
              <p>Il devrait être de retour dans votre établissement scolaire avant la reprise des cours de l’après-midi, le même jour.</p>

              <p>En vous remerciant de votre compréhension, je vous prie de croire, $teacher, à mes sentiments distingués.</p>

              <p>Les parents de l’élève $child.</p>
            </div>
            ";

            $extra =

            "
            <div>
              <p>$teacher,</<p>p>

              <p>Nous tenons à vous informer que $gender $child en classe de deuxieme sera absent de l'école le $now pour vacances familiales prolongés.</p>

              <p>Nous vous remercions par avance de votre attention et vous prions $teacher, de recevoir l'assurance de nos sincères considérations.</p>
              
              <p>Les parents de l’élève de $child.</p>
            </div>
            ";
            
            $dontwant =
            "
            <div>
              <p>$teacher,</p>

              <p>Je vous adresse cette lettre pour faire suite à l'absence de $gender $child, élève en classe de 3ième</p>

              <p>Pour des raisons familiales, il a été contraint de manquer l'école en ce jour du $now.</p>

              <p>Je vous prie d'agréer, $teacher, mes salutations distinguées.</p>

              <p>le père de $child.</p>
            </div>
            ";

            $excuse = ($absence === "illness") ? $sick : (($absence === "death") ? $death : (($absence === "extra") ? $extra : (($absence === "dontwant") ? $dontwant : "Sorry, you don't fit the criteria")));
            
            echo $excuse;
        }
    ?>
  </body>
</html>