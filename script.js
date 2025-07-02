// Wait for DOM to load
document.addEventListener("DOMContentLoaded", function () {
  // Navbar active link on scroll (basic demo)
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".nav-links a");

  window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      if (scrollY >= sectionTop - 60) {
        current = section.getAttribute("id");
      }
    });

    navLinks.forEach((link) => {
      link.classList.remove("active");
      if (link.getAttribute("href").includes(current)) {
        link.classList.add("active");
      }
    });
  });

  // Alert on clicking social icons (for demo)
  const socials = document.querySelectorAll(".social-icons a");
  socials.forEach((icon) => {
    icon.addEventListener("click", (e) => {
      console.log("Opening:", icon.href);
      // alert("Opening link: " + icon.href); // Optional
    });
  });

  // Smooth scroll (if you have #links)
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      document
        .querySelector(this.getAttribute("href"))
        .scrollIntoView({ behavior: "smooth" });
    });
  });
});

