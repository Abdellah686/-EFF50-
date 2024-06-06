import React, { useState, useEffect } from 'react';
import './App.css';
import ListeEmployees from './components/ListeEmployees';
import SearchForm from './components/SearchForm'

function App() {
  const [employees, setEmployees] = useState([]);

  useEffect(() => {
    fetch('db.json')
      .then(res => res.json())
      .then(data => setEmployees(data))
  }, []);

  return (
    <>
      <ListeEmployees employees={employees} />
      <SearchForm employees={employees}/>
    </>
  );
}

export default App;
