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
    let modalArr=["img/HeartInactive16px.png","img/HeartActive16px.png"];
    $(this).find('.arctic__btn-heart').click(function(){
        modalBtn++;
        if(modalBtn>=modalArr.length){
            modalBtn=0;
        }
        $(this).find('img').attr("src",modalArr[modalBtn]);
    });

    thumbs.onclick = function(event) {
      let thumbnail = event.target.closest('a');

      if (!thumbnail) return;
      showThumbnail(thumbnail.href, thumbnail.title);
      event.preventDefault();
  }

  function showThumbnail(href, title) {
      largeImg.src = href;
      largeImg.alt = title;
  }



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
function getTopOffset(e) { 
    var y = 0;
    do { y += e.offsetTop; } while (e = e.offsetParent);
    return y;
}
var block = document.getElementById('#open__btn-head'); /* fixblock - значение атрибута id блока */
if ( null != block ) {
    var topPos = getTopOffset( block );

    window.onscroll = function() {
        var scrollHeight = Math.max( document.documentElement.scrollHeight, document.documentElement.clientHeight),

            // определяем высоту рекламного блока
            blockHeight = block.offsetHeight,

            // вычисляем высоту подвала, footer заменить на значение атрибута id подвала
            footerHeight = document.getElementById('#footer').offsetHeight,         

            // считаем позицию, до которой блок будет зафиксирован 
            stopPos = scrollHeight - blockHeight - footerHeight; 

            var newcss = (topPos < window.pageYOffset) ? 
            'top:20px; position: fixed;' : 'position:static;';

            if ( window.pageYOffset > stopPos ) 
                newcss = 'position:static;';

            block.setAttribute( 'style', newcss );
        }
    }


  $('#show__footer-card').on('click', function() {
    $('#exampleModal__open').slideToggle(100, function(){
        if( $(this).css('display') === "none"){
            $(this).removeAttr('style');
        }
    });

});

  $('#show__footer-card').on('click', function() {
    $('#goods').slideToggle(100, function(){
        if( $(this).css('display') === "flex"){
            $(this).removeAttr('style');
        }
    });

});

  thumbsSS.onclick = function(event) {
      let thumbnail = event.target.closest('a');

      if (!thumbnail) return;
      showThumbnail(thumbnail.href, thumbnail.title);
      event.preventDefault();
  }

  function showThumbnail(href, title) {
      bigetImg.src = href;
      bigetImg.alt = title;
  }




});

