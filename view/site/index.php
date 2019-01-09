<?php require_once ROOT . '\view\layouts\header.php'; ?>

<?php foreach ($competitions as $competition): ?>

    <div class="row justify-content-center mt-2">
        <div class="card" style="width: 90%; background-color: ghostwhite;">
            <div class="card-body">
                <h4 class="card-title"><?= $competition['name']; ?></h4>
                <h5 class="card-subtitle mb-2 text-muted"><?= $competition['date']; ?></h5>
                <a class="btn btn-outline-primary" role="button" href="<?= "/competition/{$competition['id']}"; ?>">Подробнее</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php require_once ROOT . '\view\layouts\footer.php';
