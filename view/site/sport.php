<?php require_once ROOT . '\view\layouts\header.php'; ?>
<?php if (isset($kindOfSport)): ?>
    <div class="row justify-content-center mt-2">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body">
                <h4 class="card-title"><?= $kindOfSport['name']; ?></h4>
                <?php if ($kindOfSport['description']): ?>
                    <p class="card-text"><?= $kindOfSport['description']; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php require_once ROOT . '\view\layouts\footer.php';