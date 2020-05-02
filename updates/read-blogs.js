"use strict";

fetch('updates.json')
  .then(response => response.json())
  .then(data => console.log(data));