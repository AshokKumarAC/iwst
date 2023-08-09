    $(document).on("click", ".naccs .menu1 div", function() {
      var numberIndex = $(this).index();
    
      if (!$(this).is("active")) {
        $(".naccs .menu1 div").removeClass("active");
        $(".naccs ul li").removeClass("active");
    
        $(this).addClass("active");
        $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");
    
        var listItemHeight = $(".naccs ul")
          .find("li:eq(" + numberIndex + ")")
          .innerHeight();
        $(".naccs ul").height(listItemHeight + "px");
      }
    });
