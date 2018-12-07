var token = $('meta[name="csrf-token"]').attr('content');function getBaseURL() {    var url = location.href;  // entire url including querystring - also: window.location.href;    var baseURL = url.substring(0, url.indexOf('/', 14));    if (baseURL.indexOf('http://localhost') != -1) {        // Base Url for localhost        var url = location.href;  // window.location.href;        var pathname = location.pathname;  // window.location.pathname;        var index1 = url.indexOf(pathname);        var index2 = url.indexOf("/", index1 + 1);        var baseLocalUrl = url.substr(0, index2);        return baseLocalUrl + "/";    }    else {        // Root Url for domain name        return baseURL + "/";    }}function selectFileWithKCFinder(elementPath, showHinhId) {    window.KCFinder = {        callBack: function (url) {            var output = document.getElementById(elementPath);            output.value = url;            $('#' + showHinhId).show();            $('#' + showHinhId).fadeIn("fast").attr('src', url);            window.KCFinder = null;        }    };    window.open(getBaseURL() + 'js/kcfinder/browse.php?type=images', 'kcfinder_textbox',        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +        'resizable=1, scrollbars=0, width=800, height=600'    );    if ($('#' + elementPath).val() == '')        $('#' + showHinhId).hide();    else        $('#' + showHinhId).show();}function integratedCKEDITOR(elementID, height) {    if ($('#' + elementID).length) {        var editor1=CKEDITOR.replace(elementID, {            height: height,            language: 'vi',            format_tags: 'p;h1;h2;h3;pre',            filebrowserBrowseUrl: 'http://http://saigonreal365.com/' + 'js/kcfinder/browse.php?type=files',            filebrowserImageBrowseUrl: 'http://saigonreal365.com/' + 'js/kcfinder/browse.php?type=images',            filebrowserFlashBrowseUrl: 'http://saigonreal365.com/' + 'js/kcfinder/browse.php?type=flash',            filebrowserUploadUrl: 'http://saigonreal365.com/' + 'js/kcfinder/upload.php?type=files',            filebrowserImageUploadUrl: 'http://saigonreal365.com/' + 'js/kcfinder/upload.php?type=images',            filebrowserFlashUploadUrl: 'http://saigonreal365.com/' + 'js/kcfinder/upload.php?type=flash',            extraAllowedContent : 'div',        });        editor1.on('instanceReady', function() {            // Output self-closing tags the HTML4 way, like <br>.            this.dataProcessor.writer.selfClosingEnd = '>';            // Use line breaks for block elements, tables, and lists.            var dtd = CKEDITOR.dtd;            for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {                this.dataProcessor.writer.setRules( e, {                    indent: true,                    breakBeforeOpen: true,                    breakAfterOpen: true,                    breakBeforeClose: true,                    breakAfterClose: true                });            }            // Start in source mode.            // this.setMode('source');        });    }}function integrateSearch(elementID,formID){    $('#'+elementID).click(function () {        if ($('#txtSearch').val().trim() == '')            return;        if ($('#txtSearch').val().trim().replace(/ +(?= )/g, '') == $("input[name='hdKeyword']").val())            return;        $('#'+formID).submit();    });}function isEmpty(val) {    return ((val !== '') && (val !== undefined) && (val.length > 0) && (val !== null));}$('.remove-image').click(function () {    $(this).parent().remove();});
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
    $('input[name=input-search-text-menu]').on('keydown', function (e) {
        var input_text = $(this).val();
        if (e.which == 13) {
            if (input_text == '')
                e.preventDefault();
            else {
                $('form[name=search-home]').submit();
            }
        }
    })
});