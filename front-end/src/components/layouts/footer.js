import React from 'react';


class Footer extends React.Component{
    render(){
        return(
            <div>
               <footer className="footer footer-static footer-light">
                <p className="clearfix mb-0"><span className="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2021<span className="d-none d-sm-inline-block">, All rights Reserved</span></span></p>
                </footer>
                <button className="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button> 
            </div>
        )
    }
}
export default Footer;