import React from 'react'
import './Admin.css'

const Admin = (props) => {

    const { admin, deleteAdmin } = props;

    return (
        <tr>
            <td>{admin.name + ' ' + admin.surname}</td>
            <td>{admin.email}</td>
            <td className="text-center">
                <i
                    className="fas fa-trash-alt"
                    onClick={() => deleteAdmin(admin.id, admin.name + ' ' + admin.surname)}>
                </i>
            </td>
        </tr>
    )
}

export default Admin
