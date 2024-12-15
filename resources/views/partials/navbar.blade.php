<header class=" md:px-[8px] border-b-[1px] border-mBlack flex justify-center">
  <div aria-label="my-header" class="container h-[64px] flex justify-between items-center">
    <h1 role="" aria-label="my-logo" class="font-spaceGrotesk font-[600] text-[20px] lg:text-[24px]">
      Maul Labilo.
    </h1>
    <nav class="h-full lg:w-[380px] lg:flex lg:justify-between ">
      <a href="/" class="hidden h-full px-[8px] lg:flex items-center text-mBlack {{ ($title_head === 'Home') ? 'bg-mBlack text-mWhite' : '' }}">Home</a>
      <a href="/work" class="hidden h-full px-[8px] lg:flex items-center text-mBlack {{ ($title_head === 'Work') ? 'bg-mBlack text-mWhite' : '' }}">Work</a>
      <a href="/about" class="hidden h-full px-[8px] lg:flex items-center text-mBlack {{ ($title_head === 'About') ? 'bg-mBlack text-mWhite' : '' }}">About</a>
      <a href="/contact" class="hidden h-full px-[8px] lg:flex items-center text-mBlack {{ ($title_head === 'Contact') ? 'bg-mBlack text-mWhite' : '' }}">Contact</a>
      <a href="/login" class="hidden h-full px-[8px] lg:flex items-center text-mBlack {{ ($title_head === 'Login') ? 'bg-mBlack text-mWhite' : '' }}">Login</a>
      <i class="fa-sharp fa-solid fa-bars text-[24px] lg:hidden"></i>
    </nav>
  </div>
</header>