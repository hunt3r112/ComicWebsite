document.getElementById('login').onclick = function () {
    loginModalDropDown();
};
document.getElementById('modal-close-button').onclick = function () {
    closeModal();
};
document.getElementById('fade-mask-mask').onclick = function () {
    closeModal();
};
document.getElementById('login-form-account').onkeyup = function () {
    toggleLoginButton();
};
document.getElementById('login-form-password').onkeyup = function () {
    toggleLoginButton();
};

function loginModalDropDown() {
    document.getElementById('fade-mask').style.opacity = 1;
    document.getElementById('fade-mask').style.visibility = 'visible';
    document.getElementById('login-modal').style.top = '70px';
}
function closeModal() {
    document.getElementById('fade-mask').style.opacity = 0;
    document.getElementById('fade-mask').style.visibility = 'hidden';
    document.getElementById('login-modal').style.top = '-520px';
}
function toggleLoginButton() {
    var accountText = document.getElementById('login-form-account').value;
    var passwordText = document.getElementById('login-form-password').value;
    if(accountText !== '' && passwordText !=='')
        document.getElementById('login-button').removeAttribute('disabled');
    else
        document.getElementById('login-button').setAttribute('disabled','disabled');
}
