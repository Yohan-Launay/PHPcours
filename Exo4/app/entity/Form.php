<?php

//Créer une classe nommée Form représentant un formulaire HTML. Le constructeur doit créer le code d’en-tête du formulaire en utilisant les éléments <form> et <fieldset>.
//Une méthode setText() doit permettre d’ajouter une zone de texte.
//Une méthode setSubmit() doit permettre d’ajouter un bouton d’envoi.
//Les paramètres de ces méthodes doivent correspondre aux attributs des éléments HTML correspondants.

require_once 'Ville.php';

class Form
{
    private $form;
    private $fieldset;
    private $text;
    private $submit;

    public function __construct()
    {
        $this->form = "<form>";
        $this->fieldset = "<fieldset>";
    }

    public function setText($text)
    {
        $this->text = "<input type='text' name='$text'>";
    }

    public function setSubmit($submit)
    {
        $this->submit = "<input type='submit' value='$submit'>";
    }

    public function affiche()
    {
        echo $this->form . $this->fieldset . $this->text . $this->submit . "</fieldset></form>";
    }

    public function __destruct()
    {
        echo "Destruction de l'objet";
    }

    public function __toString()
    {
        return $this->form . $this->fieldset . $this->text . $this->submit . "</fieldset></form>";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $ville = new Ville("Paris", "75");
        $ville->affiche();
    ?>
</body>
</html>


