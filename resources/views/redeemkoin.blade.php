@extends ('layouts.app')

@section ('content')

    <div class="mx-auto my-auto py-auto px-auto ">

        <!-- Tukar Pulsa -->
        <div class="flex pt-24 -mb-36 ">
            <div>
                <img  class=" h-64 w-auto" src="/images/Ellipse 10.jpg">
            </div>
            <div class="absolute"> 
                <img class="relative pl-16 pt-7 "  src="/images/tukarpulsa.jpg">
            </div>
            <div class="h-auto max-w-lg pt-3 pr-16 ml-auto">
                <img class="relative" src="/images/Close_square_fill.png">
            </div>
        </div>

        <div class="text-center -mb-32 ">
            <h1 class="font-extrabold text-8xl text-slate-700">Poin Sipete</h1>
            <h1 class=" font-[serif]  font-extrabold text-8xl mb-7 text-[#118EEA]">$<span 
                class=" font-extrabold  text-[#47A7EF]">100</span> </h1> <!--poin dan uang dolar-->

                <div class=""> <!--tukar poin dan lambangnya-->
                    <h1 class="text-2xl font-extrabold text-slate-700">Tukar Poin Menjadi</h1>
                    <h1 class="font-extrabold text-1xl  text-slate-700">Pulsa<span
                        class="font-extrabold pl-14">Token Listrik</span> </h1>
                        <div class="inline-flex pr-7  ">
                            <img class="pr-24 -mr-10" src="/images/pulsa-removebg-preview 1.jpg">
                            <img class="pl-4  " src="/images/tokenListrik-removebg-preview 1.jpg">
                        </div>
                    <h1 class="font-extrabold pr-9">Klik</h1>
                </div>
        </div>

        <div class="flex pt-44 ">
            <div>
                <img class="h-56 w-screen max-w-full" src="/images/Rectangle 4.png">
            </div>
            <div class="absolute pt-20 pl-96">
                <img class=" relative h-14 pl-96 ml-56" src="/images/lambangsosmed.jpg">
            </div>
        </div>
    </div>


@endsection