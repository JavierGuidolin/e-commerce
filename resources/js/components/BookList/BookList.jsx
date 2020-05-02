import React, { useState, useEffect } from 'react';

import Book from './Book/Book';
import { Title } from '../Reusable/Titles/Titles';
import Preloader from '../Reusable/Preloader/Preloader'
import Pagination from "../Reusable/Pagination/Pagination";

import swal from 'sweetalert';

const BookList = () => {

    const header = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const [books, setBooks] = useState([]);
    const [updateBooks, setUpdateBooks] = useState(false);
    const [loading, setLoading] = useState(false);
    const [currentPage, setCurrentPage] = useState(1);
    const [booksPerPage] = useState(6);

    const indexOfLastBook = currentPage * booksPerPage;
    const indexOfFirstBook = indexOfLastBook - booksPerPage;
    const currentBooks = books.slice(indexOfFirstBook, indexOfLastBook);

    useEffect(() => getBooks(), [updateBooks]);

    let getBooks = () => {
        setLoading(true);
        fetch('/api/books/all')
            .then(response => response.json())
            .then(data => {
                setBooks(data)
                setLoading(false);
            })
            .catch(error => console.log(error));
    }

    let deleteBook = (e, id, title) => {

        const formData = new FormData();
        formData.append('id', id);

        let data = {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': header,
                "Accept": "application/json, text-plain, */*",
            }
        }

        swal({
            title: '¿Esta seguro de eliminar el producto?',
            text: title,
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {

                    fetch('/api/books/delete', data)
                        .then(response => response.json())
                        .then(data => {
                            data.success &&
                                swal("El producto ha sido eliminado!", {
                                    icon: "success",
                                });
                            setUpdateBooks(!updateBooks);
                        })
                        .catch(error => console.log(error));

                } else {
                    swal("Tu producto esta a salvo!");
                }
            });
    }

    let paginate = (e, pageNumber) => {
        setCurrentPage(pageNumber)
        e.preventDefault();
    };

    return (
        <>
            <section className="col-12 col-md-8 col-lg-8">

                <Title
                    icon="fas fa-boxes"
                    text="Listado de productos"
                />

                {loading ?

                    <Preloader />

                    :

                    currentBooks.length == 0 ?
                        <p className="text-center font-weight-bold">No hay libros disponibles</p>
                        :
                        <div className="row">
                            {currentBooks.map(book =>
                                <Book
                                    key={book.id}
                                    data={book}
                                    deleteBook={deleteBook}
                                />
                            )}
                        </div>

                }

                <Pagination
                    booksPerPage={booksPerPage}
                    totalBooks={books.length}
                    paginate={paginate}
                    currentPage={currentPage}
                />

            </section>
        </>
    )


}

export default BookList;
