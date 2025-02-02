$("#darkTrigger").click(function(){
    if ($("body").hasClass("dark")){
      $("body").removeClass("dark");
    }
    else{
      $("body").addClass("dark");
    }
  });
  
  $(document).ready(function () {
    var d = new Date();
    var n = d.getHours();
  
    if(n > 17 || n < 8){
      $("body").addClass("dark");
    }
  });