document.addEventListener('DOMContentLoaded', function() {
  var modal = document.getElementById('modal-sucesso');
  var botaoFechar = document.querySelector('#modal-sucesso .fechar');
  botaoFechar.addEventListener('click', function() {
    modal.classList.remove('mostrar');
  });
});
