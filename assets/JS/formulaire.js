document.addEventListener('DOMContentLoaded', function () {
  // une constante non modifiable formulaire
  const formulaire = document.querySelector('.formulaire');
  console.log(formulaire);

  // une constante bouton de type submit 
  const btnForm = document.querySelector('.button-form button');
  console.log(btnForm);

  const inputName = document.querySelector('input#name');
  const inputEmail = document.querySelector('input#mail');
  const textarea = document.querySelector('textarea#msg');

  console.log(inputName);
  console.log(inputEmail);
  console.log(textarea);
})