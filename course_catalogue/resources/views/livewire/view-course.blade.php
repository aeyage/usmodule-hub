<div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
    @include('layouts.inc.header')
    <!-- top nav -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <!-- main content -->
    <main class="min-vh-100" style="margin-right: 70px;">

        <div class="alert alert-danger alert-dismissible text-justify" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Warning!</strong> This version of course catalogue is still being
                    tested and may not be accurate. Students are encouraged to double check the details 
                    with lecturers. To report bugs or any discrepancy in details, please post 
                    a bug report on GitHub at our repository or send an email 
                    to complaints@usmodulehub.com.</p>
            <footer class="text-dark font-weight-bold">
                <div class="mt-2"></div>    
                -Aiman Hakimi😘</footer>
        </div>

        <div class="row">

            <div class="col-md-7 col-lg-8 text-white">
                <div class="text-white text-right">

                </div>

                <h1 class="font-family-sans-serif text-orange-500 font-weight-bold h1">{{ $course->code }}</h1>
                <h2 class="text-white-50 font-weight-bold h2"> {{ $course->title }}</h2>

                <p class="mt-3"></p>

                <p class="text-white-50">{{ $course->department->name }} • {{ $course->unit->name }}</p>
                <p class="text-white-50">{{ $course->semester->name }} </p>

                <p class="mt-3"></p>
                <hr class="bg-secondary">
                <p class="mt-3"></p>

                <p class="text-white-50 font-weight-normal">
                    {{ $course->description }}
                </p>
                
                <p class="mt-7">
                    <h4 class="text-white-50 font-weight-bold h5">Prerequisite</h4>
                    <!-- <hr class="bg-secondary mt-2"> -->
                    <p class="mt-2 text-white-50">
                    {{ $course->prerequisite }}
                    </p>
                </p>
                
                <p class="mt-7">
                    <h4 class="text-white-50 font-weight-bold h5">Grading Basis</h4>
                    <!-- <hr class="bg-secondary mt-2"> -->
                    <p class="mt-2 text-white-50">
                    {{ $course->grading_basic }}
                    </p>
                </p>
                {{-- <hr class="bg-secondary"> --}}
            </div>

        </div>
        
        <div class="mt-4"></div>

        <livewire:comments :model="$course"/>
        <!-- <div class="row mt-5">
            <div class="col-md-7 col-lg-8 text-white">
                <form class="max-w-sm mx-auto">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                    <textarea id="message" rows="2" class="form-control" placeholder="Start the discussion"></textarea>
                    <button class="btn btn-primary mt-2 float-right">Post</button>
                </form>
            </div>
        </div>  -->

    </main>
</div>
