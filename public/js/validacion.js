document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const reqLength = document.getElementById('req-length');
    const reqUpper = document.getElementById('req-upper');
    const reqLower = document.getElementById('req-lower');
    const reqNumber = document.getElementById('req-number');
    const reqSymbol = document.getElementById('req-symbol');

    //ESTO ES PARA LOS MENSAJITOS DE LOS CAMPOS
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })



    passwordInput.addEventListener('keyup', function() {
        const password = passwordInput.value;

        // Requisito 1: Longitud (al menos 8 caracteres)
        if (password.length >= 8) {
            reqLength.classList.add('valid');
            reqLength.classList.remove('invalid');
        } else {
            reqLength.classList.add('invalid');
            reqLength.classList.remove('valid');
        }

        // Requisito 2: Mayúscula (al menos una)
        if (/[A-Z]/.test(password)) {
            reqUpper.classList.add('valid');
            reqUpper.classList.remove('invalid');
        } else {
            reqUpper.classList.add('invalid');
            reqUpper.classList.remove('valid');
        }

        // Requisito 3: Minúscula (al menos una)
        if (/[a-z]/.test(password)) {
            reqLower.classList.add('valid');
            reqLower.classList.remove('invalid');
        } else {
            reqLower.classList.add('invalid');
            reqLower.classList.remove('valid');
        }

        // Requisito 4: Número (al menos uno)
        if (/[0-9]/.test(password)) {
            reqNumber.classList.add('valid');
            reqNumber.classList.remove('invalid');
        } else {
            reqNumber.classList.add('invalid');
            reqNumber.classList.remove('valid');
        }

        // Requisito 5: Símbolo (al menos uno)
        if (/[!@#$%^&*]/.test(password)) {
            reqSymbol.classList.add('valid');
            reqSymbol.classList.remove('invalid');
        } else {
            reqSymbol.classList.add('invalid');
            reqSymbol.classList.remove('valid');
        }
    });
});