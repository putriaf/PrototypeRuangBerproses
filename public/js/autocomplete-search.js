// MOCK DATA
// const data = ["red", "blue", "green", "yellow", "purple", "orange", "black", "white", "brown"];

const autocomplete = document.getElementById("search");
const resultsHTML = document.getElementById("result");

autocomplete.oninput = function () {
    let results = [];
    const userInput = this.value.toLowerCase();
    if (userInput == "") {
        resultsHTML.classList.add("hidden");
    }
    resultsHTML.innerHTML = "";
    if (userInput.length > 0) {
        results = getResults(userInput);
        if (results.length > 0) {
            resultsHTML.classList.remove("hidden");
            resultsHTML.classList.add("capitalize");
            for (i = 0; i < results.length; i++) {
                resultsHTML.innerHTML += "<li>" + results[i] + "</li>";
            }
        } else {
            resultsHTML.classList.add("hidden");
        }
    }
};

async function getData() {
    const response = await fetch(
        "https://be.ruangberproses.id/api/artikel-berproses"
    );
    // console.log(response);
    const data = await response.json();
    // console.log(data);
    length = data.data.length;
    // console.log(length);

    titles = [];
    for (i = 0; i < length; i++) {
        titles.push(data.data[i].judul.toLowerCase());
    }
    titles = [...new Set(titles)];
    // Debug distinct titles
    console.log(titles);
    return titles;
}

getData();

function getResults(input) {
    const results = [];
    console.log(titles);
    for (i = 0; i < titles.length; i++) {
        if (titles[i].indexOf(input) !== -1) {
            // console.log('jemari'.indexOf('mar') !== -1);
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
