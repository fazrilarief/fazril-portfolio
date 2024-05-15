<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fazril Arief Nugraha</title>
    <link href="./src/css/output.css" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Header Section -->
    <header
      class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10"
    >
      <nav class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4 font-bold text-2xl block py-6">
            <a href="#home"> F<span class="text-primary">A</span> </a>
          </div>
          <div class="flex items-center px-4">
            <button
              type="button"
              id="hamburger"
              name="hamburger"
              class="absolute right-4 lg:hidden"
            >
              <span class="hamburger-line transtiton duration-300 ease-in-out">
              </span>
              <span class="hamburger-line transtiton duration-300 ease-in-out">
              </span>
              <span class="hamburger-line transtiton duration-300 ease-in-out">
              </span>
            </button>
            <div
              class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none"
              id="navbar-menu"
            >
              <ul class="block lg:flex items-center">
                <!-- Home -->
                <li class="group">
                  <a
                    href="#home"
                    class="text-base text-dark py-2 mx-8 lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                    >Home</a
                  >
                </li>
                <!-- About Me -->
                <li class="group">
                  <a
                    href="#about"
                    class="text-base text-dark py-2 mx-8 lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                    >About Me
                  </a>
                </li>
                <!-- Portoflios -->
                <li class="group">
                  <a
                    href="#portoflio"
                    class="text-base text-dark py-2 mx-8 lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                    >Portoflios</a
                  >
                </li>
                <!-- Certificates -->
                <li class="group">
                  <a
                    href="#certificate"
                    class="text-base text-dark py-2 mx-8 lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                    >Certificates</a
                  >
                </li>
                <!-- Blogs -->
                <!-- <li class="group">
                  <a
                    href="#about"
                    class="text-base text-dark py-2 mx-8 lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                    >Blogs
                  </a>
                </li> -->

                <!-- Educations -->
                <!-- <li class="group">
                  <a
                    href="#home"
                    class="text-base text-dark py-2 mx-8 lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                    >Educations</a
                  >
                </li> -->

                <!-- Contact Me -->
                <li class="group">
                  <a
                    href="#contact"
                    class="text-base text-dark py-2 mx-8 lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                    >Contact Me</a
                  >
                </li>

                <li class="group sm:ml-7">
                  <a
                    href="src\Fazril Arief Nugraha - CV.pdf"
                    target="_blank"
                    download
                    class="text-base font-semibold text-white bg-primary py-2 px-4 rounded-md hover: shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                  >
                    Download CV
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section  -->
    <section id="home" class="pt-36">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-primary md:text-xl">
              👋 Hola! I'am,
              <span class="font-bold block text-dark mt-1 text-4xl lg:text-5xl">
                Fazril Arief <span class="text-primary">Nugraha</span>
              </span>
            </h1>
            <h2 class="font-medium text-secondary mb-5 lg:text-2xl">
              Fullstack
              <span class="underline underline-offset-2 lg:underline-offset-4">
                Web Developer
              </span>
            </h2>
            <p class="font-medium text-secondary 0 mb-10 leading-relaxed">
              My name is Fazril Arief Nugraha, and I am a driven junior
              full-stack developer. I'm honing my skills in HTML, CSS, and
              JavaScript for basic stack while pursuing my studies in
              informatics engineering at Pamulang University.
            </p>
            <a
              href="#contact"
              class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover: shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
            >
              Contact Me
            </a>
          </div>

          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:mt-9 lg-rigth-0">
              <img
                src="./src/images/fazril.png"
                alt="Fazril Arief Nugraha"
                class="mx-w-full mx-auto"
              />
              <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2">
                <svg
                  width="400"
                  heigth="400"
                  viewBox="0 0 200 200"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="#4f46e5"
                    d="M51.5,3.7C51.5,24.6,25.8,49.2,-1.1,49.2C-28,49.2,-56.1,24.6,-56.1,3.7C-56.1,-17.2,-28,-34.4,-1.1,-34.4C25.8,-34.4,51.5,-17.2,51.5,3.7Z"
                    transform="translate(100 100) scale(1.7)"
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section -->
    <section id="about" class="pt-36 pb-32">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-10 lg:w-1/2">
            <h4 class="font-bold uppercase text-primary text-lg mb-3">
              About Me
            </h4>
            <h2 class="font-bold text-dark max-w-md text-2xl mb-4 lg:text-3xl">
              Highly passionate in web develpment.
            </h2>
            <div class="container-fluid grid grid-cols-1 md:grid-cols-2">
              <!-- Frontend Stack -->
              <div class="container-fluid mb-5">
                <h4 class="mb-2 font-semibold">Front-End Stack</h4>
                <div class="flex flex-nowrap">
                  <span class="mx-1">
                    <img
                      src="https://skillicons.dev/icons?i=html"
                      class="w-8 h-8"
                      alt="html5 logo"
                    />
                  </span>
                  <span class="mx-1">
                    <img
                      src="https://skillicons.dev/icons?i=css"
                      class="w-8 h-8"
                      alt="css3 logo"
                    />
                  </span>
                  <span class="mx-1">
                    <img
                      src="https://skillicons.dev/icons?i=js"
                      class="w-8 h-8"
                      alt="javascript logo"
                    />
                  </span>
                  <span class="mx-1">
                    <img
                      src="https://skillicons.dev/icons?i=bootstrap"
                      class="w-8 h-8"
                      alt="bootstrap logo"
                    />
                  </span>
                  <span class="mx-1">
                    <img
                      src="https://skillicons.dev/icons?i=tailwind"
                      class="w-8 h-8"
                      alt="bootstrap logo"
                    />
                  </span>
                </div>
              </div>
              <!-- Frontend Stack End -->
              <!-- Backend Stack -->
              <div class="container-fluid mb-5">
                <h4 class="mb-2 font-semibold">Back-End Stack</h4>
                <div class="flex">
                  <span class="mx-1">
                    <img
                      src="https://skillicons.dev/icons?i=php"
                      class="w-8 h-8"
                      alt="html5 logo"
                    />
                  </span>
                  <span class="mx-1">
                    <img
                      src="https://skillicons.dev/icons?i=laravel"
                      class="w-8 h-8"
                      alt="css3 logo"
                    />
                  </span>
                  <span class="mx-1">
                    <img
                      src="https://skillicons.dev/icons?i=express"
                      class="w-8 h-8"
                      alt="javascript logo"
                    />
                  </span>
                  <span class="mx-1">
                    <img
                      src="https://skillicons.dev/icons?i=prisma"
                      class="w-8 h-8"
                      alt="bootstrap logo"
                    />
                  </span>
                  <span class="mx-1">
                    <img
                      src="https://skillicons.dev/icons?i=mysql"
                      class="w-8 h-8"
                      alt="bootstrap logo"
                    />
                  </span>
                </div>
                <div class="flex mt-2">
                  <span class="mx-1">
                    <img
                      src="https://skillicons.dev/icons?i=postman"
                      class="w-8 h-8"
                      alt="bootstrap logo"
                    />
                  </span>
                </div>
              </div>
              <!-- Backend Stack End -->
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <h3
              class="text-dark font-semibold text-2xl mb-4 lg:text-3xl lg:pt-10"
            >
              Reach Me
            </h3>
            <p class="font-medium text-base text-secondary mb-6">
              We can connect by visiting some of the social media platforms I
              have listed below. I would be delighted to make new friends who
              share the same passion!
            </p>
            <div class="flex items-center">
              <!-- Instagram -->
              <a
                href="https://www.instagram.com/f.zril/"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-500 border-slate-400 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  class="fill-current"
                >
                  <title>Instagram</title>
                  <path
                    d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"
                  />
                </svg>
              </a>
              <!-- LinkedIn -->
              <a
                href="https://www.linkedin.com/in/fazril-arief-nugraha-8aa564209/"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-500 border-slate-400 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  class="fill-current"
                >
                  <title>LinkedIn</title>
                  <path
                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                  />
                </svg>
              </a>
              <!-- Medium -->
              <a
                href="https://medium.com/@mynameisJRIKS"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-500 border-slate-400 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  class="fill-current"
                >
                  <title>Medium</title>
                  <path
                    d="M13.54 12a6.8 6.8 0 01-6.77 6.82A6.8 6.8 0 010 12a6.8 6.8 0 016.77-6.82A6.8 6.8 0 0113.54 12zM20.96 12c0 3.54-1.51 6.42-3.38 6.42-1.87 0-3.39-2.88-3.39-6.42s1.52-6.42 3.39-6.42 3.38 2.88 3.38 6.42M24 12c0 3.17-.53 5.75-1.19 5.75-.66 0-1.19-2.58-1.19-5.75s.53-5.75 1.19-5.75C23.47 6.25 24 8.83 24 12z"
                  />
                </svg>
              </a>
              <!-- Youtube -->
              <!-- <a
                href="#"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-500 border-slate-400 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  class="fill-current"
                >
                  <title>YouTube</title>
                  <path
                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                  />
                </svg>
              </a> -->
              <!-- Github -->
              <a
                href="https://github.com/fazrilarief"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-500 border-slate-400 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  class="fill-current"
                >
                  <title>GitHub</title>
                  <path
                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Portfolio Section -->
    <section id="portoflio" class="pt-36 pb-20 bg-slate-100">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="text-primary font-bold text-lg mb-2 uppercase">
              Portfolio
            </h4>
            <h2 class="text-dark font-bold text-3xl mb-4">Featured Project</h2>
            <p class="font-medium text-md text-secondary">
              Throughout my journey in web programming, I've created several
              projects utilizing the tech stack I master.
            </p>
          </div>
        </div>
        <!-- CONTAINER -->
        <div class="flex items-center justify-center container mx-auto">
          <!-- GRID -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <!-- CARD -->
            <div class="rounded-xl shadow-lg bg-white mb-3 md:mx-3">
              <div class="p-5 flex flex-col">
                <div
                  class="rounded-xl overflow-hidden flex items-center shadow-md h-[220px]"
                >
                  <a
                    href="https://fazrilarief.github.io/kerjain.com/"
                    target="_blank"
                  >
                    <img
                      src="./src/images/portfolios/kerjain.com.png"
                      alt="kerjain.com"
                      class="hover:scale-110"
                    />
                  </a>
                </div>
                <h3 class="text-xl font-semibold mt-5 mb-3">
                  <a
                    href="https://fazrilarief.github.io/kerjain.com/"
                    target="_blank"
                    class="hover:text-primary"
                    >Kerjain.com</a
                  >
                </h3>
                <p class="text-slate-500 text-base">
                  Project ini merupakan salah satu tugas dari kelas yang saya
                  ikuti pada platform belajar, Dicoding. Project ini saya bangun
                  menggunakan HTML, CSS, dan Javascript tanpa <i>framework</i>.
                  Website sederhana ini saya bangun sebagai sarana untuk mencari
                  pekerjaan freelance.
                </p>
                <div
                  class="container-fluid mt-5 flex justify-between items-center"
                >
                  <div class="flex">
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=html"
                        alt="html5 logo"
                        class="w-6 h-6"
                      />
                    </span>
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=css"
                        alt="css logo"
                        class="w-6 h-6"
                      />
                    </span>
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=js"
                        alt="js logo"
                        class="w-6 h-6"
                      />
                    </span>
                  </div>
                  <div class="github">
                    <span
                      class="w-9 h-9 rounded-full flex justify-center items-center border text-slate-500 border-slate-400 hover:border-primary hover:bg-primary hover:text-white"
                    >
                      <a
                        href="https://github.com/fazrilarief/kerjain.com"
                        target="_blank"
                      >
                        <svg
                          role="img"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                          width="20"
                          class="fill-current"
                        >
                          <title>GitHub</title>
                          <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                          />
                        </svg>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- CARD END -->
            <!-- CARD -->
            <div class="rounded-xl shadow-lg bg-white mb-3 md:mx-3">
              <div class="p-5 flex flex-col">
                <div
                  class="rounded-xl overflow-hidden flex items-center shadow-md h-[220px]"
                >
                  <a
                    href="https://fazrilarief.github.io/baca-buku/"
                    target="_blank"
                  >
                    <img
                      src="./src/images/portfolios/bacabuku.png"
                      alt="bacabuku"
                      class="hover:scale-110"
                    />
                  </a>
                </div>
                <h3 class="text-xl font-semibold mt-5 mb-3">
                  <a
                    href="https://fazrilarief.github.io/baca-buku/"
                    target="_blank"
                    class="hover:text-primary"
                    >Bacabuku To Do List</a
                  >
                </h3>
                <p class="text-slate-500 text-base">
                  Website sederhana ini saya bangun menggunakan HTML, CSS, dan
                  Jacascript basic dan menerapkan penyimpanan local web storage
                  dalam penyimpana datanya. Website ini saya bangun sebagai
                  salah satu tugas dari kelas yang saya ikuti pada platform
                  Dicoding.
                </p>
                <div
                  class="container-fluid mt-5 flex justify-between items-center"
                >
                  <div class="flex">
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=html"
                        alt="html5 logo"
                        class="w-6 h-6"
                      />
                    </span>
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=css"
                        alt="css logo"
                        class="w-6 h-6"
                      />
                    </span>
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=js"
                        alt="js logo"
                        class="w-6 h-6"
                      />
                    </span>
                  </div>
                  <div class="github">
                    <span
                      class="w-9 h-9 rounded-full flex justify-center items-center border text-slate-500 border-slate-400 hover:border-primary hover:bg-primary hover:text-white"
                    >
                      <a
                        href="https://github.com/fazrilarief/baca-buku?tab=readme-ov-file"
                        target="_blank"
                      >
                        <svg
                          role="img"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                          width="20"
                          class="fill-current"
                        >
                          <title>GitHub</title>
                          <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                          />
                        </svg>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- CARD END -->
            <!-- CARD -->
            <div class="rounded-xl shadow-lg bg-white mb-3 md:mx-3">
              <div class="p-5 flex flex-col">
                <div
                  class="rounded-xl overflow-hidden flex items-center shadow-md h-[220px]"
                >
                  <a
                    href="https://github.com/fazrilarief/laracuss"
                    target="_blank"
                  >
                    <img
                      src="./src/images/portfolios/laracuss.png"
                      alt="laracuss"
                      class="hover:scale-110"
                    />
                  </a>
                </div>
                <h3 class="text-xl font-semibold mt-5 mb-3">
                  <a
                    href="https://github.com/fazrilarief/laracuss"
                    target="_blank"
                    class="hover:text-primary"
                  >
                    Laracuss - Laravel Discuss
                  </a>
                </h3>
                <p class="text-slate-500 text-base">
                  Project ini saya bangun menggunakan <i>framework</i> Laravel
                  sebagai salah satu tools backend. Website ini dibangun sebagai
                  sarana diskusi kepada sesama programmer Laravel, pemula dapat
                  bertanya dan akan langsung dijawab oleh ahlinya.
                </p>
                <div
                  class="container-fluid mt-5 flex justify-between items-center"
                >
                  <div class="flex">
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=html"
                        alt="html5 logo"
                        class="w-6 h-6"
                      />
                    </span>
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=css"
                        alt="CSS logo"
                        class="w-6 h-6"
                      />
                    </span>
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=js"
                        alt="JS logo"
                        class="w-6 h-6"
                      />
                    </span>
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=bootstrap"
                        alt="Laravel logo"
                        class="w-6 h-6"
                      />
                    </span>
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=laravel"
                        alt="Laravel logo"
                        class="w-6 h-6"
                      />
                    </span>
                    <span class="mx-1">
                      <img
                        src="https://skillicons.dev/icons?i=mysql"
                        alt="Laravel logo"
                        class="w-6 h-6"
                      />
                    </span>
                  </div>
                  <div class="github">
                    <span
                      class="w-9 h-9 rounded-full flex justify-center items-center border text-slate-500 border-slate-400 hover:border-primary hover:bg-primary hover:text-white"
                    >
                      <a
                        href="https://github.com/fazrilarief/laracuss"
                        target="_blank"
                      >
                        <svg
                          role="img"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                          width="20"
                          class="fill-current"
                        >
                          <title>GitHub</title>
                          <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                          />
                        </svg>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- CARD END -->
          </div>
          <!-- GRID END -->
        </div>
        <!-- CONTAINER END-->
      </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Certficate Section  -->
    <section id="certificate" class="pt-36 pb-20">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="text-primary font-bold text-lg mb-2 uppercase">
              Certificate
            </h4>
            <h2 class="text-dark font-bold text-3xl mb-4">
              Featured Certificate
            </h2>
            <p class="font-medium text-md text-secondary">
              I've also attended programming classes several times to enhance my
              skills and knowledge in the field of web programming,
              specifically.
            </p>
          </div>
          <!-- CONTAINER -->
          <div class="flex justify-center container mx-auto">
            <!-- GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
              <!-- CARD -->
              <div class="rounded-xl shadow-lg mb-3 md:mx-3">
                <div
                  class="rounded-xl overflow-hidden flex items-center shadow-md h-[320px] hover:opacity-80"
                >
                  <a
                    href="https://www.dicoding.com/certificates/JMZVDN3LQZN9"
                    target="_blank"
                  >
                    <img
                      src="./src/images/certificates/dicoding.png"
                      alt="dicoding"
                      class="hover:scale-105"
                    />
                  </a>
                </div>
              </div>
              <!-- CARD END -->
              <!-- CARD -->
              <div class="rounded-xl shadow-lg mb-3 md:mx-3">
                <div
                  class="rounded-xl overflow-hidden flex items-center shadow-md h-[320px] hover:opacity-80"
                >
                  <a
                    href="https://www.dicoding.com/certificates/L4PQQ8GNVPO1"
                    target="_blank"
                  >
                    <img
                      src="./src/images/certificates/dicoding-fe.png"
                      alt="Certficate"
                      class="hover:scale-105"
                    />
                  </a>
                </div>
              </div>
              <!-- CARD END -->
              <!-- CARD -->
              <div class="rounded-xl shadow-lg mb-3 md:mx-3">
                <div
                  class="rounded-xl overflow-hidden flex items-center shadow-md h-[320px] hover:opacity-80"
                >
                  <a
                    href="https://buildwithangga.com/talent/fazrilarief331/full-stack-laravel-forum-web-app-complete-guide-2024"
                    target="_blank"
                  >
                    <img
                      src="./src/images/certificates/bwa-laracuss.png"
                      alt="sertifikat-BWA-Laracuss"
                      class="hover:scale-105"
                      s
                    />
                  </a>
                </div>
              </div>
              <!-- CARD END -->
              <!-- CARD -->
              <div class="rounded-xl shadow-lg mb-3 md:mx-3">
                <div
                  class="rounded-xl overflow-hidden flex items-center shadow-md h-[320px] hover:opacity-80"
                >
                  <a
                    href="https://www.sololearn.com/Certificate/CC-OQXYLJMF/jpg"
                    target="_blank"
                  >
                    <img
                      src="./src/images/certificates/html.jpg"
                      alt="HTML Dasar"
                      class="hover:scale-105"
                    />
                  </a>
                </div>
              </div>
              <!-- CARD END -->
              <!-- CARD -->
              <div class="rounded-xl shadow-lg mb-3 md:mx-3">
                <div
                  class="rounded-xl overflow-hidden flex items-center shadow-md h-[320px] hover:opacity-80"
                >
                  <a
                    href="https://www.sololearn.com/Certificate/CT-QMYQOXHW/jpg"
                    target="_blank"
                  >
                    <img
                      src="./src/images/certificates/php.jpg"
                      alt="PHP"
                      class="hover:scale-105"
                    />
                  </a>
                </div>
              </div>
              <!-- CARD END -->
              <!-- CARD -->
              <div class="rounded-xl shadow-lg mb-3 md:mx-3">
                <div
                  class="rounded-xl overflow-hidden flex items-center shadow-md h-[320px] hover:opacity-80"
                >
                  <a
                    href="https://www.testdome.com/certificates/e14e50344eed461b943e1cd79fc0b6b1"
                    target="_blank"
                  >
                    <img
                      src="./src/images/certificates/testDome.png"
                      alt="testdome"
                      class="hover:scale-105"
                    />
                  </a>
                </div>
              </div>
              <!-- CARD END -->
            </div>
            <!-- GRID END -->
          </div>
          <!-- CONTAINER END -->
        </div>
      </div>
    </section>
    <!-- Certficate Section End -->

    <!-- Blog Section -->
    <!-- <div id="blog" class="pt-36 pb-32 bg-slate-100">
      <div class="container">
        <div class="w-full px-4 md:flex md:items-center"></div>
      </div>
    </div> -->
    <!-- Blog Section End-->

    <!-- Education Section -->
    <!-- <div id="blog" class="pt-36 pb-32">
      <div class="container">
        <div class="w-full px-4 md:flex md:items-center"></div>
      </div>
    </div> -->
    <!-- Education Section End -->

    <!-- CTA-Contact Section -->
    <div id="contact" class="pt-36 pb-32 bg-slate-100">
      <div class="container">
        <div class="w-full px-4 md:flex md:items-center">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="text-primary font-bold text-lg mb-2 uppercase">
              Contact
            </h4>
            <h2 class="text-dark font-bold text-3xl mb-4">Contact Me</h2>
            <p class="font-medium text-md text-secondary mb-4">
              If my profile matches the projects you have, let's collaborate!
            </p>
            <div class="flex justify-center">
              <!-- Instagram -->
              <a
                href="https://www.instagram.com/f.zril/"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-500 border-slate-400 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  class="fill-current"
                >
                  <title>Instagram</title>
                  <path
                    d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"
                  />
                </svg>
              </a>
              <!-- LinkedIn -->
              <a
                href="https://www.linkedin.com/in/fazril-arief-nugraha-8aa564209/"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-500 border-slate-400 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  class="fill-current"
                >
                  <title>LinkedIn</title>
                  <path
                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                  />
                </svg>
              </a>
              <!-- Github -->
              <a
                href="https://github.com/fazrilarief"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-500 border-slate-400 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  class="fill-current"
                >
                  <title>GitHub</title>
                  <path
                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                  />
                </svg>
              </a>
            </div>
          </div>

          <form action="">
            <div
              class="w-full px-4 mb-8 bg-white shadow-lg rounded-md p-4 md:w-[600px]"
            >
              <div class="mb-3">
                <label for="name" class="text-base text-primary font-bold">
                  Name
                </label>
                <input
                  type="text"
                  id="name"
                  class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:outline-primary"
                />
              </div>
              <div class="mb-3">
                <label for="name" class="text-base text-primary font-bold">
                  Email
                </label>
                <input
                  type="text"
                  id="name"
                  class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:outline-primary"
                />
              </div>
              <div class="mb-3">
                <label for="name" class="text-base text-primary font-bold">
                  Message
                </label>
                <textarea
                  cols="20"
                  rows="5"
                  id="name"
                  class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:outline-primary"
                ></textarea>
              </div>
              <div class="mb-2 flex justify-end">
                <button
                  type="submit"
                  class="text-base font-semibold text-white bg-primary py-2 px-3 rounded-full hover: shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                >
                  Send
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- CTA-Contact Section End -->

    <!-- Footer Section -->
    <!-- Footer Section -->
    <div id="blog" class="pt-24 pb-12 bg-dark">
      <!-- <div class="container">
        <div class="flex flex-wrap text-white">
          <div class="w-full px-4 mb-5 font-medium text-slate-300 md:w-1/2">
            <div class="font-bold text-white text-4xl block mb-8">
              <a href="#home"> FA </a>
            </div>
            <h3 class="font-bold text-xl underline underline-offset-4 mb-4">
              Contact Us
            </h3>
            <p>fazrilarief.jobs@gmail.com</p>
            <p>Perum Bukit Cikasungka</p>
            <p>Tangerang</p>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/2">
            <h3 class="font-bold text-xl underline underline-offset-4 mb-4">
              Links
            </h3>
            <ul>
              <li class="group">
                <a
                  href="#home"
                  class="lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                  >Home</a
                >
              </li>
              <li class="group">
                <a
                  href="#about"
                  class="lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                  >About</a
                >
              </li>
              <li class="group">
                <a
                  href="#Portfolio"
                  class="lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                  >Portfolios</a
                >
              </li>
              <li class="group">
                <a
                  href="#certificate"
                  class="lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                  >Certificates</a
                >
              </li>
              <li class="group">
                <a
                  href="#blog"
                  class="lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                  >Blogs</a
                >
              </li>
              <li class="group">
                <a
                  href="#education"
                  class="lg:mx-6 flex hover:text-primary hover:underline underline-offset-4"
                  >Educations</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div> -->
      <div class="container flex justify-center text-white font-bold">
        <p>&copy; 2024 - Fazril Arief Nugraha</p>
      </div>
    </div>
    <!-- Footer Section End -->

    <!-- Footer Section End -->

    <script src="./src/js/script.js"></script>
  </body>
</html>
