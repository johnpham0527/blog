<?php $pathToRoot = ".."; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>John Pham's Web Development Learning Journey - Updates</title>
    <meta name="description" content="John D. Pham's Learning Journey">
    <meta name="keywords" content="John D. Pham, portfolio, blog, HTML, CSS, JavaScript, nonprofits, fundraising, public administration">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/grid.css">
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
        <h2>All Blog Posts</h2>
        <section id="blogs">
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
          <article>
              <h3>Today's Featured Project: Visualizing Data Using a Heat Map</h3>
              <p class="date">Posted April 6, 2020</p>
              <p>Thanks to <a href="http://www.freecodecamp.org">FreeCodeCamp</a>, I recently created <a href="../projects/heatmap.php">my first heat map</a> data visualization project.
              Heat maps use color to show the changes a measurement or statistic's magnitude.
              The color changes as the statistic changes in value, such as from low to high.</p>
              <p>The first time I encountered a heat map was when I read a web design book. The book described user interaction studies that tracked a person's eye movements as they visited a website.
                The studies use a heat map to identify which parts of the screen users focused their attention the most. As it turned out, the heat map resembled the shape of the letter F; most users look at the 
                header, the left side bar, and the main content of the page. Users did not spend much time looking at the rest of the page.
              </p>
              <p>The heat map that I created shows the variances in land-surface temperature across the globe, starting from the mid 1700's through 2015.
                  The data shows a trend from cooler to warmer land temperatures from the 18th century through the 21st century.</p>
              <h4>What I Learned</h4>
              <p>Here are some of the skills that I learned while creating this heat map:</p>
              <ul>
                    <li><em>Creating the axes.</em> I studied the data and saw that the x-axis was expressed in years. 
                    So, I use D3's timeParse and timeFormat methods to read and write the data value in years.
                    The y-axis was expressed in months. To display the data, I decided to create an array of months in order to have the full name of the months spelled out.</li>
                    <li><em>Placing the data cells onto the map.</em> I needed to set a cell height and width.</li>
                    <li><em>Coloring the cells.</em> I wrote an algorithm to fill in each cell with a color based on its value.
                    I created an array of colors to help with this.</li>
                    <li><em>Creating the legend.</em> I spent a lot of time figuring out how to display the heat map's legend.
                    Ultimately, I settled on using an axis to display the legend units. I used D3 rects to create the legend cells.
                    I applied a thin black border around each legend cell for aesthetic purposes.
                    </li>
              </ul>
              <h4>Takeaways</h4>
              <p>I can use heat maps whenever I need to analyze data that exists along a two-dimension spectrum. </p>
          </article>
          <article>
            <h3>First Project Uploaded: Choropleth Map - Data Visualization</h3>
            <p class="date">Posted April 5, 2020</p>
            <p>I have <a href="../projects/choropleth.php">uploaded my first project</a>: a choropleth map of educational attainment in the United States. 
              This data visualization uses a color spectrum to show how educational attainment differs by county.</p>
            <h4>What I Learned</h4>
            <p>As a nonprofit professional who conducts a lot of research for grant proposals, I am already familiar with reading choropleth maps.
              Creating one, however, was a challenge. I used <a href="http://www.freecodecamp.com">FreeCodeCamp</a> to learn about the JavaScript D3.js data visualization library.
              For this particular project, I used a second library called TopoJSON to read in the topological data (i.e., the data that is used to draw the lines, arcs, and shapes for each county).
              I then used D3.js to read the educational attainment data and output the map, colors, and legend.</p>
            <p>To successfully complete this project, I needed to learn how to fetch both the educational attainment and the topological data, which are located in different URLs.
              To do this, I learned and implement JavaScript's Promise.all function. I also learned about this useful data visualization resource called <a href="http://colorbrewer2.org">Color Brewer</a>, which helped me to pick the color scheme.
              I also implemented a hash lookup to speed up the tooltip performance. Finally, I became very familiar with the browser debugging in order to render the tooltip and legend correctly.</p>
            <h4>Takeaways</h4>
            <p>The grant writing that I do in my current full-time job focuses on Queens County.
              I would like to leverage what I've learned from this project to create various choropleth maps of American Community Survey data for Queens's various neighborhoods.
            I look forward to creating and posting these projects in the future.</p>
          </article>
          <article>
            <h3>Hello!</h3>
            <p class="date">Posted April 4, 2020</p>
            <p>Welcome to my blog. Here, I will document my journey of learning web development and creating web applications for the civic good. 
              I plan to upload my projects, discuss my learning process, and describe my applications' features and benefits.</p>
          </article>
        </section>
      </main>
      <nav role="navigation">
        <?php 
        $headerPage = $pathToRoot."/includes/nav.php";
        include($headerPage); 
        ?>
      </nav>
      <aside role="complementary">
        <?php 
        $headerPage = $pathToRoot."/includes/about.php";
        include($headerPage); 
        ?>
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
