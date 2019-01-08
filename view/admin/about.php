<?php require_once ROOT . '\view\layouts\header.php'; ?>

    <div class="row justify-content-center mt-2 mr-0">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body">
                <h5 class="card-title">Спортивное соривнование</h5>

                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                           value="<?= $competition['name']; ?>">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="date">Дата</label>
                            <input type="date" class="form-control" id="date" aria-describedby="emailHelp"
                                   value="<?= $competition['date']; ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="time">Время</label>
                            <input type="time" class="form-control" id="time" aria-describedby="emailHelp"
                                   value="<?= $competition['time']; ?>">
                        </div>
                    </div>
                    <!-- select -->
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Вид спорта</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <?php foreach ($kindsOfSport as $kindOfSport): ?>
                                    <option value="<?= $kindOfSport['id']; ?>"><?= $kindOfSport['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Описание</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
                        <?= $competition['description']; ?>
                    </textarea>
                </div>
                <hr>
                <h5 class="card-title">Место проведения</h5>

                <div class="form-group">
                    <label for="time">Название</label>
                    <input type="text" class="form-control" id="time" aria-describedby="emailHelp"
                           value="<?= $location['name']; ?>">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Город</label>
                    <div class="row">
                        <div class="col">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <?php foreach ($cities as $city): ?>
                                    <option value="<?= $city['id']; ?>"><?= $city['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Add city -->
                        <div class="col">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCity">
                                Добавить город
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">Адрес</label>
                    <input type="text" class="form-control" id="address" aria-describedby="emailHelp"
                           value="<?= $location['address']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Описание</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
                        <?= $location['description']; ?>
                    </textarea>
                </div>
            </div>
        </div>
    </div>

<?php require_once ROOT . '\view\layouts\modals\city.php'; ?>
<?php require_once ROOT . '\view\layouts\footer.php';