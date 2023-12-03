<?php http_response_code(404); ?>
<?php include_once("../common/start.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("../common/meta.php"); ?>
  <link href="../assets/css/en.css" rel="stylesheet">

  <style>
    #header {
      background: #1A1A1A;
    }

    .error-title {
      color: #333;
      font-size: calc(0.5rem + 1.75vw);
      font-weight: 600;
      letter-spacing: 0.25px;
    }

    .error-message {
      color: #999;
      font-size: calc(0.45rem + 0.7vw);
      font-weight: 600;
      line-height: 32px;
      letter-spacing: 0.15px;
    }

    .return-home-btn {
      padding: 24px 56px;
      background: #FFBF00;
      color: #333;
      font-family: 'Roboto';
      font-size: calc(0.5rem + 0.7vw);
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: capitalize;
      cursor: pointer;
    }

    .return-home-btn:hover {
      background: #FFBF00;
      color: #333;
      opacity: 0.8;
      transition: ease-in-out 0.3s;
    }

    @media screen and (max-width: 768px) {
      .return-home-btn {
        padding: 12px 36px;
      }
    }
  </style>
</head>

<body>
  <?php include_once("header.php"); ?>

  <div class="container-xxl d-flex flex-column justify-content-center align-items-center pb-5" style="padding: 60px">
    <div class="mt-4" style="margin-bottom: 40px;">
      <img src="../images/404.png" class="img-fluid" title="Error 404 - Page Not Found"
        alt="Error 404 - Page Not Found">
    </div>
    <div class="error-title text-center mb-3">
      Error 404 - Page Not Found
    </div>
    <div class="error-message text-center pb-4">
      <div>This page doesn't exist or was removed.</div>
    </div>
    <a class='return-home-btn' href="/en">Back To Home</a>
  </div>
  <?php include_once("footer.php"); ?>
</body>

</html>