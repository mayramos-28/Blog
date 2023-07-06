import './bootstrap';
import '../sass/app.scss'

    setTimeout(function() {   
        document.querySelector('#danger-alert')?.classList.remove("show");
        document.querySelector('#success-alert')?.classList.remove("show");
    }, 5000); 