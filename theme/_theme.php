<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= $head; ?>
  <link rel="stylesheet" href="<?= url("/theme/style.css"); ?>" />
</head>

<body>

  <nav class="main_nav">
    <?php if ($v->section("sidebar")) :
      echo $v->section("sidebar");
    else :
    ?>
      <a title="" href="<?= url(); ?>">Home</a>
      <a title="" href="<?= url("contato"); ?>">Contato</a>
      <a title="" href="<?= url("teste"); ?>">Teste</a>
    <?php

    endif; ?>
  </nav>

  <main class="main_content">
    <?= $v->section("content"); ?>
  </main>

  <footer class="main_footer">
    <?= SITE; ?> - Todos os Direitos Reservados!
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <?= $v->section("scripts"); ?>

</body>

</html>