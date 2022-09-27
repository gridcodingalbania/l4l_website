import { wp_ajax } from '../wp';
class RegisterForm{
    constructor(){
        this.form = document.querySelector("#contact_form");
        if(this.form){
            this.form.addEventListener('submit', (e) => this.handleForm(e));
        }
        this.modal = document.querySelector('.modal');
        if(this.modal){
            document.querySelector('.modal-close').addEventListener('click', (e) => this.closeModal());
        }
    }
    handleForm(e){
        e.preventDefault();
        const data = {
            first_name : this.form.querySelector('#first_name').value,
            last_name : this.form.querySelector('#last_name').value,
            email : this.form.querySelector('#email').value,
            privacy: this.form.querySelector('#privacy').checked
        }
        wp_ajax('save_form').post({
            data : data
        }).then(response =>
            this.handleResponse(response.data)
        )
    }
    
    handleResponse(response){
        if(response.errors){
            for (const[key, value] of Object.entries(response.errors)){
               let input = this.form.querySelector('#'+key);
               let errorEl = input.parentElement;
               if(key == 'privacy'){
                errorEl = errorEl.parentElement;
               }
               if(input){
                errorEl.querySelector('.error').innerHTML = value;
               }
               input.addEventListener('focus', () => {
                errorEl.querySelector('.error').innerHTML = '';
               });
            }
        }
        if(response.success){
            const modal = document.querySelector('.modal');
            if(modal){
                this.showModal();
            }
        }
    }

    showModal(){
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        if(body && modal){
            modal.classList.toggle('opacity-100')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }
    }
    
    
    closeModal(){
        const body = document.querySelector('body');
        this.modal.classList.remove('opacity-100');
        this.modal.classList.add('opacity-0');
        body.classList.remove('modal-active');
        window.location.reload();
    }
    
}
export default RegisterForm;