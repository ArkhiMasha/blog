/* global $ */

document.addEventListener("DOMContentLoaded", function(event) { 
    var deleteButtons = $(".delete_button");
    deleteButtons.click(function() {
        $.ajax({
          method: "DELETE",
          url: "delete.php",
          data: { id: $( this ).attr('data-id') }
        })
          .done(function( msg ) {
            var idd = "#card" + String(msg); 
            idd = idd.replace(/\s/g, '');
            $(idd).remove();
          });
    });
});
