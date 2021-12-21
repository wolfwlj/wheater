var input3 = "Bejing";
var Snaam3 = document.getElementById("stadTitel3");
var output13 = document.getElementById("temp3");
var output23 = document.getElementById("vochtig3");
var output33 = document.getElementById("wind3");
var output43 = document.getElementById("gevoel3");
var output53 = document.getElementById("gemiddeld3");
var output63 = document.getElementById("zonsOp3");
var output73 = document.getElementById("zonsLaag3");

async function weer3() {
  var apiURL = "https://wttr.in/Beijing?format=j1";

  console.log(apiURL);
  var response = await fetch(apiURL);
  var data = await response.json();

  console.log(data);
  Snaam3.innerHTML = "Weer in Beijing";
  output13.innerHTML = data.current_condition[0].temp_C + " Celsius";
  output23.textContent = data.current_condition[0].humidity + "%";
  output33.textContent = data.current_condition[0].windspeedKmph + "/km";
  output43.textContent = data.current_condition[0].FeelsLikeC + " Celsius";
  output53.textContent = data.weather[0].avgtempC + " Celsius";
  output63.textContent = data.weather[0].astronomy[0].sunrise;
  output73.textContent = data.weather[0].astronomy[0].sunset;
}
weer3();
