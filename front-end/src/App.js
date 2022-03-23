//import logo from './logo.svg';
import './App.css';
import React from 'react';
import { BrowserRouter as Router, Route, Routes, NavLink } from 'react-router-dom'
import Header from './components/layouts/header';
import Footer from './components/layouts/footer';
//import Responsable from './components/pages/user/responsable';
import Table from './components/pages/user/dataTable/table';
//import Tables from './components/pages/user/tables/data-tables/advance';
import Calendar from './components/pages/user/calendrier';
import Candidats from './components/pages/user/candidats';
import Chat from './components/pages/user/chat';
import Department from './components/pages/user/department';
import Email from './components/pages/user/email';
import Entretien from './components/pages/user/entretien';
import Rapports from './components/pages/user/rapports';
import Recruitement from './components/pages/user/recruitement';
import Roles from './components/pages/user/roles';
import Tableau_de_bord from './components/pages/user/tableau de bord';
import Menu_lateral from './components/layouts/menu_lateral';
function App() {
  return (
    <Router>
      <Header/>
      <Menu_lateral/>
      <Routes>
          <Route exact path='/calendrier' element={<Calendar/>} />
          <Route exact path='/candidats' element={<Candidats/>} />
          <Route exact path='/chat' element={<Chat/>} />
          <Route exact path='/department' element={<Department/>} />
          <Route exact path='/email' element={<Email/>} />
          <Route exact path='/entretien' element={<Entretien/>} />
          <Route exact path='/rapports' element={<Rapports/>} />
          <Route exact path='/responsable' element={< Table />}/>
          <Route exact path='/recruitement' element={< Recruitement />}/>
          <Route exact path='/roles' element={<Roles/>} />
          <Route exact path='/tableau_de_bord' element={<Tableau_de_bord/>} />
      </Routes>
      <Footer/>
    </Router>
  );
}

export default App;
