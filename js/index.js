var s = 0
$(document).click(function(){
  console.log(event.target.id);
  if (event.target.id != "navopen"){
    console.log("debug")
    $(".dropOpened").removeClass("dropOpened").addClass("dropClosed");
    $("#navclose").removeAttr("id").attr("id","navopen");
    s += 1
  } else if (s % 2 == 0){
    $(".dropOpened").removeClass("dropOpened").addClass("dropClosed");
    $("#navclose").removeAttr("id").attr("id","navopen");
  }
})
function drop1(){
  $(".dropOpened").removeClass("dropOpened").addClass("dropClosed");
  $(".dropdown1").removeClass("dropClosed").addClass("dropOpened");
  s += 1
}
function drop2(){
  $(".dropOpened").removeClass("dropOpened").addClass("dropClosed");
  $(".dropdown2").removeClass("dropClosed").addClass("dropOpened");
  s += 1
}
function drop3(){
  $(".dropOpened").removeClass("dropOpened").addClass("dropClosed");
  $(".dropdown3").removeClass("dropClosed").addClass("dropOpened");
  s += 1
}
