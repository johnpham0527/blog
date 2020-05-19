"use strict";

fetch("updates.json")
  .then(response => response.json())
  .then(data => {

    let allPosts = data.posts;
    let htmlOutput = "";

    allPosts.forEach( post => {
        htmlOutput += `
        <article>
            <h3>${post.title}</h3>
            <p class="date">Posted ${post.date}</p>
            ${post.entry}
        </article>
        `;
    });

    document.getElementById("blogs").innerHTML = htmlOutput;
  });