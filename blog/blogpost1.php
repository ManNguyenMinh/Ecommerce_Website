<?php include_once("../common/start.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blog title goes here</title>
  <meta content="Blog description goes here" name="description">
  <meta content="" name="keywords">
  <meta name="author" content="Suyt">

  <?php include_once("../common/meta.php"); ?>
  <link href="/assets/css/en.css" rel="stylesheet">
</head>

<body>
  <?php include_once("../core/header.php"); ?>
  <main id="main" data-aos="fade-up" data-aos-delay="200">

    <img src="/images/blog/image.png" alt="" class="d-lg-none w-100 object-fit-cover" style="max-height: 500px">
    <div class="py-4 py-lg-5">
      <div class="container d-flex flex-column align-items-center align-items-lg-start">

        <div class="d-none d-lg-block mb-lg-4">
          <?php
          $arrBreadcrumbs = array(
            '<a href="/">Home</a>',
            '<a href="/blog.php">Blog</a>',
            '<span class="current-location">Title of Blog Post</span>'
          );
          echo Page_Breadcrumbs($arrBreadcrumbs);
          ?>
        </div>

        <h1 class="h4" style="color: var(--color-semidark-text);">
          Blog post title goes here
        </h1>

        <span class="body-1 mb-4">
          and blog caption goes here
        </span>

        <div class="d-flex align-items-center mb-4">
          <img src="/images/blog/author-tien.webp" alt="Tien Vũ" class="me-3 rounded-circle" style="width: 50px; height: 50px;" />
          <div class="subtitle-2" style="font-weight: 500">
            <div style="color: var(--color-heading-text)">
              Post by <strong>Tiên Vũ</strong>
            </div>
            <div>on 15th May, 2023</div>
          </div>
        </div>

        <img src="/images/blog/image.png" alt="" class="d-none d-lg-block w-100 object-fit-cover" style="max-height: 500px">
      </div>
    </div>

    <div class="container blog-post mb-5">
      <div class="row">

        <div class="col-lg-4" id="toc-container">
          <a href="/blog.php" class="d-block mb-5">
            <button class="btn p-0 border-0">
              <i class="bi bi-arrow-left"></i> All posts
            </button>
          </a>
        </div>

        <div class="col-lg-8">
          <p class="paragraph">
            Welcome to the extraordinary world of <strong>AMS Company Limited</strong>, a leading name in the manufacturing solutions industry. With a remarkable journey spanning two decades, <strong>AMS</strong> has continuously pushed boundaries and pioneered innovation in Vietnam and beyond. Today, we proudly celebrate our 20 years of excellence, a milestone that highlights not only our commitment to delivering exceptional results but also the enduring trust and support of our valued customers.
          </p>

          <h2 class="h5 mt-5">1. From Humble Beginnings to Industry Leader</h2>
          <p class="paragraph">
            Our story began in 1997 when our founder, Mr. Goh Chee Meng, recognized the untapped potential in Vietnam's manufacturing and precision mechanical industries. As the Head of the Mechanical Engineering Department at the Vietnam Singapore Vocational College, he understood the urgent need to bring advanced machinery, equipment, and solutions to propel the industry forward. Thus, <strong>AMS</strong> was born with a vision to bridge the gap between local enterprises and international partners specializing in cutting-edge technology.
          </p>
          <figure>
            <img src="../images/blog/150923-mr-goh-ams-founder.jpg" class="img-fluid py-4 mb-5 mx-auto d-block" title="Mr. Goh Chee Meng - Founder of AMS Company Limited" alt="Mr. Goh Chee Meng - Founder of AMS Company Limited">
            <figcaption class="mb-5">Mr. Goh Chee Meng - Founder of <strong>AMS Company Limited</strong></figcaption>
          </figure>
          <p class="paragraph">
            Of course, our journey was not without its challenges. In those early days, major global brands were not as well-known, the precision mechanical and mold industry was still in its infancy, and budget constraints limited the scope of innovation. But we were undeterred by these obstacles because we believed in the remarkable potential that lay ahead.
          </p>
          <p class="paragraph">
            With unwavering determination, we set out to contribute to the advancement of the manufacturing industry. Through trade events, exhibitions, seminars, factory tours, and comprehensive consulting services, we actively connected domestic and foreign businesses. We became the trusted facilitators, bringing together the best in machinery, equipment, and advanced solutions to provide our customers with the tools they needed to thrive.
          </p>

          <figure>
            <img src="../images/blog/150923-ams-team-2017.jpg" class="img-fluid py-4 mb-5 mx-auto d-block" title="Mr. Goh Chee Meng with AMS team in 2017" alt="Mr. Goh Chee Meng with AMS team in 2017">
            <figcaption class="mb-5">Mr. Goh Chee Meng with <strong>AMS</strong> team in 2017</figcaption>
          </figure>

          <h2 class="h5 mt-5">2. Key to <strong>AMS</strong> growth and success</h2>
          <p class="paragraph">
            Investing in our people has been key to our growth and success. We have continuously nurtured and developed high-quality sales and engineering teams, ensuring their skills and knowledge stay at the cutting edge. By sending them on study and training trips abroad, they gain invaluable insights and expertise to better serve our customers and surpass their expectations.
          </p>
          <figure>
            <img src="../images/blog/150923-ams-engineer-trained-at-heidenhain-singapore.jpg" class="img-fluid py-4 mb-5 mx-auto d-block" title="Marcus Pham - AMS Service engineer testimonial" alt="Marcus Pham - AMS Service engineer testimonial">
            <figcaption class="mb-5">“I am incredibly thankful to <strong>AMS</strong> for sponsoring my training at the Heidenhain training center in Singapore. This invaluable opportunity has equipped me with knowledge and skills that I wouldn't have been able to attain elsewhere. This experience has enhanced my skills and will greatly contribute to my work as an <strong>AMS</strong> service engineer." - Marcus Pham, <strong>AMS</strong> Service engineer</figcaption>
          </figure>
          <p class="paragraph">
            Throughout our 20-year journey, we have achieved significant milestones and notable accomplishments. Guiding and supporting our customers to become leaders in their fields, we have implemented advanced technology products, propelling Vietnam's industrial landscape forward. We take immense pride in the fact that our efforts have contributed to the growth and success of our customers, as they have become shining examples of the application of advanced technology in production.
          </p>

          <figure>
            <img src="../images/blog/150923-ams-key-to-growth-and-success.jpg" class="img-fluid py-4 mb-5 mx-auto d-block" title="Key to AMS growth and success" alt="Key to AMS growth and success">
            <figcaption class="mb-5">Key to <strong>AMS</strong> growth and success</figcaption>
          </figure>
          <p class="paragraph">
            But our impact doesn't end there. We have been instrumental in introducing renowned global brands and suppliers to domestic businesses, expanding their access to cutting-edge technologies and solutions. Our dedication to training and developing skilled employees has seen multiple generations from within <strong>AMS</strong> assume pivotal roles within organizations, leaving a lasting legacy of expertise and knowledge.
          </p>
          <figure>
            <img src="../images/blog/150923-mr-goh-vpa-conferrence.jpg" class="img-fluid py-4 mb-5 mx-auto d-block" title="AMS being admitted to Vietnam Plastic Association 2017" alt="AMS being admitted to Vietnam Plastic Association 2017">
            <figcaption><strong>AMS</strong> being admitted to Vietnam Plastic Association 2017</figcaption>
          </figure>
          <p class="paragraph">
            The celebration of our 20 years of excellence is not only a moment of pride for us but also a testament to the enduring trust and support of our valued customers. As we look ahead, we remain committed to pushing boundaries, pioneering innovation, and continuing to redefine excellence in the manufacturing solutions industry. The future holds limitless possibilities, and we are excited to embark on this next chapter with all of you.
          </p>

          <h2 class="h5 mt-5">3. Embracing a New Era in Technology</h2>
          <p class="paragraph">
            As we enter this new era, we would like to introduce you to Mr. Leslie Goh, our esteemed Director who specializes in digital AI and technology direction.
          </p>
          <figure>
            <img src="../images/blog/150923-smart-city-leslie-goh.jpg" class="img-fluid py-4 mb-5 mx-auto d-block" title="Mr. Leslie Goh - Director of AMS Company Limited" alt="Mr. Leslie Goh - Director of AMS Company Limited">
            <figcaption class="mb-5">Mr. Leslie Goh - Director of <strong>AMS Company Limited</strong></figcaption>
          </figure>
          <p class="paragraph">
            Mr. Leslie Goh's expertise in AI and technology has been instrumental in shaping the future of <strong>AMS</strong>. Recognizing the impact of technological advancements on industries worldwide, we have made a strong commitment to embracing cutting-edge technology. To achieve this, we have formed a dedicated team of developers and UI/UX designers, working tirelessly to bring innovative solutions to our valued customers.
          </p>
          <figure>
            <img src="../images/blog/150923-ams-it-team.jpg" class="img-fluid py-4 mb-5 mx-auto d-block" title="Introducing AMS new IT team" alt="Introducing AMS new IT team">
            <figcaption class="mb-5">Introducing <strong>AMS</strong> new IT team</figcaption>
          </figure>
          <p class="paragraph">
            Under Mr. Leslie Goh's guidance, our team has been diligently working on an outstanding technology product that is set to be released this year. This product, which remains confidential for now, promises to revolutionize the industry as we know it. Its development has been driven by our deep understanding of customer needs and our unwavering desire to provide them with unparalleled innovation.
          </p>
          <figure>
            <img src="../images/blog/150923-ams-it-team-working.jpg" class="img-fluid py-4 mb-5 mx-auto d-block" title="AMS IT team working on new product" alt="AMS IT team working on new product">
            <figcaption class="mb-5"><strong>AMS</strong> IT team working on new product</figcaption>
          </figure>
          <ul>
            <li><strong>The Potential Impact: Redefining the Industry and Customer Experience</strong></li>
          </ul>
          <p class="paragraph">
            The potential impact of this new technology cannot be overstated. With its groundbreaking features and benefits, it is poised to disrupt traditional practices and redefine the way businesses operate. From enhanced automation to advanced analytics capabilities, our product will empower our customers to achieve new levels of efficiency, productivity, and growth.
          </p>
          <p class="paragraph">
            In addition to its practical applications, this technology will also enhance the customer experience. By leveraging AI algorithms and intuitive interfaces, our product will make complex tasks simple and accessible to all users, regardless of their technical expertise. It will streamline workflows, reduce operational costs, and ultimately drive customer satisfaction to unprecedented heights.
          </p>
          <p class="paragraph">
            As we celebrate our 20th anniversary, we look back at our accomplishments and forward to the exciting possibilities that lie ahead. With Mr. Leslie Goh's guidance and the dedication of our talented team, we are confident that <strong>AMS</strong> will continue to lead the way in embracing technology advancements and redefining industry standards.
          </p>
          <figure>
            <img src="../images/blog/150923-smart-city-participants.jpg" class="img-fluid py-4 mb-5 mx-auto d-block" title="AMS representatives participating in Smart Cities conference" alt="AMS representatives participating in Smart Cities conference">
            <figcaption class="mb-5"><strong>AMS</strong> representatives participating in Smart Cities conference</figcaption>
          </figure>

          <h2 class="h5 mt-5">4. Celebrating the People Behind <strong>AMS</strong>'s Success</h2>
          <p class="paragraph">
            At <strong>AMS Company Limited</strong>, we believe that our success is not solely defined by our innovative technology solutions, but also by the dedicated individuals and teams who have propelled us forward over the past 20 years. As we celebrate our corporate 20th anniversary, we would like to take a moment to acknowledge and appreciate the contributions of <strong>AMS</strong>'s employees and partners in achieving excellence.
          </p>
          <p class="paragraph">
            Our journey would not have been possible without the unwavering commitment and hard work of our employees. Their passion, expertise, and relentless pursuit of excellence have been the driving force behind our growth and success. From our talented developers and designers to our marketing and sales teams, each individual has played an integral role in shaping <strong>AMS</strong> into what it is today.
          </p>
          <figure>
            <img src="../images/blog/150923-ams-people-2023.jpg" class="img-fluid py-4 mb-5 mx-auto d-block" title="AMS people and partners in 2023" alt="AMS people and partners in 2023">
            <figcaption class="mb-5"><strong>AMS</strong> people and partners in 2023</figcaption>
          </figure>
          <p class="paragraph">
            Additionally, we recognize the invaluable support from our partners. Through collaborative efforts and shared visions, we have been able to navigate the ever-changing landscape of technology and deliver exceptional solutions to our customers. Their trust, guidance, and collaboration have been instrumental in our continuous growth and success.
          </p>
          <p class="paragraph">
            Furthermore, we extend our appreciation to our sales and customer service teams, who have consistently gone above and beyond to understand our clients' needs and provide outstanding support. Their commitment to delivering exceptional experiences to our customers has been a fundamental pillar of our success.
          </p>
          <p class="paragraph">
            Together, we look forward to continuing this incredible journey and carving new paths of success in the years to come.
          </p>
          <address>
            <strong>AMS Company, Ltd.</strong><br>
            243/9/10D To Hien Thanh, Ward 13, District 10<br>
            Hot line: 028.3868 3738/3903 - Fax: 028.3868 3797
          </address>
        </div>
      </div>
    </div>

    <?php include_once("../core/share.php"); ?>

    <div class="container d-none d-lg-block py-lg-5" data-aos="fade-up" data-aos-delay="200">
      <div class="h5" style="color: var(--color-heading-text)">Keep reading</div>
      <div class="row">
        <?php
        $arr = array(
          array(
            'link' => '#',
            'image' => 'https://placehold.co/1000',
            'date' => '15 July 2023',
            'category' => 'Productivity',
            'title' => "The Top 9 Productivity Myths That Just Aren't True",
            'description' => "One more design change and your Y index is -6."
          ),
          array(
            'link' => '#',
            'image' => 'https://placehold.co/400',
            'date' => '15 July',
            'category' => 'Productivity',
            'title' => "Why Focus Is Your Greatest Competitive Advantage at Work (Plus 19 Ways To Actually Do It)",
            'description' => "Learn how to overcome distractions and hone your focus. Learn how to overcome distractions and hone your focus. Learn how to overcome distractions and hone your focus. Learn how to overcome distractions and hone your focus."
          ),
          array(
            'link' => '#',
            'image' => 'https://placehold.co/400',
            'date' => '15 July',
            'category' => 'Time Management',
            'title' => "The Top 9 Productivity Myths That Just Aren't True",
            'description' => "One more design change and your Y index is -6."
          )
        );

        foreach ($arr as $blog)
        {
          echo DisplayBlogPost($blog);
        }
        ?>
      </div>
    </div>

    <div class="mb-4 mb-lg-5">
      <?php include_once("../core/subscribe.php"); ?>
    </div>
  </main>
  <?php include_once("../core/cta.php"); ?>
  <?php include_once("../core/footer.php"); ?>
</body>

</html>
<script type="text/javascript" src="/assets/js/toc.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    listContents('toc-container', 'main', 1, 'Table of Contents');
  });
</script>