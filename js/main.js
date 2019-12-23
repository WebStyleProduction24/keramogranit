$(function(){

    $('#open__color').on('click', function() {
        $('#close__color').slideToggle(100, function(){
            if( $(this).css('display') === "block"){
                $(this).removeAttr('style');
            }
        });

    });
    let num=0;
    let arr=["img/arrowUp.png","img/arrowDown.png"];
    $(this).find('.svg__arrow').click(function(){
        num++;
        if(num>=arr.length){
            num=0;
        }
        $(this).find('img').attr("src",arr[num]);
    });

    $('#open__format').on('click', function() {
        $('#close__format').slideToggle(100, function(){
            if( $(this).css('display') === "block"){
                $(this).removeAttr('style');
            }
        });

    });
    let numA=0;
    let array=["img/arrowUp.png","img/arrowDown.png"];
    $(this).find('.svg__arrow-format').click(function(){
        numA++;
        if(numA>=array.length){
            numA=0;
        }
        $(this).find('img').attr("src",array[numA]);
    });

    $('#open__way').on('click', function() {
        $('#close__way').slideToggle(100, function(){
            if( $(this).css('display') === "block"){
                $(this).removeAttr('style');
            }
        });

    });
    let open__way=0;
    let close__way=["img/arrowUp.png","img/arrowDown.png"];
    $(this).find('.svg__arrow-way').click(function(){
        open__way++;
        if(open__way>=close__way.length){
            open__way=0;
        }
        $(this).find('img').attr("src",close__way[open__way]);
    });



    $('#open__area').on('click', function() {
        $('#close__area').slideToggle(100, function(){
            if( $(this).css('display') === "block"){
                $(this).removeAttr('style');
            }
        });

    });

    let open__area=0;
    let close__area=["img/arrowUp.png","img/arrowDown.png"];
    $(this).find('.svg__arrow-area').click(function(){
        open__area++;
        if(open__area>=close__area.length){
            open__area=0;
        }
        $(this).find('img').attr("src",close__area[open__area]);
    });

    $('#open__style').on('click', function() {
        $('#close__style').slideToggle(100, function(){
            if( $(this).css('display') === "block"){
                $(this).removeAttr('style');
            }
        });

    });
    let open__style=0;
    let close__style=["img/arrowUp.png","img/arrowDown.png"];
    $(this).find('.svg__arrow-style').click(function(){
        open__style++;
        if(open__style>=close__style.length){
            open__style=0;
        }
        $(this).find('img').attr("src",close__style[open__style]);
    });


    let modalBtn=0;
    let modalArr=["img/HeartActive24px.png","img/HeartInactive24px.png"];
    $(this).find('.arctic__btn-heart').click(function(){
        modalBtn++;
        if(modalBtn>=modalArr.length){
            modalBtn=0;
        }
        $(this).find('img').attr("src",modalArr[modalBtn]);
    });

    $('#thumbs .thumb a').each(function(i) {
        $(this).addClass( 'itm'+i );
        $(this).click(function() {
            $('#images').trigger( 'slideTo', [i, 0, true] );
            return false;
        });
    });
    $('#thumbs a.itm0').addClass( 'selected' );

    $('#images').carouFredSel({
        direction: 'left',
        circular: true,
        infinite: false,
        items: 1,
        auto: false,
        scroll: {
            fx: 'directscroll',
            onBefore: function() {
                var pos = $(this).triggerHandler( 'currentPosition' );
                $('#thumbs a').removeClass( 'selected' );
                $('#thumbs a.itm'+pos).addClass( 'selected' );

                var page = Math.floor( pos / 3 );
                $('#thumbs').trigger( 'slideToPage', page );
            }
        }
    });
    $('#thumbs').carouFredSel({
        direction: 'left',
        circular: true,
        infinite: false,
        items: 3,
        align: false,
        auto: false,
        height: 80,
        margin: 0,
        prev: '#prev',
        next: '#next'
    });


    let bl = document.getElementById('hover'),
        hv = document.getElementById('show');

    bl.onmouseover = function () {
        bl.style.display = 'none';
        hv.style.display='block';


    }

    hv.onpointerleave = function () {
        hv.style.display = 'none';
        bl.style.display = 'block';
    }

    $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
 
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  vertical:true,
  
  
  
  focusOnSelect: true
});

$('#open__btn-head').on('click', function() {
        $('#close__btn-head').slideToggle(100, function(){
            if( $(this).css('display') === "none"){
                $(this).removeAttr('style');
            }
        });

    });
$('#open__btn-head').on('click', function() {
        $('#header, #heaed__title').slideToggle(100, function(){
            if( $(this).css('display') === "block"){
                $(this).removeAttr('style');
            }
        });

    });
$('#open__btn-head').on('click', function() {
        $('#main-content').slideToggle(100, function(){
            if( $(this).css('display') === "flex"){
                $(this).removeAttr('style');
            }
        });

    });
$('#open__btn-head').on('click', function() {
        $('#open__btn-head').slideToggle(100, function(){
            if( $(this).css('display') === "block"){
                $(this).removeAttr('style');
            }
        });

    });


$('#open__btn-head').on('click', function() {
        $('#btn-ff').slideToggle(100, function(){
            if( $(this).css('display') === "none"){
                $(this).removeAttr('style');
            }
        });

    });

$('#arrowLeft__btn').on('click', function() {
        $('#btn-ff').slideToggle(100, function(){
            if( $(this).css('display') === "block"){
                $(this).removeAttr('style');
            }
        });

    });

$('#arrowLeft__btn').on('click', function() {
        $('#open__btn-head').slideToggle(100, function(){
            if( $(this).css('display') === "none"){
                $(this).removeAttr('style');
            }
        });

    });
$('#arrowLeft__btn').on('click', function() {
        $('#close__btn-head').slideToggle(100, function(){
            if( $(this).css('display') === "block"){
                $(this).removeAttr('style');
            }
        });

    });

$('#arrowLeft__btn').on('click', function() {
        $('#main-content').slideToggle(100, function(){
            if( $(this).css('display') === "none"){
                $(this).removeAttr('style');
            }
        });

    });
$('#arrowLeft__btn').on('click', function() {
        $('#header, #heaed__title').slideToggle(100, function(){
            if( $(this).css('display') === "none"){
                $(this).removeAttr('style');
            }
        });

    });





});

