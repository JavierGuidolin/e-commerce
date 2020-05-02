import React from 'react';
import SearchByAuthor from './SearchByAuthor/SearchByAuthor';
import { Transition } from 'react-transition-group';
import Error from '../../Reusable/Error/Error';

import './FirstStep.css';
import '../../AddBook/Animations.css';

let FirstStep = props => {

    const {
        book,
        handleChange,
        setStep,
        authorResult,
        selectSearchAuthor,
        quitAuthor, loading,
        errors,
        valid
    } = props;

    return (
        <Transition timeout={500}>

            {status => (

                <form className={`animated slide-${status}`}>

                    <div>

                        <div className="form-group">
                            <label className="__label-form" htmlFor="title">Titulo</label>
                            <input
                                type="text"
                                id="title"
                                name="title"
                                className="__input-form"
                                value={book.title}
                                onChange={handleChange}
                                onBlur={handleChange}
                                required
                            />

                            {
                                errors.title && <Error message={errors.title.message} />
                            }
                        </div>

                        <div className="pb-3 w-100">
                            <div className="row">
                                <div className="col">

                                    <label className="__label-form" htmlFor="isbn">ISBN</label>
                                    <input
                                        type="text"
                                        id="isbn"
                                        name="isbn"
                                        className="__input-form"
                                        value={book.isbn}
                                        onChange={handleChange}
                                        onBlur={handleChange}
                                        required
                                    />

                                    {
                                        errors.isbn && <Error message={errors.isbn.message} />
                                    }

                                </div>

                                <div className="col-6">

                                    <label className="__label-form" htmlFor="pages">N° de Hojas</label>
                                    <input
                                        type="number"
                                        id="pages"
                                        name="pages"
                                        className="__input-form"
                                        value={book.pages}
                                        onChange={handleChange}
                                        onBlur={handleChange}
                                        min="1"
                                        max="9999"
                                        required
                                    />

                                    {
                                        errors.pages && <Error message={errors.pages.message} />
                                    }

                                </div>
                            </div>
                        </div>

                        <div className="form-group">
                            <label className="__label-form" htmlFor="resume">Resumen</label>
                            <textarea
                                id="resume"
                                name="resume"
                                className="__input-form"
                                cols="30"
                                rows="3"
                                required
                                onChange={handleChange}
                                onBlur={handleChange}
                                value={book.resume}
                                required
                            ></textarea>

                            {
                                errors.resume && <Error message={errors.resume.message} />
                            }

                        </div>

                        <div className="form-group">
                            <label className="__label-form" htmlFor="date">Fecha de Publicacion</label>
                            <input
                                type="date"
                                id="date"
                                name="date"
                                className="__input-form"
                                onChange={handleChange}
                                onBlur={handleChange}
                                value={book.date}
                                required
                            />
                            {
                                errors.date && <Error message={errors.date.message} />
                            }
                        </div>


                        <SearchByAuthor
                            authorResult={authorResult}
                            selectSearchAuthor={selectSearchAuthor}
                            quitAuthor={quitAuthor}
                            book={book}
                            handleChange={handleChange}
                            loading={loading}
                        />


                    </div>

                    <button
                        className="btn btn-dark float-right my-2"
                        type="button"
                        onClick={() => setStep(2)}
                        disabled={!valid.one}
                    >
                        Siguiente Paso
                    </button>

                </form>
            )}

        </Transition>

    );

}

export default FirstStep;