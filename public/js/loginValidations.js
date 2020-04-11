let loginForm = document.querySelector('.loginForm'); //login form
let logElement = loginForm.elements; //login form elements
let regexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //email pattern


///login validations///
 loginForm.onsubmit = function (event) {
   if (logElement.email.value.trim()=='') {
    swal('El campo email es obligatorio');
    event.preventDefault();
  }else if (logElement.email.value.length <3) {
   swal('El campo email debe ser mas largo');
   event.preventDefault();
 }else if (!regexMail.test(logElement.email.value)) {
   swal('El email no tiene un formato valido');
   event.preventDefault();
 }
 if (logElement.password.value.trim()=='') {
  swal('La contraseña es obligatoria');
  event.preventDefault();
}else if (logElement.password.value.length <8) {
 swal('La contraseña debe tener al menos 8 caracteres');
 event.preventDefault();
}
 }
/////////////////////////////////////////////////////////
