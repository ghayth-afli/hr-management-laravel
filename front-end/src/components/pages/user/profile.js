import React from "react";

class Profile extends React.Component{
    render(){
        return(
            <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
              <div class="content-body"><div class="row">
        <div class="col-12">
      
          <div class="card">
            <div class="card-header border-bottom">
              <h4 class="card-title">Profile</h4>
            </div>
            <div class="card-body py-2 my-25">
              <div class="d-flex">
                <a href="#" class="me-25">
                  <img
                    src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                    id="account-upload-img"
                    class="uploadedAvatar rounded me-50"
                    alt="profile image"
                    height="100"
                    width="100"
                  />
                </a>
                <div class="d-flex align-items-end mt-75 ms-1">
                  <div>
                    <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                    <input type="file" id="account-upload" hidden accept="image/*" />
                    <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                    <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                  </div>
                </div>
              </div>
              <form class="validate-form mt-2 pt-50">
                <div class="row">
                  <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="accountFirstName">Nom</label>
                    <input
                      type="text"
                      class="form-control"
                      id="accountFirstName"
                      name="firstName"
                      placeholder="Fouleni"
                      value="John"
                      data-msg="Please enter first name"
                    />
                  </div>
                  <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="accountLastName">Prenom</label>
                    <input
                      type="text"
                      class="form-control"
                      id="accountLastName"
                      name="lastName"
                      placeholder="Foulen"
                      value="Doe"
                      data-msg="Please enter last name"
                    />
                  </div>
                  <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="accountEmail">Email</label>
                    <input
                      type="email"
                      class="form-control"
                      id="accountEmail"
                      name="email"
                      placeholder="Email"
                      value="Foulen@gmail.com"
                    />
                  </div>
                  <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="accountOrganization">Entreprise</label>
                    <input
                      type="text"
                      class="form-control"
                      id="accountOrganization"
                      name="organization"
                      placeholder="Organization name"
                      value="Ama"
                    />
                  </div>
                  <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="accountPhoneNumber">Numéro de téléphone</label>
                    <input
                      type="text"
                      class="form-control account-number-mask"
                      id="accountPhoneNumber"
                      name="phoneNumber"
                      placeholder="Tel"
                      value="75 712 237"
                    />
                  </div>
                  <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="accountAddress">Address</label>
                    <input type="text" class="form-control" id="accountAddress" name="address" placeholder="Your Address" />
                  </div>
                  <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="accountState">État</label>
                    <input type="text" class="form-control" id="accountState" name="state" placeholder="State" />
                  </div>
                  <div class="col-12 col-sm-6 mb-1">
                    <label for="language" class="form-label">Langue</label>
                    <select id="language" class="select2 form-select">
                      <option value="">Choisir la langue</option>
                      <option value="en">English</option>
                      <option value="fr">French</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-1 me-1">Sauvegarder</button>
                    <button type="reset" class="btn btn-outline-secondary mt-1">Annuler</button>
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
            
        )
    }
}
export default Profile;