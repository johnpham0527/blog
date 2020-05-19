<?php $pathToRoot = ".."; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>John Pham's Web Development Learning Journey - Be Productive with a Pomodoro Clock</title>
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
      </main>
      <nav role="navigation" id="project-nav">
        <?php 
        $headerPage = $pathToRoot."/includes/nav.php";
        include($headerPage); 
        ?>
      </nav>
      <aside role="complementary" id="project-aside">
        <h2>Be Productive with a Pomodoro Clock</h2>
        <section>
          <h3>About This Project</h3>
          <p>A pomodoro clock helps you work for a 25-minute session and then take a five minute break.
            I designed this pomodoro clock with customizable session and break times using JavaScript's React library.
            I implemented this project as part of FreeCodeCamp's <a href="https://www.freecodecamp.org/certification/johnpham0527/front-end-libraries">Front End Libraries certificate</a> course.
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
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin ></script>
        <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/redux/3.7.1/redux.min.js" crossorigin></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/react-redux/5.0.5/react-redux.min.js" crossorigin></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/redux-thunk/2.3.0/redux-thunk.min.js" crossorigin></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.12.0/d3.min.js" crossorigin></script>
        <script src="../js/clockScript.js"></script>
  </body>
</html>
