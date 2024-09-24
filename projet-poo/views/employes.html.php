<h1>Coucou bienvenue sur la page employes</h1>

<div class="flex div_employes">
    <?php foreach ($employes as $e) { ?>
        <div style="text-align: center; border:1px solid black">
            <h2><?= $e->getPrenom(); ?></h2>
            <p><?= $e->getNom(); ?></p>
            <p><?= $e->getSalaire(); ?></p>
            <p><?= $e->getSexe(); ?></p>
            <p><?= $e->getDate_embauche(); ?></p>
        </div>
    <?php } ?>
</div>