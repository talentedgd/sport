<?php require_once ROOT . '\view\layouts\header.php'; ?>

    <div class="row justify-content-center mt-2">
        <div class="card" style="width: 90%; background-color: ghostwhite">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <?php if (isset($_SESSION['loginError'])): ?>
                            <div class="alert alert-danger" role="alert">
                                Данные введены неверно, попробуйте снова!
                            </div>
                            <?php unset($_SESSION['loginError']); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <form method="post" action="/login">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input name="username" type="text" class="form-control" id="username"
                                       aria-describedby="emailHelp" placeholder="Username...">
                            </div>
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input name="password" type="password" class="form-control" id="password"
                                       placeholder="Пароль...">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once ROOT . '\view\layouts\footer.php';