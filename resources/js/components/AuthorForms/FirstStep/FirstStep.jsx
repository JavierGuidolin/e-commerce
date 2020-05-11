import React from 'react';
import Error from '../../Reusable/Error/Error';
import Preloader from '../../Reusable/Preloader/Preloader'
import { Link } from 'react-router-dom';

const FirstStep = props => {

    const { handleChange, handleForm, author, valid, errors, loading, serverErrors } = props;

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
                        value={author.name}
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
                        value={author.surname}
                        required />
                    {
                        errors.surname && <Error message={errors.surname.message} />
                    }
                </div>

            </div>

            <div className="form-group">
                <label className="__label-form" htmlFor="file">Imagen de Autor</label>
                <label htmlFor="file" className="__custom-file-upload"> <i className="fas fa-cloud-upload-alt"></i> Seleccionar Imagen</label>
                <input
                    type="file"
                    className="__input-form-file"
                    name="file"
                    id="file"
                    accept="image/*"
                    onChange={handleChange}
                    
                />


                {
                    errors.file && <Error message={errors.file.message} />
                }

                <div className="w-50 mx-auto">
                    {
                        typeof author.file === 'string' ?
                            <img
                                className="w-100"
                                src={`/storage/authors/${author.file}`}
                                alt="file"
                            />

                            :

                            author.file != null &&
                            <img
                                className="w-100"
                                src={author.file && URL.createObjectURL(author.file)}
                                alt="file"
                            />
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
                    Autor Registrado!
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
