<?php $pathToRoot = "."; ?>

<html>
  <head>
    <title>John Pham's Web Development Learning Journey</title>
    <meta name="description" content="John D. Pham's Learning Journey">
    <meta name="keywords" content="John D. Pham, portfolio, blog, HTML, CSS, JavaScript, nonprofits, fundraising, public administration">
    <link rel="stylesheet" href="css/grid.css">
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
      <main role="main">
        <section id="latestblog">
          <h2>Blog</h2>
          <article>
              <h3>Today's Featured Project: Be Productive Using a Pomodoro Clock</h3>
              <p class="date">Posted April 12, 2020</p>
              <p>Pomodoro clocks allow you to alternate between working a 25-minute session and taking a five-minute break.
                I have implemented my own pomodoro clock using the React and Redux JavaScript libraries.
              </p>
              <h4>What I Learned</h4>
              <p>Here are some of the skills that I learned while creating this heat map:</p>
              <ul>
                    <li><em>Creating the interface.</em> I used a simple, clean interface for this project. I researched the HTML entity for the up and down arrows. I used rounded corners for the clock's remaining time display.</li>
                    <li><em>Using the React library.</em> The React code handles all of the button clicks and displays the various text and values such as the time remaining.
                    One of the trickier parts of this project is handling what happens when the start/pause button is pressed. I decided to let React handle the logic to check whether the clock should start a new alarm or pause the current alarm.</li>
                    <li><em>Using the Redux library.</em> I used Redux to handle the app's state, including changing the break and session lengths and handling the remaining time left.</li>
                    <li><em>Using React-Redux.</em> React-Redux handles the JavaScript setInterval call that occurs when the user starts a new alarm.</li>
                    <li><em>Implementing helper functions.</em> I wrote helper functions in vanilla JavaScript to play the alarm when time is up; rewind the alarm if the reset button is pressed; convert the number of seconds remaining into minute/second format using a JavaScript object; and determining whether to display a leading zero or the "60" if the session or break length is 60 minutes long.</li>
              </ul>
              <h4>Takeaways</h4>
              <p>I learned how to properly call the setInterval function in a React-Redux project.
                I also strengthened my overall knowledge of React and front-end programming.
                React will be useful for creating JavaScript apps that require user interactions, such as forms, interactive graphs, simulations, and games.
              </p>
          </article>
          <p><a href="updates/index.php">Read all previous blog posts.</a></p>
        </section>
      </main>
      <nav role="navigation">
        <?php 
        $headerPage = $pathToRoot."/includes/nav.php";
        include($headerPage); 
        ?>
      </nav>
      <aside role="complementary">
        <h2>About Me</h2>
        <section>
          <p>My name is John D. Pham. I have over 10 years of professional experience in New York City's nonprofit sector, including six in nonprofit development and fundraising. 
          I am passionate about delivering nonprofit and public services more efficiently, effectively, and equitably. 
          Learn more about me on <a href="https://www.linkedin.com/in/johndpham/">LinkedIn</a>.</p>
        </section>
        <h2>About This Site</h2>
        <p>I created this website to blog about my journey in learning web development.
          My blog will describe the challenge and joy of learning JavaScript and other modern web development tools.
          I will also feature and discuss completed projects on this site.
          Come join me on my learning journey for using web development for the civic good!</p>
      </aside>
      <footer role="contentinfo">
        <?php 
        $headerPage = $pathToRoot."/includes/footer.php";
        include($headerPage); 
        ?>
      </footer>
    </div>
  </body>
</html>
