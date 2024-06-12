<div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
    @include('layouts.inc.header')
    <!-- top nav -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <!-- main content -->
    <main class="min-vh-100" style="margin-right: 70px;">

        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Announcement!</strong> This course catalogue is a CAT304 project and is in development stage.
                    Most courses are still being added from time to time in order to deliver the most updated
                    details for students. Due to time-constraints, we have to defer the development of other
                    features to give us ample time to focus on the core features. To report bugs or any discrepancy in details, please post 
                    a bug report on GitHub at our repository or send an email 
                    to complaints@usmodulehub.com.</p>
            <footer class="text-dark font-weight-bold">
                <div class="mt-2"></div>    
                -Aiman Hakimi😘</footer>
        </div>

        <!-- <span class="bi bi-search ml-1 mb-2 text-white small"></span> -->
        <input wire:model.live="search" type="text" placeholder="Codes, titles, descriptions"
            class="form-control form-control-lg h3 bg-khpal w-25 text-white">
        {{-- <input type="text" wire:model.live="search"> --}}
       
        <section class="row">

            <div class="col-md-7 col-lg-8 text-secondary">
                <div class="text-white-50 text-right">
                    {{ sizeof($courses) }} courses found
                </div>

                <hr class="bg-secondary">
                <div class="mt-4"></div>

                <div class="row">
                    @foreach ($courses as $course)
                        <div class="col-lg-12 col-sm-12" wire:key="{{ $course->id }}">
                            
                            <a href="{{ route('course.view', $course->id) }}">
                                <h4 class="font-weight-bold text-orange-500 h5">{{ $course->code }} {{ $course->title }}</h4>
                            </a>
                            <h5 class="text-white-50">{{ $course->department->name }} • {{ $course->unit->name }} </h5>
                            <div class="mb-3"></div>
                            {{ $course->description }}

                            <div class="mb-5"></div>
                        </div>
                    @endforeach
                </div>
                
                <div class="mt-4">
                    {{ $courses->links() }}
                </div>
            </div>

            <div class="col-md-6 col-lg-4 text-secondary">
                <p class="text-white-50">
                    Offered In
                    <div class="mt-2"></div>
                </p>
                <ul>
                    @php
                        $semserters = App\Models\Semester::get();
                    @endphp
                    @foreach ($semserters as $semester)
                        @php
                            $course_count = App\Models\Course::where('semester_id',$semester->id)->count();
                        @endphp
                        <div><span class="fa fa-check text-orange-500 mr-2"></span> {{ $semester->name }} ({{ $course_count }})</div>
                    @endforeach
                </ul>

                <div class="mt-3"></div>

                <p class="text-white-50">
                    Levels
                    <div class="mt-2"></div>
                </p>
                <ul>
                    @php
                        $levels = App\Models\Level::get();
                    @endphp
                    @foreach ($levels as $level)
                        @php
                            $course_counts = App\Models\Course::where('level_id',$level->id)->count();
                        @endphp
                        <div>
                            <input type="checkbox" wire:model="selectedLevels" wire:click='triggerSearch' value="{{ $level->id }}">

                            {{ $level->name }} ({{ $course_counts }})
                        </div>
                    @endforeach
                </ul>
            </div>          

        </section>
    </main>

</div>
