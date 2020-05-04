import React, { useState, useEffect } from 'react';
import FirstStep from './FirstStep/FirstStep';
import { Title } from '../Reusable/Titles/Titles';
import { validatingAdmin } from '../../validationRules';
import './AdminForms.css';


const AddAdmin = () => {

    const header = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const [user, setUser] = useState({
        name: '',
        surname: '',
        email: '',
        password: '',
        password_confirmation: ''
    });
    const [valid, setValid] = useState(false);
    const [errors, setErrors] = useState({});
    const [loading, setLoading] = useState(false);
    const [serverErrors, setServerErrors] = useState({});

    let handleChange = e => {
        let val = ''

        if (e.target.name == "password_confirmation") {
            val = validatingAdmin(e.target.name, e.target.value, user.password)
        } else {
            val = validatingAdmin(e.target.name, e.target.value);
        }

        setErrors({ ...errors, [e.target.name]: val });

        setUser({ ...user, [e.target.name]: e.target.value });
    }

    let handleForm = (e) => {

        e.preventDefault();

        const formData = new FormData();

        for (var key in user) {
            formData.append(key, user[key]);
        }

        let data = {
            method: 'POST',
            body: formData,  // data del formulario
            headers: {
                'X-CSRF-TOKEN': header,
                "Accept": "application/json, text-plain, */*",
            }
        }

        fetch('/api/admins/add', data)
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
            errors.email?.status &&
            errors.password?.status &&
            errors.password_confirmation?.status
        );

    }, [errors]);


    return (
        <section className="col-12 col-md-8 col-lg-8">

            <Title
                text="Añadir un administrador"
                icon="fas fa-user"
            />

            <FirstStep
                handleChange={handleChange}
                user={user}
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

export default AddAdmin

