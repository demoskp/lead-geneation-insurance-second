$ ( document ).ready (function(){
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('generate-319');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();

});
