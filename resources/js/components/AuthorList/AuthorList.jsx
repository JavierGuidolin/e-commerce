import React, { useState, useEffect } from 'react';

import { Title } from '../Reusable/Titles/Titles'
import Author from './Author/Author'

import './AuthorList.css';
import swal from 'sweetalert';

const AuthorList = () => {

    const header = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const [authors, setAuthors] = useState([]);
    const [updateAuthors, setUpdateAuthors] = useState(false);

    useEffect(() => {
        getAuthors();
    }, [updateAuthors]);

    let getAuthors = () => {
        // setLoading(true);
        fetch('/api/authors/alls')
            .then(response => response.json())
            .then(data => {
                setAuthors(data)
                // setLoading(false);
            })
            .catch(error => console.log(error));
    }


    let deleteAuthor = (id, name) => {

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
            title: '¿Esta seguro de eliminar el autor?',
            text: name,
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {

                    fetch('/api/authors/delete', data)
                        .then(response => response.json())
                        .then(data => {
                            data.success &&
                                swal("El autor ha sido eliminado!", {
                                    icon: "success",
                                })
                            setUpdateAuthors(!updateAuthors);
                        })
                        .catch(error => console.log(error));

                } else {
                    swal("La operación de eliminacion ha sido cancelada.");
                }
            });
    }



    return (
        <section className="col-12 col-md-8 col-lg-8">
            <Title
                text="Listado de Autores"
                icon="fas fa-paragraph"
            />


            <table className="table">
                <thead>
                    <tr>
                        <th scope="col">Author</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        authors && authors.map(author =>
                            <Author key={author.id} author={author} deleteAuthor={deleteAuthor} />
                        )
                    }
                </tbody>
            </table>

        </section>
    )
}

export default AuthorList;
