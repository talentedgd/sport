<?php require_once ROOT . '\view\layouts\header.php'; ?>
<?php if (isset($competition)): ?>
    <div class="row justify-content-center mt-2 mr-0">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body">
                <h4 class="card-title"><?= ucfirst($competition['name']); ?></h4>
                <h5 class="card-subtitle mb-2 text-muted"><?= $competition['date']; ?></h5>
                <h5 class="card-subtitle mb-2 text-muted"><?= $competition['time']; ?></h5>
                <a href="<?= "/sport/{$kindOfSport['id']}"; ?>"
                   class="btn btn-outline-primary" role="button"><?= ucfirst($kindOfSport['name']); ?></a>
                <p class="card-text"><?= ucfirst($competition['description']); ?></p>
                <hr>
                <h5 class="card-title">Место проведения</h5>
                <p class="card-text"><strong>Название:</strong> <?= ucfirst($location['name']); ?></p>
                <p class="card-text"><strong>Город:</strong> <?= ucfirst($city['name']); ?></p>
                <p class="card-text"><strong>Адрес:</strong> <?= ucfirst($location['address']); ?></p>
                <?php if ($location['description']): ?>
                    <p class="card-text"><strong>Описание:</strong> <?= ucfirst($location['description']); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php require_once ROOT . '\view\layouts\footer.php';