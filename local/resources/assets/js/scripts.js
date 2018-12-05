var plugins = {
    menuSideBar: $('.sidebar'),
    slider: $('#slider'),
    sendMail: $('#btnSendMail'),
};

function setinfo(clinfo,valinfo,clcontent){
    var input='<input name="'+clinfo+'" type="hidden" value="'+valinfo+'">'+valinfo;
    $('.'+clinfo).html(input);
    $('.'+clcontent+' .select-content').css({'opacity':0,'z-index':0});
    $('.'+clcontent+' .select-content ul').css('display','none');

}


$('.select-box-bed').mousemove(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':1,'z-index':11});
    $(this).children('.select-content').children(' ul').css('display','block');
});
$('.select-box-bed').mouseout(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':0,'z-index':1});
    $(this).children('.select-content').children(' ul').css('display','none');
});

$('.select-box-bath').mousemove(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':1,'z-index':11});
    $(this).children('.select-content').children(' ul').css('display','block');
});
$('.select-box-bath').mouseout(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':0,'z-index':1});
    $(this).children('.select-content').children(' ul').css('display','none');
});
$('.select-box-min').mousemove(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':1,'z-index':11});
    $(this).children('.select-content').children(' ul').css('display','block');
});
$('.select-box-min').mouseout(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':0,'z-index':1});
    $(this).children('.select-content').children(' ul').css('display','none');
});
$('.select-box-max').mousemove(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':1,'z-index':11});
    $(this).children('.select-content').children(' ul').css('display','block');
});
$('.select-box-max').mouseout(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':0,'z-index':1});
    $(this).children('.select-content').children(' ul').css('display','none');
});

$("#a-click-filter").click(function () {

    if($("#mobile-show").css('display')=='none'){
        $("#mobile-show").css('display','block');
        $("#a-click-filter").html('Hide filter')
    }else{
        $("#mobile-show").css('display','none');
        $("#a-click-filter").html('More filter')
    }

});

$(document).ready(function () {
    function sidebar() {
        var trigger = $('#trigger,#close');
        trigger.on('click', function () {
            $(this).toggleClass('active');
            plugins.menuSideBar.toggleClass('closed');
            $('#blurrMe').toggleClass('blurred')
        })
        $('#wrap-container').on('click', function () {
            if ($('#blurrMe').hasClass('blurred')) {
                $('#blurrMe').toggleClass('blurred')
                plugins.menuSideBar.toggleClass('closed');
            }
        })
    }

    sidebar();

    function runSlider() {
        plugins.slider.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }

    function runSendMail() {
        $('.loadingSending').css('display', 'inline-block');
        $('.input-text').removeClass('is-invalid');
        $('.input-area').removeClass('is-invalid');
        var data = new FormData($(this).get(0));
        data.append('name', $("input[name='name-ct']").val());
        data.append('email', $("input[name='email-ct']").val());
        data.append('phone', $("input[name='phone-ct']").val());
        data.append('contentMail', $("textarea[name='contentMail']").val());
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: getBaseURL() + "sendmail/send",
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                if (data.success) {
                    $('.loadingSending').css('display', 'none');
                    $('.successSending').css('display', 'inline-block');
                    $('.successSending').fadeIn(500);
                    $('.button-group span').css('display', 'inline-block');
                    $('.button-group span').fadeIn(500);

                    setTimeout("$('.successSending').fadeOut(1500);", 3000);
                    setTimeout("$('.button-group span').fadeOut(1500);", 3000);
                    $("input[name='name']").val("");
                    $("input[name='email']").val("");
                    $("textarea[name='contentMail']").val("");
                }
                else {
                    $('.loadingSending').css('display', 'none');
                    var errors = data.validator;
                    if (errors.hasOwnProperty('email')) {
                        $('.ip-email .input-text').addClass('is-invalid');
                        $('.ip-email .invalid-feedback').html(errors['email']);
                    }
                    if (errors.hasOwnProperty('name')) {
                        $('.ip-name .input-text').addClass('is-invalid');
                        $('.ip-name .invalid-feedback').html(errors['name']);
                    }
                    if (errors.hasOwnProperty('contentMail')) {
                        $('.ip-contentMail .input-area').addClass('is-invalid');
                        $('.ip-contentMail .invalid-feedback').html(errors['contentMail']);
                    }
                }
            }
        });
    }
    if (plugins.sendMail.length) {
        // $("[rel=popover]").tooltip();
        plugins.sendMail.click(function () {
            runSendMail();
        });
    }



    if (plugins.slider.length) {
        runSlider();
    }
    $('select[name=city]').change(function () {
        var id = $(this).val();
        var data = new FormData($(this).get(0));
        data.append('id', id);
        $.ajax({
            type: "POST",
            url: getBaseURL() + "getDistrict",
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                if (data.success) {
                    var option = '<option value=\'-1\'>--Chọn Quận--</option>';
                    data.districts.forEach(function (item) {
                        option += "<option value='" + item['id'] + "'>" + item['name'] + "</option>"
                    });
                    $('select[name=district]').html(option);
                }
                else {
                    alert('no')
                }
            }
        });
    });
    $('#btn-search').click(function(){
        $('form#form-search').submit();
    });
});