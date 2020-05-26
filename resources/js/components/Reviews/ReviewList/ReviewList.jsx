import React from 'react';
import Review from '../Review/Review';

let ReviewList = props => {

    const { reviews, deleteReview } = props

    return (

        <>
            <h6 className="text-uppercase border-top pt-3 pb-2 ">reviews</h6>

            {reviews.map(review => <Review
                key={review.id}
                review={review}
                deleteReview={deleteReview}
            />)}

        </>
    )
}

export default ReviewList;
