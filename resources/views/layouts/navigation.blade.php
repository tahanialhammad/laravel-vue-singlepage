<header class="p-6 mb-8" style="background: url('/images/logo2.png')-50px 10px no-repeat;">
            <!-- <img src="/images/logo.svg" alt="" class="w-8"> -->
            <h1 class="text-3xl text-grey-darkest leading-none">Tahani</h1>
        </header>
        <div class="container px-8 pb-10">
            <main class="flex">
                <aside class="w-1/5 pt-6">
                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-4 text-base">Website</h5>
                        <ul>
                            <li class="text-sm">
                                <router-link to="/" exact>Home</router-link>
                            </li>
                            <li class="text-sm">
                                <router-link to="/website">Website</router-link>
                            </li>
                            <li class="text-sm">
                                <router-link to="grafic">Grafic</router-link>
                            </li>
                            <li class="text-sm">
                                <router-link to="/about">About</router-link>
                            </li>
                        </ul>
                    </section>
                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-4">Grafic design</h5>
                        <ul>
                            <li class="text-sm">
                                <router-link to="/photo" class="bg-purple-600">photo</router-link>
                            </li>
                            <li class="text-sm">
                                <router-link to="/about">newsbrief</router-link>
                            </li>
                            <li class="text-sm">
                                <router-link to="{ name: 'home' }">namehome</router-link>
                            </li>
                            <li class="text-sm">
                                <router-link to="{ name: 'about' }">neameabout</router-link>
                            </li>
                        </ul>
                    </section>


                </aside>

                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>
        </div>
