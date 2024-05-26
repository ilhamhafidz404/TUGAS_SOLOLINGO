<?= $this->extend('layouts/app') ?>


<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <?php foreach ($courses as $course) : ?>
          <article class="col-4 article">
            <div class="article-header">
              <div class="article-image" data-background="<?php echo base_url('template/stisla/dist/assets/img/news/img08.jpg') ?>">
              </div>
              <div class="article-title">
                <h2><a href="#"><?= $course["title"] ?></a></h2>
              </div>
            </div>
            <div class="article-details">
              <p><?= $course["description"] ?></p>
              <div class="article-cta">
                <a href="/student/courses?slug=<?= $course["slug"] ?>" class="btn btn-primary btn-block">Kerjakan</a>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>
<?= $this->endSection() ?>