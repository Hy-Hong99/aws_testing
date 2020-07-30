<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWS Training</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">AWS Testing</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/') ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="url">URL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('control') ?>">Controller</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('database') ?>">Database</a>
      </li>
    </ul>
  </div>
</nav>
<?= $this->renderSection('content') ?>
</body>
</html>
