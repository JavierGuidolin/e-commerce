import React from 'react';
import Error from '../../Reusable/Error/Error';
import Preloader from '../../Reusable/Preloader/Preloader'
import { Link } from 'react-router-dom';

const FirstStep = props => {

    const { handleChange, handleForm, user, valid, errors, loading, serverErrors } = props;

    return (
        <form onSubmit={handleForm}>

            <div className="row">

                <div className="col py-2">
                    <label className="__label-form" htmlFor="name">Nombre</label>
                    <input type="text"
                        id="name"
                        name="name"
                        className="__input-form"
                        onChange={handleChange}
                        onBlur={handleChange}
                        value={user.name}
                        required
                    />
                    {
                        errors.name && <Error message={errors.name.message} />
                    }
                </div>

                <div className="col py-2">
                    <label className="__label-form" htmlFor="surname">Apellido</label>
                    <input
                        type="text"
                        id="surname"
                        name="surname"
                        className="__input-form"
                        onChange={handleChange}
                        onBlur={handleChange}
                        value={user.surname}
                        required />
                    {
                        errors.surname && <Error message={errors.surname.message} />
                    }
                </div>

            </div>

            <div className="row">
                <div className="col py-2">
                    <label className="__label-form" htmlFor="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        className="__input-form"
                        onChange={handleChange}
                        onBlur={handleChange}
                        value={user.email}
                        required />
                    {
                        errors.email && <Error message={errors.email.message} />
                    }

                </div>
            </div>

            <div className="row">
                <div className="col py-2">
                    <label className="__label-form" htmlFor="password">Contraseña</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        className="__input-form"
                        onChange={handleChange}
                        onBlur={handleChange}
                        value={user.password}
                        required />
                    {
                        errors.password && <Error message={errors.password.message} />
                    }

                </div>

                <div className="col py-2">
                    <label className="__label-form" htmlFor="rePassword">Confirmar</label>
                    <input type="password"
                        id="password_confirmation"
                        className="__input-form"
                        name="password_confirmation"
                        onChange={handleChange}
                        onBlur={handleChange}
                        value={user.password_confirmation}
                        required />
                    {
                        errors.password_confirmation && <Error message={errors.password_confirmation.message} />
                    }

                </div>

            </div>

            {
                errors && errors.length ?

                    <ul className={`alert alert-danger fade-${status}`}>
                        {errors}
                    </ul>

                    : ''

            }

            {serverErrors && serverErrors.success ?

                <div className='alert alert-success'>
                    Administrador Registrado!
                                    <Link to='/admin'>
                        <span className="alert-link"> Volver</span>
                    </Link>
                </div>

                : ''
            }


            {
                loading ? <Preloader /> : ''
            }


            {!serverErrors.success &&
                <div className="text-right">
                    <input
                        type="submit"
                        className="btn btn-dark float-right my-2"
                        value="Registrar"
                        disabled={!valid} />
                </div>
            }

        </form >
    )
}

export default FirstStep
