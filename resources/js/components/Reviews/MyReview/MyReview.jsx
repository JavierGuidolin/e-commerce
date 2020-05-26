import React, { useState, useEffect } from 'react'
import ReviewForm from './ReviewForm/ReviewForm'
import { validatingReview } from '../../../validationRules';

const MyReview = (props) => {

    const header = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const bookId = location.pathname.toString().split('/libros/')[1];
    
    const { getReviews } = props;

    const [review, setReview] = useState({ rating: 0, review: '' });
    const [reviewable, setReviewable] = useState('');
    const [loading, setLoading] = useState(null); 
    const [errors, setErrors] = useState({}); 
    const [valid, setValid] = useState(false); 
    const [serverErrors, setServerErrors] = useState({}); 

    useEffect(() => {
        setValid(errors.review?.status && errors.rating?.status && review.review != '');
    });

    useEffect(() => {
        getReviewable();
    });

    const handleChange = (e) => {
        let val = validatingReview(e.target.name, e.target.value);
        setErrors({ ...errors, [e.target.name]: val });
        setReview({ ...review, [e.target.name]: e.target.value });
    }

    const ratingChanged = (newRating) => {
        let val = validatingReview('rating', newRating);
        setErrors({ ...errors, 'rating': val });
        setReview({ ...review, 'rating': newRating });
    }

    let getReviewable = () => {

        let data = {
            method: 'GET',
            headers: { 'X-CSRF-TOKEN': header }
        };

        fetch('/reviews/reviewable/' + bookId, data)
            .then(response => response.json())
            .then(revi => {
                setReviewable(revi);
            })
            .catch(error => console.log(error))

    }

    const handleForm = (e) => {

        setLoading(true);

        const formData = new FormData();
        formData.append('review', review.review);
        formData.append('bookId', props.bookId);
        formData.append('rating', review.rating);

        const data = {
            method: 'POST',
            body: formData,  // data del formulario
            headers: {
                'X-CSRF-TOKEN': header,
                "Accept": "application/json, text-plain, */*",
            }
        }

        fetch('/reviews/add', data)
            .then(response => response.json())
            .then(info => {

                if (info.errors) {
                    toastr.error('Hubo un error al almacenar tu review', 'Ups!')
                    setServerErrors(info.errors);
                }

                if (info.success) {
                    toastr.success('Tu review ha sido almacenada', 'Genial!')
                    setReview({ rating: 0, review: '' });
                    getReviews();
                    getReviewable();
                    setServerErrors(info);
                }

                setLoading(false);

            })
            .catch(error => console.log(error));

        e.preventDefault();
    }

    return (
        <>
            {reviewable ?
                <>
                    <h6 className="text-uppercase border-top pt-3 pb-2">tu review</h6>
                    <ReviewForm
                        handleChange={handleChange}
                        review={review}
                        handleForm={handleForm}
                        ratingChanged={ratingChanged}
                        valid={valid}
                        serverErrors={serverErrors}
                        loading = {loading}
                    />
                </>
                :
                <p className="text-center font-weight-bold">
                    Solo puedes hacer una review.
                </p>
            }
        </>
    )
}

export default MyReview;
