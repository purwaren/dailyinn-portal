var sync1 = $("#mg-gallery-1");
var sync2 = $("#mg-gallery-1-thumb");
sync1.owlCarousel({
    navigation : true,
    singleItem : true,
    pagination: false,
    afterAction : syncPosition,
    navigationText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],

});

sync2.owlCarousel({
    items : 3,
    itemsDesktop: [1199,3],
    itemsDesktopSmall: [979,3],
    itemsTablet: [768,3],
    itemsMobile: [479,3],
    navigation : false,
    pagination: false,
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    afterInit : function(el){
        el.find(".owl-item").eq(0).addClass("synced");
    }

});

function syncPosition(el){
    var current = this.currentItem;
    $("#mg-gallery-1-thumb")
        .find(".owl-item")
        .removeClass("synced")
        .eq(current)
        .addClass("synced")
    if($("#mg-gallery-1-thumb").data("owlCarousel") !== undefined){
        center(current)
    }
}

sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
});

function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
        if(num === sync2visible[i]){
            var found = true;
        }
    }

    if(found===false){
        if(num>sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", num - sync2visible.length+2)
        }else{
            if(num - 1 === -1){
                num = 0;
            }
            sync2.trigger("owl.goTo", num);
        }
    } else if(num === sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
        sync2.trigger("owl.goTo", num-1)
    }

}