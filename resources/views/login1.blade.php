<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensina+</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body class="relative bg-gray-100 user-select-none m-0 p-0">
    @include('headernav')
    <div>
        <img class="absolute z-0 left-0 top-48 hidden md:block" src="{{asset('/imagens/Vector (2).png')}}" alt="">
    </div>
    <!-- Main Content -->
    <main class="container p-0 md:p-0 md:flex md:space-x-8 space-y-0 md:space-y-0 m-0 md:my-8 sm:mx-auto">
        <!-- Promotional Section (Video) -->
        <div class="relative bg-white shadow-lg sm:rounded-3xl w-full md:w-2/3 overflow-hidden md:ml-6 z-10 order-1 md:order-2 space-y-4 md:space-y-2">
            <video class="w-full" autoplay muted loop playsinline src="{{asset('videos/Para Gabaritar.mp4')}}"></video>
        </div>
        <!-- Login Form -->
        <div class="relative md:bg-white md:shadow-lg md:rounded-3xl p-8 w-full md:w-1/3 z-10 order-2 md:order-1 mt-10 md:mt-0 bg-transparent">
            <h2 class="text-2xl font-semibold mb-7 subpixel-antialiased">Faça seu login</h2>
            <form>
                <label class="block mb-4">
                    <span class="font-medium text-gray-700">Email ou CPF</span>
                    <input type="text" class="focus:outline-none mb-5 mt-1 block w-full rounded-md border-black border-2 shadow-sm focus:border-sky-800 focus:ring-2 p-2 focus:ring-sky-800 focus:ring-opacity-50" placeholder="Digite seu Email ou CPF">
                </label>
                <label class="block mb-4">
                    <span class="font-medium text-gray-700 ">Senha</span>
                    <input type="password" class="focus:outline-none mb-5 mt-1 block w-full rounded-md border-black border-2 shadow-sm focus:border-sky-800 focus:ring-2 p-2 focus:ring-sky-800 focus:ring-opacity-50" placeholder="Digite sua Senha">
                </label>
                <div class="mb-4">
                    <span class="font-medium text-gray-700">Eu sou um(a)</span>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-green-600" name="role" value="Aluno">
                            <span class="ml-2">Aluno(a)</span>
                        </label>
                    </div>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-green-600" name="role" value="Professor">
                            <span class="ml-2">Professor(a)</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="transition-all duration-75 w-full bg-sky-800 text-white py-2 rounded-lg hover:bg-sky-500 font-medium">Acessar</button>
                <a href="#" class="block text-center mt-4 text-sky-800 hover:underline transition-all duration-75 font-thin">Esqueci minha senha</a>
            </form>
        </div>
    </main>
    <!-- Section Title -->
    <section class="mt-56 container mx-auto flex flex-col justify-center gap-24 mb-24 bg-white pt-24">
            <div class="flex items-center justify-center">
                <div class="mt-7">
                    <h2 class="text-5xl font-semibold text-black text-balance subpixel-antialiased reveal">A nossa</h2>
                    <h2 class="text-5xl font-semibold text-black text-balance subpixel-antialiased reveal"><span class="text-sky-800 font-bold">educação</span> em</h2>
                    <h2 class="text-5xl font-semibold text-black text-balance subpixel-antialiased reveal">números</h2>
                </div>
                <div><img class="absolute left-0 -mt-20" src="{{asset('/imagens/Vector (4).png')}}" alt=""></div>
                <div><img class="reveal hidden md:flex absolute left-36 top-96 pt-20 mt-10" src="{{asset('/imagens/Vector (5).png')}}" alt=""></div>
                <div><img class="reveal absolute left-2/3 ml-56 -mt-10" src="{{asset('/imagens/Vector (3).png')}}" alt=""></div>

                <!-- Statistics Section -->
                <div class="reveal bg-sky-800 text-white rounded-3xl px-1 py-10 ml-32 mt-8 flex items-center justify-around relative">
                    <div class="mx-10 flex-1 text-center">
                        <p class="text-5xl font-bold">+12.500</p>
                        <p class="font-medium">do Ensino Médio cadastrados</p>
                    </div>
                    <div class="mx-10 flex-1 text-center">
                        <p class="text-5xl font-bold">+400</p>
                        <p class="font-medium">questões no</p>
                        <p class="font-medium">repertório</p>
                    </div>
                    <div class="mx-10 flex-1 text-center">
                        <p class="text-5xl font-bold">+700</p>
                        <p class="font-medium">aprovações no vestibular</p>
                    </div>
                </div>
            </div>

<!-- Sobre nós Section -->
<section id="sobre" class="reveal flex flex-col items-center justify-center bg-white py-12">
    <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold text-black subpixel-antialiased text-center mb-8">Sobre nós <span class="text-sky-800">+</span></h3>
    
    <!-- Content Container -->
    <div class="relative w-full flex justify-center items-center z-10 px-4">
        <!-- Blue Bar Behind -->
        <div class="absolute bg-sky-800 w-full h-8 sm:h-10 md:h-12 top-1/2 transform -translate-y-1/2"></div>
        
        <!-- Card Container -->
        <div class="flex space-x-4 sm:space-x-8 relative z-10 w-full max-w-screen-lg justify-center items-center">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-2xl sm:rounded-3xl p-4 sm:p-6 w-1/2">
                <ul class="text-sm sm:text-lg list-disc pl-4 space-y-2 text-gray-700">
                    <li class="subpixel-antialiased">Plataforma de estudos focada em vestibulares</li>
                    <li class="subpixel-antialiased">Criada pela escola para apoio aos alunos</li>
                    <li class="subpixel-antialiased">Combina conteúdos teóricos, exercícios, videoaulas e simulados</li>
                </ul>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-2xl sm:rounded-3xl p-4 sm:p-6 w-1/2">
                <ul class="text-sm sm:text-lg list-disc pl-4 space-y-2 text-gray-700">
                    <li class="subpixel-antialiased">Consolida conhecimentos e prepara para exames</li>
                    <li class="subpixel-antialiased">Aumenta as chances de sucesso acadêmico</li>
                    <li class="subpixel-antialiased">Oferece um ambiente de aprendizado interativo e acessível</li>
                </ul>
            </div>
        </div>
    </div>
</section>

        <section class="bg-white">
        <h3 id="aprova" class=" reveal text-3xl md:text-5xl font-bold text-black justify-center items-center flex">
            Alunos <span class="text-red-600 p-3">SESI SENAI</span>
        </h3>
        <div class="relative overflow-hidden w-full max-w-5xl mx-auto pt-10">
            <div id="carousel" class="reveal flex transition-transform duration-300 ease-out">

                <!-- First Slide -->
                <div class="flex-shrink-0 flex min-w-full space-x-0 pt-">
                    <span><img src="{{asset('imagens/teste marcela.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80"></span>
                    <img src="{{asset('imagens/teste cogh.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">
                    <img src="{{asset('imagens/teste joao.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">
                </div>

                <!-- Second Slide -->
                <div class="flex-shrink-0 flex min-w-full space-x-0">
                    <img src="{{asset('imagens/teste eduarda.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">
                    <img src="{{asset('imagens/teste pedro.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">
                    <img src="{{asset('imagens/teste everton.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">
                </div>
                
            </div>

            <!-- Carousel Controls -->
            <div class="absolute mt-10 left-0 top-1/2 transform -translate-y-1/2">
                <button id="prev" class="transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium hover:text-sky-800 hover:pl-4 transition-all duration-75">
                    <svg height="40px" width="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#000000">
                        <g>
                            <circle style="fill:#2D6796;" cx="256" cy="256" r="256"></circle>
                            <path style="fill:#E6F3FF;" d="M301.954,109.254c-7.406-3.067-15.936-1.372-21.606,4.298L151.897,242.019
                    c-3.718,3.718-5.806,8.763-5.806,14.019c0,5.258,2.089,10.302,5.81,14.019l128.431,128.395c3.793,3.791,8.863,5.806,14.021,5.806
                    c2.553,0,5.13-0.495,7.583-1.51c7.406-3.069,12.236-10.297,12.238-18.315l0.021-256.862
                    C314.192,119.551,309.363,112.323,301.954,109.254z"></path>
                        </g>
                    </svg>
                </button>
            </div>

            <div class="absolute right-10 mt-10 top-1/2 transform -translate-y-1/2">
                <button id="next" class="transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium hover:text-sky-800 hover:pr-4 transition-all duration-75">
                    <svg height="40px" width="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#000000" transform="rotate(180)">
                        <g>
                            <circle style="fill:#2D6796;" cx="256" cy="256" r="256"></circle>
                            <path style="fill:#E6F3FF;" d="M301.954,109.254c-7.406-3.067-15.936-1.372-21.606,4.298L151.897,242.019
                    c-3.718,3.718-5.806,8.763-5.806,14.019c0,5.258,2.089,10.302,5.81,14.019l128.431,128.395c3.793,3.791,8.863,5.806,14.021,5.806
                    c2.553,0,5.13-0.495,7.583-1.51c7.406-3.069,12.236-10.297,12.238-18.315l0.021-256.862
                    C314.192,119.551,309.363,112.323,301.954,109.254z"></path>
                        </g>
                    </svg>
                </button>
            </div>

        </div>
        </section>
        </div>
        <!-- TURBINA (Banner) -->
        <div id="turbina" class="reveal relative w-full mt-6 ml-0 pt-1 -mx-10">
            <img src="{{asset('/imagens/turbinanovo.png')}}" class="w-full object-cover" alt="Banner Image">
            <div class="absolute inset-0 flex flex-col items-end justify-center text-white pr-10 mr-10">
                <p class="mt-5 font-medium text-3xl md:text-5xl subpixel-antialiased">Método Ensina</p>
                <div class="mt-2">
                    <p class="font-thin mt-1 text-2xl md:text-4xl subpixel-antialiased mr-36">+ Conteúdo</p>
                    <p class="font-thin mt-2 text-2xl md:text-4xl subpixel-antialiased">+ Resultados</p>
                    <p class="font-thin mt-2 text-2xl md:text-4xl subpixel-antialiased">+ Aprovados</p>
                    <div class="mt-5">
                        <a target="blank" href="https://www.youtube.com/watch?v=xvFZjo5PgG0">
                            <button class="transition-all duration-75 text-sm md:text-lg hover:px-10 font-medium bg-yellow-500 text-black py-2 px-4 md:px-8 rounded-md hover:bg-yellow-600 subpixel-antialiased">
                                Saiba Mais
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section id="aluno" class="reveal flex flex-col-reverse md:flex-row justify-center bg-white my-6 p-4 md:p-20 items-center">
    <div class="flex flex-col items-center md:items-start text-center md:text-left w-full md:w-1/2 gap-4 md:gap-8">
        <h5 class="text-2xl md:text-4xl font-bold text-black">Ainda não é nosso aluno?</h5>
        <p class="text-base md:text-lg text-gray-600 w-full md:w-3/4">Garanta uma preparação de excelência para o vestibular! Somos referência nacional em educação e preparação para vestibular.</p>
        <a href="#" class="transition-all duration-75 bg-sky-800 subpixel-antialiased text-sm md:text-base text-white font-semibold rounded-md hover:bg-sky-500 hover:px-7 py-2 px-4 md:py-3 md:px-6">Conheça nossa proposta de ensino</a>
    </div>
    <div class="flex justify-center md:w-1/2">
        <img src="{{asset('imagens/jéssica.png')}}" class="w-48 md:w-full max-w-xs md:max-w-md lg:max-w-lg object-contain">
    </div>
</section>



        <!-- Footer -->
        <footer class="bg-sky-800 text-white py-5 mt-10 px-14 ">
            <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
                <div class="font-bold text-center md:text-left flex flex-col mb-4 md:mb-0">
                    <p class="text-sm">SESI - MONTE ALTO</p>
                    <p class="text-sm">Rua Paschoale di Madeo, 301 - Jd. Bela Vista</p>
                </div>
                <div class="font-bold text-center md:text-left flex flex-col mb-4 md:mb-0">
                    <p class="text-sm">SENAI - MONTE ALTO</p>
                    <p class="text-sm">R. Quinze de Maio, 523 - Centro</p>
                </div>
                <div class="font-bold text-center md:text-left flex flex-col">
                    <p class="text-sm">Contato: ce227@gmail.com - (16) 3242-1240</p>
                    <p class="text-sm">Copyright 2024 &copy; 2024 Todos os direitos reservados. - DVN</p>
                </div>
            </div>
        </footer>

        <!-- Scroll to Top Button -->
        <a id="scrollToTop" class="fixed right-2 bottom-2 z-40 bg-sky-800 rounded-full text-white transition-opacity duration-300 ease-in-out opacity-0 hover:text-sky-400 font-bold text-xl no-underline border border-white" href="#inicio"><svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000" class="transition-all hover:h-11 hover:w-11 " transform="matrix(1, 0, 0, 1, 0, 0)rotate(90)">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" href="#inicio" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <circle href="#inicio" style="fill:#2D6796;" cx="256" cy="256" r="256"></circle>
                    <path style="fill:#2D6796;" d="M505.866,311.875l-197.43-198.204l-21.304,131.963l-28.134,131.491L368.083,486.21 C437.127,452.532,488.76,388.711,505.866,311.875z"></path>
                    <path href="#inicio" style="fill:#E6F3FF;" d="M301.954,109.254c-7.406-3.067-15.936-1.372-21.606,4.298L151.897,242.019 c-3.718,3.718-5.806,8.763-5.806,14.019c0,5.258,2.089,10.302,5.81,14.019l128.431,128.395c3.793,3.791,8.863,5.806,14.021,5.806 c2.553,0,5.13-0.495,7.583-1.51c7.406-3.069,12.236-10.297,12.238-18.315l0.021-256.862 C314.192,119.551,309.363,112.323,301.954,109.254z"></path>
                    <path style="fill:#CFDBE6;" d="M146.135,255.138c-0.014,0.3-0.045,0.598-0.045,0.9c0,5.258,2.089,10.302,5.81,14.019 l128.431,128.395c3.793,3.791,8.863,5.806,14.021,5.806c2.553,0,5.13-0.495,7.583-1.51c7.406-3.069,12.236-10.297,12.238-18.315 l0.009-129.295H146.135z" href="#inicio"></path>
                </g>
            </svg></a>

        @include('smoothlink')
        <script>
            const scrollToTopButton = document.getElementById('scrollToTop');

            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 100) {
                    scrollToTopButton.classList.remove('opacity-0');
                    scrollToTopButton.classList.add('opacity-100');
                } else {
                    scrollToTopButton.classList.remove('opacity-100');
                    scrollToTopButton.classList.add('opacity-0');
                }
            });

            const carousel = document.getElementById('carousel');
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');
            let currentIndex = 0;

            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            prevButton.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                }
            });

            nextButton.addEventListener('click', () => {
                if (currentIndex < carousel.children.length - 1) {
                    currentIndex++;
                    updateCarousel();
                }
            });
        </script>
</body>

</html>