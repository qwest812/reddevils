$(".size").on("click", function (){
    var thiss = $(this);
    thiss.parent().find(".size").removeClass("active-size")
    thiss.addClass("active-size");
});

$(".item-good-buy").on("click",function (){
    console.log($(this));
});