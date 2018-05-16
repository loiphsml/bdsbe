integratedCKEDITOR('content-position',height=400);
integratedCKEDITOR('content-utility',height=400);
integratedCKEDITOR('content-design',height=400);
integratedCKEDITOR('content-ground',height=400);
$('#btnBrowseMore').click(function () {
    window.KCFinder = {
        callBackMultiple: function (files) {
            window.KCFinder = null;
            var listImage = "";
            // textarea.value = "";
            for (var i = 0; i < files.length; i++)
                listImage += "<div class='col-md-3 text-center one-image'>" +
                    "<img src='" + files[i] + "' id='showHinh' class='image-choose' alt='' style=''>" +
                    "<input type='hidden' name='image-choose[]' value='" + files[i] + "'>" +
                    "<span data='" + i + "' class='remove-image'>X</span>" +
                    "</div>"


            $('#add-image').append(listImage);
            $('.remove-image').click(function () {
                $(this).parent().remove();
            });
        }
    };
    window.open('http://localhost:8080/bdsbe/js/kcfinder/browse.php?type=images',
        'kcfinder_multiple', 'status=0, toolbar=0, location=0, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600'
    );
});

