<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/Views/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<header>
  <div class="top-header-row">
    <div class="burger-menu-container">
      <svg viewBox="0 0 100 80" width="30" height="20" id="burger-menu">
        <rect width="100" height="15" rx="10"></rect>
        <rect y="30" width="100" height="15" rx="10"></rect>
        <rect y="60" width="100" height="15" rx="10"></rect>
      </svg>
    </div>
    <div class="top-header-right-section">
      <div class="header-icon-container">
          <a href="/">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 309 309" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M68.4423 26.0393C93.7686 9.06174 123.545 0 154.005 0C194.846 0 234.015 16.275 262.896 45.2451C291.777 74.2153 308.005 113.508 308.01 154.481C308.013 185.039 298.984 214.911 282.065 240.321C265.145 265.731 241.094 285.537 212.953 297.234C184.813 308.931 153.847 311.993 123.972 306.034C94.0966 300.074 66.6537 285.361 45.1138 263.755C23.5739 242.148 8.90442 214.619 2.96053 184.649C-2.98335 154.678 0.0653089 123.612 11.721 95.3799C23.3767 67.1476 43.1159 43.0168 68.4423 26.0393ZM180.336 140.561C212.051 151.8 224.284 177.329 224.284 215.345V255.047H99.593V48.1729H154.908C175.847 48.1729 184.602 51.8575 194.493 59.5386C208.902 70.8654 211.166 87.3096 211.166 95.5561C211.299 106.453 207.484 117.028 200.43 125.316C195.128 132.023 188.214 137.269 180.336 140.561ZM196.038 211.485C196.038 168.722 182.396 145.328 147.339 145.328V134.927H147.553C152.962 134.963 158.306 133.751 163.173 131.385C168.041 129.018 172.301 125.561 175.624 121.28C182.066 113.463 183.387 106.093 183.688 99.5137H147.582V89.3566H183.378C182.573 82.4432 179.883 75.8863 175.604 70.4072C167.413 60.1917 155.812 58.4761 148.175 58.4761H127.771V243.779H147.582V174.57H173.554V243.652H196.038V211.485Z"
                        fill="#ffffff"></path>
              </svg>
          </a>
      </div>
      <div class="header-bradcrumbs-container">
        <div class="breacrumb-container header-breadcrumb-container">
          <nav style="--bs-breadcrumb-divider: ' → ';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#" class="breadcrumb-item-header">Национальный
                  исследовательский университет «Высшая школа экономики»</a></li>
              <li class="breadcrumb-item"><a href="#" class="breadcrumb-item-header">Образовательные
                  программы бакалавриата</a></li>
              <li class="breadcrumb-item"><a href="#" class="breadcrumb-item-header">Факультет
                  компьютерных наук</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="#"
                                                                        class="breadcrumb-item-header">Образовательная
                  программа «Прикладная математика и информатика»</a></li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="setting-button">
        <div class="search-header-container">
                <svg xmlns="http://www.w3.org/2000/svg" class="control_svg" width="19" height="19"
                     viewBox="0 0 19 19">
                    <path d="M12.927 7.9c0-1.384-.492-2.568-1.476-3.552s-2.168-1.476-3.552-1.476-2.568.492-3.552 1.476-1.476 2.168-1.476 3.552.492 2.568 1.476 3.552 2.168 1.476 3.552 1.476 2.568-.492 3.552-1.476 1.476-2.168 1.476-3.552zm4.053 11.1l-4.603-4.592c-1.339.928-2.832 1.391-4.477 1.391-1.07 0-2.093-.208-3.069-.623-.976-.415-1.818-.976-2.525-1.683-.707-.707-1.268-1.549-1.683-2.525-.415-.976-.623-1.999-.623-3.069 0-1.07.208-2.093.623-3.069.415-.976.976-1.818 1.683-2.525.707-.707 1.549-1.268 2.525-1.683.976-.415 1.999-.623 3.069-.623 1.07 0 2.093.208 3.069.623.976.415 1.818.976 2.525 1.683.707.707 1.268 1.549 1.683 2.525.415.976.623 1.999.623 3.069 0 1.646-.464 3.138-1.391 4.477l4.603 4.603-2.031 2.02z"
                          fill="#fff">
                    </path>
                </svg>
        </div>
        <?php if(isset($_SESSION['USER_ID'])) : ?>
          <div class="username-container">
                <span><?= $user['name']?></span>
              <span>
                  <a href="/logout.php">
                      <button class="btn btn-info">
                          Выйти
                      </button>
                  </a>
              </span>
            </div>
          <?php else:?>
        <div class="search-header-container">
            <a href="/Views/login.php">
                 <svg xmlns="http://www.w3.org/2000/svg" class="control_svg" width="17" height="18"
                        viewBox="0 0 17 18">
                    <path d="M13.702 13.175c.827.315 1.486.817 1.978 1.506.492.689.738 1.467.738 2.333h-16.419c0-1.417.532-2.5 1.595-3.248.394-.276 1.358-.591 2.894-.945.945-.118 1.457-.374 1.536-.768.039-.157.059-.61.059-1.358 0-.118-.039-.217-.118-.295-.157-.157-.315-.433-.472-.827-.079-.315-.157-.787-.236-1.417-.157.039-.285-.02-.384-.177-.098-.157-.177-.364-.236-.62l-.089-.443c-.157-.866-.098-1.28.177-1.24-.118-.157-.217-.532-.295-1.122-.118-.866-.059-1.634.177-2.303.276-.748.768-1.319 1.476-1.713.709-.394 1.476-.571 2.303-.532.787.039 1.506.276 2.156.709.65.433 1.093 1.024 1.329 1.772.197.551.217 1.319.059 2.303-.079.472-.157.768-.236.886.118-.039.207 0 .266.118.059.118.079.266.059.443l-.059.472c-.02.138-.049.246-.089.325l-.118.413c-.039.276-.108.472-.207.591-.098.118-.226.157-.384.118-.079.866-.217 1.476-.413 1.831 0 .039-.069.138-.207.295-.138.157-.207.256-.207.295v.65c0 .394.039.689.118.886.079.197.354.354.827.472.276.118.679.217 1.211.295.532.079.935.177 1.211.295z"
                  fill="#ffffff">
                    </path>
          </svg>
            </a>
            </div>
          <?php endif;?>
        </div>
        <div class="search-header-container">
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="12" viewBox="0 0 21 12">
            <path d="M10.5 0c3.438 0 6.937 2.016 10.5 6.047-.844.844-1.383 1.375-1.617 1.594-.234.219-.805.703-1.711 1.453-.906.75-1.641 1.266-2.203 1.547-.563.281-1.305.578-2.227.891-.922.313-1.836.469-2.742.469-1.125 0-2.156-.141-3.094-.422-.938-.281-1.875-.766-2.813-1.453-.938-.688-1.672-1.273-2.203-1.758-.531-.484-1.328-1.273-2.391-2.367 2.031-2.031 3.836-3.539 5.414-4.523 1.578-.984 3.273-1.477 5.086-1.477zm0 10.266c1.156 0 2.148-.422 2.977-1.266.828-.844 1.242-1.844 1.242-3s-.414-2.156-1.242-3c-.828-.844-1.82-1.266-2.977-1.266-1.156 0-2.148.422-2.977 1.266-.828.844-1.242 1.844-1.242 3s.414 2.156 1.242 3c.828.844 1.82 1.266 2.977 1.266zm0-5.766c0 .438.141.797.422 1.078s.641.422 1.078.422c.313 0 .625-.109.938-.328v.328c0 .688-.234 1.273-.703 1.758-.469.484-1.047.727-1.734.727-.688 0-1.266-.242-1.734-.727-.469-.484-.703-1.07-.703-1.758s.234-1.273.703-1.758c.469-.484 1.047-.727 1.734-.727h.375c-.25.313-.375.641-.375.984z"
                  fill="#ffffff"></path>
          </svg>
        </div>
        <div class="language-header-container">
          <div class="language-setting">
            <span class="language-setting-item">RU</span>
            <span class="language-setting-item">EN</span>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="main-header-container">
    <div class="subtitle-container">
      Бакалаврская программа
    </div>
    <div class="title-container">
      <h1>Прикладная математика и информатика</h1>
    </div>
    <div class="text-container">
      <p>
        Целью программы является подготовка специалистов по работе с данными (data scientist), аналитиков
        (analyst), исследователей в области компьютерных наук (researcher and computer scientist),
        инженеров-разработчиков и инженеров-исследователей по программному обеспечению (software engineer and
        research software engineer).
      </p>
      <p>
        Программа рассчитана на молодых людей, готовящихся к развитию существующих и созданию новых компьютерных
        технологий, работая в ведущих ИТ-компаниях и исследовательских центрах. Учебный план программы
        разработан с учетом опыта ведущих университетов, таких как Stanford University (США), EPFL (Швейцария),
        МГУ и МФТИ (Россия), а также
        </pr>
        <a href="" id="text-link">Школы анализа данных Яндекса</a>
        <span>, разработавшей одну из самых сильных образовательных программ в области компьютерных наук в России.</span>
    </div>
  </div>
  <div class="header-button-container">
    <div class="header-button">
      <a href="" class="header-button-link">
        Задать вопрос о программе
      </a>
    </div>
  </div>
  <div class="header-bottom-menu-container">
    <div class="home-menu-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15">
        <path fill="#000" fill-rule="evenodd"
              d="M6.122 14.692h-3.75V7.346H0L7.958 0l7.959 7.346h-2.373v7.346h-3.75V9.795H6.123z"></path>
      </svg>
    </div>
    <div class="link-menu-item">
      <a href="" class="link-header-bottom-menu">
        О программе
      </a>
    </div>
    <div class="link-menu-item">
      <a href="" class="link-header-bottom-menu">
        Абитуриентам
      </a>
    </div>
    <div class="link-menu-item">
      <a href="" class="link-header-bottom-menu">
        Студентам
      </a>
    </div>
    <div class="link-menu-item">
      <a href="" class="link-header-bottom-menu">
        Выпускникам
      </a>
    </div>
  </div>
</header>
