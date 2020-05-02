import React from 'react'
import './Pagination.css'

const Pagination = ({ booksPerPage, totalBooks, paginate, currentPage }) => {

    const pageNumbers = [];

    for (let i = 1; i <= Math.ceil(totalBooks / booksPerPage); i++) {
        pageNumbers.push(i);
    }

    return (
        <section className="mt-3">
            <nav className="">
                <ul className="pagination">
                    {pageNumbers.map(number => (
                        <li key={number} className={currentPage == number ? 'page-item active' : 'page-item'}>
                            <a
                                className="page-link"
                                href="#"
                                onClick={(e) => paginate(e, number)}
                            >
                                {number}
                            </a>
                        </li>
                    ))}
                </ul>
            </nav>
        </section>
    )
}

export default Pagination
