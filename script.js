// const navLinks = document.querySelectorAll(".nav-item");
// const menuToggle = document.getElementById("navbarSupportedContent");
// const bsCollapse = new bootstrap.Collapse(menuToggle, { toggle: false });
// navLinks.forEach((l) => {
//   l.addEventListener("click", () => {
//     bsCollapse.toggle();
//   });
// });



var dataSpyList = [].slice.call(
  document.querySelectorAll('[data-bs-spy="scroll"]')
);
dataSpyList.forEach(function (dataSpyEl) {
  bootstrap.ScrollSpy.getInstance(dataSpyEl).refresh();
});

