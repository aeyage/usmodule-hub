<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 font-bold">
                    {{ __('Courses') }}

                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-2">
                    <div
                        class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                        <div>
                            <a href="{{ route('admin.course.create') }}" id="dropdownRadioButton"
                                data-dropdown-toggle="dropdownRadio"
                                class="inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 ml-4 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">

                                + Add

                            </a>
                            <!-- Dropdown menu -->

                        </div>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search"
                                class="block p-2 mr-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search">
                        </div>
                    </div>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        #
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Course title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Department
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Semester
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Unit
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Level
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Description
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $key => $course)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        {{ $key+1 }}
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $course->title }} <br>
                                        Code: <span class="text-red-800 font-bold underline ">{{ $course->code }}</span>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $course->department->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $course->semester->name ?? 'none'}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $course->unit->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $course->level->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                         {{ Str::limit($course->description, 20, '...') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('admin.course.edit', $course->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
                                        <a href="{{ route('admin.course.delete', $course->id) }}"
                                            onclick="return confirm('Are you sure?')"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div aria-label="mt3">
                {{ $courses->links() }}
            </div>


        </div>
    </div>
</x-app-layout>
