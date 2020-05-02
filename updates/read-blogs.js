"use strict";

fetch("updates.json")
  .then( response => response.json())
  .then( data => {
        console.log(data)

        let output = "";
        let allPosts = data.posts;

        allPosts.forEach( post => {
            output += post.title + "<br>";
        });

        document.getElementById("debug").innerHTML = output;

  });