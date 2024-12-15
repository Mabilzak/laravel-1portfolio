@extends('layouts.main')

@section('main_layout')
  <section aria-label="my intro" class=" md:px-[8px] flex justify-center">
        <div
          class="container min-h-[90vh] py-[18px] pt-[24px] md:px-[56px] 2xl:px-[104px] flex flex-col items-center gap-[4px] md:gap-[16px]">
          <h1 aria-label="my-title" class="font-spaceGrotesk font-[600] text-[36px] lg:text-[40px]">I'm Maulo</h1>
          <p aria-label="my-description" class="text-[16px] md:text-[18px] text-center">
            Ini website pribadiku, anda bisa melihat sekilas tentangku disini. Aku bisa membantu anda dalam pembuatan
            website, jika anda ingin bekerjasama bisa contact saya.
          </p>
        </div>
  </section>
  <section aria-label="my work page" class="w-full md:px-[8px] flex justify-center">
        <div class="container w-full pt-[16px] flex flex-col items-center">
          <div aria-label="my-title" class="pb-[12px]">
            <h1 class="font-spaceGrotesk font-[600] text-[24px] lg:text-[32px]">See My Works</h1>
          </div>
          <div aria-label="my-place-content" class="w-full overflow-x-auto scrollbar scrollbar-track-mWhite scrollbar-thumb-mBlack scrollbar-h-[16px] scroll-py-[1px] flex gap-[16px]">
            @foreach ($post_works as $p_work)
              <div aria-label="my-content" class="min-w-[240px] max-w-[300px]">
              <picture>
                <img src="" alt="" title="" loading="lazy" class="h-[340px] max-w-full bg-mBlack" />
              </picture>
              <a href="/detail_work/{{ $p_work->slug }}" aria-label="my-title-content" class="py-[8px] px-[12px] flex items-center gap-[8px]">
                <h2 class="font-spaceGrotesk font-[600] text-[18px]">{{ $p_work->title }}</h2>
                <i class="fa-solid fa-arrow-right-long"></i>
              </a>
              <p class="px-[12px] pb-[8px]">
                {!! $p_work->description !!}
              </p>
            </div>  
            @endforeach
            
          </div>
          <div aria-label="my-scroll" class="w-full pt-[12px] pb-[20px] flex justify-end gap-[20px]">
            <i class="fa-solid fa-arrow-left-long w-[50px] h-[30px] flex items-center justify-center"></i>
            <i class="fa-solid fa-arrow-right-long w-[50px] h-[30px] flex items-center justify-center"></i>
          </div>
        </div>
  </section>
  <section aria-label="my other work page" class=" md:px-[8px] flex justify-center bg-mBlack text-mWhite">
        <div class="container py-[32px] px-[12px] lg:py-[56px] lg:px-[72px] min-h-[200px]">
          <div class="py-[24px] px-[12px] border-[1px] border-mWhite flex flex-col gap-[16px] items-center">
            <h1 class="text-center font-spaceGrotesk font-[600] text-[20px]">Lihat lebih banyak Karyaku</h1>
            <p class="text-center text-[14px]">Aku juga mempunyai karya yang kutempatkan di tempat-tempat lain.</p>
            <div aria-label="my other content" class="pt-[32px] flex justify-center gap-[16px]">
              <div aria-label="social media" class="w-[48px] h-[48px] bg-mWhite"></div>
              <div aria-label="social media" class="w-[48px] h-[48px] bg-mWhite"></div>
              <div aria-label="social media" class="w-[48px] h-[48px] bg-mWhite"></div>
            </div>
          </div>
        </div>
  </section>
  <section aria-label="about me" class=" md:px-[8px] flex justify-center">
        <div class="container py-[24px]">
          <h1 class="pb-[16px] text-center font-spaceGrotesk font-[600] text-[24px] lg:text-[32px]">About Me</h1>
          <p class="text-center">
            Halo, perkenalkan nama saya Maul Labilo saya tinggal di Malang, Indonesia. Saya senang dan sudah mendalami
            beberapa hal-hal tentang internet khususnya dalam pembuatan website dalam 2-3 tahun terakhir. Dan saya telah
            terlibat dalam beberapa projek yang bisa anda lihat di portofolio saya. Jika anda ingin bekerja sama
            silahkan kontak saya. Terimakasih.
          </p>
        </div>
  </section>
  <section aria-label="my contact" class="w-full md:px-[8px]  flex justify-center">
        <div class="container w-full py-[24px]">
          <div class="w-full flex flex-col gap-[8px] items-center justify-center">
            <h1 class="text-center font-spaceGrotesk font-[600] text-[24px] lg:text-[32px]">Contact</h1>
            <p class="text-center">Anda bisa kontak saya langsung atau anda bisa dari kontak-kontak lainnya.</p>
          </div>
          <form action="" method="post" class="flex flex-col items-start gap-[8px]">
            <div class="pt-[16px] pb-[12px]">
              <p class="font-spaceGrotesk font-[600] text-[20px] lg:text-[24px]">Halo,</p>
              <p>Perkenalkan diri anda</p>
            </div>
            <input type="text" placeholder="Nama Anda" class="lg:h-[32px] lg:w-[300px] border-[1px] border-mBlack"
              required />
            <input type="text" placeholder="Email anda" class="lg:h-[32px] lg:w-[300px] border-[1px] border-mBlack"
              required />
            <textarea name="" id="" placeholder="Jelaskan lebihnya disini..."
              class="min-h-[140px] min-w-[232px] w-[70%] py-[8px] lg:px-[8px] border-[1px] border-mBlack"
              required></textarea>
            <button name="send"
              class="p-[6px] lg:px-[24px] border-[1px] border-mBlack lg:font-spaceGrotesk font-[600] text-[14px] tracking-[1px]">
              KIRIM
            </button>
          </form>
          <div class="pt-[32px] flex flex-col gap-[8px]">
            <h2 class="font-spaceGrotesk font-[600] text-[18px]">Kontakku lainnya</h2>
            <div class="pl-[24px] flex flex-wrap gap-[8px]">
              <div class="w-[48px] h-[48px] bg-mBlack"></div>
              <div class="w-[48px] h-[48px] bg-mBlack"></div>
            </div>
          </div>
        </div>
  </section>
@endsection