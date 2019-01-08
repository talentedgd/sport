<?php require_once ROOT . '\view\layouts\header.php'; ?>

    <div class="row justify-content-center mt-2">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body" style="text-align: center">
                <div class="row justify-content-center">
                    <div class="col">
                        <?php if (isset($_SESSION['essenceSuccess'])): ?>
                            <div class="alert alert-success" role="alert">
                                <?= $_SESSION['essenceSuccess']; ?>
                                <?php unset($_SESSION['essenceSuccess']); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['essenceError'])): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['essenceError']; ?>
                                <?php unset($_SESSION['essenceError']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Add competition -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCompetition">
                    Добавить спортивное соревнование
                </button>
                <!-- Add king of sport -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSport">
                    Добавить вид спрота
                </button>
                <!-- Add city -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCity">
                    Добавить город
                </button>
            </div>
        </div>
    </div>


<?php foreach ($competitions as $competition): ?>

    <div class="row justify-content-center mt-2">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body">
                <h4 class="card-title"><?= $competition['name']; ?></h4>
                <h5 class="card-subtitle mb-2 text-muted"><?= $competition['date']; ?></h5>
                <a href="<?= "/admin/competition/{$competition['id']}"; ?>" class="card-link">Редактировать</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php require_once ROOT . '\view\layouts\modals\competition.php'; ?>
<?php require_once ROOT . '\view\layouts\modals\sport.php'; ?>
<?php require_once ROOT . '\view\layouts\modals\city.php'; ?>
<?php require_once ROOT . '\view\layouts\footer.php';
