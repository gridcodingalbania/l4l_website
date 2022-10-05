import { wp_ajax } from "../wp";
class Login {
    constructor() {
        this.form = document.querySelector("#login_form");
        if (this.form) {
            this.form.addEventListener('submit', (e) => this.handleForm(e));
        }
    }
    handleForm(e) {
        e.preventDefault();
        console.log(e)
        const data = {
            email: this.form.querySelector('#email').value,
            password: this.form.querySelector('#password').value,
        }
        wp_ajax('login').post({
            data: data
        }).then(response =>
            this.handleResponse(response.data)
        )
    }

    handleResponse(response) {
        if (response.errors) {
            for (const [key, value] of Object.entries(response.errors)) {
                let input = this.form.querySelector('#' + key);
                let errorEl = input.parentElement;
                if (key == 'privacy') {
                    errorEl = errorEl.parentElement;
                }
                if (input) {
                    errorEl.querySelector('.error').innerHTML = value;
                }
                input.addEventListener('focus', () => {
                    errorEl.querySelector('.error').innerHTML = '';
                });
            }
        }
        if (response.success) {
            window.location.href("/");
        }
    }

}

export default Login