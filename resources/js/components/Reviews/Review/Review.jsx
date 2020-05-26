import React from 'react';
import './Review.css';

const Review = props => {

    const { review, deleteReview } = props;

    return (

        <>
            <div className="__review-individual">
                <p><span className="font-weight-bold">{review.user.name + '' + review.user.surname}</span> says:</p>
                <p> {review.review} </p>
                <p>{review.stars} <i className="fas fa-star"></i> </p>
                {review.edit ?
                    <i
                        className="far fa-times-circle"
                        onClick={() => deleteReview(review.id)} >
                    </i> :
                    ''
                }
            </div>
        </>

    )
}

export default Review;
