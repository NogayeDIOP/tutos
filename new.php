<!DOCTYPE html>
<html>
<head>
	<title>php essai</title>
</head>
<body>

 <div class="signin-form">
                        <h2 class="form-title">Connectez vous</h2>
                        <form method="POST" class="register-form" id="login">
                           <label>mettre pseudo</label>

                           <input type="text" id="pseudo" name="pseudo" placeholder="votre identifiant" required="required"><br/>
                           <input type="text" name="age" placeholder="votre age" required="required"><br/>
                           <input type="email" name="email" placeholder="votre email" required="required" maxlength="30"><br/>
                           <input type="submit" name="formsend" id="formsend">

                        </form>
                     </div>
                        <?php
                        include 'database.php';
                       /* global $db; 

                        $q = $db->query("SELECT * FROM  connexion");
                        while ($connec = $q->fetch()) {
                            /*
                            pour récupération des données de la base de données
                           var_dump($connec);
                           */
                        //   echo " pseudo :" .$connec['pseudo'];
                      //  }


                        if (isset($_POST['formsend'])){
                        if (isset['pseudo'], $_POST['age'], $_POST['email']) {
                           if ($_POST['pseudo'] != ""&& $_POST['age'] != ""&& $_POST['email'] !=""){

                           }
                        }
                    }
                    
                       
                        ?>
                        
</body>
</html>