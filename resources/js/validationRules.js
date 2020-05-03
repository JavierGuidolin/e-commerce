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
        return { message: 'La portada debe ser una imagen jpg, jpeg, gif o png', status: false }
    }

    if (inputValue.size > FILE_SIZE) {
        return { message: 'La portada no debe ser mayor a 5MB', status: false }
    }

    return { status: true };

}

