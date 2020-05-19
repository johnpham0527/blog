<?php $pathToRoot = ".."; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>John Pham's Web Development Learning Journey - Visualizing Data Using a Choropleth Map</title>
    <meta name="description" content="John D. Pham's Learning Journey">
    <meta name="keywords" content="John D. Pham, portfolio, blog, HTML, CSS, JavaScript, nonprofits, fundraising, public administration, choropleth map">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/projects.css">
    <link href="https://fonts.googleapis.com/css?family=Work Sans" rel='stylesheet'>
  </head>
  <body>
    <div class="container">
      <header role="banner">
        <?php 
            $headerPage = $pathToRoot."/includes/header.php";
            include($headerPage); 
        ?>
      </header>
      <main role="main" id="app">
        <section id="title">
            <h1>Monthly Global Land-Surface Temperature</h1>
        </section>
        <figure id="heatmap">
            <figcaption id="description">
                1753 - 2015: base temperature <span id="basetemp"></span>&#8451;
            </figcaption>
        </figure>
    </main>
      <nav role="navigation" id="project-nav">
        <?php 
        $headerPage = $pathToRoot."/includes/nav.php";
        include($headerPage); 
        ?>
      </nav>
      <aside role="complementary" id="project-aside">
        <h2>Visualizing Data Using a Heat Map</h2>
        <section>
          <h3>About This Project</h3>
          <p>A heat map helps to visualize a certain statistic or measurement by using different colors.
              Colors change as the data changes in magnitude, such as from a lower value to a higher value.
            I implemented this project as part of FreeCodeCamp's <a href="https://www.freecodecamp.org/certification/johnpham0527/data-visualization">Data Visualization certificate</a> course.</p>
          <p>The heat map on this page features global land-surface temperature data (in Celsius) going back to the mid-1700's.
            Hover over the map to view each year and month's average temperature and variance from the base temperature.
            As the data moves closer to more recent years, the temperatures trend higher--supporting the theory of global warming and climate change.
          </p>
        </section>
      </aside>
      <footer role="contentinfo">
        <?php 
        $headerPage = $pathToRoot."/includes/footer.php";
        include($headerPage); 
        ?>
      </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.12.0/d3.min.js" crossorigin></script>
    <script src="../js/heatmap.js"></script>
  </body>
</html>
