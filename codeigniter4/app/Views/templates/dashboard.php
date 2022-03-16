<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= base_url("css/style.css"); ?>">
</head>
<body>
  
  <div id="dashboard-hero" class="container">
    <img src="<?= base_url("images/notepad.png"); ?>" alt="notes" width="100px">
    <div class="header">
      <h1>Peduli Diri</h1>
      <p>Catatan perjalanan</p>
    </div>
  </div>
  
  
  <nav class="container">
    <a href="/dashboard">Home</a>
    <span class="devider">|</span>
    <a href="/dashboard/view">Catatan Perjalanan</a>
    <span class="devider">|</span>
    <a href="/dashboard/insert">Isi Catatan</a>
  </nav>
  
  <?= $this->renderSection("content"); ?>
</body>
</html>