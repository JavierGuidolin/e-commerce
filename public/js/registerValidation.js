
let regexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //email pattern

let regForm = document.querySelector('.regForm'); //register form
let regElement =regForm.elements;//register form elements



///register validations///
regForm.onsubmit = function (event) {
  if (regElement.name.value.trim()=='') {   //name
    alert('El campo nombre es obligatorio');
    event.preventDefault();
  }else if (regElement.name.length <3) {
   alert('El campo nombre debe ser mas largo');
   event.preventDefault();
 }
 if (regElement.surname.value.trim()=='') { //surname
   alert('El campo nombre es obligatorio');
   event.preventDefault();
 }else if (regElement.surname.length <3) {
  alert('El campo nombre debe ser mas largo');
  event.preventDefault();
}

  if (regElement.email.value.trim()=='') {
   alert('El campo email es obligatorio');  //email
   event.preventDefault();
 }else if (regElement.email.value.length <3) {
  alert('El campo email debe ser mas largo');
  event.preventDefault();
}else if (!regexMail.test(regElement.email.value)) {
  alert('El email no tiene un formato valido');
  event.preventDefault();
}
if (regElement.password.value.trim()=='') {  //password
 alert('La contraseña es obligatoria');
 event.preventDefault();
}else if (regElement.password.value.length <6) {
alert('La contraseña debe tener al menos 6 caracteres');
event.preventDefault();
}else if (regElement.password.value!=regElement.password_confirmation.value) {
alert('Las contraseñas no coinciden');
event.preventDefault();
}
}
