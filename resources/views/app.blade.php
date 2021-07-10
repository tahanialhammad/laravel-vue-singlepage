<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Flickity Carousel css-->
    <!-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> -->


    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
    <div id="app">
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
                                <router-link to="/" class="bg-purple-600">flyer</router-link>
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
    </div>

       <!-- Flickity Carousel js -->
       <!-- <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> -->

    <script src="js/app.js"></script>

</body>

</html>
