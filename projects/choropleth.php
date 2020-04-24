<?php $pathToRoot = ".."; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>John Pham's Web Development Learning Journey - Visualizing Data Using a Choropleth Map</title>
    <meta name="description" content="John D. Pham's Learning Journey">
    <meta name="keywords" content="John D. Pham, portfolio, blog, HTML, CSS, JavaScript, nonprofits, fundraising, public administration, choropleth map">
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
          <h1>United States Educational Attainment</h1>
      </section>
      <figure id="choropleth">
          <figcaption id="description">
              Percentage of adults age 25 and older with a bachelor's degree or higher (2010-2014)
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
        <h2>Visualizing Data Using a Choropleth Map</h2>
        <section>
          <h3>About This Project</h3>
          <p>A choropleth map helps to visualize how a certain statistic or measurement varies across a geographic region.
            I implemented this project as part of FreeCodeCamp's <a href="https://www.freecodecamp.org/certification/johnpham0527/data-visualization">Data Visualization certificate</a> course.</p>
          <p>The choropleth map on this page features data on educational attainment in the United States.
            Hover over the map to view each county's percentage of residents with a bachelor's degree or higher.
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
    <script src="https://unpkg.com/topojson@3"></script>
    <script src="../js/choropleth.js"></script>
  </body>
</html>
