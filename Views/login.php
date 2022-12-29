<?php require_once 'header.php'?>
<div class="registration-form-container">
  <div class="registration-form-title">
    Авторизация
  </div>
  <form method="get" action="/UniversitySPO/login.php">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Почта</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Войти</button>

  </form>
  <div class="registration-link-button">
    <div id="registration-button-text">
      У вас еще нет аккаунта?
    </div>
      <a href="/UniversitySPO/Views/registration.php">
          <button  class="btn btn-primary registration-button">Зарегистрироваться</button>
      </a>
  </div>

</div>

<?php require_once 'footer.php'?>