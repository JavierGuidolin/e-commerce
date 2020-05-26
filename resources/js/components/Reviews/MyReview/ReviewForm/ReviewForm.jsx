import React, { useState } from 'react';
import Rating from 'react-rating';

import './ReviewForm.css';

const ReviewForm = (props) => {

    const { handleChange, review, handleForm, ratingChanged, valid, serverErrors, loading } = props;
    const errors = !serverErrors.success && serverErrors && Object.keys(serverErrors).map(key =>
        <li className="ml-2" key={key} value={key}>{serverErrors[key]}</li>
    );

    return (
        <>
            <form onSubmit={handleForm}>

                <div className="row mt-3">

                    <div className="col">

                        <div className="form-group">
                            <label htmlFor="rating">Calificación</label>
                            <div>
                                <Rating
                                    emptySymbol={<i className="far fa-star"></i>}
                                    fullSymbol={<i className="fas fa-star"></i>}
                                    placeholderSymbol={<i className="fas fa-star"></i>}
                                    onChange={ratingChanged}
                                    initialRating={review.rating}
                                />
                            </div>
                        </div>

                        <div className="form-group">
                            <label htmlFor="review">Review</label>
                            <textarea
                                type="text"
                                id="review"
                                name="review"
                                className="form-control __form-input"
                                value={review.review}
                                onChange={handleChange}
                                required
                            />
                            <small id="reviewHelp" className="mb-3 form-text text-danger"></small>
                        </div>

                    </div>


                </div>


                {
                    errors && errors.length ?

                        <ul className={`alert alert-danger fade-${status}`}>
                            {errors}
                        </ul>

                        : ''

                }


                <div className="text-right mt-2">

                    <button
                        type="submit"
                        className="btn text-uppercase __btn __btn-add"
                        value="enviar"
                        disabled={!valid}
                    >

                        {loading ? 'Enviando' : 'Enviar'}

                    </button>
                </div>

            </form>
        </>


    )
}

export default ReviewForm;