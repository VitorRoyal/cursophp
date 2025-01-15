$(function(){

    $('.modal_ajax').on('click', function(e){
        e.preventDefault();

        $('.modal_bg').show();
        
        var url = $(this).attr('href');

        $.ajax({
            url: url,
            type: 'GET',
            success: function(html){
                $('.modal_teste').html(html);
            }
        });
    });
});
    

