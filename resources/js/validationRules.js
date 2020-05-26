export let validating = (input, inputValue, other) => {

    switch (input) {
        case 'title':
            return title(inputValue);
        case 'isbn':
            return isbn(inputValue);
        case 'pages':
            return pages(inputValue);
        case 'resume':
            return resume(inputValue);
        case 'date':
            return date(inputValue);
        case 'price':
            return price(inputValue);
        case 'stock':
            return stock(inputValue);
        case 'category':
            return category(inputValue, other);
        case 'cover':
            return cover(inputValue);
        default:
            break;
    }

}

export let validatingAdmin = (input, inputValue, other) => {

    inputValue = inputValue.trim();

    switch (input) {
        case 'name':
            return name(inputValue);
        case 'surname':
            return surname(inputValue);
        case 'email':
            return email(inputValue);
        case 'password':
            return password(inputValue);
        case 'password_confirmation':
            return password_confirmation(inputValue, other);
        default:
            break;

    }

}

export let validatingAuthor = (input, inputValue) => {


    switch (input) {
        case 'name':
            return name(inputValue);
        case 'surname':
            return surname(inputValue);
        case 'file':
            return cover(inputValue);
        default:
            break;

    }
}


export let validatingReview = (input, inputValue) => {

    switch (input) {
        case 'review':
            return review(inputValue);
        case 'rating':
            return rating(inputValue);
        default:
            break;

    }
}

let review = (inputValue) => {

    if (inputValue.length < 10 || inputValue.length > 250) {
        return { message: 'Este campo debe contener entre 10 y 250 caracteres', status: false }
    }

    return { status: true };

}

let rating = (inputValue) => {

    if (inputValue < 1 || inputValue > 5) {
        return { message: 'El rating debe ser un valor entre 1 y 5', status: false }
    }

    return { status: true };
}

let name = (inputValue) => {

    if (inputValue.length < 3) {
        return { message: 'Este campo no puede estar vacio.', status: false }
    }

    if (inputValue.length > 50) {
        return { message: 'El campo no debe tener mas de 50 caracteres', status: false }
    }

    return { status: true };
}

let surname = (inputValue) => {

    if (inputValue.length < 3) {
        return { message: 'Debe incluir el apellido del administrador', status: false }
    }

    if (inputValue.length > 50) {
        return { message: 'El apellido no debe tener mas de 50 caracteres', status: false }
    }

    return { status: true };
}
let email = (inputValue) => {

    const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (!regex.test(inputValue)) {
        return { message: 'Debe incluir un email válido', status: false }
    }

    if (inputValue.length > 100) {
        return { message: 'El email no debe tener mas de 100 caracteres', status: false }
    }

    return { status: true };

}
let password = (inputValue) => {

    if (inputValue.length < 8) {
        return { message: 'La contraseña debe tener al menos 8 caracteres', status: false }
    }

    if (inputValue.length > 50) {
        return { message: 'La contraseña no debe tener mas de 50 caracteres', status: false }
    }

    return { status: true };
}

let password_confirmation = (inputValue, other) => {

    if (inputValue != other) {
        return { message: 'La contraseña no coinciden', status: false }
    }
    return { status: true };
}



let title = (inputValue) => {

    inputValue = inputValue.trim();

    if (inputValue.length < 1) {
        return { message: 'Debe incluir el titulo del producto', status: false }
    }

    if (inputValue.trim().length > 250) {
        return { message: 'El título del producto no puede tener mas de 250 caracteres', status: false }
    }

    return { status: true };
}

let pages = (inputValue) => {

    if (isNaN(inputValue)) {
        return { message: 'El numero de paginas debe ser un valor numerico', status: false }
    }

    if (inputValue > 9999 || inputValue < 10) {
        return { message: 'El numero de paginas debe estar entre 10 y 99999', status: false }
    }

    return { status: true };
}

let isbn = (inputValue) => {

    inputValue = inputValue.trim();

    if (inputValue.length < 1) {
        return { message: 'Debe incluir el ISBN u otro valor identificatorio', status: false }
    }

    if (inputValue.length > 15 || inputValue.length < 10) {
        return { message: 'El ISBN o el ID  debe tener ente 10 y 15 caracteres', status: false }
    }

    return { status: true };
}

let resume = (inputValue) => {

    inputValue = inputValue.trim();

    if (inputValue.length < 1) {
        return { message: 'Debe incluir el resumen del producto', status: false }
    }

    if (inputValue.length < 30 || inputValue.length > 500) {
        return { message: 'El numero de caracteres debe estar entre 30 y 500', status: false }
    }

    return { status: true };
}

let date = (inputValue) => {

    const date = /^\d{4}-\d{2}-\d{2}$/.test(inputValue);

    if (!date) {
        return { message: 'La fecha indicada no es valida', status: false }
    }

    return { status: true }
}

let price = (inputValue) => {
    if (isNaN(inputValue)) {
        return { message: 'El precio debe ser un valor numerico', status: false }
    }

    if (inputValue < 0.1 || inputValue > 99999) {
        return { message: 'El precio debe estar entre 0.1 y 99999', status: false }
    }

    return { status: true };
}

let stock = (inputValue) => {

    if (isNaN(inputValue)) {
        return { message: 'El stock debe ser un valor numerico', status: false }
    }

    if (!(Number.isInteger(parseInt(inputValue)))) {
        return { message: 'El stock debe ser un valor entero', status: false }
    }

    if (inputValue < 0 || inputValue > 999) {
        return { message: 'El stock debe estar entre 0 y 999', status: false }
    }

    return { status: true };

}

let category = (inputValue, other) => {


    if (inputValue.length <= 0) {
        return { message: 'Debe seleccionar una categoria', status: false }
    }

    let exist = other.filter(category => category.id == inputValue);

    if (!exist.length) {
        return { message: 'La categoria seleccionada no es valida', status: false }
    }


    return { status: true }
}

let cover = (inputValue) => {


    const SUPPORTED_FORMATS = ["image/bmp", "image/jpeg", "image/gif", "image/png"];
    const FILE_SIZE = 5000000;

    if (!SUPPORTED_FORMATS.includes(inputValue.type)) {
        return { message: 'El archivo debe ser una imagen jpg, jpeg, gif o png', status: false }
    }

    if (inputValue.size > FILE_SIZE) {
        return { message: 'El archivo no debe ser mayor a 5MB', status: false }
    }

    return { status: true };

}



