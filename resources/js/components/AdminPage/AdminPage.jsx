import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Switch, Route, Link } from 'react-router-dom';

import Logo from './Logo/Logo';
import OldSchoolMenuLink from '../Reusable/OldSchoolMenuLink/OldSchoolMenuLink';
import AddBook from '../BookForms/AddBook';
import EditBook from '../BookForms/EditBook';
import BookList from '../BookList/BookList';

import './AdminPage.css';

let AdminPage = () => {

    return (
        <div className="container">
            <div className="row">

                <Router>

                    <nav className="navbar col-12 col-md-4">

                        <ul className="navbar-nav mx-auto">

                            <li className="nav-item">
                                <Link to="/admin">
                                    <Logo />
                                </Link>
                            </li>

                            <li className="nav-item">
                                <OldSchoolMenuLink
                                    to="/book/list"
                                    label="Listado de Libros"
                                />
                            </li>

                            <li className="nav-item">
                                <OldSchoolMenuLink
                                    to="/book/add"
                                    label="Añadir Libro"
                                />
                            </li>

                            <li className="nav-item">
                                <OldSchoolMenuLink
                                    to="/author/add"
                                    label="Añadir Autor"
                                />
                            </li>

                        </ul>

                    </nav>

                    <Switch>

                        <Route path="/book/add">
                            <AddBook />
                        </Route>

                        <Route path="/book/edit/:id">
                            <EditBook />
                        </Route>

                        <Route path="/book/list">
                            <BookList />
                        </Route>

                        <Route path="/author/add">
                            Añadir author
                        </Route>

                        <Route path="/admin">
                            <BookList />
                        </Route>

                    </Switch>

                </Router>



            </div>
        </div>
    );

}

if (document.getElementById('root')) {
    ReactDOM.render(<AdminPage />, document.getElementById('root'));
}