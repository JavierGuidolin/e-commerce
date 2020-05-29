import React from 'react';
import { Link } from 'react-router-dom';

import './Author.css';

const Author = (props) => {

    const { author, deleteAuthor } = props;

    const fullName = author.name + ' ' + author.surname;

    return (
        <tr>
            <td>
                <img className="__author-image" src={author.cover} alt={fullName} />
            </td>
            <td>{fullName}</td>
            <td className="text-center">
                <i
                    className="fas fa-trash-alt"
                    onClick={() => deleteAuthor(author.id, fullName)}>
                </i>
                <span> </span>
                <Link to={`/authors/edit/${author.id}`}>
                    <i className="fas fa-edit"> </i>
                </Link>
            </td>
        </tr>
    )
}

export default Author
