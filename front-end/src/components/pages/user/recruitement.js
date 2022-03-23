import React from "react";

class Recruitement extends React.Component{
    render(){
        return(
            <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
              <div class="content-header row">
              </div>
              <div class="content-body">
                <section class="app-user-list">
                  <div class="card">
                    <div class="card-datatable table-responsive pt-0">
                      <table class="user-list-table table">
                        <thead class="table-light">
                          <tr>
                            <th></th>
                            <th>Poste</th>
                            <th>Department</th>
                            <th>Nombre de candidatures</th>
                            <th>Créé</th>
                            <th>Statut</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                      <div class="modal-dialog">
                        <form class="add-new-user modal-content pt-0">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                          <div class="modal-header mb-1">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un responsable </h5>
                          </div>
                          <div class="modal-body flex-grow-1">
                            <div class="mb-1">
                              <label class="form-label" for="basic-icon-default-fullname">Nom</label>
                              <input
                                type="text"
                                class="form-control dt-full-name"
                                id="basic-icon-default-fullname"
                                placeholder="John Doe"
                                name="user-fullname"
                              />
                            </div>
                            <div class="mb-1">
                              <label class="form-label" for="basic-icon-default-email">Email</label>
                              <input
                                type="text"
                                id="basic-icon-default-email"
                                class="form-control dt-email"
                                placeholder="john.doe@example.com"
                                name="email"
                              />
                            </div>
                            <div class="mb-1">
                              <label class="form-label" for="basic-icon-default-contact">Mot de passe</label>
                              <input
                                type="password"
                                id="basic-icon-default-contact"
                                class="form-control dt-contact"
                                name="password"
                              />
                            </div>
                            <div class="mb-1">
                              <label class="form-label" for="user-role">Role</label>
                              <select id="user-role" class="select2 form-select">
                                <option value="subscriber">Subscriber</option>
                                <option value="editor">Editor</option>
                                <option value="maintainer">Maintainer</option>
                                <option value="author">Author</option>
                                <option value="admin">Admin</option>
                              </select>
                            </div>
                            <button type="submit" class="btn btn-primary me-1 data-submit">Soumettre</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
            
        )
    }
}
export default Recruitement;