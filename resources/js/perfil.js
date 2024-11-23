const buttonEditar = document.getElementById('button-editar');
const formBio = document.getElementById('form-bio');

buttonEditar.addEventListener('click', event => {
    formBio.style.display = formBio.style.display === 'none' ? 'block' : 'none';
});