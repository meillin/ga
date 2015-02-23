<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Green Analysts - Visualizing the future</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>

    <?php include 'pages/header.php';?>
      <section class="main-container text-center clearfix">
        <main>
          <div class="row">
            <div class="large-12 columns">
              <h1>Pricing strategies</h1>
              <p class="text-left">
                Setting the right price for your products should be determined by what consumers are willing to pay for it. Consequently, a simple price = cost + markup is most likely sub-optimal and should be revised. Continuously and consistently measuring and quantifying the effect of price changes on your sales provides an unbiased and objective estimate of your price elasticity. Price elasticity changes over time depending on, among other factors, seasonality, distribution, competitor activities, weather and brand strength. Therefor, the right price is also changing over time which means your business should try to capture this market dynamics to optimize profit.
              </p>
              <img src="images/price.svg" width="300">
              <h2>A simple example</h2>
              <p class="text-left">
                Suppose you just have one product and no competitors and would like to figure out what the optimal price of your product/service is. In this case a simple mathematical relation \(\ln y = \beta \ln p + a \) where y is your sales volume, p is your price and a is your brand equity, is sufficient. In this setting there is a closed form solution to your challenge. The optimal price is simply $$p=\frac{\beta}{\beta+1}\cdot\frac{c-\lambda}{m}.$$ Now most businesses have more important factors than this, but it neatly illustrates how statistics can help you find the optimal price in a competitive market.
              </p>
            </div>
          </div>
        </main>
      </section>

      <?php include 'pages/footer.php';?>

  </body>
</html>
