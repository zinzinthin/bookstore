jQuery(document).ready(function($){

var path = window.location.pathname.split("/").pop();
if (path=='') {
	path='index.php';
  }
var target=$('a[href="'+path+'"]');
target.addClass('active');

//validation
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

});