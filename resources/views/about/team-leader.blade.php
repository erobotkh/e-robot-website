<x-layout>
    <div>
        <!-- component -->
        <div class="p-5 lg:py-20 bg-gray-50">
            <div class="container mx-auto px-6 md:px-12 xl:px-32">
                <div class="mb-16 text-center">
                    <x-about-title title="Team Leaders of E-robot" />
                    <p class="text-gray-600 lg:w-8/12 lg:mx-auto">Tailus prides itself not only on award-winning
                        technology, but also on the talent of its people of some of the brightest minds and most
                        experienced executives in business.</p>
                </div>
                <div class="grid gap-12 items-center md:grid-cols-3">
                    <div class="space-y-4 text-center">
                        <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64 "
                            src="/images/photo_members/Han_Leangsiv.jpeg" alt="co-founder" loading="lazy" width="640"
                            height="805">
                        <div>
                            <h4 class="text-2xl font-bold uppercase" style="font-family: 'Battambang', cursive;">HAN
                                LEANGSIV</h4>
                            <span class="block text-sm text-gray-500 uppercase">Co-Founder</span>
                        </div>
                    </div>
                    <div class="space-y-4 text-center">
                        <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80"
                            src="/images/photo_members/Suy_Kosal.jpg" alt="Founder" loading="lazy" width="1000"
                            height="667">
                        <div>
                            <h4 class="text-2xl font-bold uppercase" style="font-family: 'Battambang', cursive;">SUY
                                KOSAL</h4>
                            <span class="block text-sm text-gray-500 uppercase">Founder</span>
                        </div>
                    </div>
                    <div class="space-y-4 text-center">
                        <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                            src="/images/photo_members/sticker-e-robot.png" alt="Co-Founder" loading="lazy"
                            width="1000" height="667">
                        <div>
                            <h4 class="text-2xl font-bold uppercase" style="font-family: 'Battambang', cursive;"></h4>
                            <span class="block text-sm text-gray-500 uppercase"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- component -->
        <section class=" mx-auto px-4 sm:px-6 lg:px-10 pb-12">
            <div class="text-center pb-12">
                <h1 class="font-bold text-3xl font-heading text-red-600 uppercase"
                    style="font-family: 'Battambang', cursive;">
                    Check our awesome team leaders
                </h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($data_member as $item)
                    <?php
                        $fb_link ='https://web.facebook.com/profile.php?id=100094879493602';
                        $telegram_link ='https://t.me/erobot_generalknowledge';
                        $linkin_link = 'https://www.linkedin.com/company/erobotkh';

                        $position = strtolower($item->title);
                    ?>
                    @if ($position === 'leader' )

                        @foreach ($social_member as $social)
                            @if ($social->member_id === $item->id)

                                @switch($social->name )
                                    @case('telegram')
                                        <?php $telegram_link = $social->link; ?>
                                        @break
                                    @case('facebook')
                                        <?php $fb_link = $social->link; ?>
                                        @break
                                    @case('linkin')
                                        <?php $linkin_link = $social->link; ?>
                                        @break
                                    @default
                                @endswitch
                            @endif
                        @endforeach

                        <x-team-leader-card name="{{ $item->first_name }} {{ $item->last_name }}"
                            title="{{ $item->name }} {{ $item->title }}"
                            photo="{{ $item->profile }}"
                            facebook="<?php echo $fb_link; ?>"
                            telegram="<?php echo $telegram_link; ?>"
                            linkin="<?php echo $linkin_link; ?>" />
                    @endif
                @endforeach

                {{-- <x-team-leader-card name="Rann Sreynith" title="Social Media Team" photo="/images/photo_members/Rann_Sreynith.JPG" facebook="https://www.facebook.com/profile.php?id=100070627689101&mibextid=LQQJ4d" telegram="https://t.me/sreynith_1411" linkin="#" />
            <x-team-leader-card name="Korn Sophea" title="Mobile Development Team" photo="/images/photo_members/Korn_Sophea.jpg" facebook="https://www.facebook.com/korn.sophea.718?mibextid=ZbWKwL" telegram="https://t.me/mooni_li" linkin="#" />
            <x-team-leader-card name="Meth Farrizart" title="Website Team" photo="/images/photo_members/Meth_Farrizart.jpg" facebook="https://www.facebook.com/farrizart.meth" telegram="https://t.me/greatdev09" linkin="#" />--}}
            {{-- <x-team-leader-card name="Pan Sovann" title="Planning and Strategy Team" photo="/images/photo_members/Pan_Sovann.jpg" facebook="#" telegram="https://t.me/domlong_choeng" linkin="#" />
            <x-team-leader-card name="Tro Bory" title="HR & Admin Team" photo="/images/photo_members/Tro_Bory.jpg" facebook="https://www.facebook.com/bory.smilefull" telegram="https://t.me/BoryTro" linkin="#" />
            <x-team-leader-card name="Ung sreymuch" title="Financial Team" photo="/images/photo_members/Ung_Sreymuch.jpg" facebook="https://www.facebook.com/ung.sreymuch" telegram="https://t.me/ungsreymuch" linkin="#" />
            <x-team-leader-card name="Van Sela" title="Competition" photo="/images/photo_members/Van_Sela.jpg" facebook="https://www.facebook.com/sela.van.10?mibextid=ZbWKwL" telegram="https://t.me/sela_van" linkin="#" /> --}}
        </section>

        <!-- component -->
        <section class="mx-auto px-4 sm:px-6 lg:px-10 pb-12">
            <div class="text-center pb-12">
                <h1 class="font-bold text-3xl font-heading text-red-600 uppercase"
                    style="font-family: 'Battambang', cursive;">
                    Check our awesome team members
                </h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($data_member as $item)
                    <?php
                        $fb_link ='https://web.facebook.com/profile.php?id=100094879493602';
                        $telegram_link ='https://t.me/erobot_generalknowledge';
                        $linkin_link = 'https://www.linkedin.com/company/erobotkh';
                        $position = strtolower($item->title);

                    ?>
                    @if ($position === 'member')

                        @foreach ($social_member as $social)
                            @if ($social->member_id === $item->id)

                                @switch($social->name )
                                    @case('telegram')
                                        <?php $telegram_link = $social->link; ?>
                                        @break
                                    @case('facebook')
                                        <?php $fb_link = $social->link; ?>
                                        @break
                                    @case('linkin')
                                        <?php $linkin_link = $social->link; ?>
                                        @break
                                    @default
                                @endswitch
                            @endif
                        @endforeach

                        <x-team-leader-card name="{{ $item->first_name }} {{ $item->last_name }}"
                            title="{{ $item->name }} {{ $item->title }}"
                            photo="{{ $item->profile }}"
                            facebook="<?php echo $fb_link; ?>"
                            telegram="<?php echo $telegram_link; ?>"
                            linkin="<?php echo $linkin_link; ?>" />
                    @endif
                @endforeach
                {{-- <x-team-leader-card name="Hai Tongmeng" title="Website Development Team"
                    photo="/images/photo_members/Hai_Tongmeng.jpg"
                    facebook="https://www.facebook.com/h.tongmeng?mibextid=ZbWKwL" telegram="https://t.me/HAI_Tongmeng"
                    linkin="#" />
                <x-team-leader-card name="Chann Kimlong" title="Website Development Team"
                    photo="/images/photo_members/Chann_Kimlong.jpg"
                    facebook="https://www.facebook.com/phnompenhcrown.fc.7?mibextid=ZbWKwL"
                    telegram="https://t.me/kimlong_chann" linkin="#" />
                <x-team-leader-card name="So Kimlang" title="Website Development Team"
                    photo="/images/photo_members/So_Kimlang.jpg" facebook="https://www.facebook.com/kimlang.so.9"
                    telegram="https://t.me/lang17_Mar" linkin="#" />

                <x-team-leader-card name="Thea Choem" title="Mobile Development Team"
                    photo="/images/photo_members/Choem_Thea.jpeg" facebook="https://www.facebook.com/theacheng.g6"
                    telegram="https://t.me/Theachoem" linkin="#" />
                <x-team-leader-card name="Sreyleak Deth" title="Mobile Development Team"
                    photo="/images/photo_members/Deth_Sreyleak.jpg"
                    facebook="https://www.facebook.com/deth.sreyleak.359?mibextid=ZbWKwL"
                    telegram="https://t.me/se_jeong99" linkin="#" />

                <x-team-leader-card name="Norng Sovanmanech" title="UX/UI Design Team"
                    photo="/images/photo_members/Norng_Sovanmanech.jpg"
                    facebook="https://www.facebook.com/profile.php?id=100077702059882" telegram="https://t.me/manech_S"
                    linkin="#" />
                <x-team-leader-card name="Non Sinat " title="UX/UI Design Team"
                    photo="/images/photo_members/Non_Sinat.jpg"
                    facebook="https://www.facebook.com/profile.php?id=100077702059882" telegram="https://t.me/Sinatnon"
                    linkin="#" />
                <x-team-leader-card name="Heang Menghorng" title="UX/UI Design Team"
                    photo="/images/photo_members/Heang_Menghorng.jpg"
                    facebook="https://www.facebook.com/profile.php?id=100023332240371&mibextid=ZbWKwL"
                    telegram="https://t.me/Menghorng23" linkin="#" />
                <x-team-leader-card name="Orng SreyMoch" title="UX/UI Design Team"
                    photo="/images/photo_members/Orng_Sreymoch.jpg"
                    facebook="https://www.facebook.com/orng.sreymoch?mibextid=ZbWKwL"
                    telegram="https://t.me/sreymoch_Orng" linkin="#" />

                <x-team-leader-card name="Chean Lyhor" title="Robotics Team"
                    photo="/images/photo_members/Chean_Lyhor.jpg" facebook="https://www.facebook.com/ly.hor.39589"
                    telegram="https://t.me/chean_lyhor" linkin="#" />
                <x-team-leader-card name="Nget sophun" title="Robotics Team"
                    photo="/images/photo_members/Nget_Sophun.jpg"
                    facebook="https://www.facebook.com/Nget.Sophun.1?mibextid=LQQJ4d" telegram="https://t.me/Phunzz"
                    linkin="#" />
                <x-team-leader-card name="Chean Phallyn" title="Robotics Team"
                    photo="/images/photo_members/Chean_Phallyn.JPG" facebook="https://www.facebook.com/chean.phallyn"
                    telegram="https://t.me/Phallyn" linkin="#" />
                <x-team-leader-card name="Deaun MengLeang" title="Robotics Team"
                    photo="/images/photo_members/Deaun_Mengleang.jpg"
                    facebook="https://www.facebook.com/mengleang.deaun?mibextid=ZbWKwL"
                    telegram="https://t.me/MengLeang_deaun" linkin="#" />
                <x-team-leader-card name="krith Pheaktra" title="Robotics Team"
                    photo="/images/photo_members/Krith_Pheaktra.JPG"
                    facebook="https://www.facebook.com/krith.pheaktra?mibextid=LQQJ4d"
                    telegram="https://t.me/krith_pheaktra" linkin="#" />
                <x-team-leader-card name="Sun Hokny" title="Robotics Team"
                    photo="/images/photo_members/Sun_Hokny.jpg"
                    facebook="https://www.facebook.com/hokny.kh?mibextid=ZbWKwL" telegram="https://t.me/hok_Ny"
                    linkin="#" />
                <x-team-leader-card name="Bai David" title="Robotics Team"
                    photo="/images/photo_members/Bai_David.jpg" facebook="#" telegram="https://t.me/Wythh"
                    linkin="#" />

                <x-team-leader-card name="Lim Chanvina" title="Social Media Team"
                    photo="/images/photo_members/Lim_Chanvina.png"
                    facebook="https://www.facebook.com/profile.php?id=100009458120139&mibextid=LQQJ4d"
                    telegram="https://t.me/lifeiscr4zy" linkin="#" />
                <x-team-leader-card name="Uk Thavorneath" title="Social Media Team"
                    photo="/images/photo_members/Uk_Thavorneath.jpg"
                    facebook="https://www.facebook.com/profile.php?id=100077663154497&mibextid=LQQJ4d"
                    telegram="https://t.me/vorneath99Wu7duke" linkin="#" />
                <x-team-leader-card name="CHORN CHANLAKHNA" title="Social Media Team"
                    photo="/images/photo_members/Chorn_Chanlakhna.jpg"
                    facebook="https://www.facebook.com/profile.php?id=100042204918294&mibextid=ZbWKwL"
                    telegram="https://t.me/Chanlakhnachorn" linkin="#" />
                <x-team-leader-card name="Sam ath Rithy" title="Social Media Team"
                    photo="/images/photo_members/Samath_Rithy.jpg"
                    facebook="https://www.facebook.com/profile.php?id=100088873688666&mibextid=ZbWKwL"
                    telegram="https://t.me/rithysamath" linkin="#" /> --}}

        </section>
    </div>
</x-layout>
