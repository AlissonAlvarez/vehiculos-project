
//   const btnAlquila = document.getElementById('btnAlquila');
//   const btnRegistra = document.getElementById('btnRegistra');
//   const formAlquila = document.getElementById('formAlquila');
//   const formRegistra = document.getElementById('formRegistra');

//   btnAlquila.addEventListener('click', (e) => {
//     e.preventDefault();
//     formAlquila.style.display = formAlquila.style.display === 'none' ? 'block' : 'none';
//     formRegistra.style.display = 'none';
//   });

//   btnRegistra.addEventListener('click', (e) => {
//     e.preventDefault();
//     formRegistra.style.display = formRegistra.style.display === 'none' ? 'block' : 'none';
//     formAlquila.style.display = 'none';
//   });

//   // Cerrar si se hace clic fuera
//   document.addEventListener('click', (e) => {
//     if (!e.target.closest('.dropdown') && !e.target.closest('.formulario-desplegable')) {
//       formAlquila.style.display = 'none';
//       formRegistra.style.display = 'none';
//     }
//   });

document.getElementById("btnAlquila").addEventListener("click", function (e) {
  e.preventDefault();
  const modal = new bootstrap.Modal(document.getElementById("loginModal"));
  modal.show();
});
document.getElementById("btnRegistra").addEventListener("click", function (e) {
  e.preventDefault();
  const modal = new bootstrap.Modal(document.getElementById("loginModal"));
  modal.show();
});
