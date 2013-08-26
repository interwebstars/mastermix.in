// toggle add/about pane

var aboutclosed = true;
var addclosed = true;

$("#toggleabout").click(function() {
  if (aboutclosed) {
    $("#toggleabout").addClass("open");
    $("#toggleadd").removeClass("open");
    $("main").addClass("toright");
    $("main").removeClass("toleft");
    $("#add").removeClass("open");
    $("#about").addClass("open");
    aboutclosed = false;
    addclosed = true;
  } else {
    $("#toggleabout").removeClass("open");
    $("#toggleabout").blur();
    $("#about").removeClass("open");
    $("main").removeClass("toright");
    aboutclosed = true;
  };
});

$("#toggleadd").click(function() {
  if (addclosed) {
    $("#toggleadd").addClass("open");
    $("#toggleabout").removeClass("open");
    $("main").addClass("toleft");
    $("main").removeClass("toright");
    $("#about").removeClass("open");
    $("#add").addClass("open");
    addclosed = false;
    aboutclosed = true;
  } else {
    $("#toggleadd").removeClass("open");
    $("#toggleadd").blur();
    $("#add").removeClass("open");
    $("main").removeClass("toleft");
    addclosed = true;
  };
});