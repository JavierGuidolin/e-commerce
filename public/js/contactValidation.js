let regexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //email pattern

let contactForm = document.querySelector('.contactForm'); //contact form
let contactElement = contactForm.elements;//contact form elements


/////
contactForm.onsubmit = function (event) {
  if (contactElement.fname.value.trim() == '') {   //name
    swal('El campo nombre es obligatorio');
    event.preventDefault();
  } else if (contactElement.fname.value.length < 3) {
    swal('El campo nombre debe ser mas largo');
    event.preventDefault();
  }
  if (contactElement.lname.value.trim() == '') { //surname
    swal('El campo apellido es obligatorio');
    event.preventDefault();
  } else if (contactElement.lname.value.length < 3) {
    swal('El campo apellido debe ser mas largo');
    event.preventDefault();
  }
  if (contactElement.email.value.trim() == '') {
    swal('El campo email es obligatorio');  //email
    event.preventDefault();
  } else if (contactElement.email.value.length < 3) {
    swal('El campo email debe ser mas largo');
    event.preventDefault();
  } else if (!regexMail.test(contactElement.email.value)) {
    swal('El email no tiene un formato valido');
    event.preventDefault();
  }

  if (contactElement.message.value.trim() == '') { //mensaje
    swal('Por favor completa tu mensaje');
    event.preventDefault();
  } else if (contactElement.message.value.length < 20) {
    swal('El mensaje tiene un minimo de 20 caracteres');
    event.preventDefault();
  } else if (contactElement.message.value.length > 500) {
    swal('El mensaje tiene un maximo de 500 caracteres');
    event.preventDefault();
  }

}
