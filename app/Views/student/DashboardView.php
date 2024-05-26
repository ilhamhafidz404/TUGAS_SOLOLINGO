<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="./style.css">
</head>

<body class="bg-gray-50">

  <section class="grid grid-cols-5">
    <aside class="border-r border-gray-100 shadow min-h-screen py-10 px-5 fixed w-[300px] bg-white">
      <h1 class="text-center font-bold text-3xl text-primary mb-10">SOLOLINGO</h1>

      <a href="" class="flex items-center gap-5 hover:bg-gray-100 px-5 py-3 rounded-md mb-2">
        <img src="https://d35aaqx5ub95lt.cloudfront.net/vendor/784035717e2ff1d448c0f6cc4efc89fb.svg" width="32" height="32">
        <span class="text-xl font-semibold text-gray-600">Belajar</span>
      </a>
      <a href="" class="flex items-center gap-5 hover:bg-gray-100 px-5 py-3 rounded-md mb-2">
        <img src="https://d35aaqx5ub95lt.cloudfront.net/vendor/ca9178510134b4b0893dbac30b6670aa.svg" width="32" height="32">
        <span class="text-xl font-semibold text-gray-600">Papan Skor</span>
      </a>
      <form action="/logout" method="POST">
        <button class="flex items-center gap-5 hover:bg-gray-100 px-5 py-3 rounded-md mb-2">
          <span class="text-xl font-semibold text-gray-600">Logout</span>
        </button>
      </form>
    </aside>
    <div></div>
    <main class="col-span-3 p-10">
      <div class="bg-primary p-5 rounded-md text-white mb-10 sticky top-0">
        <span>Bagian 1</span>
        <h2 class="text-xl font-bold">Mengenal Frasa Dasar</h2>
      </div>


      <?php foreach ($courses as $course) : ?>
        <section class="p-5 rounded-md hover:bg-gray-100 bg-white mb-3 shadow">
          <div class="w-[50px] h-[50px] rounded-full bg-primary mb-5"></div>
          <h4 class="font-semibold text-xl">
            <?= $course["title"] ?>
          </h4>
          <p class="text-sm text-gray-800">
            <?= $course["description"] ?>
          </p>
        </section>
      <?php endforeach; ?>

      <div class="bg-primary p-5 rounded-md text-white my-10 sticky top-0">
        <span>Bagian 2</span>
        <h2 class="text-xl font-bold">Mengenal Frasa Umum</h2>
      </div>
      <section class="p-5 rounded-md hover:bg-gray-100 bg-white mb-3 shadow">
        <div class="w-[50px] h-[50px] rounded-full bg-primary mb-5"></div>
        <h4 class="font-semibold text-xl">Mengenal Kata Kerja</h4>
        <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum placeat quam a, minima odio ullam voluptates ex maiores delectus tempore asperiores, at cum? Eius facilis vel ut ratione odio.</p>
      </section>
      <section class="p-5 rounded-md hover:bg-gray-100 bg-white mb-3 shadow">
        <div class="w-[50px] h-[50px] rounded-full bg-primary mb-5"></div>
        <h4 class="font-semibold text-xl">Mengenal Kata Kerja</h4>
        <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum placeat quam a, minima odio ullam voluptates ex maiores delectus tempore asperiores, at cum? Eius facilis vel ut ratione odio.</p>
      </section>
      <section class="p-5 rounded-md hover:bg-gray-100 bg-white mb-3 shadow">
        <div class="w-[50px] h-[50px] rounded-full bg-primary mb-5"></div>
        <h4 class="font-semibold text-xl">Mengenal Kata Kerja</h4>
        <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum placeat quam a, minima odio ullam voluptates ex maiores delectus tempore asperiores, at cum? Eius facilis vel ut ratione odio.</p>
      </section>
      <section class="p-5 rounded-md hover:bg-gray-100 bg-white mb-3 shadow">
        <div class="w-[50px] h-[50px] rounded-full bg-primary mb-5"></div>
        <h4 class="font-semibold text-xl">Mengenal Kata Kerja</h4>
        <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum placeat quam a, minima odio ullam voluptates ex maiores delectus tempore asperiores, at cum? Eius facilis vel ut ratione odio.</p>
      </section>
      <section class="p-5 rounded-md hover:bg-gray-100 bg-white mb-3 shadow">
        <div class="w-[50px] h-[50px] rounded-full bg-primary mb-5"></div>
        <h4 class="font-semibold text-xl">Mengenal Kata Kerja</h4>
        <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum placeat quam a, minima odio ullam voluptates ex maiores delectus tempore asperiores, at cum? Eius facilis vel ut ratione odio.</p>
      </section>
      <section class="p-5 rounded-md hover:bg-gray-100 bg-white mb-3 shadow">
        <div class="w-[50px] h-[50px] rounded-full bg-primary mb-5"></div>
        <h4 class="font-semibold text-xl">Mengenal Kata Kerja</h4>
        <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum placeat quam a, minima odio ullam voluptates ex maiores delectus tempore asperiores, at cum? Eius facilis vel ut ratione odio.</p>
      </section>
      <section class="p-5 rounded-md hover:bg-gray-100 bg-white mb-3 shadow">
        <div class="w-[50px] h-[50px] rounded-full bg-primary mb-5"></div>
        <h4 class="font-semibold text-xl">Mengenal Kata Kerja</h4>
        <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum placeat quam a, minima odio ullam voluptates ex maiores delectus tempore asperiores, at cum? Eius facilis vel ut ratione odio.</p>
      </section>
    </main>
  </section>
</body>

</html> -->

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
                <a href="#" class="btn btn-primary btn-block">Kerjakan</a>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>
<?= $this->endSection() ?>