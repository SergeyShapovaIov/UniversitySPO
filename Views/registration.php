<?php require_once 'header.php'?>

<div class="registration-form-container">
  <!--  <div class="alert alert-danger" role="alert">-->
  <!---->
  <!--  </div>-->
  <div class="registration-form-title">
    Форма регистрации
  </div>
    <form action="/UniversitySPO/registration.php" method="post">
    <div class="mb-3">
      <label for="login" class="form-label">Почта</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
      <input name="password_confirm" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">ФИО</label>
      <input name="name" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="date_birthday" class="form-label">Дата рождения</label>
      <input name="date_birthday" type="date" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Адрес</label>
      <input name="address" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Пол</label>
      <select name="gender" class="form-control" id="exampleFormControlSelect1">
        <option>Мужчина</option>
        <option>Женщина</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="interests" class="form-label">Интересы</label>
      <input name="interests" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="vk" class="form-label">Ссылка на ВК</label>
      <input name="vk" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="blood_type" class="form-label">Гурппа крови</label>
      <input name="blood_type" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="rhesus_factor" class="form-label">Резус фактор</label>
      <input name="rhesus_factor" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
  </form>
</div>

<?php require_once 'footer.php'?>
