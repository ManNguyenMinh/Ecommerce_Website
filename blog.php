<?php include_once("common/start.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Suyt Blog</title>
  <meta content="Suyt Blog" name="description">
  <meta content="" name="keywords">
  <meta name="author" content="Suyt">

  <?php include_once("common/meta.php"); ?>
  <link href="/assets/css/en.css" rel="stylesheet">
</head>

<body>
  <?php include_once("core/header.php"); ?>
  <main id="main">

    <img src="images/blog-image.png" alt="" class="w-100 object-fit-cover" style="max-height: 500px">
    <div class="container py-5 text-center" data-aos="fade-up" data-aos-delay="200">
      <h1 style="color: var(--color-semidark-text)">Blogs</h1>
      <span class="subtitle-1">Valuable insights and practical recommendations for improving productivity.</span>
    </div>

    <div class="container py-5" data-aos="fade-up" data-aos-delay="200">

      <div class="row mb-4 mb-lg-5">
        <div class="col d-none d-lg-block">
          <?php
          $arrBreadcrumbs = array(
            '<a href="/en">Home</a>',
            '<span class="current-location">Blog</span>'
          );
          echo Page_Breadcrumbs($arrBreadcrumbs);
          ?>
        </div>
        <div class="col d-flex justify-content-end">
          <?php
          $arrMenuItems = array("Show all", "Productivity", "Time Management", "Goals", "Collaboration");
          $filter = isset($_GET['filter']) && in_array($_GET['filter'], $arrMenuItems) ? $_GET['filter'] : 'Show all';
          echo DisplayDropdownFilterMenu($arrMenuItems, "categories-filter", "Categories", $filter);
          ?>
        </div>
      </div>

      <div class="row mb-4 mb-lg-5 g-4">
        <?php
        $arr = array(
          array(
            'link' => 'blogpost1.php',
            'image' => 'https://placehold.co/1000',
            'date' => '15 July 2023',
            'category' => 'Productivity',
            'title' => "The Top 9 Productivity Myths That Just Aren't True",
            'description' => "One more design change and your Y index is -6."
          ),
          array(
            'link' => 'blogpost1.php',
            'image' => 'https://placehold.co/400',
            'date' => '15 July',
            'category' => 'Productivity',
            'title' => "Why Focus Is Your Greatest Competitive Advantage at Work (Plus 19 Ways To Actually Do It)",
            'description' => "Learn how to overcome distractions and hone your focus. Learn how to overcome distractions and hone your focus. Learn how to overcome distractions and hone your focus. Learn how to overcome distractions and hone your focus."
          ),
          array(
            'link' => 'blogpost1.php',
            'image' => 'https://placehold.co/400',
            'date' => '15 July',
            'category' => 'Time Management',
            'title' => "The Top 9 Productivity Myths That Just Aren't True",
            'description' => "One more design change and your Y index is -6."
          ),
          array(
            'link' => 'blogpost1.php',
            'image' => 'https://placehold.co/400',
            'date' => '15 July',
            'category' => 'Category',
            'title' => "The Top 9 Productivity Myths That Just Aren't True",
            'description' => "One more design change and your Y index is -6."
          ),
          array(
            'link' => 'blogpost1.php',
            'image' => 'https://placehold.co/400',
            'date' => '15 July',
            'category' => 'Category',
            'title' => "The Top 9 Productivity Myths That Just Aren't True",
            'description' => "One more design change and your Y index is -6."
          ),
        );
        ?>
        <?php
        foreach ($arr as $blog)
        {
          echo DisplayBlogPost($blog);
        }
        ?>
      </div>

      <?php include_once("core/subscribe.php"); ?>
    </div>

  </main>
  <?php include_once("core/footer.php"); ?>
</body>

</html>