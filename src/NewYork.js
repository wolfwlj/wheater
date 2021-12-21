var input1 = "New York";
var Snaam1 = document.getElementById("stadTitel1");
var output11 = document.getElementById("temp1");
var output21 = document.getElementById("vochtig1");
var output31 = document.getElementById("wind1");
var output41 = document.getElementById("gevoel1");
var output51 = document.getElementById("gemiddeld1");
var output61 = document.getElementById("zonsOp1");
var output71 = document.getElementById("zonsLaag1");

async function weer1() {
  var apiURL = "https://wttr.in/NewYork?format=j1";

  console.log(apiURL);
  var response = await fetch(apiURL);
  var data = await response.json();

  console.log(data);
  Snaam1.innerHTML = "Weer in New York";
  output11.innerHTML = data.current_condition[0].temp_C + " Celsius";
  output21.textContent = data.current_condition[0].humidity + "%";
  output31.textContent = data.current_condition[0].windspeedKmph + "/km";
  output41.textContent = data.current_condition[0].FeelsLikeC + " Celsius";
  output51.textContent = data.weather[0].avgtempC + " Celsius";
  output61.textContent = data.weather[0].astronomy[0].sunrise;
  output71.textContent = data.weather[0].astronomy[0].sunset;
}
weer1();
