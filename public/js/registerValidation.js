
let regexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //email pattern

let regForm = document.querySelector('.regForm'); //register form
let regElement =regForm.elements;//register form elements



///register validations///
regForm.onsubmit = function (event) {
  if (regElement.name.value.trim()=='') {   //name
    swal('El campo nombre es obligatorio');
    event.preventDefault();
  }else if (regElement.name.value.length <3) {
   swal('El campo nombre debe ser mas largo');
   event.preventDefault();
 }
 if (regElement.surname.value.trim()=='') { //surname
   swal('El campo nombre es obligatorio');
   event.preventDefault();
 }else if (regElement.surname.value.length <3) {
  swal('El campo nombre debe ser mas largo');
  event.preventDefault();
}

  if (regElement.email.value.trim()=='') {
   swal('El campo email es obligatorio');  //email
   event.preventDefault();
 }else if (regElement.email.value.length <3) {
  swal('El campo email debe ser mas largo');
  event.preventDefault();
}else if (!regexMail.test(regElement.email.value)) {
  swal('El email no tiene un formato valido');
  event.preventDefault();
}
if (regElement.password.value.trim()=='') {  //password
 swal('La contraseña es obligatoria');
 event.preventDefault();
}else if (regElement.password.value.length <6) {
swal('La contraseña debe tener al menos 6 caracteres');
event.preventDefault();
}else if (regElement.password.value!=regElement.password_confirmation.value) {
swal('Las contraseñas no coinciden');
event.preventDefault();
}
}
