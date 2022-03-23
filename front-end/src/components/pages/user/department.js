import React from "react";

class Department extends React.Component{
    render(){
        return(
            <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
              <div class="content-header row">
              </div>
              <div class="content-body">
      <div class="row" id="table-hover-row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Departments</h4>
                <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span>Ajouter un department</span></button>
              </div>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Department</th>
                      <th>Nombre de candidatures reçues</th>
                      <th>Recruitment</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <span class="fw-bold">Ressource humaine</span>
                      </td>
                      <td>21</td>
      
                      <td><span class="badge rounded-pill badge-light-primary me-1">Ouvert</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                            <i data-feather="more-vertical"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                              <i data-feather="edit-2" class="me-50"></i>
                              <span>Edit</span>
                            </a>
                            <a class="dropdown-item" href="#">
                              <i data-feather="trash" class="me-50"></i>
                              <span>Delete</span>
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="fw-bold">IT</span>
                      </td>
                      <td>30</td>
                      <td><span class="badge rounded-pill badge-light-success me-1">Fermé</span></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                            <i data-feather="more-vertical"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                              <i data-feather="edit-2" class="me-50"></i>
                              <span>Edit</span>
                            </a>
                            <a class="dropdown-item" href="#">
                              <i data-feather="trash" class="me-50"></i>
                              <span>Delete</span>
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
          <div class="modal-content">
            <div class="modal-header bg-transparent">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pb-5">
              <div class="text-center mb-4">
                <h1 class="role-title">Add New Role</h1>
                <p>Set role permissions</p>
              </div>
              <form id="addRoleForm" class="row" onsubmit="return false">
                <div class="col-12">
                  <label class="form-label" for="modalRoleName">Role Name</label>
                  <input
                    type="text"
                    id="modalRoleName"
                    name="modalRoleName"
                    class="form-control"
                    placeholder="Enter role name"
                    tabindex="-1"
                    data-msg="Please enter role name"
                  />
                </div>
                <div class="col-12">
                  <h4 class="mt-2 pt-50">Role Permissions</h4>
                  <div class="table-responsive">
                    <table class="table table-flush-spacing">
                      <tbody>
                        <tr>
                          <td class="text-nowrap fw-bolder">
                            Administrator Access
                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="Allows a full access to the system">
                              <i data-feather="info"></i>
                            </span>
                          </td>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="selectAll" />
                              <label class="form-check-label" for="selectAll"> Select All </label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">User Management</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                <label class="form-check-label" for="userManagementRead"> Read </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="userManagementWrite" />
                                <label class="form-check-label" for="userManagementWrite"> Write </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="userManagementCreate" />
                                <label class="form-check-label" for="userManagementCreate"> Create </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">Content Management</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="contentManagementRead" />
                                <label class="form-check-label" for="contentManagementRead"> Read </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="contentManagementWrite" />
                                <label class="form-check-label" for="contentManagementWrite"> Write </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="contentManagementCreate" />
                                <label class="form-check-label" for="contentManagementCreate"> Create </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">Disputes Management</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="dispManagementRead" />
                                <label class="form-check-label" for="dispManagementRead"> Read </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="dispManagementWrite" />
                                <label class="form-check-label" for="dispManagementWrite"> Write </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="dispManagementCreate" />
                                <label class="form-check-label" for="dispManagementCreate"> Create </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">Database Management</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="dbManagementRead" />
                                <label class="form-check-label" for="dbManagementRead"> Read </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="dbManagementWrite" />
                                <label class="form-check-label" for="dbManagementWrite"> Write </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="dbManagementCreate" />
                                <label class="form-check-label" for="dbManagementCreate"> Create </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">Financial Management</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="finManagementRead" />
                                <label class="form-check-label" for="finManagementRead"> Read </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="finManagementWrite" />
                                <label class="form-check-label" for="finManagementWrite"> Write </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="finManagementCreate" />
                                <label class="form-check-label" for="finManagementCreate"> Create </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">Reporting</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="reportingRead" />
                                <label class="form-check-label" for="reportingRead"> Read </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="reportingWrite" />
                                <label class="form-check-label" for="reportingWrite"> Write </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="reportingCreate" />
                                <label class="form-check-label" for="reportingCreate"> Create </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">API Control</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="apiRead" />
                                <label class="form-check-label" for="apiRead"> Read </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="apiWrite" />
                                <label class="form-check-label" for="apiWrite"> Write </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="apiCreate" />
                                <label class="form-check-label" for="apiCreate"> Create </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">Repository Management</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="repoRead" />
                                <label class="form-check-label" for="repoRead"> Read </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="repoWrite" />
                                <label class="form-check-label" for="repoWrite"> Write </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="repoCreate" />
                                <label class="form-check-label" for="repoCreate"> Create </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">Payroll</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="payrollRead" />
                                <label class="form-check-label" for="payrollRead"> Read </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="payrollWrite" />
                                <label class="form-check-label" for="payrollWrite"> Write </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="payrollCreate" />
                                <label class="form-check-label" for="payrollCreate"> Create </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-12 text-center mt-2">
                  <button type="submit" class="btn btn-primary me-1">Submit</button>
                  <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                    Discard
                  </button>
                </div>
              </form>
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
export default Department;