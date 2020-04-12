class item {   //Clase item, cada objeto que se cree va guardado en cart;
  constructor(title,autor,price) {
    this.title=title;
    this.autor=autor;
    this.price=price;
  }
}


let cart ={
  productos:[],
  total:0
}; //Inicializo la variable cart
let addItem= document.getElementById('addItem');


addItem.onclick = function(){
  let autor = document.getElementById('autor').innerHTML;
  let title = document.getElementById('title').innerHTML;
  let price = document.getElementById('price').innerHTML;
  // Create a new Oject item
  let itemNuevo = new item(autor,title,price);

  cart.productos.push(itemNuevo); //agrega el item al carro
  swal('Producto añadido');
  console.log(cart);//Muestro los elementos cargados en el carro;

  return cart;
    };
