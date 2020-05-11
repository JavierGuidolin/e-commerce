import React, { useState, useEffect } from 'react';
import FirstStep from './FirstStep/FirstStep';
import { Title } from '../Reusable/Titles/Titles';
import { validatingAuthor } from '../../validationRules';
import './AuthorForms.css';


const AddAuthor = () => {

    const header = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const [author, setAuthor] = useState({
        name: '',
        surname: '',
        file: null,
    });
    const [valid, setValid] = useState(false);
    const [errors, setErrors] = useState({});
    const [loading, setLoading] = useState(false);
    const [serverErrors, setServerErrors] = useState({});

    let handleChange = e => {
        let val = ''

        if (e.target.name == "file") {
            val = validatingAuthor(e.target.name, e.target.files[0])
            setAuthor({ ...author, [e.target.name]: e.target.files[0] });
        } else {
            val = validatingAuthor(e.target.name, e.target.value);
            setAuthor({ ...author, [e.target.name]: e.target.value });
        }

        setErrors({ ...errors, [e.target.name]: val });

    }

    let handleForm = (e) => {

        e.preventDefault();

        const formData = new FormData();

        for (var key in author) {
            formData.append(key, author[key]);
        }

        let data = {
            method: 'POST',
            body: formData,  // data del formulario
            headers: {
                'X-CSRF-TOKEN': header,
                "Accept": "application/json, text-plain, */*",
            }
        }

        fetch('/api/authors/add', data)
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

    useEffect(() => {

        setValid(
            errors.name?.status &&
            errors.surname?.status &&
            errors.file?.status
        );

    }, [errors]);


    return (
        <section className="col-12 col-md-8 col-lg-8">

            <Title
                text="Añadir un administrador"
                icon="fas fa-author"
            />

            <FirstStep
                handleChange={handleChange}
                author={author}
                handleForm={handleForm}
                errors={errors}
                valid={valid}
                errors={errors}
                loading={loading}
                serverErrors={serverErrors}
            />
        </section>
    )
}

export default AddAuthor;

