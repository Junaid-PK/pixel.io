{{-- Navbar --}}
<div class="shadow-lg navbar bg-neutral text-neutral-content">
    <div class="px-2 mx-2 navbar-start">
        <span class="text-lg font-bold">
            Pixel-io
        </span>
    </div>
    <div class="hidden px-2 mx-2 navbar-center lg:flex">
        <div class="flex items-stretch">
            <a class="btn btn-ghost btn-sm rounded-btn">
                Home
            </a>
            <a class="btn btn-ghost btn-sm rounded-btn">
                About
            </a>
            <a class="btn btn-ghost btn-sm rounded-btn">
                Shop
            </a>
            <a class="btn btn-ghost btn-sm rounded-btn">
                Contact
            </a>
        </div>
    </div>
    <div class="navbar-end">
        <input type="text" placeholder="Search here..." class="text-sm text-black rounded-2xl">
        <button class="flex btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block w-6 h-6 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>
        @if (Route::has('login'))
            @auth
            <div class="hidden sm:flex sm:items-center sm:ml-6">
              <x-dropdown align="right" width="48">
                  <x-slot name="trigger">
                      <div class="flex mr-4">
                          <span class="mr-1 text-2xl text-white uppercase fas fa-user"></span>
                          {{Auth::user()->name}}
                      </div>
                  </x-slot>

                  <x-slot name="content">
                      <!-- Authentication -->
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf

                          <x-dropdown-link :href="route('logout')"
                                  onclick="event.preventDefault();
                                              this.closest('form').submit();">
                              {{ __('Log Out') }}
                          </x-dropdown-link>
                      </form>
                  </x-slot>
              </x-dropdown>
          </div>
            @else
                <a href="{{ route('login') }}" class="mr-2 btn btn-active" role="button" aria-pressed="true">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="mr-2 btn btn-active" role="button" aria-pressed="true">Signup</a>
                @endif
            @endauth
        @endif
        


    </div>
</div>
{{-- Menu bar --}}
<menu class="flex p-6 mt-0 bg-gray-200">
    <ul class="flex mx-auto">
        <li class="px-4 text-black transform cursor-pointer hover:scale-110 motion-reduce:transform-none"><span
                class="mr-2 fas fa-circle-notch"></span>Electronics</li>
        <li class="px-4 text-black transform cursor-pointer hover:scale-110 motion-reduce:transform-none"><span
                class="mr-2 fas fa-circle-notch"></span>Electronics</li>
        <li class="px-4 text-black transform cursor-pointer hover:scale-110 motion-reduce:transform-none"><span
                class="mr-2 fas fa-circle-notch"></span>Electronics</li>
        <li class="px-4 text-black transform cursor-pointer hover:scale-110 motion-reduce:transform-none"><span
                class="mr-2 fas fa-circle-notch"></span>Electronics</li>
        <li class="px-4 text-black transform cursor-pointer hover:scale-110 motion-reduce:transform-none"><span
                class="mr-2 fas fa-circle-notch"></span>Electronics</li>
        <li class="px-4 text-black transform cursor-pointer hover:scale-110 motion-reduce:transform-none"><span
                class="mr-2 fas fa-circle-notch"></span>Electronics</li>
    </ul>
</menu>
