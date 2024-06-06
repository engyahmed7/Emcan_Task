<x-app-layout>
    @section('title', 'Course')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Courses</h1>
        <a href="{{ route('courses.create') }}" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Add New Course</a>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 hidden md:table-header-group">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">End Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($courses as $course)
                        <tr class="flex flex-col md:table-row md:flex-row">
                            <td class="px-6 py-4 whitespace-nowrap md:border-b-0">
                                <span class="block md:hidden font-semibold">Title:</span>
                                {{ $course->title }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap md:border-b-0">
                                <span class="block md:hidden font-semibold">Description:</span>
                                {{ $course->description }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap md:border-b-0">
                                <span class="block md:hidden font-semibold">Start Date:</span>
                                {{ $course->start_date }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap md:border-b-0">
                                <span class="block md:hidden font-semibold">End Date:</span>
                                {{ $course->end_date }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap md:border-b-0">
                                <span class="block md:hidden font-semibold">Actions:</span>
                                <a href="{{ route('courses.edit', $course->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
