$(".modalbttn").click(function() {
    $(".modalcontainer").fadeIn("slow");
    $(".modal").fadeIn("slow");
  });
  
  $(".close,.buttons").click(function() {
    $(".modalcontainer").fadeOut("slow");
    $(".modal").fadeOut("slow");
  });