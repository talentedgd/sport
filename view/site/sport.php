<?php require_once ROOT . '\view\layouts\header.php'; ?>

    <div class="row justify-content-center mt-2">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body">
                <h4 class="card-title"><?= $kindOfSport['name']; ?></h4>
                <p class="card-text"><?= $kindOfSport['description']; ?></p>
            </div>
        </div>
    </div>

<?php require_once ROOT . '\view\layouts\footer.php';