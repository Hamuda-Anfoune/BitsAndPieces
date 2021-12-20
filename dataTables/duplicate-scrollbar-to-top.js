/**
 * Adding the extra scrollbar..
 */
// Wait for table to fully load
setTimeout(() => {
    // Add an extra div to use it's scroll bar
    $(".dataTables_scrollBody")
        .before('<div class="extra_scrollBody" style="width:100%;overflow-x:scroll;overflow-y:hidden;height:20px;"><div class="fake-container" style="height:20px;"></div></div>');

    // Link the table's scrollbar to the extra div's
    $(".dataTables_scrollBody").scroll(function () {
        $(".extra_scrollBody").scrollLeft($(".dataTables_scrollBody").scrollLeft());
    });

    // Link the extra div's scrollbar to the table's
    $(".extra_scrollBody").scroll(function () {
        $(".dataTables_scrollBody").scrollLeft($(".extra_scrollBody").scrollLeft());
    });

    // Init the extra div's widths to the table's width
    $('.extra_scrollBody').width($(".dataTables_scrollBody").width());
    $('.fake-container').width($("#opTable").width());
}, 2500);

// When the window is resized, resize the extra div's  width according to the table's
$(window).resize(() => {
    $('.extra_scrollBody').width($(".dataTables_scrollBody").width())
    $('.fake-container').width($("#opTable").width());
});