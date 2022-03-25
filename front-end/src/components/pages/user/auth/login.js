import React from "react";
import axios from 'axios' ;

export default class Login extends React.Component{

         

         
      handleSubmit(event) {
        event.preventDefault();
        const input = new FormData(event.target);
        const data = {
            email: input.get('email'),
            password: input.get('password')
        }
        //console.log(data);
        axios.post('http://127.0.0.1:8000/api/login',data)
        .then(res => {
            console.log(res)
        })
        .catch(err => {
            console.log(err)
        })
    };
      
      

    render(){
        return(
            <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">

            <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2">
          <div class="card mb-0">
            <div class="card-body">
              <a href="index.html" class="brand-logo">
                <img class="img-fluid" src="\app-assets\images\logo\ama.png" alt="Login V2"/>
              </a>

              <h4 class="card-title mb-1">Bienvenue sur Ama Group ! 👋</h4>
              <p class="card-text mb-2">Veuillez vous connecter à votre compte</p>

              <form class="auth-login-form mt-2" onSubmit={this.handleSubmit}>
                <div class="mb-1">
                  <label for="login-email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="login-email"
                    name="email"
                    placeholder="john@example.com"
                    aria-describedby="login-email"
                    tabindex="1"
                    autofocus
                  />

                </div>
                <div class="mb-1">
                  <label for="login-password" class="form-label">Mot de passe</label>
                  <div class="input-group input-group-merge form-password-toggle">
                    <input
                      type="password"
                      class="form-control form-control-merge"
                      id="login-password"
                      name="password"
                      tabindex="2"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="login-password"
                    />
                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                  </div>
                </div>
                <div class="mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <button class="btn btn-primary w-100" tabindex="4">S'identifier </button>
              </form>
            </div>
          </div>
        </div>
        </div>

        </div>
      </div>
            </div>
            </body>
        )
    }
}