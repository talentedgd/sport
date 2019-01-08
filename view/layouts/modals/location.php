<!-- Modal -->
<div class="modal fade" id="addLocation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить место проведения</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/add-location">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="locationName">Название</label>
                        <input name="locationName" type="text" class="form-control" id="locationName" aria-describedby="emailHelp"
                               placeholder="Введите название...">
                    </div>
                    <div class="form-group">
                        <label for="locationAddress">Адрес</label>
                        <input name="locationAddress" type="text" class="form-control" id="locationAddress" aria-describedby="emailHelp"
                               placeholder="Введите адрес...">
                    </div>
                    <div class="form-group">
                        <label for="locationDescription">Описание</label>
                        <textarea placeholder="Введите описание..." name="locationDescription" class="form-control"
                                  id="locationDescription"
                                  rows="3"></textarea>
                    </div>
                    <!-- select cities -->
                    <div class="form-group">
                        <label for="locationCities">Город</label>
                        <select name="locationCities" class="form-control" id="locationCities">
                            <?php foreach ($cities as $city): ?>
                                <option value="<?= $city['id']; ?>"><?= $city['name']; ?></option>
                            <?php endforeach; ?>
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