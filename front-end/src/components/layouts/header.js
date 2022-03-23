import React from 'react';


class Header extends React.Component{
    
    render(){
        return(
            <div>
                    <nav className="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
      <div className="navbar-container d-flex content">
        <div className="bookmark-wrapper d-flex align-items-center">
          <ul className="nav navbar-nav d-xl-none">
            <li className="nav-item"><a className="nav-link menu-toggle" href="#"><i className="ficon" data-feather="menu"></i></a></li>
          </ul>
          <ul className="nav navbar-nav bookmark-icons">
            <li className="nav-item d-none d-lg-block"><a className="nav-link" href="app-email.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i className="ficon" data-feather="mail"></i></a></li>
            <li className="nav-item d-none d-lg-block"><a className="nav-link" href="app-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i className="ficon" data-feather="message-square"></i></a></li>
            <li className="nav-item d-none d-lg-block"><a className="nav-link" href="app-calendar.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendrier"><i className="ficon" data-feather="calendar"></i></a></li>
          </ul>
        </div>
        <ul className="nav navbar-nav align-items-center ms-auto">
          <li className="nav-item d-none d-lg-block"><a className="nav-link nav-link-style"><i className="ficon" data-feather="moon"></i></a></li>
          <li className="nav-item dropdown dropdown-notification me-25"><a className="nav-link" href="#" data-bs-toggle="dropdown"><i className="ficon" data-feather="bell"></i><span className="badge rounded-pill bg-danger badge-up">5</span></a>
            <ul className="dropdown-menu dropdown-menu-media dropdown-menu-end">
              <li className="dropdown-menu-header">
                <div className="dropdown-header d-flex">
                  <h4 className="notification-title mb-0 me-auto">Notifications</h4>
                  <div className="badge rounded-pill badge-light-primary">6 New</div>
                </div>
              </li>
              <li className="scrollable-container media-list"><a className="d-flex" href="#">
                  <div className="list-item d-flex align-items-start">
                    <div className="me-1">
                      <div className="avatar"><img src="../../../app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32" height="32"/></div>
                    </div>
                    <div className="list-item-body flex-grow-1">
                      <p className="media-heading"><span className="fw-bolder">Congratulation Sam 🎉</span>winner!</p><small className="notification-text"> Won the monthly best seller badge.</small>
                    </div>
                  </div></a><a className="d-flex" href="#">
                  <div className="list-item d-flex align-items-start">
                    <div className="me-1">
                      <div className="avatar"><img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32" height="32"/></div>
                    </div>
                    <div className="list-item-body flex-grow-1">
                      <p className="media-heading"><span className="fw-bolder">New message</span>&nbsp;received</p><small className="notification-text"> You have 10 unread messages</small>
                    </div>
                  </div></a><a className="d-flex" href="#">
                  <div className="list-item d-flex align-items-start">
                    <div className="me-1">
                      <div className="avatar bg-light-danger">
                        <div className="avatar-content">MD</div>
                      </div>
                    </div>
                    <div className="list-item-body flex-grow-1">
                      <p className="media-heading"><span className="fw-bolder">Revised Order 👋</span>&nbsp;checkout</p><small className="notification-text"> MD Inc. order updated</small>
                    </div>
                  </div></a>
                <div className="list-item d-flex align-items-center">
                  <h6 className="fw-bolder me-auto mb-0">System Notifications</h6>
                  <div className="form-check form-check-primary form-switch">
                    <input className="form-check-input" id="systemNotification" type="checkbox"  checked={ this.props.checked } onChange={ this.checkboxHandler }/>
                    <label className="form-check-label" htmlFor="systemNotification"></label>
                  </div>
                </div><a className="d-flex" href="#">
                  <div className="list-item d-flex align-items-start">
                    <div className="me-1">
                      <div className="avatar bg-light-danger">
                        <div className="avatar-content"><i className="avatar-icon" data-feather="x"></i></div>
                      </div>
                    </div>
                    <div className="list-item-body flex-grow-1">
                      <p className="media-heading"><span className="fw-bolder">Server down</span>&nbsp;registered</p><small className="notification-text"> USA Server is down due to high CPU usage</small>
                    </div>
                  </div></a><a className="d-flex" href="#">
                  <div className="list-item d-flex align-items-start">
                    <div className="me-1">
                      <div className="avatar bg-light-success">
                        <div className="avatar-content"><i className="avatar-icon" data-feather="check"></i></div>
                      </div>
                    </div>
                    <div className="list-item-body flex-grow-1">
                      <p className="media-heading"><span className="fw-bolder">Sales report</span>&nbsp;generated</p><small className="notification-text"> Last month sales report generated</small>
                    </div>
                  </div></a><a className="d-flex" href="#">
                  <div className="list-item d-flex align-items-start">
                    <div className="me-1">
                      <div className="avatar bg-light-warning">
                        <div className="avatar-content"><i className="avatar-icon" data-feather="alert-triangle"></i></div>
                      </div>
                    </div>
                    <div className="list-item-body flex-grow-1">
                      <p className="media-heading"><span className="fw-bolder">High memory</span>&nbsp;usage</p><small className="notification-text"> BLR Server using high memory</small>
                    </div>
                  </div></a>
              </li>
              <li className="dropdown-menu-footer"><a className="btn btn-primary w-100" href="#">Read all notifications</a></li>
            </ul>
          </li>
          <li className="nav-item dropdown dropdown-user"><a className="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div className="user-nav d-sm-flex d-none"><span className="user-name fw-bolder">John Doe</span><span className="user-status">Admin</span></div><span className="avatar"><img className="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"/><span className="avatar-status-online"></span></span></a>
            <div className="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a className="dropdown-item" href="page-profile.html"><i className="me-50" data-feather="user"></i> Profile</a><a className="dropdown-item" href="app-email.html"><i className="me-50" data-feather="mail"></i> Inbox</a><a className="dropdown-item" href="app-chat.html"><i className="me-50" data-feather="message-square"></i> Chats</a>
              <div className="dropdown-divider"></div><a className="dropdown-item" href="page-account-settings-account.html"><i className="me-50" data-feather="settings"></i> Settings</a><a className="dropdown-item" href="auth-login-cover.html"><i className="me-50" data-feather="power"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <ul className="main-search-list-defaultlist d-none">
      <li className="d-flex align-items-center"><a href="#">
          <h6 className="section-label mt-75 mb-0">Files</h6></a></li>
      <li className="auto-suggestion"><a className="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div className="d-flex">
            <div className="me-75"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"/></div>
            <div className="search-data">
              <p className="search-data-title mb-0">Two new item submitted</p><small className="text-muted">Marketing Manager</small>
            </div>
          </div><small className="search-data-size me-50 text-muted">&apos;17kb</small></a></li>
      <li className="auto-suggestion"><a className="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div className="d-flex">
            <div className="me-75"><img src="../../../app-assets/images/icons/jpg.png" alt="png" height="32"/></div>
            <div className="search-data">
              <p className="search-data-title mb-0">52 JPG file Generated</p><small className="text-muted">FontEnd Developer</small>
            </div>
          </div><small className="search-data-size me-50 text-muted">&apos;11kb</small></a></li>
      <li className="auto-suggestion"><a className="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div className="d-flex">
            <div className="me-75"><img src="../../../app-assets/images/icons/pdf.png" alt="png" height="32"/></div>
            <div className="search-data">
              <p className="search-data-title mb-0">25 PDF File Uploaded</p><small className="text-muted">Digital Marketing Manager</small>
            </div>
          </div><small className="search-data-size me-50 text-muted">&apos;150kb</small></a></li>
      <li className="auto-suggestion"><a className="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div className="d-flex">
            <div className="me-75"><img src="../../../app-assets/images/icons/doc.png" alt="png" height="32"/></div>
            <div className="search-data">
              <p className="search-data-title mb-0">Anna_Strong.doc</p><small className="text-muted">Web Designer</small>
            </div>
          </div><small className="search-data-size me-50 text-muted">&apos;256kb</small></a></li>
      <li className="d-flex align-items-center"><a href="#">
          <h6 className="section-label mt-75 mb-0">Members</h6></a></li>
      <li className="auto-suggestion"><a className="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
          <div className="d-flex align-items-center">
            <div className="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"/></div>
            <div className="search-data">
              <p className="search-data-title mb-0">John Doe</p><small className="text-muted">UI designer</small>
            </div>
          </div></a></li>
      <li className="auto-suggestion"><a className="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
          <div className="d-flex align-items-center">
            <div className="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"/></div>
            <div className="search-data">
              <p className="search-data-title mb-0">Michal Clark</p><small className="text-muted">FontEnd Developer</small>
            </div>
          </div></a></li>
      <li className="auto-suggestion"><a className="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
          <div className="d-flex align-items-center">
            <div className="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"/></div>
            <div className="search-data">
              <p className="search-data-title mb-0">Milena Gibson</p><small className="text-muted">Digital Marketing Manager</small>
            </div>
          </div></a></li>
      <li className="auto-suggestion"><a className="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
          <div className="d-flex align-items-center">
            <div className="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"/></div>
            <div className="search-data">
              <p className="search-data-title mb-0">Anna Strong</p><small className="text-muted">Web Designer</small>
            </div>
          </div></a></li>
    </ul>
    <ul className="main-search-list-defaultlist-other-list d-none">
      <li className="auto-suggestion justify-content-between"><a className="d-flex align-items-center justify-content-between w-100 py-50">
          <div className="d-flex justify-content-start"><span className="me-75" data-feather="alert-circle"></span><span>No results found.</span></div></a></li>
    </ul>
            </div>
        )
    }
}
export default Header;