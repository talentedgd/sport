<!-- Modal -->
<div class="modal fade" id="addCompetition" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить соревнование</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/add-competition">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="competitionName">Название спортивного соревнования</label>
                        <input name="name" type="text" class="form-control"
                               placeholder="Введите название спортивного соревнования...">
                    </div>

                    <!-- date -->
                    <div class="form-group">
                        <label for="date">Дата</label>
                        <input name="date" type="date" class="form-control" id="date">
                    </div>

                    <!-- time -->
                    <div class="form-group">
                        <label for="time">Время</label>
                        <input name="time" type="time" class="form-control" id="time"">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Описание</label>
                        <textarea placeholder="Введите описание..." name="description" class="form-control"
                                  rows="3"></textarea>
                    </div>

                    <!-- select sport -->
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Вид спорта</label>
                        <select name="sport" class="form-control">
                            <?php foreach ($kindsOfSport as $kindOfSport): ?>
                                <option value="<?= $kindOfSport['id']; ?>"><?= $kindOfSport['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <hr>
                    <h5>Место проведения</h5>

                    <!-- select cities -->
                    <div class="form-group">
                        <label for="competitionCities">Город</label>
                        <select class="form-control" id="competitionCities">
                            <?php foreach ($cities as $city): ?>
                                <option value="<?= $city['id']; ?>"><?= $city['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="competitionLocations">Местоположение</label>
                        <select name="location" class="form-control" id="competitionLocations">
                            <option value="1">-</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>