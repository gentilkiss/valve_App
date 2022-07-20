$(document).ready(function() {

    // binding the check all box to onClick event
    $(".chk_all").click(function() {

        var checkAll = $(".chk_all").prop('checked');
        if (checkAll) {
            $(".checkboxes").prop("checked", true);
        } else {
            $(".checkboxes").prop("checked", false);
        }

    });

    // if all checkboxes are selected, then checked the main checkbox class and vise versa
    $(".checkboxes").click(function() {

        if ($(".checkboxes").length == $(".subscheked:checked").length) {
            $(".chk_all").attr("checked", "checked");
        } else {
            $(".chk_all").removeAttr("checked");
        }

    });

});