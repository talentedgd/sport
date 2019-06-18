<?php require_once ROOT . '\view\layouts\header.php'; ?>

    <div class="row justify-content-center mt-2 mr-0">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body" style="text-align: center">
                <h4 class="mb-3">Выбор СУБД</h4>
                <div class="row justify-content-center">
                    <div class="col custom-control custom-radio">
                        <input id="mysql" name="database" type="radio" class="custom-control-input" checked=""
                               required="">
                        <label class="custom-control-label" for="mysql">MySQL</label>
                    </div>
                    <div class="col custom-control custom-radio">
                        <input id="mongodb" name="database" type="radio" class="custom-control-input"
                               required="">
                        <label class="custom-control-label" for="mongodb">MongoDB</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-2 mr-0">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body" style="text-align: center">
                <div class="row justify-content-center">
                    <div class="col">
                        <!-- Add alert -->
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

                        <!-- Delete alert -->
                        <?php if (isset($_SESSION['deleteSuccess'])): ?>
                            <div class="alert alert-success" role="alert">
                                <?= $_SESSION['deleteSuccess']; ?>
                                <?php unset($_SESSION['deleteSuccess']); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['deleteError'])): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['deleteError']; ?>
                                <?php unset($_SESSION['deleteError']); ?>
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
                <!-- Add location -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addLocation">
                    Добавить место проведения
                </button>
                <!-- Add city -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCity">
                    Добавить город
                </button>
            </div>
        </div>
    </div>

    <hr>

<?php foreach ($competitions as $competition): ?>

    <div class="row justify-content-center mt-2 mr-0">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body">
                <h4 class="card-title"><?= $competition['name']; ?></h4>
                <h5 class="card-subtitle mb-2 text-muted"><?= $competition['date']; ?></h5>
                <a class="btn btn-outline-primary" role="button"
                   href="<?= "/admin/competition/{$competition['id']}"; ?>">Редактировать</a>
                <a class="btn btn-outline-danger" role="button"
                   href="<?= "/admin/competition-delete/{$competition['id']}"; ?>">Удалить</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php require_once ROOT . '\view\layouts\modals\competition.php'; ?>
<?php require_once ROOT . '\view\layouts\modals\sport.php'; ?>
<?php require_once ROOT . '\view\layouts\modals\city.php'; ?>
<?php require_once ROOT . '\view\layouts\modals\location.php'; ?>
<?php require_once ROOT . '\view\layouts\footer.php';
