import React, { useState } from 'react';
import './Book.css';

const Book = ({ data, deleteBook }) => {

    return (
        <article className="col-6 col-md-4 col-lg-3 text-center">
            <div className="card mt-2 bg-transparent">

                <img className="p-0 col-12" src={data.cover} alt={data.title} />

                <a
                    className="btn btn-info btn-sm text-white"
                    onClick={() => deleteBook(data.id, data.title)}
                >
                    <i className="fas fa-edit"></i> Editar
                </a>

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

/* src={`/storage/covers/${data.cover}`} alt={`${data.title}`} */
//Si se insertan libros de forma manual utilizar la ruta anterior
//Si se utilizan datos de prueba (factories) dejar la ruta como esta