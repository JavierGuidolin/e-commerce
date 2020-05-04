import React, { useState, useEffect } from 'react';

import { Title } from '../Reusable/Titles/Titles'
import Admin from './Admin/Admin'

import './AdminList.css';
import swal from 'sweetalert';

const AdminList = () => {

    const header = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const [admins, setAdmins] = useState([]);
    const [updateAdmins, setUpdateAdmins] = useState(false);

    useEffect(() => {
        getAdmins();
    }, [updateAdmins]);

    let getAdmins = () => {
        // setLoading(true);
        fetch('/api/admins/all')
            .then(response => response.json())
            .then(data => {
                setAdmins(data)
                // setLoading(false);
            })
            .catch(error => console.log(error));
    }


    let deleteAdmin = (id, name) => {

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
            title: '¿Esta seguro de eliminar el administrador?',
            text: name,
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {

                    fetch('/api/admins/delete', data)
                        .then(response => response.json())
                        .then(data => {
                            data.success &&
                                swal("El admin ha sido eliminado!", {
                                    icon: "success",
                                })
                            setUpdateAdmins(!updateAdmins);

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
                text="Listado de administradores"
                icon="fas fa-user"
            />


            <table className="table">
                <thead>
                    <tr>
                        <th scope="col">Administrador</th>
                        <th scope="col">Email</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        admins && admins.map(admin =>
                            <Admin key={admin.id} admin={admin} deleteAdmin={deleteAdmin} />
                        )
                    }
                </tbody>
            </table>

        </section>
    )
}

export default AdminList;
