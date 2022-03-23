import React from 'react';
import { NavLink } from 'react-router-dom'


class Menu_lateral extends React.Component{
    
    render(){
        return(
            <div className="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div className="navbar-header">
        <ul className="d-flex justify-content-center">
         <img className="img-fluid" src="\app-assets\images\logo\ama.png" height="59 px" width="110 px" />
          <li className="nav-item nav-toggle"><a className="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i className="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i className="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
      </div>
      <div className="shadow-bottom"></div>
      <div className="main-menu-content">
        <ul className="navigation " id="main-menu-navigation" data-menu="menu-navigation">
          <li className=" nav-item"><NavLink className="d-flex align-items-center" to='/tableau_de_bord'><i data-feather="home"></i><span className="menu-title text-truncate" data-i18n="Dashboards">Tableau de bord</span></NavLink>
          </li>
          <li className=" navigation-header"><span data-i18n="Apps &amp; Pages">Menu</span><i data-feather="more-horizontal"></i>
          </li>
          <li className=" nav-item"><NavLink className="d-flex align-items-center" to='/responsable'><i data-feather="user"></i><span className="menu-title text-truncate" data-i18n="User">Responsable</span></NavLink>
          </li>
          <li className="nav-item"><NavLink className="d-flex align-items-center" to='/roles'><i data-feather="shield"></i><span className="menu-title text-truncate" data-i18n="Roles &amp; Permission">Roles &amp; Permission</span></NavLink>
                  <ul className="menu-content">
                    <li><NavLink className="d-flex align-items-center" to=""><i data-feather="circle"></i><span className="menu-item text-truncate" data-i18n="Roles">Roles</span></NavLink>
                    </li>
                    <li><NavLink className="d-flex align-items-center" to=""><i data-feather="circle"></i><span className="menu-item text-truncate" data-i18n="Permission">Permission</span></NavLink>
                    </li>
                  </ul>
                </li>
                <li className="nav-item"><NavLink className="d-flex align-items-center" to='/recruitement'><i data-feather="eye"></i><span className="menu-title text-truncate" data-i18n="Feather">Recruitment</span></NavLink>
                </li>
                <li className="nav-item"><NavLink className="d-flex align-items-center" to='/department'><i data-feather="grid"></i><span className="menu-title text-truncate" data-i18n="Kanban">Département</span></NavLink>
                </li>
                <li className="nav-item"><NavLink className="d-flex align-items-center" to='/entretien'><i data-feather="briefcase"></i><span className="menu-title text-truncate" data-i18n="Components">Entretien</span></NavLink>
                </li>
                <li className="nav-item"><NavLink className="d-flex align-items-center" to='/rapports'><i data-feather="file-text"></i><span className="menu-title text-truncate" data-i18n="Invoice">Rapports</span></NavLink>
                </li>
                <li className="nav-item"><NavLink className="d-flex align-items-center" to='/email'><i data-feather="mail"></i><span className="menu-title text-truncate" data-i18n="Email">Email</span></NavLink>
                </li>
                <li className="nav-item"><NavLink className="d-flex align-items-center" to='/chat'><i data-feather="message-square"></i><span className="menu-title text-truncate" data-i18n="Chat">Chat</span></NavLink>
                </li>
                <li className="nav-item"><NavLink className="d-flex align-items-center" to='/calendrier'><i data-feather="calendar"></i><span className="menu-title text-truncate" data-i18n="Calendar">Calendrier</span></NavLink>
            </li>
        </ul>
      </div>
          </div>
        )
    }
}
export default Menu_lateral;