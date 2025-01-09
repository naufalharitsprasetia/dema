{{-- Footer --}}
<!-- Footer Section -->
<footer class="text-primary p-6 ">
    <div class="container max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto flex flex-col md:flex-row flex-wrap md:flex-nowrap justify-evenly items-center">
        <!-- Left Section: Logo and Details -->
        <div class="flex items-center space-x-4">
            <img src="/img/logodema.png" alt="Logo" class="w-16">
            <div>
                <p class="font-bold">DEMA UNIDA GONTOR</p>
                <p class="font-bold">KABINET HADISATYA</p>
                </p>
            </div>
        </div>
        <!-- Mid Section: Navigation Links -->
        <div class="mid-footer flex flex-col">
            <h4 class="font-semibold text-lg my-4">Follow Us on Social Media</h4>
            <div class="flex mx-auto gap-4">
                <a href="https://www.instagram.com/sc_unidagontor/" target="_blank">
                    <img class="w-8" src="/img/instagram.png" alt="">
                </a>
                <a href="">
                    <img class="w-8" src="/img/youtube.png" alt="">
                </a>
                <a href="">
                    <img class="w-8" src="/img/twitter.png" alt="">
                </a>
            </div>
        </div>
        <!-- Right Section: Navigation Links -->
        <div class="mt-8 md:mt-0 right-footer flex flex-col">
            <div class="alamat-unida">
                <h4 class="font-semibold text-lg">Universitas Darussalam Gontor</h4>
                <p class="text-sm">Jl. Raya Siman, Dusun I, Demangan, Kec. Siman,<br> Kabupaten Ponorogo, Jawa Timur
                    63471
                </p>
            </div>
            <div class="flex mt-4 gap-8 flex-col md:flex-row">
                <div class="email">
                    <h4 class="text-base font-semibold">Email</h4>
                    <p class="text-sm">demasiman@unida.gontor.ac.id</p>
                </div>
                <div class="narahubung">
                    <h4 class="text-base font-semibold">Narahubung</h4>
                    <p class="text-sm">+62-979-5749-5743</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@vite('resources/js/app.js')
{{-- Javascript --}}
@stack('scripts')
<!-- Stack untuk scripts di akhir body -->
{{-- @push('scripts') --}}
{{-- AOS --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();

</script>
{{-- Scripts --}}
<script src="/js/script.js"></script>
</body>

</html>
