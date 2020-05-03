import React from 'react'
import Preloader from '../../Reusable/Preloader/Preloader'
import { Link } from 'react-router-dom';
import { Transition } from 'react-transition-group';

import '../Animations.css';

const ThirdStep = ({ book, setStep, handleForm, serverErrors, loading }) => {

    const errors = !serverErrors.success && serverErrors && Object.keys(serverErrors).map(key =>
        <li  className="ml-2" key={key} value={key}>{serverErrors[key]}</li>
    )

    const info = Object.keys(book).map(key =>
        key != 'cover' && key != 'authors' && key != 'category' && key != 'searchAuthor' &&
        <tr key={key}>
            <td>{key}</td>
            <td>{book[key]}</td>
        </tr>
    )

    const authors = book.authors.map(author => author.name + " " + author.surname)


    return (
        <Transition timeout={500}>

            {status => (

                <div className={`animated slide-${status}`}>

                    <table className="table">
                        <thead>
                            <tr>
                                <th scope="col">Campo</th>
                                <th scope="col">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            {info}
                            <tr>
                                <td>Autores</td>
                                <td>{authors}</td>
                            </tr>
                        </tbody>
                    </table>


                    {
                        errors && errors.length ?

                            <ul className={`alert alert-danger fade-${status}`}>
                                {errors}
                            </ul>

                            : ''

                    }

                    {serverErrors && serverErrors.success ?

                        <div className='alert alert-success'>
                            Producto Registrado!
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

                        <>
                            <button
                                className="btn btn-dark float-left"
                                type="button"
                                onClick={() => setStep(2)}
                            >
                                Anterior
                            </button>

                            <button
                                type="button"
                                className="btn btn-dark float-right"
                                onClick={handleForm}
                                loading={loading}
                            >
                                Guardar
                            </button>
                            
                        </>
                    }
                </div >
            )}



        </Transition>

    )
}

export default ThirdStep


