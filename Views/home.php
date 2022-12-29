<?php require_once 'header.php'?>
<?php if(isset($_SESSION['USER_ID'])) : ?>
<main>
  <div id="filter-title">
    Фильтрация результата поиска
  </div>

  <form action="/" method="get">
    <div id="filter-container">
      <label>Введите имя студента</label>
      <input name="fio" id="input-title" class="input-item" type="text" placeholder="Имя"></br>
      <label>Введите название группы</label>
      <input name="group_name" id="input-magazine" class="input-item" type="text" placeholder="Группа"></br>
      <label>Введите год</label>
      <input name="year" id="input-author" class="input-item" type="number" placeholder="Год"></br>

      <button type="submit" id="apply-filter-btn">
        Применить фильтр
      </button>
      <button type="clear" id="clear-filter-btn" href="" >
        Очистить фильтр
      </button>
    </div>
  </form>
  <?php foreach ($students as $student) : ?>
    <div class="article-card">
      <div class="container text-center">
        <div class="row">
          <div class="col-5">
            <h4><?=$student['fio']?></h4>
          </div>
          <div class="col-5">
            <h4><?=$student['group_name']?></h4>
          </div>
          <div class="col-2">
            <?=$student['year']?>
          </div>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col-6">
              <div class="articles-image">
                <img class="preview-image" src="<?="images/" . $student['image']?>">
              </div>
            </div>
            <div class="col-6">
              <div class="arcticles-text">
                <?=$student['specs']?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  <?php endforeach ?>


</main>
<?php endif;?>
<?php require_once 'footer.php'?>
