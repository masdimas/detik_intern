$(document).ready(function () {
  // Add a click event listener to the button inside Modal 1
  $('#confirmVote button[data-bs-target="#afterVote"]').click(function () {
    // Close Modal 1
    $("#confirmVote").modal("hide");
  });
  $("#redirect-top-picks").click(function () {
    // Close Modal 1
    $("#video-aggregator").click();
    var targetPosition = $("#pills-tab").offset().top;
    var scrollPosition = targetPosition - 50;

    $("html, body").animate(
      {
        scrollTop: scrollPosition,
      },
      500
    );
  });
});
