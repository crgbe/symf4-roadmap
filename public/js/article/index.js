$(document).ready(function(){
    $("#index-article-list").DataTable({
        ordering: true,
        // retrieve: true,
        scrollY: 500,
        // searching: false,
        language: {
            "url": "../libraries/datatables_1.10.20/internationalisation/fr_FR.json"
        }
    });
});