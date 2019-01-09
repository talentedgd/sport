<?php require_once ROOT . '\view\layouts\header.php'; ?>

    <div class="row justify-content-center mt-2 mr-0">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col">
                        <?php if (isset($_SESSION['updateSuccess'])): ?>
                            <div class="alert alert-success" role="alert">
                                <?= $_SESSION['updateSuccess']; ?>
                                <?php unset($_SESSION['updateSuccess']); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['updateError'])): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['updateError']; ?>
                                <?php unset($_SESSION['updateError']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <h5 class="card-title">Спортивное соривнование</h5>
                <form action="/update-competition" method="post">
                    <input type="hidden" name="id" value="<?= $competition['id']; ?>">
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp"
                               value="<?= $competition['name']; ?>">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="date">Дата</label>
                                <input name="date" type="date" class="form-control" id="date"
                                       aria-describedby="emailHelp"
                                       value="<?= $competition['date']; ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="time">Время</label>
                                <input name="time" type="time" class="form-control" id="time"
                                       aria-describedby="emailHelp"
                                       value="<?= $competition['time']; ?>">
                            </div>
                        </div>
                        <!-- select -->
                        <div class="col">
                            <div class="form-group">
                                <label for="kindOfSport">Вид спорта</label>
                                <select name="kindOfSport" class="form-control" id="kindOfSport">
                                    <?php foreach ($kindsOfSport as $kindOfSport): ?>
                                        <option value="<?= $kindOfSport['id']; ?>"><?= $kindOfSport['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="competitionDescription">Описание</label>
                        <textarea name="competitionDescription" class="form-control" id="competitionDescription"
                                  rows="3">
                        <?= $competition['description']; ?>
                    </textarea>
                    </div>
                    <hr>
                    <h5 class="card-title">Место проведения</h5>
                    <div class="form-group">
                        <label for="competitionCities">Город</label>
                        <div class="row">
                            <div class="col">
                                <select class="form-control" id="competitionCities">
                                    <?php foreach ($cities as $city): ?>
                                        <option value="<?= $city['id']; ?>"><?= $city['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Add city -->
                            <div class="col">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#addCity">
                                    Добавить город
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="competitionLocations">Место проведения</label>
                        <div class="row">
                            <div class="col">
                                <select name="competitionLocations" class="form-control" id="competitionLocations">
                                    <option value="1">...</option>
                                </select>
                            </div>
                            <div class="col">
                                <!-- Add location -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#addLocation">
                                    Добавить место проведения
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Сохранить</button>
                </form>
            </div>
        </div>
    </div>

<?php require_once ROOT . '\view\layouts\modals\city.php'; ?>
<?php require_once ROOT . '\view\layouts\modals\location.php'; ?>
<?php require_once ROOT . '\view\layouts\footer.php';