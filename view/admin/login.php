<?php require_once ROOT . '\view\layouts\header.php'; ?>

    <div class="row justify-content-center mt-2">
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
                <div class="row justify-content-center mt-5">
                    <div class="col-3">
                        <h3 class="text-center mb-4">Выполните вход</h3>
                        <form method="post" action="/login">
                            <div class="form-group">
                                <input name="username" type="text" class="form-control" placeholder="Username...">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control"
                                       placeholder="Пароль...">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Войти</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>

<?php require_once ROOT . '\view\layouts\footer.php';