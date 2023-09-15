$(document).ready(function () {
  // Add a click event listener to the button inside Modal 1
  $('#confirmVote button[data-bs-target="#afterVote"]').click(function () {
    // Close Modal 1
    $("#confirmVote").modal("hide");
  });
  $("#redirect-top-picks").click(function () {
    // Close Modal 1
    $("#video-aggregator").click();
    $("html, body").animate({ scrollTop: 0 }, "slow");
  });
});
