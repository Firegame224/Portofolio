<?php
session_start();
include "db.php";
?>


<!DOCTYPE html>
<html lang="en" class="scroll-smooth ">
  <head>
    <title>Home Page</title>
    <link rel="stylesheet" href="src/style/output.css" />
    <link rel="stylesheet" href="src/style/style.css" />
  </head>
  <body>
  <nav class="w-full bg-gray-900 h-30 p-3 items-center flex flex-col md:flex-row justify-between fixed">
  <h2 class="font-mono font-bold text-2xl text-white ml-4">
    PORTO<span class="text-[#31E1F7]">FOLIO</span>
  </h2>
  <ul class="text-white flex flex-row justify-center w-full gap-4 items-center text-[12px] sm:text-[1.2rem]  font-semibold">
    <li><a href="#home" class=" list sm:mr-8 hover:text-[#31E1F7] transition duration-700">Home</a></li>
    <li><a href="#about" class="list sm:mr-8 hover:text-[#31E1F7] transition duration-700">About</a></li>
    <li><a href="#eskil" class="list sm:mr-8 hover:text-[#31E1F7] transition duration-700">Education</a></li>
    <li><a href="#skills" class="list sm:mr-8 hover:text-[#31E1F7]">Skills</a></li>
    <li><a href="#porto" class="list sm:mr-8 hover:text-[#31E1F7] transition duration-700">Portofolio</a></li>
    <li><a href="#contact" class="list sm:mr-8 hover:text-[#31E1F7] transition duration-700">Contact</a></li>
  </ul>
</nav>
    <!-- Home page -->

    <?php include "src/components/home.html"; ?>
  
    <!-- About me-->

   <?php include "src/components/about.html"; ?>

    <!-- Education -->

     <?php include "src/components/education.html"; ?>

    <!-- Skills -->

  <?php include "src/components/skill.html"; ?>

    <!-- Portofolio -->

    <?php include "src/components/portofolio.html"; ?>


    <section class="h-screen w-full scroll-mt-50" id="contact">
      <div class="w-full h-full p-4 sm:p-28">
        <h2 class="text-4xl font-bold text-center text-[#31E1F7] mb-8">
          Contact
        </h2>
        <hr class="text-white my-4" />

        <div class="max-w-5xl mx-auto px-6 py-10">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Form Kirim Pesan -->
            <div
              class="w-full max-w-md p-6 bg-white border border-gray-200 rounded-xl shadow-md dark:bg-gray-800 dark:border-gray-700"
            >
              <form class="space-y-6" method="POST" id="form">
                <h5
                  class="text-2xl font-semibold text-gray-900 dark:text-white text-center"
                >
                  Kirim Pesan
                </h5>

                <!-- Input Email -->
                <div>
                  <label
                    for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Email Anda</label
                  >
                  <input
                    type="email"
                    name="email"
                    id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white transition duration-300 ease-in-out focus:ring-2 focus:ring-blue-400"
                    placeholder="name@company.com"
                    required
                  />
                </div>

                <!-- Input Pesan -->
                <div>
                  <label
                    for="message"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Pesan</label
                  >
                  <textarea
                    name="message"
                    id="message"
                    rows="5"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white transition duration-300 ease-in-out focus:ring-2 focus:ring-blue-400"
                    placeholder="Tulis pesan Anda..."
                    required
                  ></textarea>
                </div>

                <button
                  type="submit"
                  class="w-full mt-4 text-white bg-blue-600 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-3 text-center transition duration-300 ease-in-out transform hover:scale-105 dark:bg-blue-500 dark:hover:bg-blue-400 dark:focus:ring-blue-600"
                >
                  ✉️ Kirim Pesan
                </button>
              </form>
            </div>

            <!-- Contact Information -->
            <div
              class="text-white p-6 bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
            >
              <h3 class="text-xl font-semibold text-gray-200 mb-4">
                Contact Information
              </h3>

              <!-- Nama -->
              <div class="flex items-center gap-4 mb-4">
                <div
                  class="bg-green-600 p-3 rounded-full flex items-center justify-center"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="26"
                    height="26"
                    viewBox="0 0 24 24"
                    class="fill-white"
                  >
                    <path
                      d="M12 2a7 7 0 1 1 0 14 7 7 0 1 1 0-14zm0 16c4.418 0 8 1.791 8 4v2H4v-2c0-2.209 3.582-4 8-4z"
                    />
                  </svg>
                </div>
                <div>
                  <h4 class="text-lg font-semibold text-gray-200">Nama</h4>
                  <p class="text-gray-400">Fiky Alrasya</p>
                </div>
              </div>

              <!-- Email -->
              <div class="flex items-center gap-4 mb-4">
                <div
                  class="bg-red-600 p-3 rounded-full flex items-center justify-center"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="26"
                    height="26"
                    viewBox="0 0 24 24"
                    class="fill-white"
                  >
                    <path
                      d="M12 12.713l11.985-8.713h-23.97l11.985 8.713zm11.985-6.713l-11.985 8.713-11.985-8.713v12h23.97v-12z"
                    />
                  </svg>
                </div>
                <div>
                  <h4 class="text-lg font-semibold text-gray-200">Email</h4>
                  <p class="text-gray-400">xg474627@gmail.com</p>
                </div>
              </div>

              <!-- No HP -->
              <div class="flex items-center gap-4 mb-5">
                <div
                  class="bg-yellow-600 p-3 rounded-full flex items-center justify-center"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="26"
                    height="26"
                    viewBox="0 0 24 24"
                    class="fill-white"
                  >
                    <path
                      d="M6.62 10.79a15.66 15.66 0 0 0 6.99 6.99l2.2-2.2a1 1 0 0 1 1.06-.24 11.72 11.72 0 0 0 3.69.59 1 1 0 0 1 1 1v3.84a1 1 0 0 1-1 1A19.91 19.91 0 0 1 2 4a1 1 0 0 1 1-1h3.85a1 1 0 0 1 1 .99 11.72 11.72 0 0 0 .59 3.69 1 1 0 0 1-.24 1.06l-2.2 2.2z"
                    />
                  </svg>
                </div>
                <div>
                  <h4 class="text-lg font-semibold text-gray-200">No HP</h4>
                  <p class="text-gray-400">+62 889-5762-974</p>
                </div>
              </div>
              <!-- Address -->
              <div class="flex items-center gap-4 mb-4">
                <div
                  class="bg-blue-600 p-3 rounded-full flex items-center justify-center"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="26"
                    height="26"
                    viewBox="0 0 24 24"
                    class="fill-white"
                  >
                    <path
                      d="M12 1c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 14h-24l4-8h3.135c.385.641.798 1.309 1.232 2h-3.131l-2 4h17.527l-2-4h-3.131c.435-.691.848-1.359 1.232-2h3.136l4 8z"
                    />
                  </svg>
                </div>
                <div>
                  <h4 class="text-lg font-semibold text-gray-200">Address</h4>
                  <p class="text-gray-400">
                    Tiparkidul, Ajibarang, Banyumas, Jawa Tengah
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include "src/components/footer.html"; ?>
    <script src="script.js"></script>
  </body>
</html>
