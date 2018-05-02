$(function () {

    // $('.pagination li a').attr('href','javascript:void()');
    // $('.pagination li a').click(function(){
    //     var dataPage = parseInt($(this).attr('data-page'));
    //     var module = $(this).parent('li').parent('ul').parent('div').attr('value');
    //     htmlObj = $.ajax({
    //         url:'/tongqu',
    //         data:{
    //             page:dataPage,module:module
    //         },
    //         dataType:'json',
    //         success:function(data){
    //             var count = 0;
    //             console.log(data);
    //             $('#'+module).html('');
    //             $.each(data,function(k,e){
    //                 $('#'+module).append('<li><span>'+e.pub_time+'</span><a href="article/'+e.id+'.html">'+(++k)+'.'+e.title+'</a></li>')
    //             })
    //
    //         }
    //     });
    //     $(this).parent('li').addClass('active').siblings().removeClass('active');
    // });

    $('.column-nav li').hover(function(){
        var this_index = $(this).index();
        $('.column-nav  li').eq(this_index).addClass('cur').siblings().removeClass('cur');
        $('.column-tab .column-tab-list').eq(this_index).css('display','block').siblings(".column-tab-list").css('display','none');
        $('.column-tab .column-tab-page').eq(this_index).css('display','block').siblings(".column-tab-page").css('display','none');
    });

    $('.column-nav-index li').hover(function(){
        var this_index = $(this).index();
        $('.column-nav-index  li').eq(this_index).addClass('cur').siblings().removeClass('cur');
        $('.column-tab-index .column-tab-list-index').eq(this_index).css('display','block').siblings().css('display','none');
    });

})
