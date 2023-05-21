<?php require "./vue/template.view.php"; ?>
<head><link rel="stylesheet" href="./css/login.css" /></head>

<body>
    <div class="divLog">
        <form method="POST" action="index.php?action=valid-connexion" >

            <?php if(!empty($error)){  ?>
                <div class="divError" id="loginError" >
                    <p>Email et/ou mot de passe incorrect(s)</p>
                </div>
            <?php } ?>

            <h1>Se connecter</h1>

            <div class="inputs">
                <input type="email" placeholder="Mail" name="mail" autocomplete="off" required="required" />
                <input type="password" id="password" placeholder="Mot de passe" name="mdp" autocomplete="off" required="required">
            </div>
            <div align="center">
                <button type="submit" class="cbt" href="index.php?action=validco">Se connecter</button>  
            </div>

      </form>
    </div>   
</body>

