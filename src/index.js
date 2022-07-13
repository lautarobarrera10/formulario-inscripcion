const inscripcionButtons = document.querySelectorAll('.inscripcion-button');
const modal = document.querySelector('.modal');
const closeButton = document.querySelector('.close-button');
const formContainer = document.querySelector('.form-container');
const closeButtonContainer = document.querySelector('.close-button-container');

closeButton.addEventListener('click', () => modal.classList.remove('active'));
modal.addEventListener('click', (event) => {
    if(event.target === modal){
        modal.classList.remove('active');
    }
});

inscripcionButtons.forEach(button => {
    button.addEventListener('click', () => modal.classList.add('active'));
});