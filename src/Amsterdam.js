var input2 = "Amsterdam";
var Snaam2 = document.getElementById("stadTitel2");
var output12 = document.getElementById("temp2");
var output22 = document.getElementById("vochtig2");
var output32 = document.getElementById("wind2");
var output42 = document.getElementById("gevoel2");
var output52 = document.getElementById("gemiddeld2");
var output62 = document.getElementById("zonsOp2");
var output72 = document.getElementById("zonsLaag2");

async function weer2() {
  var apiURL = "https://wttr.in/Amsterdam?format=j1";

  console.log(apiURL);
  var response = await fetch(apiURL);
  var data = await response.json();

  console.log(data);
  Snaam2.innerHTML = "Weer in Amsterdam";
  output12.innerHTML = data.current_condition[0].temp_C + " Celsius";
  output22.textContent = data.current_condition[0].humidity + "%";
  output32.textContent = data.current_condition[0].windspeedKmph + "/km";
  output42.textContent = data.current_condition[0].FeelsLikeC + " Celsius";
  output52.textContent = data.weather[0].avgtempC + " Celsius";
  output62.textContent = data.weather[0].astronomy[0].sunrise;
  output72.textContent = data.weather[0].astronomy[0].sunset;
}
weer2();
