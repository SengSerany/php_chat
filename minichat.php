<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title> Mini-chat </title>
        </head>

        <body>
            <form action="minichat_post.php" method="POST">
                <p><label>Pseudo : <input type="text" name="username" /></label></p>
                <p><label>Message : <input type="text" name="message" /></label></p>
                <p><input type="submit" /></p>
            </form>

            <?php 
                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                $reponse = $bdd->query('SELECT * FROM chat ORDER BY id DESC LIMIT 10');
                while ($donnee = $reponse->fetch())
                    {
                        echo '<p><strong>' . $donnee['username'] . ':</strong> ' . $donnee['message'] . '</p>';
                    }
            ?>
        </body>
    </html>
    <script>
        msgAlert = "Vous n'avez pas renseignez votre pseudo ou votre message!";
        alert(msgAlert);
    </script>