<!doctype html>
<html lang="en">
  <head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['main']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
  </head>
  <body>
    <main class="container pb-3">
      <?= $this->element('navbar') ?>
      <?= $this->Flash->render() ?>
      <?= $this->fetch('content') ?>
    </main>

    <!-- SCRIPTs -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <?= $this->Html->script(['main']) ?>
    <?= $this->fetch('script') ?>
    <?= $this->fetch('postLink') ?>
  </body>
</html>