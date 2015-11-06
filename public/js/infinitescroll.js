$(document).ready(function() {
    var loading_options = {
        finishedMsg: "<div class='end-msg'>Congratulations! You've reached the end of the internet</div>",
        msgText: "<div class='center'>Loading news items...</div>",
        img: "ajax-loader.gif"
    };

    $('#content').infinitescroll({
        loading: loading_options,
        navSelector: "ul.pagination",
        nextSelector: "ul.navigation a:first",
        itemSelector: "#content div.item"
    });
});
