
let sidebar = document.getElementsByClassName("basketbar")[0];
    function openCart(){
        sidebar.style.width = "400px";
        // saveCart();
        renderCart();
    }
    function Close() {
        sidebar.style.width = "0px";
    }
            


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
function TreeAdd() {
    ;

}
// let cart = JSON.parse(localStorage.getItem("cart")) || [];
function addToCart(name, price) {
    openCart();
    // cart.push({ name, price });
    // saveCart();
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.push({ name, price });
    localStorage.setItem("cart", JSON.stringify(cart));  
    renderCart();
}

function saveCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
}

function renderCart() {
    const cartList = document.getElementById("cart");
    const totalElement = document.getElementById("total");
    cartList.innerHTML = "";
    
    let total = 0;
    let rounded;
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.forEach((item, index) => {
        total += item.price;
        rounded = total.toFixed(2);
        
        const li = document.createElement("li");
        li.innerHTML = `
            ${item.name} - $${item.price}
            <button onclick="removeItem(${index})">Remove</button>
        `;

        cartList.appendChild(li);
    });

    totalElement.textContent = rounded;
}

function removeItem(index) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.splice(index, 1);
    localStorage.setItem("cart", JSON.stringify(cart));
    // saveCart();
    renderCart();
}

renderCart();




