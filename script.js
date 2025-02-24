document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".list");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    link.classList.remove("text-[#31E1F7]"); // Hapus warna aktif
                    link.classList.remove("font-bold"); // Hapus efek tebal

                    if (link.getAttribute("href").substring(1) === entry.target.id) {
                        link.classList.add("text-[#31E1F7]"); // Tambahkan warna aktif
                        link.classList.add("font-bold"); // Tambahkan efek tebal
                    }
                });
            }
        });
    }, { threshold: 0.5 });

    sections.forEach(section => observer.observe(section));
});
