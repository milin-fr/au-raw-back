var app = {
    init: function() {
      console.log(window.location.pathname);
      var all_links = [];
      $("nav").find("a").each(function(index, value) {
        all_links.push($(value).attr("href").split("/").pop());
      });
      $(all_links).each(function(index, value) {
          console.log(value);
      });
    }
  };
  
  $(app.init);
