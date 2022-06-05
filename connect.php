<?php
    session_start();
    if(!empty($_POST['pseudo']))
    {
        
        $pseudo = htmlspecialchars($_POST['pseudo']);
        
        if(!preg_match('/[^A-Za-z0-9\-]/', $pseudo))
        {
            $_SESSION['user'] = $pseudo;
             header('Location:../chat.php');
            die();
            
        }
        else
        {
            echo "votre speudo ne contient pas de caractaire speciaux";
            
        }
}
else
{
    header('Location:../index.php');
    die();
    
}