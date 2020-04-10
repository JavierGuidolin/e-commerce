let regexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //email pattern

let contactForm = document.querySelector('.contactForm'); //contact form
let contactElement =contactForm.elements;//contact form elements


/////
contactForm.onsubmit = function (event) {
  if (contactElement.fname.value.trim()=='') {   //name
    alert('El campo nombre es obligatorio');
    event.preventDefault();
  }else if (contactElement.fname.value.length <3) {
   alert('El campo nombre debe ser mas largo');
   event.preventDefault();
 }
 if (contactElement.lname.value.trim()=='') { //surname
   alert('El campo apellido es obligatorio');
   event.preventDefault();
 }else if (contactElement.lname.value.length<3) {
  alert('El campo apellido debe ser mas largo');
  event.preventDefault();
}
if (contactElement.email.value.trim()=='') {
 alert('El campo email es obligatorio');  //email
 event.preventDefault();
}else if (contactElement.email.value.length<3) {
alert('El campo email debe ser mas largo');
event.preventDefault();
}else if (!regexMail.test(contactElement.email.value)) {
alert('El email no tiene un formato valido');
event.preventDefault();
}

if (contactElement.mensaje.value.trim()=='') { //mensaje
  alert('Por favor completa tu mensaje');
  event.preventDefault();
}else if (contactElement.mensaje.value.length<20) {
 alert('El mensaje tiene un minimo de 20 caracteres');
 event.preventDefault();
}else if (contactElement.mensaje.value.length<200) {
 alert('El mensaje tiene un maximo de 200 caracteres');
 event.preventDefault();
}

}
