import React, { useState } from 'react'

const SearchForm = ({ employees }) => {
    const [department, setDepartement] = useState('');
    const [results, setResults] = useState([]);

    function handleSearch(e) {
        e.preventDefault();
        const filteredEmployees = employees.filter(emp =>
            emp.department.nomDep.toLowerCase() === department.toLowerCase()
        );
        setResults(filteredEmployees);
    }


    return (
        <div>
            <h1>Search par Departement</h1>
            <form action="">
                <input type="text" id="department" value={department} onChange={(e) => (setDepartement(e.target.value))} />
                <button onClick={(e)=>(handleSearch(e))}>Search</button>
            </form>
            <div>
                <h5>Results</h5>
                <ul>
                    {results.map((emp,i) => (
                        <li key={i}>
                            {emp.nomEmp} {emp.prenomEmp}
                        </li>
                    ))}
                </ul>
            </div>
        </div>
    )
}

export default SearchForm