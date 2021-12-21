var Snaam = document.getElementById("stadTitel");
var output1 = document.getElementById("temp");
var output2 = document.getElementById("vochtig");
var output3 = document.getElementById("wind");
var output4 = document.getElementById("gevoel");
var output5 = document.getElementById("gemiddeld");
var output6 = document.getElementById("zonsOp");
var output7 = document.getElementById("zonsLaag");











async function weer() {
  var input = document.getElementById("stadNaam").value;
  var apiURL = "xmlPhP.php?naam=" + input;
  var response = await fetch(apiURL);
  var data = await response.json();

























  console.log(data);
  Snaam.innerHTML = "Weer in " + input;
  output1.innerHTML = data.current_condition[0].temp_C + " Celsius";
  output2.textContent = data.current_condition[0].humidity + "%";
  output3.textContent = data.current_condition[0].windspeedKmph + "/km";
  output4.textContent = data.current_condition[0].FeelsLikeC + " Celsius";
  output5.textContent = data.weather[0].avgtempC + " Celsius";
  output6.textContent = data.weather[0].astronomy[0].sunrise;
  output7.textContent = data.weather[0].astronomy[0].sunset;
}
