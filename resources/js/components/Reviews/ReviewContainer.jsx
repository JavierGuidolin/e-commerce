import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom';

import ReviewList from './ReviewList/ReviewList';
import MyReview from './MyReview/MyReview';

const ReviewContainer = () => {

    const header = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const bookId = location.pathname.toString().split('/libros/')[1];

    let [reviews, setReviews] = useState([]);
    const [loading, setLoading] = useState(null);

    useEffect(() => {
        getReviews();
    }, [])

    let getReviews = () => {

        setLoading(true);

        let data = {
            method: 'GET',
            headers: { 'X-CSRF-TOKEN': header }
        };

        fetch('/reviews/all/' + bookId, data)
            .then(response => response.json())
            .then(reviews => {
                setReviews(reviews);
                setLoading(false);
            })
            .catch(error => console.log(error))
    }

    let deleteReview = (id) => {

        const formData = new FormData();
        formData.append('id', id);

        const data = {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': header,
                "Accept": "application/json, text-plain, */*",
            }
        }

        fetch('/reviews/delete', data)
            .then(response => response.json())
            .then(info => {

                if (info.errors)
                    toastr.error('Hubo un error al eliminar tu review', 'Ups!')
                if (info.success) {
                    toastr.success('Tu review ha sido eliminada', 'Genial!')
                    getReviews();
                }

            })
            .catch(error => console.log(error));

    }

    return (
        <>
            {loading ?
                <p className="font-weight-bold">Cargando reviews...</p>
                :
                <ReviewList
                    reviews={reviews}
                    deleteReview={deleteReview}
                />
            }

            <MyReview bookId={bookId} getReviews={getReviews} />

        </>
    )
}

export default ReviewContainer;

if (document.getElementById('my-review')) {
    ReactDOM.render(<ReviewContainer />, document.getElementById('my-review'));
}