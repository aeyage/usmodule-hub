<div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-dark shadow-sm sidebar" id="sidebar">
    <img src="{{ asset('logo1.png') }}" alt="" class="mr-4 rounded-0" width="51%" height="45">
    <div class="list-group rounded-0">
        <div class="mt-2"></div>
        <a href="/"
            class="list-group-item list-group-item-action bg-dark text-khpal border-0 align-items-center">
            <span class="bi bi-book h4"></span>
            <span class="ml-2">Courses</span>
        </a>
        <a href="{{ route('chat') }}" wire:navigate
            class="list-group-item list-group-item-action bg-dark text-khpal border-0 align-items-center">
            <span class="bi bi-chat h5"></span>
            <span class="ml-2">Assistance</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-khpal border-0 align-items-center">
            <span class="bi bi-map h5"></span>
            <span class="ml-2">Venue</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-khpal border-0 align-items-center">
            <span class="bi bi-calendar3-range h5"></span>
            <span class="ml-2">Timetable</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-khpal border-0 align-items-center">
            <span class="bi bi-gear h5"></span>
            <span class="ml-2 text-center">Settings</span>
        </a>
    </div>
</div>
