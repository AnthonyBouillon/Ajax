<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Ajax démo</title>

    </head>

    <body>
        <!-- Entrez un numéro d'identifiant -->
        <form method="post">
            <input type="text" name="pro_id" id="pro_id">
            <input type="submit" id="button1">Envoyer
        </form>
        <div id="div1"></div>
        <!--  Attention : Jquery sans slim sinon Ajax ne fonctionne pas -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function ()
            {
                $("#button1").click(function ()
                {
                    $.post({
                        url: "post.php",
                        // Envoie l'identifiant du produit
                        data: { pro_id: $('#pro_id').val()},
                        success: function (resultat)
                        {
                            // Objet parsé en JSON car le datatype n'a pas été spécifié
                            var resultParse = JSON.parse(resultat);
                            // Affiche la référence du produit
                            $('#div1').html("<p>" + resultParse.pro_ref + "</p>");
                        }
                    });
                    // Empêche la soumission du formulaire
                    return false;
                });
            });

        </script>
    </body>

</html>