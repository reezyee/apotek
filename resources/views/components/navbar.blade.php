<nav class="bg-transparent border-b" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="shrink-0">
                <img class="size-8" src="{{ asset('storage/images/logo.png') }}" alt="Your Company">
            </div>
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/"
                            class="{{ request()->is('/') ? 'underline decoration-2 text-black' : 'text-black hover:underline hover:decoration-2' }} rounded-md px-3 py-2 text-sm font-medium"
                            aria-current="{{ request()->is('/') ? 'page' : false }}">Beranda</a>
                        <a href="/shop"
                            class="{{ request()->is('shop') ? 'underline decoration-2 text-black' : 'text-black hover:underline hover:decoration-2' }} rounded-md px-3 py-2 text-sm font-medium"
                            aria-current="{{ request()->is('shop') ? 'page' : false }}">Belanja</a>
                        <a href="/contact"
                            class="{{ request()->is('contact') ? 'underline decoration-2 text-black' : 'text-black hover:underline hover:decoration-2' }} rounded-md px-3 py-2 text-sm font-medium"
                            aria-current="{{ request()->is('contact') ? 'page' : false }}">Kontak</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="flex justify-end gap-6">
                    @guest
                        <div class="Basket">
                            <x-fas-basket-shopping width="30" height="30" data-modal-target="static-modal"
                                data-modal-toggle="static-modal"
                                class="border border-black p-1 rounded-full cursor-pointer" />
                            <!-- Main modal -->
                            <div id="static-modal" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-6xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                            <h3 class="text-[22px] font-semibold text-gray-900">
                                                Keranjang
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                data-modal-hide="static-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <p class="text-base leading-relaxed text-gray-500">
                                                With less than a month to go before the European Union enacts new consumer
                                                privacy laws for its citizens, companies around the world are updating their
                                                terms of service agreements to comply. Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Tenetur animi, porro aut iusto voluptatum vel
                                                ipsum sapiente nemo! Tenetur sint deserunt architecto porro ab cumque
                                                laboriosam vel. Doloribus, commodi perferendis.
                                                Facere placeat similique eligendi? Nisi voluptas suscipit beatae neque
                                                rerum, nostrum modi voluptatibus commodi odio quod quos sit, sequi sunt
                                                laborum quam corrupti nemo totam quibusdam officiis. Et, nihil velit!
                                                Laudantium, aspernatur rerum atque ea culpa asperiores quos hic nobis quis
                                                cumque excepturi quam debitis dignissimos esse velit neque quo ducimus
                                                perferendis a nisi architecto voluptatem iste, repudiandae totam! Animi.
                                                Repellat laboriosam voluptas quod fugiat ex commodi debitis. Ut id doloribus
                                                perferendis sed optio molestias corrupti a culpa aut in? Minus quidem iusto
                                                debitis vel tempora, deleniti inventore. Eaque, laborum.
                                                Modi delectus vel corporis a, hic vero voluptate sequi provident veniam,
                                                autem pariatur nam quisquam quasi fugit aperiam nulla quaerat porro unde
                                                ullam? Nemo, repudiandae sequi. Atque autem doloremque fuga.
                                                Libero consequuntur quasi recusandae necessitatibus voluptas eum! Obcaecati
                                                natus assumenda, perferendis nemo veritatis, impedit dignissimos ut
                                                perspiciatis nihil porro quidem laboriosam modi inventore iusto. Dolores ut
                                                ab necessitatibus cupiditate iure?
                                                Magnam dolorum expedita illum, perspiciatis doloremque vel, distinctio alias
                                                atque, veniam eos consectetur. Iste porro, aliquid eum illo blanditiis quae,
                                                deserunt amet atque natus cupiditate officia similique modi optio libero.
                                                Dolore tempore ab ad ducimus adipisci laborum aut consequatur qui
                                                necessitatibus nemo ipsum quae nesciunt reiciendis, amet repudiandae,
                                                sapiente doloribus sed? Perferendis quo aliquam laboriosam nisi incidunt
                                                nobis fugiat dolore.
                                                Aliquid eveniet voluptatibus delectus nostrum rerum repudiandae enim velit
                                                numquam tempore. Rem, at, suscipit aliquam deserunt, iusto placeat
                                                asperiores ab quae odio consequuntur quia non et. Eveniet neque nostrum
                                                corporis.
                                                Quibusdam, voluptatum harum eius soluta beatae iusto eligendi, voluptas
                                                corporis neque exercitationem non a cum dolores eaque ipsa delectus omnis
                                                dolore explicabo sunt sed labore laborum expedita qui nam! Ullam?
                                                Dolore doloremque beatae a, quo exercitationem, tempora amet id voluptatibus
                                                eius iste soluta laborum delectus aperiam deleniti cum! Porro laborum quasi
                                                ab itaque obcaecati excepturi sit similique ea illo mollitia.
                                                Eos necessitatibus eaque doloremque? Omnis minus, blanditiis aliquid, vel
                                                laborum voluptate ullam id officiis atque corrupti voluptas dolorum
                                                molestias veritatis. Harum dicta eveniet adipisci iusto nobis nam eum
                                                sapiente quia.
                                                Aspernatur ut dolorem vitae voluptatibus laboriosam iusto pariatur ea
                                                recusandae perspiciatis impedit, sunt eos delectus iste autem beatae
                                                assumenda. Nemo blanditiis, ut nam labore hic aliquid delectus eius
                                                accusamus dolorem.
                                                Porro dolorum, iure aliquid expedita at ab reiciendis ullam repellat magni
                                                assumenda accusantium illum, explicabo suscipit dolore vitae sequi. Odit
                                                quisquam, cupiditate temporibus laboriosam nesciunt obcaecati saepe dicta
                                                delectus aut.
                                                Fugit eligendi tempora voluptate non optio quos corrupti odit accusantium
                                                nostrum. Enim, facilis voluptates incidunt quaerat tempora exercitationem
                                                sit perferendis a quod quam nulla optio nostrum architecto, libero maxime
                                                repellat.
                                                Fugit sequi laborum, soluta perferendis similique mollitia deleniti beatae
                                                repellat labore molestias. Vel voluptatibus sunt distinctio maxime
                                                explicabo. Eaque molestias voluptate, magni quae quidem deleniti laudantium
                                                doloribus consectetur numquam impedit?
                                                Blanditiis ad iste itaque libero aspernatur, recusandae tempora quaerat
                                                perspiciatis beatae. Distinctio enim nulla exercitationem earum delectus
                                                facilis! Repudiandae, laborum! Laboriosam quis nobis iste ex sequi molestiae
                                                id libero quod!
                                                Quos distinctio porro vitae dolorem exercitationem, velit eligendi officiis
                                                ab officia repudiandae modi cupiditate commodi ex ut! Alias beatae quia,
                                                autem dicta, laboriosam perferendis excepturi aperiam commodi exercitationem
                                                error quaerat!
                                                Quisquam aspernatur, quas harum officiis aliquid doloribus eius porro
                                                blanditiis? Officia atque quis dolore vero aut consequuntur fuga nostrum.
                                                Non consequatur ipsum incidunt porro quis dignissimos, vel illum numquam
                                                perferendis.
                                                Dolores nobis, sunt eum, itaque debitis nesciunt inventore laboriosam nemo
                                                eaque nihil quas? Animi ad facilis quae a perferendis deserunt ipsum
                                                adipisci minus voluptatibus sint, hic maiores dignissimos nam consectetur!
                                                Sunt eum inventore quam nostrum? Rem cupiditate ducimus laborum cum ex!
                                                Corrupti, qui! Sapiente dolorum aspernatur a perspiciatis modi. Neque
                                                obcaecati reprehenderit dolorem. Reprehenderit ex ad iure omnis recusandae
                                                nihil!
                                                Inventore laboriosam commodi rem omnis sapiente quasi, illum magnam sunt
                                                blanditiis a. Porro, expedita sit ea doloribus exercitationem temporibus
                                                tempora a consequatur voluptate nostrum corporis quia at ut earum! Impedit.
                                                Libero asperiores perferendis est placeat nobis, et non unde, quis veniam
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-500">
                                                The European Union’s General Data Protection Regulation (G.D.P.R.) goes into
                                                effect on May 25 and is meant to ensure a common set of data rights in the
                                                European Union. It requires organizations to notify users as soon as
                                                possible of high-risk data breaches that could personally affect them.
                                            </p>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                            <button data-modal-hide="static-modal" type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">I
                                                accept</button>
                                            <button data-modal-hide="static-modal" type="button"
                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (Route::has('login'))
                            <a class="nav-link" href="{{ route('login') }}">
                                <x-fas-user width="30" height="30" class="border border-black p-1 rounded-full " />
                            </a>
                        @endif
                    @else
                    @if (Auth::user()->role_id == !1 || !2 || !3 || !4 || !5)
                        
                    <div class="Basket">
                        <x-fas-basket-shopping width="30" height="30" data-modal-target="static-modal"
                        data-modal-toggle="static-modal"
                        class="border border-black p-1 rounded-full cursor-pointer" />
                        <!-- Main modal -->
                        <div id="static-modal" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-6xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                            <h3 class="text-[22px] font-semibold text-gray-900">
                                                Keranjang
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                data-modal-hide="static-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <p class="text-base leading-relaxed text-gray-500">
                                                With less than a month to go before the European Union enacts new consumer
                                                privacy laws for its citizens, companies around the world are updating their
                                                terms of service agreements to comply. Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Tenetur animi, porro aut iusto voluptatum vel
                                                ipsum sapiente nemo! Tenetur sint deserunt architecto porro ab cumque
                                                laboriosam vel. Doloribus, commodi perferendis.
                                                Facere placeat similique eligendi? Nisi voluptas suscipit beatae neque
                                                rerum, nostrum modi voluptatibus commodi odio quod quos sit, sequi sunt
                                                laborum quam corrupti nemo totam quibusdam officiis. Et, nihil velit!
                                                Laudantium, aspernatur rerum atque ea culpa asperiores quos hic nobis quis
                                                cumque excepturi quam debitis dignissimos esse velit neque quo ducimus
                                                perferendis a nisi architecto voluptatem iste, repudiandae totam! Animi.
                                                Repellat laboriosam voluptas quod fugiat ex commodi debitis. Ut id doloribus
                                                perferendis sed optio molestias corrupti a culpa aut in? Minus quidem iusto
                                                debitis vel tempora, deleniti inventore. Eaque, laborum.
                                                Modi delectus vel corporis a, hic vero voluptate sequi provident veniam,
                                                autem pariatur nam quisquam quasi fugit aperiam nulla quaerat porro unde
                                                ullam? Nemo, repudiandae sequi. Atque autem doloremque fuga.
                                                Libero consequuntur quasi recusandae necessitatibus voluptas eum! Obcaecati
                                                natus assumenda, perferendis nemo veritatis, impedit dignissimos ut
                                                perspiciatis nihil porro quidem laboriosam modi inventore iusto. Dolores ut
                                                ab necessitatibus cupiditate iure?
                                                Magnam dolorum expedita illum, perspiciatis doloremque vel, distinctio alias
                                                atque, veniam eos consectetur. Iste porro, aliquid eum illo blanditiis quae,
                                                deserunt amet atque natus cupiditate officia similique modi optio libero.
                                                Dolore tempore ab ad ducimus adipisci laborum aut consequatur qui
                                                necessitatibus nemo ipsum quae nesciunt reiciendis, amet repudiandae,
                                                sapiente doloribus sed? Perferendis quo aliquam laboriosam nisi incidunt
                                                nobis fugiat dolore.
                                                Aliquid eveniet voluptatibus delectus nostrum rerum repudiandae enim velit
                                                numquam tempore. Rem, at, suscipit aliquam deserunt, iusto placeat
                                                asperiores ab quae odio consequuntur quia non et. Eveniet neque nostrum
                                                corporis.
                                                Quibusdam, voluptatum harum eius soluta beatae iusto eligendi, voluptas
                                                corporis neque exercitationem non a cum dolores eaque ipsa delectus omnis
                                                dolore explicabo sunt sed labore laborum expedita qui nam! Ullam?
                                                Dolore doloremque beatae a, quo exercitationem, tempora amet id voluptatibus
                                                eius iste soluta laborum delectus aperiam deleniti cum! Porro laborum quasi
                                                ab itaque obcaecati excepturi sit similique ea illo mollitia.
                                                Eos necessitatibus eaque doloremque? Omnis minus, blanditiis aliquid, vel
                                                laborum voluptate ullam id officiis atque corrupti voluptas dolorum
                                                molestias veritatis. Harum dicta eveniet adipisci iusto nobis nam eum
                                                sapiente quia.
                                                Aspernatur ut dolorem vitae voluptatibus laboriosam iusto pariatur ea
                                                recusandae perspiciatis impedit, sunt eos delectus iste autem beatae
                                                assumenda. Nemo blanditiis, ut nam labore hic aliquid delectus eius
                                                accusamus dolorem.
                                                Porro dolorum, iure aliquid expedita at ab reiciendis ullam repellat magni
                                                assumenda accusantium illum, explicabo suscipit dolore vitae sequi. Odit
                                                quisquam, cupiditate temporibus laboriosam nesciunt obcaecati saepe dicta
                                                delectus aut.
                                                Fugit eligendi tempora voluptate non optio quos corrupti odit accusantium
                                                nostrum. Enim, facilis voluptates incidunt quaerat tempora exercitationem
                                                sit perferendis a quod quam nulla optio nostrum architecto, libero maxime
                                                repellat.
                                                Fugit sequi laborum, soluta perferendis similique mollitia deleniti beatae
                                                repellat labore molestias. Vel voluptatibus sunt distinctio maxime
                                                explicabo. Eaque molestias voluptate, magni quae quidem deleniti laudantium
                                                doloribus consectetur numquam impedit?
                                                Blanditiis ad iste itaque libero aspernatur, recusandae tempora quaerat
                                                perspiciatis beatae. Distinctio enim nulla exercitationem earum delectus
                                                facilis! Repudiandae, laborum! Laboriosam quis nobis iste ex sequi molestiae
                                                id libero quod!
                                                Quos distinctio porro vitae dolorem exercitationem, velit eligendi officiis
                                                ab officia repudiandae modi cupiditate commodi ex ut! Alias beatae quia,
                                                autem dicta, laboriosam perferendis excepturi aperiam commodi exercitationem
                                                error quaerat!
                                                Quisquam aspernatur, quas harum officiis aliquid doloribus eius porro
                                                blanditiis? Officia atque quis dolore vero aut consequuntur fuga nostrum.
                                                Non consequatur ipsum incidunt porro quis dignissimos, vel illum numquam
                                                perferendis.
                                                Dolores nobis, sunt eum, itaque debitis nesciunt inventore laboriosam nemo
                                                eaque nihil quas? Animi ad facilis quae a perferendis deserunt ipsum
                                                adipisci minus voluptatibus sint, hic maiores dignissimos nam consectetur!
                                                Sunt eum inventore quam nostrum? Rem cupiditate ducimus laborum cum ex!
                                                Corrupti, qui! Sapiente dolorum aspernatur a perspiciatis modi. Neque
                                                obcaecati reprehenderit dolorem. Reprehenderit ex ad iure omnis recusandae
                                                nihil!
                                                Inventore laboriosam commodi rem omnis sapiente quasi, illum magnam sunt
                                                blanditiis a. Porro, expedita sit ea doloribus exercitationem temporibus
                                                tempora a consequatur voluptate nostrum corporis quia at ut earum! Impedit.
                                                Libero asperiores perferendis est placeat nobis, et non unde, quis veniam
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-500">
                                                The European Union’s General Data Protection Regulation (G.D.P.R.) goes into
                                                effect on May 25 and is meant to ensure a common set of data rights in the
                                                European Union. It requires organizations to notify users as soon as
                                                possible of high-risk data breaches that could personally affect them.
                                            </p>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                            <button data-modal-hide="static-modal" type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">I
                                                accept</button>
                                            <button data-modal-hide="static-modal" type="button"
                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class=""
                            type="button">
                                <x-fas-user width="30" height="30"
                                class="border border-black p-1 rounded-full " />
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownInformation"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownInformationButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                aria-labelledby="navbarDropdown">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none cursor-pointer w-full">
                                <button class="w-full text-red-600" type="submit">
                                    {{ __('Logout') }}
                                </button>
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>

            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.30h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="/"
                class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ request()->is('/') ? 'page' : false }}">Beranda</a>
            <a href="/about"
                class="{{ request()->is('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ request()->is('about') ? 'page' : false }}">Tentang Kami</a>
            <a href="/catalogue"
                class="{{ request()->is('catalogue') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ request()->is('catalogue') ? 'page' : false }}">Katalog</a>
        </div>
        <div class="md:hidden">
            <div class="Order_obat py-1 px-2 rounded-md border text-white border-[#4e1111] bg-[#be2121]">
                <a href="/order">Pesan Obat</a>
            </div>
        </div>
    </div>
</nav>
