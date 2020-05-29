import React, { useState } from 'react';
import { Link } from 'react-router-dom';

import './Book.css';


const Book = ({ data, deleteBook }) => {

    return (
        <article className="col-6 col-md-4 col-lg-3 text-center">
            <div className="card mt-2 bg-transparent">

                <img className="p-0 col-12" src={data.cover} alt={`${data.title}`} />

                <Link to={`/book/edit/${data.id}`}>
                    <span
                        className="btn btn-info btn-sm text-white d-block"

                    >
                        <i className="fas fa-edit"></i> Editar
                    </span>
                </Link>


                <a
                    className="btn btn-danger btn-sm text-white"
                    onClick={(e) => deleteBook(e, data.id, data.title)}
                >
                    <i className="fas fa-trash"></i> Eliminar
                </a>

            </div>
        </article>
    )
}

export default Book