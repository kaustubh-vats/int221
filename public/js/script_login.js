const currlocation = (document.URL == 'http://localhost:8000/in-hi/login/') ? 'hi' : 'en';

function inputfocused() {
    const label = document.getElementById("hero_label");
    label.style.display = "inline-block";
    label.style.animation = '';
    label.style.animation = 'pushup 0.2s ease-in forwards';
}
function inputfocused2() {
    const label = document.getElementById("hero_label2");
    const showBtn = document.getElementById("showPasswordBtn");
    showBtn.style.display = "inline-block";
    label.style.display = "inline-block";
    label.style.animation = '';
    label.style.animation = 'pushup 0.2s ease-in forwards';
}

function isValidEmail(email) {
    return String(email)
        .toLowerCase()
        .match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
};
function isValidPhone(phone) {
    return String(phone)
        .toLowerCase()
        .match(
            /^\d{10}$/
        );
}
function inputfocusout() {
    let inputEmail = document.getElementById("email");
    let warningLabel = document.getElementById("warning_label");
    let label = document.getElementById("hero_label");
    if (inputEmail.value == null || inputEmail.value == '') {
        label.style.animation = '';
        label.style.animation = 'pushup 0.2s ease-in reverse';
        label.style.display = "none";
        inputEmail.style.borderBottom = "2px solid #EF8317";
        warningLabel.style.display = "block";
        if (currlocation == 'en')
            warningLabel.innerHTML = "Email is required!";
        else if (currlocation == 'hi')
            warningLabel.innerHTML = "कृपया सही ईमेल या फ़ोन नंबर डालें.";
    } else {
        let isPhone = /^\d+$/.test(inputEmail.value);
        if (isPhone) {
            if (isValidPhone(inputEmail.value)) {
                inputEmail.style.borderBottom = "none";
                warningLabel.style.display = "none";
            }
            else {
                inputEmail.style.borderBottom = "2px solid #EF8317";
                warningLabel.style.display = "block";
                if (currlocation == 'en')
                    warningLabel.innerHTML = "Please enter a valid phone number.";
                else if (currlocation == 'hi')
                    warningLabel.innerHTML = 'कृपया सही फ़ोन नंबर डालें.';
            }
        } else {
            if (isValidEmail(inputEmail.value)) {
                inputEmail.style.borderBottom = "none";
                warningLabel.style.display = "none";
            }
            else {
                inputEmail.style.borderBottom = "2px solid #EF8317";
                warningLabel.style.display = "block";
                if (currlocation == 'en')
                    warningLabel.innerHTML = "Please enter a valid email address.";
                else if (currlocation == 'hi')
                    warningLabel.innerHTML = 'कृपया सही ईमेल एड्रेस डालें';
            }
        }
    }
    inputEmail.addEventListener('input', event => {
        let input_email = document.getElementById("email");
        let warning_label = document.getElementById("warning_label");
        if (input_email.value == null || input_email.value == '') {
            input_email.style.borderBottom = "2px solid #EF8317";
            warning_label.style.display = "block";
            if (currlocation == 'en')
                warning_label.innerHTML = "Email is required!";
            else if (currlocation == 'hi')
                warning_label.innerHTML = "कृपया सही ईमेल या फ़ोन नंबर डालें.";
        } else {
            let isPhone = /^\d+$/.test(input_email.value);
            if (isPhone) {
                if (isValidPhone(input_email.value)) {
                    input_email.style.borderBottom = "none";
                    warning_label.style.display = "none";
                }
                else {
                    input_email.style.borderBottom = "2px solid #EF8317";
                    warning_label.style.display = "block";
                    if (currlocation == 'en')
                        warning_label.innerHTML = "Please enter a valid phone number.";
                    else if (currlocation == 'hi')
                        warning_label.innerHTML = 'कृपया सही फ़ोन नंबर डालें.';
                }
            } else {
                if (isValidEmail(input_email.value)) {
                    input_email.style.borderBottom = "none";
                    warning_label.style.display = "none";
                }
                else {
                    input_email.style.borderBottom = "2px solid #EF8317";
                    warning_label.style.display = "block";
                    if (currlocation == 'en')
                        warning_label.innerHTML = "Please enter a valid email address.";
                    else if (currlocation == 'hi')
                        warning_label.innerHTML = 'कृपया सही ईमेल एड्रेस डालें';
                }
            }
        }
    });
}

function inputfocusout2() {
    let inputPass = document.getElementById("password");
    let warningLabel = document.getElementById("warning_label2");
    let label = document.getElementById("hero_label2");
    const showBtn = document.getElementById("showPasswordBtn");
    if(inputPass.value == null || inputPass.value == '') {
        label.style.animation = '';
        label.style.animation = 'pushup 0.2s ease-in reverse';
        label.style.display = "none";
        showBtn.style.display = "none";
    }
    if (inputPass.value==null || inputPass.value.length < 4 || inputPass.value.length > 60) {
        inputPass.style.borderBottom = "2px solid #EF8317";
        warningLabel.style.display = "block";
        if (currlocation == 'en')
            warningLabel.innerHTML = "Your password must contain between 4 and 60 characters.";
        else if (currlocation == 'hi')
            warningLabel.innerHTML = "आपके पासवर्ड में 4 से 60 के बीच कैरेक्टर होने चाहिए.";
    } else {
        inputPass.style.borderBottom = "none";
        warningLabel.style.display = "none";
    }
    inputPass.addEventListener('input', event => {
        const input_pass = document.getElementById("password");
        const warning_label = document.getElementById("warning_label2");
        if (input_pass.value==null || input_pass.value.length < 4 || input_pass.value.length > 60) {
            input_pass.style.borderBottom = "2px solid #EF8317";
            warning_label.style.display = "block";
            if (currlocation == 'en')
                warning_label.innerHTML = "Your password must contain between 4 and 60 characters.";
            else if (currlocation == 'hi')
                warning_label.innerHTML = "आपके पासवर्ड में 4 से 60 के बीच कैरेक्टर होने चाहिए.";
        } else {
            input_pass.style.borderBottom = "none";
            warning_label.style.display = "none";
        }
    });
}

function showPass(params) {
    let pass = document.getElementById("password");
    let passType = pass.getAttribute("type");
    if (passType == "password") {
        pass.setAttribute("type", "text");
        if (currlocation == 'hi') {
            params.innerHTML = 'छिपाएं';
        } else {
            params.innerHTML = 'Hide';
        }
    }
    else {
        pass.setAttribute("type", "password");
        if (currlocation == 'hi') {
            params.innerHTML = 'शो';
        } else {
            params.innerHTML = 'Show';
        }
    }
}
function showmore(params) {
    params.style.display = 'none';
    const expand = document.querySelector(".expand");
    expand.style.visibility = 'visible';
}
document.addEventListener('DOMContentLoaded', function () {
    const lang2 = document.getElementById("lang2");
    lang2.addEventListener('change', event => {
        if (lang2[lang2.selectedIndex].value == 'hi' && currlocation == 'en') {
            window.location.href = '/in-hi/';
        } else if (lang2[lang2.selectedIndex].value == 'en' && currlocation == 'hi') {
            window.location.href = '/';
        }
    });
});