import React from "react";

class Entretien extends React.Component{
    render(){
        return(
                <div class="app-content content ">
        
        <section id="basic-datatable">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <table class="datatables-basic table">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                      <th>id</th>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Date</th>
                      <th>Tel</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
          <div class="modal modal-slide-in fade" id="modals-slide-in">
            <div class="modal-dialog sidebar-sm">
              <form class="add-new-record modal-content pt-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                  <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                </div>
                <div class="modal-body flex-grow-1">
                  <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                    <input
                      type="text"
                      class="form-control dt-full-name"
                      id="basic-icon-default-fullname"
                      placeholder="Foulen Fouleni"
                      aria-label="Foulen Fouleni"
                    />
                  </div>
                  <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-post">Post</label>
                    <input
                      type="text"
                      id="basic-icon-default-post"
                      class="form-control dt-post"
                      placeholder="Web Developer"
                      aria-label="Web Developer"
                    />
                  </div>
                  <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-email">Email</label>
                    <input
                      type="text"
                      id="basic-icon-default-email"
                      class="form-control dt-email"
                      placeholder="john.doe@example.com"
                      aria-label="john.doe@example.com"
                    />
                    <small class="form-text"> You can use letters, numbers & periods </small>
                  </div>
                  <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                    <input
                      type="text"
                      class="form-control dt-date"
                      id="basic-icon-default-date"
                      placeholder="MM/DD/YYYY"
                      aria-label="MM/DD/YYYY"
                    />
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="basic-icon-default-salary">Salary</label>
                    <input
                      type="text"
                      id="basic-icon-default-salary"
                      class="form-control dt-salary"
                      placeholder="$12000"
                      aria-label="$12000"
                    />
                  </div>
                  <button type="button" class="btn btn-primary data-submit me-1">Submit</button>
                  <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </section>
        
                </div>
            
        )
    }
}
export default Entretien;