<nav class="w-100 d-flex px-4 py-2 mb-4 shadow-lg">
    <!-- close sidebar -->
    <button class="btn py-0 d-lg-none" id="open-sidebar">
        <span class="bi bi-list text-white h3"></span>
    </button>

    {{-- <form wire:submit.prevent="search">
        <input wire:model="search" type="text" placeholder="Course, Title, Semester" class="form-control bg-khpal w-25">
        <button type="submit">Search</button>
   </form> --}}

    <div class="dropdown ml-auto">
        <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown"
            aria-expanded="false">
            <span class="bi bi-door-open-fill text-white"></span>
            <span class="bi bi-caret-down-fill ml-1 mb-2 text-white small"></span>
        </button>
        <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')" class="dropdown-item text-center"
                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log out') }}
                </x-dropdown-link>
            </form>
            {{-- <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a> --}}
            {{-- <a class="dropdown-item" href="#">Settings</a> --}}

        </div>
    </div>

    <!-- <div class="vr d-lg-flex h-100 mx-lg-2 text-light"></div> -->
    <span class="text-white-50 py-0 d-flex align-items-center"><small>AY2023/24, Semester 1, Week 15</small></span>
</nav>
