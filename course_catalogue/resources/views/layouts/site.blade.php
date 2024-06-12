<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '-' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite([ 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow&display=swap');

        body {
            /* font-family: 'Barlow', sans-serif;
            background-color: #2D3748 */

            /* font-family: 'Barlow', sans-serif;
            background-color: #1d2024 */

            font-family: 'Barlow', sans-serif;
            background-color: #1b1c1f
        }

        a:hover {
            text-decoration: none;
        }

        .border-left {
            border-left: 2px solid var(--primary) !important;
        }

        .sidebar {
            top: 0;
            left: 0;
            z-index: 100;
            overflow-y: auto;
        }

        .overlay {
            background-color: rgb(0 0 0 / 45%);
            z-index: 99;
        }

        /* sidebar for small screens */
        @media screen and (max-width: 767px) {
            .sidebar {
                max-width: 18rem;
                transform: translateX(-100%);
                transition: transform 0.4s ease-out;
            }
            .sidebar.active {
                transform: translateX(0);
            }
        }

        .bg-dark {
            /* background-color: #1A202C !important; */
            background-color: #1b1c1f !important;
        }

        .text-khpal {
            color: #5d6b7f !important;
        }

        .bg-khpal {
            /* background-color: #2D3748 !important; */
            background-color: #252a30 !important;
        }
    </style>
</head>

<body>

    <!-- overlay -->
    <div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"></div>


    @include('layouts.inc.sidebar')
    {{ $slot }}


    <script>
        $(document).ready(() => {

            $('#open-sidebar').click(() => {

                // add class active on #sidebar
                $('#sidebar').addClass('active');

                // show sidebar overlay
                $('#sidebar-overlay').removeClass('d-none');

            });


            $('#sidebar-overlay').click(function() {

                // add class active on #sidebar
                $('#sidebar').removeClass('active');

                // show sidebar overlay
                $(this).addClass('d-none');

            });

        });
    </script>

</body>

</html>
