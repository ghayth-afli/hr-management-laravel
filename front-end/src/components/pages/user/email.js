import React from "react";

class Email extends React.Component{
    render(){
        return(
            <div className="app-content content email-application">
            <div className="content-overlay"></div>
            <div className="header-navbar-shadow"></div>
            <div className="content-area-wrapper container-xxl p-0">
              <div className="sidebar-left">
                <div className="sidebar"><div className="sidebar-content email-app-sidebar">
        <div className="email-app-menu">
          <div className="form-group-compose text-center compose-btn">
            <button
              type="button"
              className="compose-email btn btn-primary w-100"
              data-bs-backdrop="false"
              data-bs-toggle="modal"
              data-bs-target="#compose-mail"
            >
              Compose
            </button>
          </div>
          <div className="sidebar-menu-list">
            <hr />
            <div className="list-group list-group-labels">
              <a href="#" className="list-group-item list-group-item-action"
                ><span className="bullet bullet-sm bullet-success me-1"></span>Candidats Acceptés</a
              >
              <a href="#" className="list-group-item list-group-item-action"
                ><span className="bullet bullet-sm bullet-primary me-1"></span>Candidats Invités</a
              >
              <a href="#" className="list-group-item list-group-item-action"
                ><span className="bullet bullet-sm bullet-danger me-1"></span>Candidats Refusés</a
              >
            </div>
          </div>
        </div>
      </div>
      
                </div>
              </div>
              <div className="content-right">
                <div className="content-wrapper container-xxl p-0">
                  <div className="content-header row">
                  </div>
                  <div className="content-body"><div className="body-content-overlay"></div>
      <div className="email-app-list">
        <div className="app-fixed-search d-flex align-items-center">
          <div className="sidebar-toggle d-block d-lg-none ms-1">
            <i data-feather="menu" className="font-medium-5"></i>
          </div>
          <div className="d-flex align-content-center justify-content-between w-100">
            <div className="input-group input-group-merge">
              <span className="input-group-text"><i data-feather="search" className="text-muted"></i></span>
              <input
                type="text"
                className="form-control"
                id="email-search"
                placeholder="Search email"
                aria-label="Search..."
                aria-describedby="email-search"
              />
            </div>
          </div>
        </div>
        <div className="app-action">
          <div className="action-left">
            <div className="form-check selectAll">
              <input type="checkbox" className="form-check-input" id="selectAllCheck" />
              <label className="form-check-label fw-bolder ps-25" htmlFor="selectAllCheck">Select All</label>
            </div>
          </div>
          <div className="action-right">
            <ul className="list-inline m-0">
              <li className="list-inline-item mail-delete">
                <span className="action-icon"><i data-feather="trash-2" className="font-medium-2"></i></span>
              </li>
            </ul>
          </div>
        </div>
        <div className="email-user-list">
          <ul className="email-media-list">
            <li className="d-flex user-mail mail-read">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" alt="avatar img holder" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck1" />
                    <label className="form-check-label" htmlFor="customCheck1"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Tonny Deep</h5>
                    <span className="text-truncate">🎯 Focused impactful open system </span>
                  </div>
                  <div className="mail-meta-item">
                    <span className="me-50 bullet bullet-success bullet-sm"></span>
                    <span className="mail-date">4:14 AM</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="text-truncate mb-0">
                    Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders
                    demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                    fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron
                    unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited
                    inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose
                  </p>
                </div>
              </div>
            </li>
            <li className="d-flex user-mail">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-17.jpg" alt="Generic placeholder image" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck2" />
                    <label className="form-check-label" htmlFor="customCheck2"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Louis Welch</h5>
                    <span className="text-truncate">Thanks, Let's do it.🤩</span>
                  </div>
                  <div className="mail-meta-item">
                    <span className="me-50 bullet bullet-danger bullet-sm"></span>
                    <span className="mail-date">2:15 AM</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="mb-0 text-truncate">
                    Hi, Can we connect today? Cheesecake croissant jelly beans. Cake caramels pie chocolate. Muffin jujubes
                    dragée carrot cake candy icing bonbon. Danish caramels topping oat cake sweet roll liquorice tootsie roll
                    halvah.Chocolate bar jujubes jelly-o tart tiramisu croissant dragée cupcake jelly.
                  </p>
                </div>
              </div>
            </li>
            <li className="d-flex user-mail mail-read">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Generic placeholder image" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck3" />
                    <label className="form-check-label" htmlFor="customCheck3"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Envato Market</h5>
                    <span className="text-truncate">👋 You have new comment...</span>
                  </div>
                  <div className="mail-meta-item">
                    <span className="me-50 bullet bullet-success bullet-sm"></span>
                    <span className="mail-date">2:15 AM</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="mb-0 text-truncate">
                    Hi There, Cotton candy jujubes ice cream candy. Oat cake jelly jelly brownie danish marzipan gummi bears.
                    Cupcake sweet bonbon tart. Sweet croissant jelly beans dragée chocolate cake gingerbread topping chocolate
                    bar lemon drops.
                  </p>
                </div>
              </div>
            </li>
            <li className="d-flex user-mail mail-read">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Generic placeholder image" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck4" />
                    <label className="form-check-label" htmlFor="customCheck4"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Sarah Montgomery</h5>
                    <span className="text-truncate">Your New UI.</span>
                  </div>
                  <div className="mail-meta-item">
                    <span className="me-50 bullet bullet-warning bullet-sm"></span>
                    <span className="mail-date">Yesterday</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="text-truncate mb-0">
                    Hello, Everything looks good. Pastry marshmallow sugar plum. Gingerbread bonbon fruitcake gummi bears
                    wafer chocolate cake gummies tart ice cream. Danish topping biscuit dessert donut dessert. Chocolate
                    jelly-o topping marzipan fruitcake.
                  </p>
                </div>
              </div>
            </li>
            <li className="d-flex user-mail">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="Generic placeholder image" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck5" />
                    <label className="form-check-label" htmlFor="customCheck5"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Ardis Balderson</h5>
                    <span className="text-truncate mb-0">Focused impactful open system</span>
                  </div>
                  <div className="mail-meta-item">
                    <i data-feather="paperclip"></i>
                    <span className="mx-50 bullet bullet-warning bullet-sm"></span>
                    <span className="mail-date">15 July</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="mb-0 text-truncate">
                    Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders
                    demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                    fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron
                    unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited
                    inblow somewhatly ilioperoneal forrard palfrey
                  </p>
                </div>
              </div>
            </li>
            <li className="d-flex user-mail">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Generic placeholder image" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck6" />
                    <label className="form-check-label" htmlFor="customCheck6"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Modestine Spat</h5>
                    <span className="text-truncate mb-0">Profound systemic alliance 🎉</span>
                  </div>
                  <div className="mail-meta-item">
                    <span className="mx-50 bullet bullet-primary bullet-sm"></span>
                    <span className="mail-date">11 July</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="mb-0 text-truncate">
                    Hey John, Parthenopean logeion chipwood tonsilitic cockleshell substance Stilbum dismayed tape Alderamin
                    Phororhacos bridewain zoonomia lujaurite printline extraction weanedness charterless splitmouth bindoree
                    unfit philological Pythonissa scintillescentcinchonism sabbaton thyrocricoid dissuasively schematograph
                    immerse pristane stimulability unreligion uncomplemental uteritis nef bavenite Hachiman teleutosorus
                    anterolateral infirmate Nahani Hyla barile farthing
                  </p>
                </div>
              </div>
            </li>
            <li className="d-flex user-mail mail-read">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="Generic placeholder image" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck7" />
                    <label className="form-check-label" htmlFor="customCheck7"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Eb Begg</h5>
                    <span className="text-truncate mb-0">Organized value-added model</span>
                  </div>
                  <div className="mail-meta-item">
                    <span className="mx-50 bullet bullet-success bullet-sm"></span>
                    <span className="mail-date">1 July</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="mb-0 text-truncate">
                    Hello Sir, Lituola restrengthen bathofloric manciple decaffeinize Debby aciliated eatage proscribe
                    prejurisdiction buttle quacky hyposecretion indemonstrableness schelling lymphopathy consumptivity
                    nonappointment filminess spumiform erotogenicity equestrianize boneflower interlardationallocate ponzite
                    cote guilder tuff strind blamefully cocaine monstrously apocalyptically sublanate cherubimical
                    oligoplasmia Miltonian hydrazyl unbeset statured Unami Cordeau strouthiocamelian geitjie
                  </p>
                </div>
              </div>
            </li>
            <li className="d-flex user-mail mail-read">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="Generic placeholder image" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck8" />
                    <label className="form-check-label" htmlFor="customCheck8"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Waldemar Mannering</h5>
                    <span className="text-truncate mb-0">Quality-focused methodical flexibility</span>
                  </div>
                  <div className="mail-meta-item">
                    <span className="mx-50 bullet bullet-danger bullet-sm"></span>
                    <span className="mail-date">19 Jun</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="mb-0 text-truncate">
                    Hi John, wartproof ketoheptose incomplicate hyomental organal supermaterial monogene sophister nizamate
                    rightle multifilament phloroglucic overvehement boatloading derelictly probudgeting archantiquary
                    unknighted pallograph Volcanalia Jacobitiana ethyl neth Jugataenoumenalize irredential energeia
                    phlebotomist galp dactylitis unparticipated solepiece demure metarhyolite toboggan unpleased perilaryngeal
                    binoxalate rabbitry atomic duali dihexahedron Pseudogryphus boomboat obelisk
                  </p>
                </div>
              </div>
            </li>
            <li className="d-flex user-mail mail-read">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Generic placeholder image" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck9" />
                    <label className="form-check-label" htmlFor="customCheck9"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Louetta Esses</h5>
                    <span className="text-truncate mb-0">Company Report</span>
                  </div>
                  <div className="mail-meta-item">
                    <span className="mx-50 bullet bullet-primary bullet-sm"></span>
                    <span className="mail-date">2 Jun</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="mb-0 text-truncate">
                    Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton
                    candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love
                    carrot cake topping I love. Sweet candy I love
                  </p>
                </div>
              </div>
            </li>
            <li className="d-flex user-mail">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="Generic placeholder image" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck10" />
                    <label className="form-check-label" htmlFor="customCheck10"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Tressa Gass</h5>
                    <span className="text-truncate mb-0">Theme Update</span>
                  </div>
                  <div className="mail-meta-item">
                    <span className="mx-50 bullet bullet-primary bullet-sm"></span>
                    <span className="mail-date">29 May</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="mb-0 text-truncate">
                    Hello John,Chocolate bar chupa chups sweet roll chocolate muffin macaroon liquorice tart. Carrot cake
                    topping jelly-o cupcake sweet apple pie jelly I love. Chocolate cake I love dessert carrot cake tootsie
                    roll chocolate I love. Tootsie roll pie marzipan sesame snaps.
                  </p>
                </div>
              </div>
            </li>
            <li className="d-flex user-mail">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" alt="Generic placeholder image" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck11" />
                    <label className="form-check-label" htmlFor="customCheck11"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Tommy Sicilia</h5>
                    <span className="text-truncate mb-0">Thanks, Let's do it.</span>
                  </div>
                  <div className="mail-meta-item">
                    <span className="mx-50 bullet bullet-warning bullet-sm"></span>
                    <span className="mail-date">17 May</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="mb-0 text-truncate">
                    Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton
                    candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love
                    carrot cake topping I love. Sweet candy I love.
                  </p>
                </div>
              </div>
            </li>
            <li className="d-flex user-mail mail-read">
              <div className="mail-left pe-50">
                <div className="avatar">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-17.jpg" alt="Generic placeholder image" />
                </div>
                <div className="user-action">
                  <div className="form-check">
                    <input type="checkbox" className="form-check-input" id="customCheck12" />
                    <label className="form-check-label" htmlFor="customCheck12"></label>
                  </div>
                  <span className="email-favorite"><i data-feather="star"></i></span>
                </div>
              </div>
              <div className="mail-body">
                <div className="mail-details">
                  <div className="mail-items">
                    <h5 className="mb-25">Heather Howell</h5>
                    <span className="text-truncate mb-0">Thanks, Let's do it.</span>
                  </div>
                  <div className="mail-meta-item">
                    <span className="mx-50 bullet bullet-warning bullet-sm"></span>
                    <span className="mail-date">21 Mar</span>
                  </div>
                </div>
                <div className="mail-message">
                  <p className="mb-0 text-truncate">
                    Hi John,Biscuit lemon drops marshmallow. Marzipan carrot cake soufflé. Toffee tiramisu pudding cotton
                    candy powder jujubes pie. Topping danish sweet croissant liquorice lemon drops cake oat cake brownie.
                    Cupcake liquorice tart tootsie roll sugar plum chocolate bar oat cake sweet roll.
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <div className="no-results">
            <h5>No Items Found</h5>
          </div>
        </div>
      </div>

      <div className="email-app-details">
        <div className="email-detail-header">
          <div className="email-header-left d-flex align-items-center">
            <span className="go-back me-1"><i data-feather="chevron-left" className="font-medium-4"></i></span>
            <h4 className="email-subject mb-0">Focused open system 😃</h4>
          </div>
          <div className="email-header-right ms-2 ps-1">
            <ul className="list-inline m-0">

              
              <li className="list-inline-item">
                <span className="action-icon"><i data-feather="mail" className="font-medium-2"></i></span>
              </li>
              <li className="list-inline-item">
                <span className="action-icon"><i data-feather="trash" className="font-medium-2"></i></span>
              </li>
              <li className="list-inline-item email-prev">
                <span className="action-icon"><i data-feather="chevron-left" className="font-medium-2"></i></span>
              </li>
              <li className="list-inline-item email-next">
                <span className="action-icon"><i data-feather="chevron-right" className="font-medium-2"></i></span>
              </li>
            </ul>
          </div>
        </div>
        <div className="email-scroll-area">
          <div className="row">
            <div className="col-12">
              <div className="email-label">
                <span className="mail-label badge rounded-pill badge-light-primary">Company</span>
              </div>
            </div>
          </div>
          <div className="row">
            <div className="col-12">
              <div className="card">
                <div className="card-header email-detail-head">
                  <div className="user-details d-flex justify-content-between align-items-center flex-wrap">
                    <div className="avatar me-75">
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-9.jpg"
                        alt="avatar img holder"
                        width="48"
                        height="48"
                      />
                    </div>
                    <div className="mail-items">
                      <h5 className="mb-0">Carlos Williamson</h5>
                      <div className="email-info-dropup dropdown">
                        <span
                          role="button"
                          className="dropdown-toggle font-small-3 text-muted"
                          id="card_top01"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          carlos@gmail.com
                        </span>
                        <div className="dropdown-menu" aria-labelledby="card_top01">
                          <table className="table table-sm table-borderless">
                            <tbody>
                              <tr>
                                <td className="text-end">From:</td>
                                <td>carlos@gmail.com</td>
                              </tr>
                              <tr>
                                <td className="text-end">To:</td>
                                <td>johndoe@ow.ly</td>
                              </tr>
                              <tr>
                                <td className="text-end">Date:</td>
                                <td>14:58, 29 Aug 2020</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="mail-meta-item d-flex align-items-center">
                    <small className="mail-date-time text-muted">29 Aug, 2020, 14:58</small>
                    <div className="dropdown ms-50">
                      <div
                        role="button"
                        className="dropdown-toggle hide-arrow"
                        id="email_more"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i data-feather="more-vertical" className="font-medium-2"></i>
                      </div>
                      <div className="dropdown-menu dropdown-menu-end" aria-labelledby="email_more">
                        <div className="dropdown-item"><i data-feather="corner-up-left" className="me-50"></i>Reply</div>
                        <div className="dropdown-item"><i data-feather="corner-up-right" className="me-50"></i>Forward</div>
                        <div className="dropdown-item"><i data-feather="trash-2" className="me-50"></i>Delete</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="card-body mail-message-wrapper pt-2">
                  <div className="mail-message">
                    <p className="card-text">Hey John,</p>
                    <p className="card-text">
                      bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen
                      Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                      fulfillment scientifical Pianokoto Chelonia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="row">
            <div className="col-12">
              <div className="card">
                <div className="card-header email-detail-head">
                  <div className="user-details d-flex justify-content-between align-items-center flex-wrap">
                    <div className="avatar me-75">
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-18.jpg"
                        alt="avatar img holder"
                        width="48"
                        height="48"
                      />
                    </div>
                    <div className="mail-items">
                      <h5 className="mb-0">Ardis Balderson</h5>
                      <div className="email-info-dropup dropdown">
                        <span
                          role="button"
                          className="dropdown-toggle font-small-3 text-muted"
                          id="dropdownMenuButton200"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          abaldersong@utexas.edu
                        </span>
                        <div className="dropdown-menu" aria-labelledby="dropdownMenuButton200">
                          <table className="table table-sm table-borderless">
                            <tbody>
                              <tr>
                                <td className="text-end">From:</td>
                                <td>abaldersong@utexas.edu</td>
                              </tr>
                              <tr>
                                <td className="text-end">To:</td>
                                <td>johndoe@ow.ly</td>
                              </tr>
                              <tr>
                                <td className="text-end">Date:</td>
                                <td>4:25 AM 13 Jan 2018</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="mail-meta-item d-flex align-items-center">
                    <small className="mail-date-time text-muted">17 May, 2020, 4:14</small>
                    <div className="dropdown ms-50">
                      <div
                        role="button"
                        className="dropdown-toggle hide-arrow"
                        id="email_more_2"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i data-feather="more-vertical" className="font-medium-2"></i>
                      </div>
                      <div className="dropdown-menu dropdown-menu-end" aria-labelledby="email_more_2">
                        <div className="dropdown-item"><i data-feather="corner-up-left" className="me-50"></i>Reply</div>
                        <div className="dropdown-item"><i data-feather="corner-up-right" className="me-50"></i>Forward</div>
                        <div className="dropdown-item"><i data-feather="trash-2" className="me-50"></i>Delete</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="card-body mail-message-wrapper pt-2">
                  <div className="mail-message">
                    <p className="card-text">Hey John,</p>
                    <p className="card-text">
                      bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen
                      Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                      fulfillment scientifical Pianokoto Chelonia
                    </p>
                    <p className="card-text">
                      Freudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable
                      Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard
                      palfrey Satyrinae outfreeman melebiose
                    </p>
                  </div>
                </div>
                <div className="card-footer">
                  <div className="mail-attachments">
                    <div className="d-flex align-items-center mb-1">
                      <i data-feather="paperclip" className="font-medium-1 me-50"></i>
                      <h5 className="fw-bolder text-body mb-0">2 Attachments</h5>
                    </div>
                    <div className="d-flex flex-column">
                      <a href="#" className="mb-50">
                        <img src="../../../app-assets/images/icons/doc.png" className="me-25" alt="png" height="18" />
                        <small className="text-muted fw-bolder">interdum.docx</small>
                      </a>
                      <a href="#">
                        <img src="../../../app-assets/images/icons/jpg.png" className="me-25" alt="png" height="18" />
                        <small className="text-muted fw-bolder">image.png</small>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="row">
            <div className="col-12">
              <div className="card">
                <div className="card-body">
                  <div className="d-flex justify-content-between">
                    <h5 className="mb-0">
                      Click here to
                      <a href="#">Reply</a>
                      or
                      <a href="#">Forward</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div className="modal modal-sticky" id="compose-mail" data-bs-keyboard="false">
        <div className="modal-dialog modal-lg modal-dialog-scrollable">
          <div className="modal-content p-0">
            <div className="modal-header">
              <h5 className="modal-title">Compose Mail</h5>
              <div className="modal-actions">
                <a href="#" className="text-body me-75"><i data-feather="minus"></i></a>
                <a href="#" className="text-body me-75 compose-maximize"><i data-feather="maximize-2"></i></a>
                <a className="text-body" href="#" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></a>
              </div>
            </div>
            <div className="modal-body flex-grow-1 p-0">
              <form className="compose-form">
                <div className="compose-mail-form-field select2-primary">
                  <label htmlFor="email-to" className="form-label">Type: </label>
                  <div className="flex-grow-1">
                    <select className="select2 form-select w-100" id="email-to" multiple>
                      <option value="Jane Foster">Candidats Acceptés</option>
                      <option value="Donna Frank">Candidats Invités</option>
                      <option value="Gabrielle Robertson">Candidats Refusés</option>
                    </select>
                  </div>
                </div>

                <div className="compose-mail-form-field">
                  <label htmlFor="emailSubject" className="form-label">Sujet: </label>
                  <input type="text" id="emailSubject" className="form-control" placeholder="Sujet" name="emailSubject" />
                </div>
                <div id="message-editor">
                  <div className="editor" data-placeholder="Type message..."></div>
                  <div className="compose-editor-toolbar">
                    <span className="ql-formats me-0">
                      <select className="ql-font">
                        <option selected>Sailec Light</option>
                        <option value="sofia">Sofia Pro</option>
                        <option value="slabo">Slabo 27px</option>
                        <option value="roboto">Roboto Slab</option>
                        <option value="inconsolata">Inconsolata</option>
                        <option value="ubuntu">Ubuntu Mono</option>
                      </select>
                    </span>
                    <span className="ql-formats me-0">
                      <button className="ql-bold"></button>
                      <button className="ql-italic"></button>
                      <button className="ql-underline"></button>
                      <button className="ql-link"></button>
                    </span>
                  </div>
                </div>
                <div className="compose-footer-wrapper">
                  <div className="btn-wrapper d-flex align-items-center">
                    <div className="btn-group dropup me-1">
                      <button type="button" className="btn btn-primary">Appliquer</button>
                      <button
                        type="button"
                        className="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-reference="parent"
                      >
                        <span className="visually-hidden">Toggle Dropdown</span>
                      </button>
                    </div>
                    <div className="email-attachement">
                      <label htmlFor="file-input" className="form-label">
                        <i data-feather="paperclip" width="17" height="17" className="ms-50"></i>
                      </label>
      
                      <input id="file-input" type="file" className="d-none" />
                    </div>
                  </div>
                  <div className="footer-action d-flex align-items-center">
                    <div className="dropup d-inline-block">
                      <i
                        className="font-medium-2 cursor-pointer me-50"
                        data-feather="more-vertical"
                        role="button"
                        id="composeActions"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                      </i>
                      <div className="dropdown-menu dropdown-menu-end" aria-labelledby="composeActions">
                        <a className="dropdown-item" href="#">
                          <span className="align-middle">Add Label</span>
                        </a>
                        <a className="dropdown-item" href="#">
                          <span className="align-middle">Plain text mode</span>
                        </a>
                        <div className="dropdown-divider"></div>
                        <a className="dropdown-item" href="#">
                          <span className="align-middle">Print</span>
                        </a>
                        <a className="dropdown-item" href="#">
                          <span className="align-middle">Check Spelling</span>
                        </a>
                      </div>
                    </div>
                    <i data-feather="trash" className="font-medium-2 cursor-pointer" data-bs-dismiss="modal"></i>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
                  </div>
                </div>
              </div>
            </div>
          </div>
            
        )
    }
}
export default Email;