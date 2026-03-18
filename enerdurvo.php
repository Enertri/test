<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="portfolio.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enerdurvo</title>
</head>
<body>
    <div class="ui">
    <table style="height:9vh;width:98vw;border-spacing:0px;">
        <tr>
            <th class="logo"><a href><img src="logo.jpg" style="height: 90px; width: 105px; border-radius: 10px;"></a></th>
            <th class="basket"><button class="basket" onclick="openCart()"><img src="cart.avif" style="height: 90px; width: 105px; border-radius: 10px;"></button></th>
        </tr>
    </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <center><button onclick="location = 'portfolio.html'">home</button>
      <button onclick="location = 'abouten.html'">products</button>
      <button onclick="location = 'contact.html'">contact</button></center>
    <table>
        <tr>
            <th><button class="pateka" style="overflow: hidden;"><img src="png.png" class="pateka"></button></th>
            <th><p>Енер Дърво</p> <p>Цена: 1790.38€</p></th>
        </tr>
        <tr>
            <th><p class="info1">Компактна вятърна турбина, вградена в структури, които наподобяват дървета. Проектирано да бъде инсталиранов градски условия или в природни зони. Генерира енергия дори при ниски скорости на вятъра. Съчетание на модерни технологии с природни форми. Помага за намаляване на въглеродните емисии и спомага за прехода към чиста енергия.
</p></th>
            <th><div class="count">
                <button id="minus" class="minus">-</button>
                <span id="number">0</span>
                <button id="plus" class="plus">+</button>
                <button onclick="addToCart('Енер Дърво', 1790.38)" class="add" onclick = "TreeAdd()">+ add to basket</button></div></th>
        </tr>
      </table>
       <div class="basketbar"><button class= "close" onclick="Close()">x</button>
      <ul id="cart"></ul><p><span id="total"></span></p></div>
      <script src="enerscript.js">
        let count = 0;

const number = document.getElementById("number");
const plus = document.getElementById("plus");
const minus = document.getElementById("minus");

plus.addEventListener("click", () => {
  count++;
  number.textContent = count;
});

minus.addEventListener("click", () => {
  if (count > 0) {
    count--;
    number.textContent = count;
  }
});
      </script>
</body>
</html>