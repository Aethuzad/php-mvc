<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework POO</title>
    <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style2.css'); ?>">
  </head>
  <body>


    <header>
      <nav>
          <ul id="nav">
              <li class="nav-link"><a data-name="home" href="<?= $view->path('home'); ?>"></a></li>
              <li class="nav-link"><a data-name="articles" href="<?= $view->path('articles'); ?>"></a></li>
              <li class="nav-link"><a data-name="contact" href="<?= $view->path('contact'); ?>"></a></li>
              <li class="nav-link"><a data-name="about" href="<?= $view->path('about'); ?>"></a></li>
              <li class="nav-link"><a data-name="Ajouter un article" href="<?= $view->path('add'); ?>"></a></li>
              <li class="nav-link"><a data-name="Documentation PHP" href="<?= $view->path('docphp'); ?>"></a></li>
              <!-- <li><a href="</?= $view->path('single',array(12)); ?>">Single</a></li>
              <li><a href="</?= $view->path('single2',array(12,'dedede')); ?>">Single2</a></li> -->
          </ul>
      </nav>
    </header>

    <div class="container">
        <?= $content; ?>
    </div>

    <footer>

    </footer>

    <script src="<?= $view->asset('js/main.js'); ?>"></script>
  </body>
</html>
