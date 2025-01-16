// Toggle "Read More" functionality
document.querySelectorAll('.read-more').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();
    const extraContent = this.previousElementSibling;
    if (extraContent.style.display === "none") {
      extraContent.style.display = "inline";
      this.textContent = "Read less";
    } else {
      extraContent.style.display = "none";
      this.textContent = "Read more";
    }
  });
});

