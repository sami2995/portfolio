// Get the button element
const toggleButton = document.getElementById("dark-mode-toggle");

// Check if the user has previously chosen dark mode
if (localStorage.getItem("dark-mode") === "enabled") {
  document.body.classList.add("dark-mode");
}

// Add event listener to toggle dark mode
toggleButton.addEventListener("click", function () {
  // Toggle the dark-mode class
  document.body.classList.toggle("dark-mode");

  // Save the user's preference in localStorage
  if (document.body.classList.contains("dark-mode")) {
    localStorage.setItem("dark-mode", "enabled");
  } else {
    localStorage.setItem("dark-mode", "disabled");
  }
});
