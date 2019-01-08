<?php require_once ROOT . '\view\layouts\header.php'; ?>

    <div class="row justify-content-center mt-2 mr-0">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body">
                <h4 class="card-title"><?= $competition['name']; ?></h4>
                <h5 class="card-subtitle mb-2 text-muted"><?= $competition['date']; ?></h5>
                <h5 class="card-subtitle mb-2 text-muted"><?= $competition['time']; ?></h5>
                <a href="<?= "/sport/{$kindOfSport['id']}"; ?>"
                   class="card-link"><?= $kindOfSport['name']; ?></a>
                <p class="card-text"><?= $competition['description']; ?></p>
                <hr>
                <h5 class="card-title">Место проведения</h5>
                <p class="card-text"><strong>Название:</strong> <?= $location['name']; ?></p>
                <p class="card-text"><strong>Город:</strong> <?= $city['name']; ?></p>
                <p class="card-text"><strong>Адрес:</strong> <?= $location['address']; ?></p>
                <p class="card-text"><strong>Описание:</strong> <?= $location['description']; ?></p>
            </div>
        </div>
    </div>

<?php require_once ROOT . '\view\layouts\footer.php';