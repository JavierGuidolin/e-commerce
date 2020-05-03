import React from 'react';
import SearchResultAuthor from '../SearchResult/SearchResultAuthor';
import Preloader from '../../../Reusable/Preloader/Preloader'
import { Transition } from 'react-transition-group';

import '../../BookForms.css';

let SearchByAuthor = (props) => {

    const { book, handleChange, authorResult, selectSearchAuthor, quitAuthor, loading } = props;

    return (
        <>

            <div className="form-group">
                <label className="__label-form" htmlFor="searchAuthor">Autor/es</label>

                <Transition timeout={500}>

                    {status => (
                        <ul>
                            {book.authors && book.authors.map(author =>

                                <li className={`animated fade-${status}`} key={author.id}>
                                    {author.name + ' ' + author.surname}
                                    <a>
                                        <i
                                            onClick={() => { quitAuthor(author.id) }}
                                            className="pl-2 fas fa-trash-alt">
                                        </i>
                                    </a>
                                </li>

                            )}
                        </ul>
                    )}

                </Transition>

                <input
                    type="text"
                    name="searchAuthor"
                    className=" __input-form"
                    id="searchAuthor"
                    aria-describedby="authorHelp"
                    required
                    onChange={handleChange}
                    value={book.searchAuthor}
                />

                {loading && book.searchAuthor ?

                    <Preloader />

                    :

                    <div className="pt-2 __search-results">

                        {book.searchAuthor && authorResult && authorResult.map(result =>

                            <SearchResultAuthor
                                data={result}
                                selectSearchAuthor={selectSearchAuthor}
                                key={result.id}

                            />

                        )}

                        {book.searchAuthor && !authorResult.length && <p>No hay resultados</p>}

                    </div>

                }

            </div>

        </>
    )
}

export default SearchByAuthor;
