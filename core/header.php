<?php echo $CONFIG_TEST_BODY; ?>
<header id="header" class="sticky-top d-flex align-items-center">

  <div class="container d-flex align-items-center justify-content-lg-between">

    <a href="/" class="logo me-auto me-lg-0"><img src="/images/suyt-logo.png" alt="" class="img-fluid">
      <h1 class="d-none">Suyt</h1>
    </a>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto" href="#features">Features</a></li>
        <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
        <li class="dropdown"><a href="javascript:;"><span>Resources</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li>
              <a href="/blog.php" class="d-flex flex-column align-items-start">
                <span class="">Blog</span>
                <span class="nav-link-subtext">Guides, Reports, and best practices</span>
              </a>
            </li>
            <li>
              <a href="#" class="d-flex flex-column align-items-start">
                <span class="">What's New with Suyt</span>
                <span class="nav-link-subtext">Check out recent product updates</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

    <div class="d-none d-lg-block">
      <a href="login.php" class="btn btn-outline-secondary me-1">Sign In</a>
      <a href="#" class="btn btn-primary ms-1">Try for free</a>
    </div>

    <nav id="navbar-mobile" class="navbar-mobile d-none opacity-0">
      <div class="h-100 d-flex flex-column justify-content-between">

        <div class="navbar-mobile-links">
          <a href="#" class="d-block py-4">
            <div class="container">Features</div>
          </a>
          <a href="#" class="d-block py-4">
            <div class="container">Pricing</div>
          </a>
          <a href="#" class="d-block py-4" id="navbar-resources">
            <div class="container d-flex justify-content-between">
              <span>Resources</span><i class="bi bi-chevron-right"></i>
            </div>
          </a>
          <div id="navbar-resources-options" class="d-none opacity-0">
            <a href="/blog.php" class="d-block py-4">
              <div class="container px-5">
                <div class="mb-1">Blog</div>
                <div class="nav-link-subtext">Guides, Reports, and best practices</div>
              </div>
            </a>
            <a href="#" class="d-block py-4">
              <div class="container px-5">
                <div class="mb-1">What's New with Suyt</div>
                <div class="nav-link-subtext">Check out recent product updates</div>
              </div>
            </a>
          </div>
        </div>

        <div class="container d-flex flex-column mb-4">
          <a href="#" class="btn btn-primary mb-3" style="color: var(--color-white-bg)">Try for free</a>
          <a href="#" class="btn btn-outline-secondary">Sign In</a>
        </div>
      </div>
    </nav>

  </div>

</header>