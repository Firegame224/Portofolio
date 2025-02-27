// Warna biru saat scroll

document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".list");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          navLinks.forEach((link) => {
            link.classList.remove("text-[#31E1F7]");
            link.classList.remove("font-bold");

            if (link.getAttribute("href").substring(1) === entry.target.id) {
              link.classList.add("text-[#31E1F7]");
              link.classList.add("font-bold");
            }
          });
        }
      });
    },
    { threshold: 0.5 }
  );

  sections.forEach((section) => observer.observe(section));
});

// Time out text
const tulisan = ["Web Developer", "Frontend Developer", "Web Designer"];
let index = 0; // Indeks tulisan
let charIndex = 0; // Pengecekan mengetik
let isDeleting = false; //Pengecekan Penghapusan
const speed = 100; // Kecepatan mengetik
const eraseSpeed = 50; // Kecepatan menghapus
const Delay = 3000; // Tunggu sebelum hapus

function textWriter() {
  const profElement = document.getElementById("prof");
  const currentText = tulisan[index];

  if (isDeleting) {
    profElement.textContent = currentText.substring(0, charIndex--);
  } else {
    profElement.textContent = currentText.substring(0, charIndex++);
  }

  if (!isDeleting && charIndex === currentText.length +1) {
    isDeleting = true;
    setTimeout(textWriter, Delay);
  } else if (isDeleting && charIndex === 0) {
    isDeleting = false;
    index = (index+1) % tulisan.length;
    setTimeout(textWriter, 500);
  } else {
    setTimeout(textWriter, isDeleting ? eraseSpeed : speed);
  }
}

textWriter()


