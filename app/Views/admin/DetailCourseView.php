<?= $this->extend('admin/layouts/app') ?>


<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Detail Course</h1>
      <div class="section-header-breadcrumb">
        <button class="btn btn-primary">Add Question</button>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"><?= $course["title"] ?></h2>
      <p class="section-lead">
        <?= $course["description"] ?>
      </p>

      <?php foreach ($questions as $question) : ?>
        <div class="card">
          <div class="card-header">
            <h4><?= $question["question"] ?></h4>
          </div>
          <div class="card-body">
            <ol type="a">
              <li><?= $question["a"] ?></li>
              <li><?= $question["b"] ?></li>
              <li><?= $question["c"] ?></li>
              <li><?= $question["d"] ?></li>
            </ol>
          </div>
          <div class="card-footer bg-whitesmoke">Correct Anser is : <?= $question["correct"] ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</div>
<?= $this->endSection() ?>