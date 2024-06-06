import React from 'react'

const ListeEmployees = ({ employees }) => {
    return (
        <>
            <h1>ListeEmployees</h1>
            <table border={1}>
                <thead>
                    <tr>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>POSTE</th>
                        <th>DEPARTEMENT</th>
                    </tr>
                </thead>
                <tbody>
                    {employees.map((emp, i) => (
                        <tr key={i}>
                            <td>{emp.nomEmp}</td>
                            <td>{emp.prenomEmp}</td>
                            <td>{emp.poste}</td>
                            <td>{emp.department.nomDep}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </>
    )
}

export default ListeEmployees