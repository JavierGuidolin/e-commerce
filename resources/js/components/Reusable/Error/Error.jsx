import React from 'react';

const Error = ({ message }) => {

    return (
        <>
            <small className="mb-3 form-text text-danger">
                {message}
            </small>
        </>
    );

}

export default Error;
