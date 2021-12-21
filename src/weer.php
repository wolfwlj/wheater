<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Hello World!</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
<main>





<section>
  <div class="container">
    <h2 class="center">VOER EEN STAD IN</h2><br>
    <input  class="inp" type="text" id="stadNaam" ><br>
    <input  class="inp2" type="submit" name="stad" onclick="weer()">
    <h1 id="stadTitel" class="center"></h1>
    <div> <p class="bold center">Temperatuur : <br> <span class="nbold" id="temp"></span></p></div>
    <div> <p class="bold center">Lucht vochtigheid : <br> <span class="nbold" id="vochtig"></span></p></div>
    <div> <p class="bold center">Windsnelheid : <br> <span class="nbold"  id="wind"></span></p></div>
    <div> <p class="bold center">Gevoels tempreatuur : <br><span class="nbold" id="gevoel"></span></p></div>
    <div> <p class="bold center">Gemiddelde tempratuur :<br> <span class="nbold" id="gemiddeld"></span></p></div>
    <div> <p class="bold center">Zonsopgang :<br> <span class="nbold" id="zonsOp"></span></p></div>
    <div> <p class="bold center">Zonsondergang : <br><span class="nbold" id="zonsLaag"></span></p></div>
  </div>
</section>

<section>
        <div class="main">
            <div class="main-content">
              <div><p class="bold center"><a href="index.html" class="link">-----Terug naar home-----</a> </p></div>

                <h1 class="center groot">Weer rond de wereld! : </h1>
                <div class="portfolio">
                      <div class="portfolio-item een plaatje"> 
                      <h1 id="stadTitel1" class="center"></h1>
                      <div> <p class="bold center">Temperatuur : <br> <span class="nbold" id="temp1"></span></p></div>
                      <div> <p class="bold center">Lucht vochtigheid : <br> <span class="nbold" id="vochtig1"></span></p></div>
                      <div> <p class="bold center">Windsnelheid : <br> <span class="nbold"  id="wind1"></span></p></div>
                      <div> <p class="bold center">Gevoels tempreatuur : <br><span class="nbold" id="gevoel1"></span></p></div>
                      <div> <p class="bold center">Gemiddelde tempratuur :<br> <span class="nbold" id="gemiddeld1"></span></p></div>
                      <div> <p class="bold center">Zonsopgang :<br> <span class="nbold" id="zonsOp1"></span></p></div>
                      <div> <p class="bold center">Zonsondergang : <br><span class="nbold" id="zonsLaag1"></span></p></div>
                  </div>
                    <div class="portfolio-item twee plaatje">
                      <h1 id="stadTitel2" class="center"></h1>

                      <div> <p class="bold center">Temperatuur : <br> <span class="nbold" id="temp2"></span></p></div>
                      <div> <p class="bold center">Lucht vochtigheid : <br> <span class="nbold" id="vochtig2"></span></p></div>
                      <div> <p class="bold center">Windsnelheid : <br> <span class="nbold"  id="wind2"></span></p></div>
                      <div> <p class="bold center">Gevoels tempreatuur : <br><span class="nbold" id="gevoel2"></span></p></div>
                      <div> <p class="bold center">Gemiddelde tempratuur :<br> <span class="nbold" id="gemiddeld2"></span></p></div>
                      <div> <p class="bold center">Zonsopgang :<br> <span class="nbold" id="zonsOp2"></span></p></div>
                      <div> <p class="bold center">Zonsondergang : <br><span class="nbold" id="zonsLaag2"></span></p></div>
                    </div>
                    <div class="portfolio-item drie plaatje">
                      <h1 id="stadTitel3" class="center"></h1>

                      <div> <p class="bold center">Temperatuur : <br> <span class="nbold" id="temp3"></span></p></div>
                      <div> <p class="bold center">Lucht vochtigheid : <br> <span class="nbold" id="vochtig3"></span></p></div>
                      <div> <p class="bold center">Windsnelheid : <br> <span class="nbold"  id="wind3"></span></p></div>
                      <div> <p class="bold center">Gevoels tempreatuur : <br><span class="nbold" id="gevoel3"></span></p></div>
                      <div> <p class="bold center">Gemiddelde tempratuur :<br> <span class="nbold" id="gemiddeld3"></span></p></div>
                      <div> <p class="bold center">Zonsopgang :<br> <span class="nbold" id="zonsOp3"></span></p></div>
                      <div> <p class="bold center">Zonsondergang : <br><span class="nbold" id="zonsLaag3"></span></p></div>                    
                    </div>
                </div>
            </div>
        </div>
</section>

</main>






    <script src="xml.js"></script>
    <script src="NewYork.js"></script>
    <script src="Bejing.js"></script>
    <script src="Amsterdam.js"></script>


  </body>
</html>
