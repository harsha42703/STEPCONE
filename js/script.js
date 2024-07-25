const form = document.getElementById('form');
const username = document.getElementById('JNTU');
const name = document.getElementById('name');
const email = document.getElementById('email');
const m_number = document.getElementById('m-number');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
    e.preventDefault();
    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};
const isValidJNTU=usernameValue=>{
    const re = /^[1-2]\d{4}[A,a]\d{2}[A-Ka-k0-9]\d{1}$/;
    return re.test(usernameValue);
}
const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const m_numberValue = m_number.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === '') {
        setError(username, 'JNTU number is required');
    } 
    else if (!isValidJNTU(usernameValue)) {
        setError(username, 'Provide a valid JNTU Number');
    }
    else {
        setSuccess(username);
    }
    if(nameValue === '') {
        setError(name, 'Your name is required');
    } else {
        setSuccess(name);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }
    if(m_numberValue=== '') {
        setError(m_number, 'Mobile number is required');
    } else if (m_numberValue.length < 10 || m_numberValue.length > 10) {
        setError(m_number, 'Provide a valid Mobile number');
    } else {
        setSuccess(m_number);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
    }

};
