<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="https://use.typekit.net/ive8zpx.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title></title>
  </head>
  <body class="<?php echo strtolower(date('F')); ?>">

    <nav class="menu one">
      <div class="flex-container">
        <div class="menu-logo menu-logo-absolute"><a href="/">Mr. Gravy</a></div>
      </div>
    </nav>

    <header class="recipe-header">
      <div class="recipe-header-left">
        <div class="recipe-header-text" data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-out">
          <h2>Drinken</h2>
          <h1>Coldbrew Coffee</h1>
        </div>
        <div class="recipe-header-image" style="background-image: url(media/coldbrew.jpg)" data-aos="fade-down" data-aos-easing="ease-out"></div>
      </div>
      <div class="recipe-header-right" data-aos="fade-down" data-aos-delay="100">
        <p>Je wordt overvallen door een warme zomerse dag. Een dampende kop koffie is dan niet het antwoord op je dagelijkse caffeïne shot. Cold Brew Coffee is een koude infusie van gemalen koffie en water. Ideaal voor ijskoffie om je hoofd koel te houden. Cold Brew is zachter en minder zuur dan normale koffie, maar bevat wel een hoge dosis caffeïne.</p>
      </div>
    </header>

    <main class="main-container">
      <div class="recipe-content" data-aos="fade-up" data-aos-easing="ease-out">
        <div class="recipe-content-ingredient">
          <h3>Ingredienten</h3>
          <ul>
            <li><p>300 ml. <b>ketchup</b></p></li>
            <li><p>1 st. <b>uien</b></p></li>
            <li><p>1 st. <b>knoflookteen</b></p></li>
            <li><p>6 el. <b>appelcider azijn</b></p></li>
            <li><p>6 el. <b>balsamico azijn</b></p></li>
            <li><p>3 el. <b>whiskey</b></p></li>
            <li><p>3 el. <b>bruine basterdsuiker</b></p></li>
            <li><p>2 el. <b>worcestershire sauce</b></p></li>
            <li><p>3 tl. <b>paprikapoeder</b></p></li>
            <li><p>1 tl. <b>zwart peper</b></p></li>
            <li><p>5 dr. <b>tabasco</b></p></li>
          </ul>
        </div>
        <div class="recipe-content-prepare">
          <h3>Bereiding</h3>
          <ol>
            <li><p>Snipper de uien fijn en bak ze op zacht vuur in roomboter, totdat ze uit elkaar vallen en caramel bruin zijn van kleur.</p></li>
            <li><p>Voeg dan volle eetlepels basterd suiker, fijngehakte knoflook en paprikapoeder toe en laat dit smelten en pruttelen voor een paar minuten.</p></li>
            <li><p>Schenk vervolgens de whiskey erbij en laat dit enkele minuten koken zodat de alcohol kan verdampen.</p></li>
            <li><p>Blus de uien af met de Worcestershire sauce, tabasco, appelcider azijn, balsamico azijn en ketchup. Laat het vervolgens vijf tot tien minuten indikken op zacht vuur en roer regelmatig.</p></li>
            <li><p>Kruid alles af met een beetje zout en een flinke hoeveelheid zwarte peper uit de molen.</p></li>
            <li><p>Haal de saus door een fijne zeef en laat het afkoelen in de koelkast.</p></li>
          </ol>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="main-container">
        <article class="footer-recipe">
          <a href="recipe.html" data-aos="fade-up">
            <div class="footer-label">Label</div>
            <div class="footer-title"><h2>Link 1</h2></div>
          </a>
        </article>
        <article class="footer-recipe">
          <a href="recipe.html" data-aos="fade-up">
            <div class="footer-label">Label</div>
            <div class="footer-title"><h2>Link 1</h2></div>
          </a>
        </article>
        <article class="footer-recipe">
          <a href="recipe.html" data-aos="fade-up">
            <div class="footer-label">Label</div>
            <div class="footer-title"><h2>Link 1</h2></div>
          </a>
        </article>
      </div>
    </footer>

    <script src="js/aos.js"></script>
    <script>
      AOS.init();
    </script>

  </body>
</html>
