<?php
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

    if ($_POST['username'] == "" && $_POST['message'] == "")
    {
        header('Location: minichat.php'); 
    }

    elseif (isset($_POST['username']) && isset($_POST['message']))
        {
            $request = $bdd->prepare('INSERT INTO chat(username, message) VALUES(:username, :message) ');
            $request->execute(array(
                'username' => strip_tags($_POST['username']),
                'message' => strip_tags($_POST['message'])
            ));
            header('Location: minichat.php');
        }
?>
