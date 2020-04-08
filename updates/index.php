<html>
  <head>
    <title>John Pham's Web Development Learning Journey - Updates</title>
    <meta name="description" content="John D. Pham's Learning Journey">
    <meta name="keywords" content="John D. Pham, portfolio, blog, HTML, CSS, JavaScript, nonprofits, fundraising, public administration">
    <link rel="stylesheet" href="../css/grid.css">
    <link href="https://fonts.googleapis.com/css?family=Work Sans" rel='stylesheet'>
  </head>
  <body>
    <div class="container">
      <header role="banner">
        <?php include("../header.php"); ?>
      </header>
      <main role="main">
        <section>
          <h2>All Blog Posts</h2>
          <article>
              <h3>Today's Featured Project: Visualizing Data Using a Heat Map</h3>
              <p class="date">Posted April 6, 2020</p>
              <p>Thanks to <a href="http://www.freecodecamp.org">FreeCodeCamp</a>, I recently created <a href="../projects/heatmap.html">my first heat map</a> data visualization project.
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
            <p>I have <a href="../projects/choropleth.html">uploaded my first project</a>: a choropleth map of educational attainment in the United States. 
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
        <?php include("../nav.php"); ?>
      </nav>
      <aside role="complementary">
        <h2>About Me</h2>
        <section>
          <p>My name is John D. Pham. I have over 10 years of professional experience in New York City's nonprofit sector, including six in nonprofit development and fundraising. 
          I am passionate about delivering nonprofit and public services more efficiently, effectively, and equitably.</p>
        </section>
        <h2>About This Site</h2>
        <p>I created this website to blog about my journey in learning web development.
          My blog will describe the challenge and joy of learning JavaScript and other modern web development tools.
          I will also feature and discuss completed projects on this site.
          Come join me on my learning journey for using web development for the civic good!</p>
      </aside>
      <footer role="contentinfo">
        <?php include("footer.php"); ?>
      </footer>
    </div>
  </body>
</html>
