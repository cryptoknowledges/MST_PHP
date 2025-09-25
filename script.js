document.addEventListener("DOMContentLoaded", () => {
  const menuItems = document.querySelectorAll("#menu li");
  const iframe = document.getElementById("contentFrame");

  menuItems.forEach(item => {
    item.addEventListener("click", () => {
      // Remove active class from all
      menuItems.forEach(i => i.classList.remove("active"));

      // Add to clicked
      item.classList.add("active");

      // Load the specified page into the iframe
      const page = item.getAttribute("data-page");
      iframe.src = page;
    });
  });
});
