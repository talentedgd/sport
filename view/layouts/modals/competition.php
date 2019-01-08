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
                        <input name="competitionName" type="text" class="form-control" id="competitionName"
                               aria-describedby="emailHelp"
                               placeholder="Введите название спортивного соревнования...">
                    </div>

                    <!-- date -->
                    <div class="form-group">
                        <label for="date">Дата</label>
                        <input type="date" class="form-control" id="date" aria-describedby="emailHelp"
                               value="<?= $competition['date']; ?>">
                    </div>

                    <!-- time -->
                    <div class="form-group">
                        <label for="time">Время</label>
                        <input type="time" class="form-control" id="time" aria-describedby="emailHelp"
                               value="<?= $competition['time']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Описание</label>
                        <textarea placeholder="Введите описание..." name="sportDescription" class="form-control"
                                  id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                    </div>

                    <!-- select sport -->
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

                    <hr>
                    <h5>Место проведения</h5>

                    <div class="form-group">
                        <label for="locationName">Название места проведения</label>
                        <input name="locationName" type="text" class="form-control" id="locationName"
                               aria-describedby="emailHelp"
                               placeholder="Введите название места проведения...">
                    </div>

                    <div class="form-group">
                        <label for="locationAddress">Адресс</label>
                        <input name="locationAddress" type="text" class="form-control" id="locationAddress"
                               aria-describedby="emailHelp"
                               placeholder="Введите Адресс...">
                    </div>

                    <div class="form-group">
                        <label for="locationDescription">Описание</label>
                        <textarea placeholder="Введите описание..." name="locationDescription" class="form-control"
                                  id="locationDescription"
                                  rows="3"></textarea>
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