<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>DarkSky API</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
  </head>
  <body>
    <pre>
      <?php print_r($forecast); ?>
    </pre>
    <main class="container py-5 text-center">
      <h1>
        DarkSky API
      </h1>
      <div class="card text-white bg-dark p-0 my-5 mx-auto" style="max-width: 320px;">
        <p class="lead"> Currently: </p>
        <!-- <p><?php echo $forecast['currently']['icon']; ?></p> -->
        <h2 class="display-1 mb-0">
          <?php echo round($forecast['currently']['temperature']); ?>&deg;
        </h2>
        <p class="lead">
          <?php echo $forecast['currently']['summary']; ?>
        </p>
        <p class="lead">
          Humidity: <?php echo round($forecast['currently']['humidity']); ?> %
        </p>
        <p class="lead">
          Wind Speed: <?php echo round($forecast['currently']['windSpeed']); ?> MPH
        </p>
       <!--  <p><?php echo $feels; ?></p> -->
      </div>
      <div class="lead">
          <?php echo $forecast['daily']['summary']; ?>
      </div>
      <div class="row">
        <?php foreach($forecast['daily']['data'] as $day): ?>
          <div class="col-12 col-md-3">
            <div class="card p-4 my-5 mx-auto"">
              <h2 class="m-0">
                <?php echo round($day['temperatureHigh']); ?>&deg;
              </h2>
              <p class="lead text-left">
                <?php echo $day['summary']; ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </main>
  </body>
</html>