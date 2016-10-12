$(document).click(function(){
  if (event.target.id != "navopen" & event.target.id != "navclose"){
    $(".dropOpened").removeClass("dropOpened").addClass("dropClosed");
    $("#navclose").removeAttr("id").attr("id","navopen");
  };
})
function drop1(){
  if (event.target.id == "navopen"){
    $(".dropOpened").removeClass("dropOpened").addClass("dropClosed");
    $(".dropdown1").removeClass("dropClosed").addClass("dropOpened");
    $("#navclose").removeAttr("id").attr("id","navopen");
    $(event.target).removeAttr("id").attr("id","navclose");
  }
  else if (event.target.id == "navclose"){
    $("#navclose").removeAttr("id").attr("id","navopen");
    $(".dropOpened").removeClass("dropOpened").addClass("dropClosed");
  }
}
