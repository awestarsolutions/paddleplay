<x-public-layout>
    <section class="py-32 bg-[#eaefee]">
        <div class="max-w-7xl mx-auto px-6">
            <span class="label-md mb-8 block">Our Story</span>
            <h1 class="font-manrope font-extrabold text-7xl md:text-8xl uppercase tracking-tighter mb-12 leading-[0.9]">
                Structured <br>
                For the <br>
                Sport.
            </h1>
        </div>
    </section>

    <section class="py-32 bg-[#f9f9f8]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-24 items-start">
                <div class="sticky top-32">
                    <p class="font-manrope font-bold text-4xl uppercase tracking-tight leading-tight text-[#46655d]">
                        PaddlePlay is Mumbai's dedicated community for organized paddle and pickleball sessions.
                    </p>
                </div>
                <div class="space-y-12 text-[#404948] body-lg leading-relaxed">
                    <p>
                        We noticed a gap in the Mumbai sports scene: while the interest in paddle and pickleball was skyrocketing, the infrastructure to find quality, structured play was lacking.
                    </p>
                    <p>
                        PaddlePlay was created to solve this. We curate sessions, ensure quality court availability, and bring together a community that values the sport as much as the connection.
                    </p>
                    <p class="font-bold text-[#2c3433]">
                        Our criteria is simple: Professional organization. Quality equipment. Consistent play.
                    </p>
                    <div class="pt-12">
                        <h4 class="label-md mb-8">Guided by</h4>
                        <ul class="space-y-4">
                            <li class="flex items-center space-x-4">
                                <span class="w-2 h-2 bg-[#46655d] rounded-full"></span>
                                <span class="body-md">Quality Over Quantity</span>
                            </li>
                            <li class="flex items-center space-x-4">
                                <span class="w-2 h-2 bg-[#46655d] rounded-full"></span>
                                <span class="body-md">Community Over Competition</span>
                            </li>
                            <li class="flex items-center space-x-4">
                                <span class="w-2 h-2 bg-[#46655d] rounded-full"></span>
                                <span class="body-md">Radical Consistency</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative h-[60vh] bg-[#eaefee] overflow-hidden grayscale">
        <img src="{{ asset('assets/hero.png') }}" alt="PaddlePlay Courts" class="w-full h-full object-cover">
    </section>
</x-public-layout>
