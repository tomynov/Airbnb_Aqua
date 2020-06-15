/*------------------------------------------------------
                PAGE BIEN
------------------------------------------------------*/

let loginBtn = document.getElementById('loginBtn');

//Declaration de la modal
let modalLogin = document.getElementById('modalLogin');
let overlayModal = document.getElementById('overlayModal');

// Event au click du bouton
loginBtn.addEventListener('click', function(){
    // modalLogin.innerHTML = modalLogin; 
    modalLogin.style.display = "block";
    modalLogin.style.top = "50%";
    // overlayModal.style.display = "block";
    overlayModal.classList.add('is-open');
});

let btn_popUp = document.getElementById('btn_popUp');

btn_popUp.addEventListener('click', function(){
    modalLogin.style.display = "none";
    // modalLogin.style.left = "-999px";
    // overlayModal.style.display = "none";
    overlayModal.classList.remove('is-open');
});
