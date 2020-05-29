
let products = JSON.parse(localStorage.getItem('Libros'));


window.addEventListener("load", function(){
let container = document.querySelector('.libros'),
    items = null, part = null, item2= null,cover=null,options=null,datosDelProducto=null,img=null;
    addToCart=null,addToFav=null,iconFav=null,iconShop=null,spanBuy=null,h3BookTitle=null,linkBookTitle=null,h6BookAutor=null,h3BookPrice=null;

//RENDERIZADO//
if (products.length) {
  for (let i in products) {
    items = document.createElement("div");
    items.classList.add("offset-1","col-10","col-md-4","offset-md-0","col-lg-3");
  
          ///CONTENEDOR DE PRODUCTOS
    item2 = document.createElement("div");
    item2.classList.add("px-2","px-xl-4","item");
  
          //COVER Y BOTON DE AÑADIR AL CARRO
    cover = document.createElement("div");
    cover.classList.add("__cover-bestseller");
    img = document.createElement('img');
    img.classList.add("w-100","mx-auto");
    img.setAttribute('src',products[i]['cover']);
    cover.appendChild(img);
  
  ///////////////////////////////////////////////////
    options = document.createElement("div");
    options.classList.add("__options","pb-2");
  //////ICONOS SOBRE EL COVER////////////
    addToCart=document.createElement('a');
    addToCart.classList.add("__options-add-to-cart","mr-1","mb-1");
    addToCart.onclick = cart.add;
    addToCart.dataset.id = i;
    addToCart.setAttribute('href','#');

    iconShop=document.createElement('i');
    iconShop.classList.add('fas','fa-shopping-bag');
    //addToCart.innerHTML='<span>BUY</span>';
  
    addToFav=document.createElement('a');
    addToFav.classList.add('__options-add-to-fav','mr-1');
    addToFav.setAttribute('href','#');
  
  
    iconFav=document.createElement('i');
    iconFav.classList.add('far','fa-heart')
  
    addToFav.appendChild(iconFav);
    addToCart.appendChild(iconShop);
    addToCart.innerHTML += '<span>BUY</span>'
    options.appendChild(addToCart);
    options.appendChild(addToFav);
    cover.appendChild(options);
  
  /////////////INFO DEL PRODUCTO/////////////
    datosDelProducto = document.createElement("div");
    datosDelProducto.classList.add("pt-3");
  
    h3BookTitle=document.createElement('h3');
    h3BookTitle.classList.add("text-center","font-weight-bold");
  
    linkBookTitle=document.createElement('a');
    linkBookTitle.innerHTML=products[i]['title'];
    linkBookTitle.setAttribute('href',"/libros/"+products[i]['id']);
  
    /* h6BookAutor=document.createElement('h6');
    h6BookAutor.classList.add("text-center");
    h6BookAutor.innerHTML="{{$books->find("+products[i]['id']+")}}"; */
  
    h3BookPrice=document.createElement('h3');
    h3BookPrice.classList.add("text-center");
    h3BookPrice.innerHTML="$"+products[i]['price'];
  
  
    h3BookTitle.appendChild(linkBookTitle);
    datosDelProducto.appendChild(h3BookTitle);
    /* datosDelProducto.appendChild(h6BookAutor); */
    datosDelProducto.appendChild(h3BookPrice);
  
    item2.appendChild(cover);
    item2.appendChild(datosDelProducto);
    items.appendChild(item2);
    container.appendChild(items);
  
  
  
  }

}else{

  const notElements = document.createElement('p');
  const text = document.createTextNode('No hay elementos que coincidan con la búsqueda.');
  notElements.classList.add('font-weight-bold', 'text-center');
  notElements.appendChild(text);
  container.appendChild(notElements);
  
}

});

//OBJETO CARRO
var cart ={
elementos:null , //Empieza el carro vacio


load : function(){

  cart.elementos = localStorage.getItem("cart");
  if (cart.elementos == null) { cart.elementos = {}; }
  else { cart.elementos = JSON.parse(cart.elementos); }
},
//save:, //Guarda los datos del carro en el local storage
save: function(){
  localStorage.setItem("cart", JSON.stringify(cart.elementos));
},

add : function(){
  if (cart.elementos[this.dataset.id] == undefined) {
  let product = products[this.dataset.id];
    cart.elementos[this.dataset.id] = {
      idProducto:product['id'],
      title : product['title'],
      resume : product['resume'],
      price : product['price'],
      cover : product['cover'],
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

window.addEventListener("load", function(){ 
  cart.load();
});
