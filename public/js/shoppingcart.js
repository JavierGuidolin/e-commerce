
let products = JSON.parse(localStorage.getItem('Libros'));


let container = document.getElementById("cart-products"),
    items = null, part = null;

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
  part.classList.add("p-price");
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
//});

//OBJETO CARRO
let cart ={

elementos:null, //Empieza el carro vacio

load:,  //Esta funcion cargaria los datos del carrito, por si se cierra la pagina

save:, //Guarda los datos del carro en el local storage

add:, //Añade los items al carro

list:, //Muestra una lista de los productos, y el total a pagar

reset:,//Vacia el carro

checkout:,//Procede al checkout

};
