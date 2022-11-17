const data = ["red", "blue", "green", "yellow", "purple", "orange", "black", "white", "brown"];

const autocomplete = document.getElementById("search");
const resultsHTML = document.getElementById("result");

autocomplete.oninput = function () {
    let results = [];
    const userInput = this.value;
    resultsHTML.innerHTML = "";
    if (userInput.length > 0) {
      results = getResults(userInput);
      resultsHTML.style.display = "block";
      for (i = 0; i < results.length; i++) {
        resultsHTML.innerHTML += "<li>" + results[i] + "</li>";
      }
    }
  };

//   function getResults(input) {
//     const results = [];
//     fetch('https://ruangberproses-be.herokuapp.com/api/artikel-berproses')
//   .then((response) => response.json())
//   .then((data) => console.log(data));
//     for (i = 0; i < data.length; i++) {
//       if (input === data[i].slice(0, input.length)) {
//         results.push(data[i].judul);
//       }
//     }
//     return results;
//   }

  function getResults(input) {
    const results = [];
    for (i = 0; i < data.length; i++) {
      if (input === data[i].slice(0, input.length)) {
        results.push(data[i]);
      }
    }
    return results;
  }

  resultsHTML.onclick = function (event) {
    const setValue = event.target.innerText;
    autocomplete.value = setValue;
    this.innerHTML = "";
  };


  