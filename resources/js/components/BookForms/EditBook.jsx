import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';

import FirstStep from './FirstStep/FirstStep'
import SecondStep from './SecondStep/SecondStep'
import ThirdStep from './ThirdStep/ThirdStep';
import { Title, Subtitle } from '../Reusable/Titles/Titles'
import { validating } from '../../validationRules';

import './BookForms.css';

const EditBook = () => {

    const header = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let { id } = useParams();

    const [book, setBook] = useState({
        id: 0,
        title: '',
        isbn: '',
        pages: 0,
        resume: '',
        date: '',
        price: 0,
        stock: 0,
        category: '',
        cover: null,
        newCover: null,
        searchAuthor: '',
        authors: []
    }); 

    const [step, setStep] = useState(1); 
    const [authorResult, setAuthorResult] = useState([]); 
    const [loading, setLoading] = useState(null); 
    const [errors, setErrors] = useState({});
    const [valid, setValid] = useState({ one: true, two: true });
    const [categories, setCategories] = useState([]);
    const [serverErrors, setServerErrors] = useState({});


    let handleChange = (e) => {

        const { name, value } = event.target;
        let val = '';

        if (name == 'category') {
            val = validating(name, value, categories);
        } else if (name == 'cover') {
            val = validating(name, event.target.files[0]);
        } else {
            val = validating(name, value);
        }

        setErrors({ ...errors, [name]: val }); 

        if (name == 'cover') {
            setBook({ ...book, [e.target.name]: e.target.files[0] });
        } else {
            setBook({ ...book, [name]: value });
        }

    }

    useEffect(() => {

        setValid({

            one: errors.title?.status &&
                errors.isbn?.status &&
                errors.pages?.status &&
                errors.resume?.status &&
                errors.date?.status,

            two: errors.price?.status &&
                errors.stock?.status &&
                errors.category?.status &&
                errors.cover?.status
        });

    }, [errors]);

    useEffect(() => {
        if (book.searchAuthor != '')
            getAuthorsResults();
    }, [book.searchAuthor]);

    useEffect(() => {
        getCategories();
    }, []);

    useEffect(() => {
        getBookById(id);
    }, [categories]);


    let getBookById = (id) => {

        let data = {
            method: 'GET',
            headers: { 'X-CSRF-TOKEN': header }
        };

        fetch('/api/books/edit/' + id, data)
            .then(response => response.json())
            .then(book => {
                setBookById(book);
                console.log(book)
            })
            .catch(error => console.log(error))
    }

    let setBookById = (book) => {

        let val = '';
        let errores = {};

        for (const key in book) {

            if (key != 'cover' && key != 'authors' && key != 'id') {

                if (key == 'category') {
                    val = validating(key, book[key], categories);
                } else {
                    val = validating(key, book[key]);
                }

                errores = { ...errores, [key]: val };

            }
        }

        errores = { ...errores, 'cover': { 'status': true } }
        setErrors(errores);

        setBook({
            title: book.title,
            isbn: book.isbn,
            pages: book.pages,
            resume: book.resume,
            date: book.date,
            price: book.price,
            stock: book.stock,
            category: book.category,
            cover: book.cover,
            authors: book.authors,
            id: id
        });

    }



    let getAuthorsResults = () => {

        setLoading(true);

        let data = {
            method: 'GET',
            headers: { 'X-CSRF-TOKEN': header }
        };

        fetch('/api/authors/all/' + book.searchAuthor, data)
            .then(response => response.json())
            .then(authors => {
                setAuthorResult(authors)
                setLoading(false); 
                console.log(authors)
            })
            .catch(error => console.log(error))

    }

    let getCategories = () => {
        fetch('/api/categories/all')
            .then(response => response.json())
            .then(categories => {
                setCategories(categories)
            })
            .catch(error => console.log(error));
    }

    let selectSearchAuthor = (data) => {

        let exist = book.authors.filter(author => author.id === data.id);

        if (!exist.length) {

            setBook({
                ...book,
                authors: book.authors.concat({
                    id: data.id,
                    name: data.name, 
                    surname: data.surname
                }),
                searchAuthor: ''
            });

        }

    }

    let quitAuthor = (id) => {

        setBook({
            ...book,
            authors: book.authors.filter(searchAuthor => searchAuthor.id != id)
        });

    }

    let handleForm = (e) => {

        e.preventDefault();
        setLoading(true);

        const formData = new FormData();
        const authorsJson = JSON.stringify(book.authors);

        formData.append('authors', authorsJson);

        for (var key in book) {
            if (key != 'authors' && key != 'searchAuthor') {
                formData.append(key, book[key]);
            }
        }

        let data = {
            method: 'POST',
            body: formData,  // data del formulario
            headers: {
                'X-CSRF-TOKEN': header,
                "Accept": "application/json, text-plain, */*",
            }
        }

        fetch('/api/books/edit', data)
            .then(response => response.json())
            .then(info => {

                if (info.errors)
                    setServerErrors(info.errors);
                if (info.success)
                    setServerErrors(info);

                setLoading(false);

            })
            .catch(error => console.log(error));

    }


    return (
        <section className="col-12 col-md-8 col-lg-8">

            {step === 1 &&

                <>
                    <Title
                        icon="fas fa-book"
                        text="Añadir un nuevo libro"

                    />

                    <FirstStep
                        book={book}
                        handleChange={handleChange}
                        setStep={setStep}
                        authorResult={authorResult}
                        selectSearchAuthor={selectSearchAuthor}
                        quitAuthor={quitAuthor}
                        loading={loading}
                        errors={errors}
                        valid={valid}
                    />
                </>

            }

            {step === 2 &&

                <>
                    <Subtitle
                        icon="fas fa-info-circle"
                        text="Otros detalles"
                    />
                    <SecondStep
                        handleChange={handleChange}
                        setStep={setStep}
                        handleForm={handleForm}
                        categories={categories}
                        book={book}
                        errors={errors}
                        valid={valid}
                    />
                </>
            }

            {step === 3 &&

                <>
                    <Subtitle
                        icon="fas fa-hand-paper"
                        text="Vas a ingresar el siguiente producto."
                    />

                    <ThirdStep
                        setStep={setStep}
                        handleForm={handleForm}
                        book={book}
                        serverErrors={serverErrors}
                        loading={loading ? 1 : 0}
                    /></>
            }

        </section>
    );

}

export default EditBook;