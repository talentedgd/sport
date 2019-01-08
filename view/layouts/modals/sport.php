<!-- Modal -->
<div class="modal fade" id="addSport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить вид спрота</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/add-sport">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="sportName">Название вида спорта</label>
                        <input name="sportName" type="text" class="form-control" id="sportName"
                               aria-describedby="emailHelp"
                               placeholder="Введите название вида спорта...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Описание</label>
                        <textarea placeholder="Введите описание..." name="sportDescription" class="form-control"
                                  id="exampleFormControlTextarea1"
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