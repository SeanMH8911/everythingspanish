jQuery(document).ready(function () {
  jQuery("input,textarea")
    .focus(function () {
      jQuery(this)
        .data("placeholder", jQuery(this).attr("placeholder"))
        .attr("placeholder", "");
    })
    .blur(function () {
      jQuery(this).attr("placeholder", jQuery(this).data("placeholder"));
    });
});
