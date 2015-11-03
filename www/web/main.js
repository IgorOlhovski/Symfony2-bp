$(document).ready(function()
{



$('select').selectpicker();
$(".post_ajax").submit(function(e)
{

$(".button-ajax").attr("src", "/ajax-loader.gif");
$(".button-ajax").css("visibility", "visible");
e.preventDefault();
var target = $(this).attr("action");
var met = $(this).attr("method");
var FormData = $(this).serialize();
$.ajax
({
type: met,
url: target,
data: FormData,
success: function (html)
{
$(".alertsuccess").html(html);
$(".button-ajax").attr("src", "/done.png");
setTimeout(function(){document.location.reload();}, 200);
}
})
});

$("body > .responsive-container").css("min-height", $(window).height()-29);
$('a, input').hover(function()
{
$(this).fadeTo(500, 0.8);
}, function() {
$(this).fadeTo(500, 1);
});

$("#editbutton").click(function()
{
$(".editname").fadeToggle("fast");
});





function ajax_link(elements,htmls,urls)
{
elements.unbind('click');
$.get(urls, function(data)
{
elements.html(data);
elements.bind('click', function(e)
{
e.preventDefault();
ajax_link(elements,htmls,elements.children().attr("href"))
});
});
}

var val1;
var val;
var newvals = 0;
function ers()
{
newvals = 0;
$(".ranger").each(function()
{
val = parseFloat($(this).val());
newvals = newvals + val*0.89;
});
newval(newvals);
}
function newval(newvals)
{
$("#powers b").html(Math.round(newvals));
}
$(".ranger").change(function()
{
ers();
});
ers();
$(".ajax_fav").each(function()
{
var cur_element = $(this);
var tour_name = $(this).attr("title");
tour_name = "/favorites/get/Tournament/"+tour_name;
ajax_link(cur_element, cur_element, tour_name);
});
});





function convertToSlug(Text)
{
    return Text
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'')
        ;
}

$(function() {
  var el, newPoint, newPlace, offset;
  $("input[type='range']").change(function() {
    el = $(this);
    width = el.width();
    newPoint = (el.val() - el.attr("min")) / (el.attr("max") - el.attr("min"));
    offset = -1.3;
    if (newPoint < 0) { newPlace = 0;  }
    else if (newPoint > 1) { newPlace = width; }
    else { newPlace = width * newPoint + offset; offset -= newPoint;}
    el
      .next("output")
      .css({
        left: newPlace,
        marginLeft: offset + "%"
      })
      .text(el.val());
  })
  .trigger('change');
});
