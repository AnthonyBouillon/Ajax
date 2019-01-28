<?php 
include 'list_reg.php';
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Ajax démo</title>

    </head>

    <body>
        <form method="post" action="post.php" >
        <select name="dep_reg_id" id="dep_reg_id">
            <?php 
            foreach($result as $row){ ?>
                <option value="<?= $row->reg_id ?>"><?= $row->reg_v_nom ?></option>
            <?php } ?> 
        </select>
        </form>
 
        <div id="div1"></div>
        <!--  Attention : Jquery sans slim sinon Ajax ne fonctionne pas -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>
            $('#dep_reg_id').change(function () {
                $('#div1').html('');
                $.post({
                    //Fichier où se trouve les données à récupérer
                    url: "post.php",
                    // Type de données à récupérer
                    dataType: "json",
                    // Valeur à transmettre au fichier
                    data: ({
                        dep_reg_id: $('#dep_reg_id').val(),
                    }),
                    // Si la requête ajax fonctionne
                    success: function (resultat) {
                        var contenu = '';
                        // On parcourt l'objet
                        $.each(resultat, function (key, val) {
                            // et on ajoute les noms des départements dans une variable
                            contenu += val.dep_nom + "<br>";
                        });
                        // Affiche le résultat
                        $("#div1").html(contenu); 
                    },
                    // Si la requête ajax n'a pas fonctionné, message d'erreur
                    error: function(){
                        alert('PROBLEME avec requête AJAX');
                    }
                });
            });
        </script>
    </body>

</html>