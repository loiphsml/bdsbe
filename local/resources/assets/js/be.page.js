// integratedCKEDITOR('description-page',height=200);

// integratedCKEDITOR('seo-description-page',height=200);
if ($('#btnBrowseImagePage').length) {
    var button1 = document.getElementById('btnBrowseImagePage');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImagePage','showHinhPage');
    }
}