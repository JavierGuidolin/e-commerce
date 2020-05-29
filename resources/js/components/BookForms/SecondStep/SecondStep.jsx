import React, { useState, useEffect } from 'react';
import { Transition } from 'react-transition-group';

import Error from '../../Reusable/Error/Error';

import '../Animations.css';

let SecondStep = (props) => {

    const { book, handleChange, setStep, errors, categories, valid } = props;

    return (
        <Transition timeout={500}>

            {status => (

                <form className={`animated slide-${status}`} onSubmit={props.handleForm}>

                    <div className="row pb-3">

                        <div className="col">
                            <label className="__label-form" htmlFor="price">Precio</label>
                            <input
                                type="number"
                                id="price"
                                name="price"
                                className="__input-form"
                                value={book.price}
                                onChange={handleChange}
                                onBlur={handleChange}
                                min="0"
                                step="0.1"
                                required
                            />

                            {
                                errors.price && <Error message={errors.price.message} />
                            }
                        </div>

                        <div className="col">
                            <label className="__label-form" htmlFor="stock">Stock</label>
                            <input
                                type="number"
                                id="stock"
                                name="stock"
                                className="__input-form"
                                value={book.stock}
                                onChange={handleChange}
                                onBlur={handleChange}
                                min="0"
                                required
                            />
                            {
                                errors.stock && <Error message={errors.stock.message} />
                            }
                        </div>

                    </div>

                    <div className="form-group ">
                        <label className="__label-form" htmlFor="category">Categoria</label>
                        <select
                            id="category"
                            name="category"
                            className=" __input-form"
                            onChange={handleChange}
                            value={book.category}
                        >
                            <option value=""> Seleccionar categoria...</option>
                            {categories && categories.map(categorie =>
                                <option
                                    key={categorie.id}
                                    value={categorie.id}
                                >
                                    {categorie.name}
                                </option>
                            )}

                        </select>

                        {
                            errors.category && <Error message={errors.category.message} />
                        }
                    </div>



                    <div className="form-group">
                        <label className="__label-form" htmlFor="cover">Cover</label>
                        <label htmlFor="cover" className="__custom-file-upload"> <i className="fas fa-cloud-upload-alt"></i> Seleccionar Portada</label>
                        <input
                            type="file"
                            className="__input-form-file"
                            name="cover"
                            id="cover"
                            accept="image/*"
                            onChange={handleChange}
                            required
                        />

                        {
                            errors.cover && <Error message={errors.cover.message} />
                        }

                        <div className="w-50 mx-auto">
                            {
                                typeof book.cover === 'string' ?
                                    <img
                                        className="w-100"
                                        src={props.book.cover}
                                        alt="cover"
                                    />
                                    
                                    :

                                    book.cover != null &&
                                    <img
                                        className="w-100"
                                        src={props.book.cover && URL.createObjectURL(props.book.cover)}
                                        alt="cover"
                                    />
                            }

                        </div>

                    </div>

                    <button
                        className="btn btn-dark float-left"
                        type="button"
                        onClick={() => setStep(1)}
                    >
                        Anterior
                    </button>

                    <button
                        type="button"
                        className="btn btn-dark float-right"
                        disabled={!valid.two}
                        onClick={() => setStep(3)}
                    >
                        Siguiente
                    </button>

                </form>

            )}

        </Transition>

    );
}

export default SecondStep;