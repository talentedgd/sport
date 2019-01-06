<?php require_once ROOT . '\view\layouts\header.php'; ?>

<div class="row justify-content-center mt-2">
    <div class="card" style="width: 90%">
        <div class="card-body">
            <h4 class="card-title"><?= $competition['name']; ?></h4>
            <h5 class="card-subtitle mb-2 text-muted"><?= $competition['date']; ?></h5>
            <h5 class="card-subtitle mb-2 text-muted"><?= $competition['time']; ?></h5>
            <p class="card-text"><?= $competition['description']; ?></p>
        </div>
    </div>
</div>

<?php require_once ROOT . '\view\layouts\footer.php';