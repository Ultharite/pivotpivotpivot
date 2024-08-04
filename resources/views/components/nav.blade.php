<header class="siteheader">
  <nav aria-label="Global">

      <x-nav-link class="{{ request()->is('/') ? 'active' : '' }} nav__link" href="/">Home</x-nav-link>
      <x-nav-link class="{{ request()->is('about') ? 'active' : '' }} nav__link" href="/about">About Us</x-nav-link>
      <x-nav-link class="{{ request()->is('contact') ? 'active' : '' }} nav__link" href="/contact">Contact</x-nav-link>


  </nav>
</header>
