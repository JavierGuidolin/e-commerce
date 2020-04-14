let carrito=JSON.parse(localStorage.getItem('cart'));

var cart = {
  data : carrito, // current shopping cart

  list : function(){

    let container=document.querySelector('.__container')
    //console.log(container);
    let divRow=null,divImg=null,divImg2=null,divDesc=null,divTitle=null,divOptions=null,divPrice=null,divQuantity=null,divInput=null,divButton=null,
    imgCover=null,h5Title=null,h4Desc=null,h6Price=null,inputQuantity=null,buttonTrash=null,iconTrash=null,hr=null,divSubtotal=null,total = 0, subtotal = 0;

    ///RENDERIZADO//
    for (let i in carrito) {

      divRow = document.createElement('div') ;
      divRow.classList.add('row');

    /////IMAGEN/////

      divImg = document.createElement('div') ;
      divImg.classList.add('col-12','col-md-2');

      divImg2 = document.createElement('div');
      divImg2.classList.add('text-center','mb-3');

      imgCover = document.createElement('img');
      imgCover.classList.add('img-responsive','__width-img-cart')
      imgCover.setAttribute('src',carrito[i]['cover']);
      imgCover.setAttribute('alt','prewiew');

      container.appendChild(divRow);
      divRow.appendChild(divImg);
      divImg.appendChild(divImg2);
      divImg2.appendChild(imgCover);

    //////////Title and description////////////
      divDesc=document.createElement('div');
      divDesc.classList.add('col-12','col-md-6');

      divTitle=document.createElement('div');
      divTitle.classList.add('h-100','d-flex','flex-column','justify-content-center');

      h5Title=document.createElement('h5');
      h5Title.classList.add('__product-name');
      h5Title.innerHTML='<strong>'+carrito[i]['title']+'</strong>';

      h4Desc=document.createElement('h4');
      h4Desc.classList.add('__product-description');
      h4Desc.innerHTML='<small>'+carrito[i]['resume']+'</small>';

      divRow.appendChild(divDesc);
      divDesc.appendChild(divTitle);
      divTitle.appendChild(h5Title);
      divTitle.appendChild(h4Desc);

    //////////////Options/////////////////////////


      divOptions=document.createElement('div')
      divOptions.classList.add('col-12','col-md-4','row','mx-auto','d-flex','align-items-center','flex-md-row')

      divPrice=document.createElement('div');
      divPrice.classList.add('col-4');

      h6Price=document.createElement('h6');
      h6Price.classList.add('font-weight-bold','__product-price','text-center');
      h6Price.innerHTML='$'+carrito[i]['price']+' x';

      divRow.appendChild(divOptions);
      divOptions.appendChild(divPrice);
      divPrice.appendChild(h6Price);
    ///////////////////Cantidad/////////////////////////////
      divQuantity=document.createElement('div');
      divQuantity.classList.add('col-5');

      divInput=document.createElement('div');
      divInput.classList.add('quantity');

      inputQuantity=document.createElement('input');
      inputQuantity.classList.add('form-control','text-center','__form-input');
      inputQuantity.setAttribute('type','number');
      inputQuantity.setAttribute('step',1);
      inputQuantity.setAttribute('max',99);
      inputQuantity.setAttribute('min',1);
      inputQuantity.setAttribute('value',carrito[i]['cantidad']);

      divOptions.appendChild(divQuantity);
      divQuantity.appendChild(divInput);
      divInput.appendChild(inputQuantity);

    ////////////////TrashCan/////////////////////
      divButton=document.createElement('div');
      divButton.classList.add('col-3')

      buttonTrash=document.createElement('button');
      buttonTrash.classList.add('btn','btn-sm','__btn');
      buttonTrash.setAttribute('type','button');
      buttonTrash.onclick = cart.delete;
      buttonTrash.dataset.id = i;


      iconTrash=document.createElement('i');
      iconTrash.classList.add('fa','fa-trash','text-white');
      iconTrash.setAttribute('aria-hidden','true');

      divOptions.appendChild(divButton);
      divButton.appendChild(buttonTrash);
      buttonTrash.appendChild(iconTrash);

      hr=document.createElement('hr');
      divRow.appendChild(hr);
      ///////////Subtotal///////////////
      subtotal = carrito[i]['cantidad'] * carrito[i]['price'];
      total += subtotal;

    }
    divSubtotal=document.createElement('div')
    divSubtotal.innerHTML="Total:"+total;
    console.log(total);
    console.log(subtotal);
    divRow.appendChild(divSubtotal);

  },
  save : function(){
    localStorage.setItem("cart", JSON.stringify(cart.data));
  },
  delete: function(){
   delete cart.data[this.dataset.id];

      swal('Producto eliminado');

        cart.save();
        location.reload();
        return false;

  },

}

window.addEventListener("load", function(){ //Cuando se refresca la pagina se cargan los datos de la compra
 cart.list();

});
console.log(cart.data);
console.log();
