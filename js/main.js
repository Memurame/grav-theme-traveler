$(".gallery").lightGallery();


$(document).ready(function() {

    $(window).on('resize',function() {
        let youtube = $('.youtube-iframe');
        let youtubeheight = youtube.width() * 10/16;
        $('.youtube-iframe').css('height', youtubeheight);

        $('.gallery').find('article').each(function(i, v){
            let imageheight = $(this).width() * 3/4;
            $(this).css('height', imageheight);
        });
        $('.section-image, .section-map').find('[data-scale]').each(function(i, v){
            let scale = $(this).data('scale');
            let imageheight = $(this).width() * scale;

            $(this).css('height', imageheight);
        });
    }).trigger('resize');

    $('.menu-toggle').click(function(){
        $(this).children('div').toggleClass('open');
        $('.mobile-navigation').toggleClass('open');
    });

    $('h2.title, .item-image').click(function(){
        let linkurl = $(this).closest('.entry-item').find('.link-detail').attr('href');
        window.location.assign(linkurl);
    })


});

