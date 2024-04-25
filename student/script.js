function openPage(contentId) {
  var i;
  var tabcontent = document.getElementsByClassName("tabcontent");

  // Hide all content divs
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Display the selected content div
  document.getElementById(contentId).style.display = "block";
}

// Set the default open tab on page load
document.getElementById("defaultOpen").click();