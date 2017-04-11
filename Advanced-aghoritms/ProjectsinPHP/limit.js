$(document).ready(function () {
    if ($("input:checkbox:checked").length >= 6) {
        $("input:checkbox").not(":checked").attr("disabled", 3);
    }
    $("input:checkbox").click(function () {
        var bol = $("input:checkbox:checked").length >= 6;
        $("input:checkbox").not(":checked").attr("disabled", bol);
    });
});
