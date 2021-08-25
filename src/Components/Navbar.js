 import React from 'react';
 import Spadelogo from '../Spadelogo.png';

const Navbar = () => {
    const showsidemenu = (e)=>{
      const N3menulist = document.querySelector('.N3menulist');
      N3menulist.classList.toggle('showsidebar');
    }
    return (
        <div className="Navbar3">
           <div className="N3menu">
               <div class="hamb" onClick={showsidemenu}>☰</div>
               <div className="N3logo"><img src={Spadelogo} alt="logo" className="mainspadelogo"></img></div>
               <div className="N3menulist">
               <div>Home</div>
               <div>About</div>
               <div>Contact</div>
               <div>Blog</div>
               </div>
           </div>
           <div className="N3btns">
               <div className="registerbtn"> Register now</div>
           </div>
        </div>
    )
}

export default Navbar

