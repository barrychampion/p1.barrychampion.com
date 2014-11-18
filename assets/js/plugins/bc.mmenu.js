$(document).ready(function() {
  $(".bc-mmenu").mmenu({
     // options
  }, {
     // configuration
     offCanvas: {
        pageNodetype: ".wrap"
     }
  });
  $(".btn-bc-mmenu").click(function() {
     $(".bc-mmenu").trigger("open.mm");
  });
});