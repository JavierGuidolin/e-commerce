
let products = JSON.parse(localStorage.getItem('Libros'));


window.addEventListener("load", function(){
let container = document.getElementById("cart-products"),
    items = null, part = null;

container.classList.add('offset-1','col-10','col-md-4','offset-md-0','col-lg-3');
//let cart=[];
//RENDERIZADO//
for (let i in products) {
  items = document.createElement("div");
  items.classList.add("p-item");

  // // Product Image
  // part = document.createElement("img");
  // part.src = products[i]['img'];
  // part.classList.add("p-img");
  // item.appendChild(part);

  // Nombre del producto
  part = document.createElement("div");
  part.innerHTML = products[i]['title'];
  part.classList.add("p-name");
  items.appendChild(part);

  // Precio
  part = document.createElement("div");
  part.innerHTML = "$" + products[i]['price'];
  part.classList.add("p-price,text-center");
  items.appendChild(part);

  // Descripcion del producto
  part = document.createElement("div");
  part.innerHTML = products[i]['resume'];
  part.classList.add("p-desc");
  items.appendChild(part);

  // Boton añadir al carro
  part = document.createElement("input");
  part.type = "button";
  part.value = "Add to Cart";
  part.classList.add("p-add");
  part.onclick = cart.add;
  part.dataset.id = i;
  items.appendChild(part);

  container.appendChild(items);
}
});

//OBJETO CARRO
var cart ={
elementos :null , //Empieza el carro vacio


//load:,  // carga los datos del carrito, al refrescar la pagina
load : function(){

  cart.elementos = localStorage.getItem("cart");
  if (cart.elementos == null) { cart.elementos = {}; }
  else { cart.elementos = JSON.parse(cart.elementos); }
},
//save:, //Guarda los datos del carro en el local storage
save: function(){
  localStorage.setItem("cart", JSON.stringify(cart.elementos));
},
//list:, //Muestra una lista de los productos, y el total a pagar

//reset:,//Vacia el carro

//checkout:,//Procede al checkout
add : function(){
  if (cart.elementos[this.dataset.id] == undefined) {
    var product = products[this.dataset.id];
    cart.elementos[this.dataset.id] = {
      idProducto:product['id'],
      title : product['title'],
      resume : product['resume'],
      price : product['price'],
      cantidad : 1
    };
  } else {
    cart.elementos[this.dataset.id]['cantidad']++;
  }
  cart.save();
  swal({
  icon: "success",
  text: 'Producto añadido',

});
},



};


window.addEventListener("load", function(){ //Cuando se refresca la pagina se cargan los datos de la compra
  cart.load();

});

console.log('Carro de compras: '+localStorage.getItem('cart'));
