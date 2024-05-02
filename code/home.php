<?php

require "functions.php";
// session_start();
access();

?>

<!DOCTYPE html>
<html lang="english">

<head>
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />
  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
    }

    p,li, ul, pre, 
    div, h1, h2, 
    h3, h4, h5, 
    h6, figure, blockquote,figcaption {
      margin: 0;
      padding: 0;
    }

    button {
      background-color: transparent;
    }

    button, input, optgroup, select, textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button, select {
      text-transform: none;
    }

    button,[type="button"],[type="reset"],[type="submit"] {
      -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    html {
      scroll-behavior: smooth
    }
  </style>
  <style data-tag="default-style-sheet">
    html {
      font-family: Inter;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-gray-black);
      background-color: var(--dl-color-gray-white);

    }
  </style>
  <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
</head>

<body>
  <link rel="stylesheet" css\style.css" />
  <div>
    <link href="css/index.css" rel="stylesheet" />
    <div class="home-page-container">
      <div class="home-page-home-page"><img src="img\external/rectangle16632-8n1h-200h.png" alt="Rectangle16632" class="home-page-rectangle1" />
        <div class="home-page-group21"><span class="home-page-text"><span>NEW RELEASES</span></span>
          <div class="home-page-maskgroup"><img src="img\external/rectangle286638-my66-400h.png" alt="Rectangle286638" class="home-page-rectangle28" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356639-9oei-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356639" class="home-page-screenshot20240427092310fotorbgremover202404279235" />
          <span class="home-page-text02"><span>Air Jordan</span></span><span class="home-page-text04"><span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
        </span>
      </div>
          <div class="home-page-maskgroup01"><img src="img\external/rectangle286643-6n59-400h.png" alt="Rectangle286643" class="home-page-rectangle2801" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356644-sljj-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356644" class="home-page-screenshot20240427092310fotorbgremover20240427923501" />
          <span class="home-page-text06">
            <span>Air Jordan</span>
          </span>
          <span class="home-page-text08">
            <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
          </span>
        </div>
          <div class="home-page-maskgroup02"><img src="img\external/rectangle286648-8wa4-400h.png" alt="Rectangle286648" class="home-page-rectangle2802" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356649-rmyv-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356649" class="home-page-screenshot20240427092310fotorbgremover20240427923502" />
          <span class="home-page-text10">
            <span>Air Jordan</span>
          </span>
          <span class="home-page-text12">
            <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
          </span>
        </div>
          <div class="home-page-maskgroup03">
            <img src="img\external/rectangle286653-mg6-400h.png" alt="Rectangle286653" class="home-page-rectangle2803" />
            <img src="img\external/screenshot20240427092310fotorbgremover2024042792356654-b0co-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356654" class="home-page-screenshot20240427092310fotorbgremover20240427923503" />
            <span class="home-page-text14">
              <span>Air Jordan</span>
            </span><span class="home-page-text16">
              <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
            </span>
          </div>
          <div class="home-page-maskgroup04"><img src="img\external/rectangle286658-m5ho-400h.png" alt="Rectangle286658" class="home-page-rectangle2804" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356659-g3x-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356659" class="home-page-screenshot20240427092310fotorbgremover20240427923504" />
          <span class="home-page-text18">
            <span>Air Jordan</span>
          </span>
          <span class="home-page-text20">
            <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
          </span>
        </div>
          <div class="home-page-maskgroup05"><img src="img\external/rectangle286663-avjm-400h.png" alt="Rectangle286663" class="home-page-rectangle2805" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356664-pldo-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356664" class="home-page-screenshot20240427092310fotorbgremover20240427923505" />
          <span class="home-page-text22">
            <span>Air Jordan</span>
          </span>
          <span class="home-page-text24">
            <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
          </span>
        </div>
          <div class="home-page-maskgroup06">
            <img src="img\external/rectangle286668-l3x-400h.png" alt="Rectangle286668" class="home-page-rectangle2806" />
            <img src="img\external/screenshot20240427092310fotorbgremover2024042792356669-p1gg-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356669" class="home-page-screenshot20240427092310fotorbgremover20240427923506" />
            <span class="home-page-text26">
              <span>Air Jordan</span>
            </span>
            <span class="home-page-text28">
              <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
            </span>
          </div>
          <div class="home-page-maskgroup07">
            <img src="img\external/rectangle286673-syu-400h.png" alt="Rectangle286673" class="home-page-rectangle2807" />
            <img src="img\external/screenshot20240427092310fotorbgremover2024042792356674-ejw-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356674" class="home-page-screenshot20240427092310fotorbgremover20240427923507" />
            <span class="home-page-text30">
              <span>Air Jordan</span>
            </span>
            <span class="home-page-text32">
              <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
            </span>
          </div>
        </div>
        <div class="home-page-copywriting"><span class="home-page-text34"><span>Our Collection</span></span><span class="home-page-text36"><span>
              Welcome to our exclusive sneaker collection, where each pair is
              a tribute to sneaker culture's rich heritage and bold future.
              Designed for the true aficionado, our selection not only
              resonates with style but also narrates a story of innovation and
              passion. Whether you're looking to stand out with a rare find or
              appreciate the finest craftsmanship, our collection promises
              something special for every sneakerhead. Dive into a world where
              each step is about making a statement. Start your journey with
              us today!</span></span></div>
        <div class="home-page-frame1321314404">
          <img src="img\external/rectangle42126818-abes-700h.png" alt="Rectangle42126818" class="home-page-rectangle4212" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356817-fn0a-700h.png" alt="Screenshot20240427092310fotorbgremover2024042792356817" class="home-page-screenshot20240427092310fotorbgremover20240427923508" />
          <span class="home-page-text38">
            <span>WMNS AIR JORDAN 3 RETRO </span><br />
            <span>LUCKY GREEN</span>
          </span>
          <span class="home-page-text42">
            <span>New Arrival!</span>
          </span>
        </div>
        <span class="home-page-text44">
          <span>TRENDING</span>
        </span>
        <div class="home-page-maskgroup08">
          <img src="img\external/rectangle286819-xmjn-400h.png" alt="Rectangle286819" class="home-page-rectangle2808" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356819-6o6-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356819" class="home-page-screenshot20240427092310fotorbgremover20240427923509" />
          <span class="home-page-text46">
            <span>Air Jordan</span>
          </span>
          <span class="home-page-text48">
            <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
          </span>
        </div>
        <div class="home-page-maskgroup09">
          <img src="img\external/rectangle286819-q78m-400h.png" alt="Rectangle286819" class="home-page-rectangle2809" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356819-i0m8-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356819" class="home-page-screenshot20240427092310fotorbgremover20240427923510" />
          <span class="home-page-text50">
            <span>Air Jordan</span>
          </span>
          <span class="home-page-text52">
            <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
          </span>
        </div>
        <div class="home-page-maskgroup10">
          <img src="img\external/rectangle286820-rz8f-400h.png" alt="Rectangle286820" class="home-page-rectangle2810" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356820-tlo-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356820" class="home-page-screenshot20240427092310fotorbgremover20240427923511" />
          <span class="home-page-text54">
            <span>Air Jordan</span>
          </span>
          <span class="home-page-text56">
            <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
          </span>
        </div>
        <div class="home-page-maskgroup11">
          <img src="img\external/rectangle286820-rry-400h.png" alt="Rectangle286820" class="home-page-rectangle2811" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356820-94uc-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356820" class="home-page-screenshot20240427092310fotorbgremover20240427923512" />
          <span class="home-page-text58">
            <span>Air Jordan</span>
          </span>
          <span class="home-page-text60">
            <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
          </span>
        </div>
        <div class="home-page-maskgroup12">
          <img src="img\external/rectangle286821-xikr-400h.png" alt="Rectangle286821" class="home-page-rectangle2812" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356821-hczk-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356821" class="home-page-screenshot20240427092310fotorbgremover20240427923513" />
          <span class="home-page-text62">
            <span>Air Jordan</span>
          </span><span class="home-page-text64"><
          span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
        </span>
      </div>
        <div class="home-page-maskgroup13"><img src="img\external/rectangle286821-okh7-400h.png" alt="Rectangle286821" class="home-page-rectangle2813" />
        <img src="img\external/screenshot20240427092310fotorbgremover2024042792356821-n1c5-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356821" class="home-page-screenshot20240427092310fotorbgremover20240427923514" />
        <span class="home-page-text66">
          <span>Air Jordan</span>
        </span><span class="home-page-text68">
          <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
        </span>
      </div>
        <div class="home-page-maskgroup14">
          <img src="img\external/rectangle286822-x1rf-400h.png" alt="Rectangle286822" class="home-page-rectangle2814" />
          <img src="img\external/screenshot20240427092310fotorbgremover2024042792356822-lok-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356822" class="home-page-screenshot20240427092310fotorbgremover20240427923515" /><span class="home-page-text70"><span>Air Jordan</span></span><span class="home-page-text72"><span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span></span></div>
        <div class="home-page-maskgroup15"><img src="img\external/rectangle286822-5l7q-400h.png" alt="Rectangle286822" class="home-page-rectangle2815" />
        <img src="img\external/screenshot20240427092310fotorbgremover2024042792356822-59ul-400h.png" alt="Screenshot20240427092310fotorbgremover2024042792356822" class="home-page-screenshot20240427092310fotorbgremover20240427923516" />
        <span class="home-page-text74">
          <span>Air Jordan</span>
        </span>
        <span class="home-page-text76">
          <span>WMNS AIR JORDAN 3 RETRO 'LUCKY GREEN'</span>
        </span>
      </div>
        <div class="home-page-frame1321314405">
          <img src="img\external/rectangle42137249-u1qk-200h.png" alt="Rectangle42137249" class="home-page-rectangle4213" />
          <span class="home-page-text78">
            <span>Wishlist</span>
          </span><span class="home-page-text80">
            <span><a href="">Sneaker</a></span>
          </span>
          <img src="img\external/rectangle36611-0djr-200h.png" alt="Rectangle36611" class="home-page-rectangle3" />
          <img src="img\external/search6611-2vtv.svg" alt="search6611" class="home-page-search" />
          <span class="home-page-text82">
            <span>
          </span>
        </span>
          <div class="home-page-logo"><span class="home-page-text84">
            <span><a href="index.php">Scout</a> </span>
          </span>
          <span class="home-page-text86">
            <span><a href="index.php">Sneaker</a> </span>
          </span>
        </div>
        <img src="img\external/rectangle42116616-vh5n-200h.png" alt="Rectangle42116616" class="home-page-rectangle4211" />
        <span class="home-page-text88">
          <span><a href="profile.php">profile</a></span>
        </span>
        </div>
      </div>
    </div>
  </div>
</body>

</html>