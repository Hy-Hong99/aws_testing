<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="jumbotron text-center">
  <h1>Database Page</h1>
  <p>Bootstrap is the most popular HTML, CSS...</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Privince</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user) :?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['province'] ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<?= $this->endSection() ?>