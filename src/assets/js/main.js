$(document).on('click', '#copy-me', function () {
    var range = document.createRange();
    range.selectNode(document.getElementById("curl"));
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    document.execCommand("copy");
    window.getSelection().removeAllRanges();
});
hljs.highlightAll();
