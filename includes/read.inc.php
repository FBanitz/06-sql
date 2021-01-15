<?php
    $recup = $bdd->prepare('SELECT * FROM apprenants');
    $recup->execute();

?>

<h2>Liste</h2>

<table class="table">
    <thead>
        <tr>
            <th>N°</th>
            <th>Prénom</th>
            <th>Code postal</th>
            <th>Ville</th>
        </tr>
    </thead>
    <tbody>
        <?php while($donnees = $recup->fetch()){ ?>
            <tr>
                <td><?=$donnees['id']?></td>
                <td><?=$donnees['prenom']?></td>
                <td><?=$donnees['codepostal']?></td>
                <td><?=$donnees['ville']?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>