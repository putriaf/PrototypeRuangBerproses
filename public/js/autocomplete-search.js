const data = ["red", "blue", "green", "yellow", "purple", "orange", "black", "white", "brown"];

const autocomplete = document.getElementById("search");
const resultsHTML = document.getElementById("result");

autocomplete.oninput = function () {
    let results = [];
    const userInput = this.value.toLowerCase();
    resultsHTML.innerHTML = "";
    if (userInput.length > 0) {
      results = getResults(userInput);
      resultsHTML.style.display = "block";
      for (i = 0; i < results.length; i++) {
        resultsHTML.innerHTML += "<li>" + results[i] + "</li>";
      }
    }
  };

async function getData() {
  const response = await fetch('https://ruangberproses-be.herokuapp.com/api/artikel-berproses');
  console.log(response);
  const data = await response.json();
  console.log(data);
  length = data.data.length;
  console.log(length);

  titles = [];
  titles_lowercase = [];
  for(i = 0; i < length; i++) {
    titles.push(data.data[i].judul);
    titles_lowercase.push(data.data[i].judul.toLowerCase());
  }
  console.log(titles);
}
getData();
  function getResults(input) {
    const results = [];
    console.log(titles);
    for (i = 0; i < titles.length; i++) {
      if (input === titles_lowercase[i].slice(0, input.length)) {
        results.push(titles[i]);
      }
    }
    return results;
  }

  resultsHTML.onclick = function (event) {
    const setValue = event.target.innerText;
    autocomplete.value = setValue;
    this.innerHTML = "";
  };


  