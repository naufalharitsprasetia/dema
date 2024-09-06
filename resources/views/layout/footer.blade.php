{{-- Footer --}}
<!-- Footer Section -->
<footer class="bg-slate-800 text-white p-6 ">
    <div
        class="container mx-auto flex flex-wrap md:flex-nowrap justify-between items-center max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Left Section: Logo and Details -->
        <div class="flex items-center space-x-4">
            <img src="/img/logodema.png" alt="Logo" class="h-12 w-12">
            <div>
                <p class="font-bold">DEMA UNIDA GONTOR</p>
                <p class="text-sm">Dewan Mahasiswa Universitas Darussalam Gontor</p>
                </p>
            </div>
        </div>
        <!-- Right Section: Navigation Links -->
        <div class="grid justify-center items-center mx-auto md:w-auto grid-cols-2 md:grid-cols-4 gap-4 md:h-full mt-4 ">
            <div class="logo-support p-2 rounded-md justify-self-center">
                <h4>Home</h4>
            </div>
            <div class="logo-support p-2 rounded-md justify-self-center">
                <h4>About</h4>
            </div>
            <div class="logo-support p-2 rounded-md justify-self-center">
                <h4>Contact</h4>
            </div>
            <div class="logo-support p-2 rounded-md justify-self-center">
                <h4>Faq</h4>
            </div>
        </div>
    </div>
</footer>
{{-- Javascript --}}
@stack('scripts') <!-- Stack untuk scripts di akhir body -->
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
