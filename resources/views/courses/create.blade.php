<x-app-layout>
    <div class="container mt-8 mx-auto p-6 bg-white rounded-lg shadow-md max-w-screen-md">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Add New Course</h1>
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title"class="form-input mt-1 block w-full rounded-md border-2 shadow-sm focus:border-purple-700 focus:ring focus:ring-purple-700 focus:ring-opacity-50 transition duration-200 ease-in-out transform hover:scale-105" required>
                </div>
                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="3" class="form-input mt-1 block w-full rounded-md border-2 shadow-sm focus:border-purple-700 focus:ring focus:ring-purple-700 focus:ring-opacity-50 transition duration-200 ease-in-out transform hover:scale-105" required></textarea>
                </div>
                <!-- Start Date -->
                <div>
                    <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                    <input type="date" name="start_date" id="start_date"class="form-input mt-1 block w-full rounded-md border-2 shadow-sm focus:border-purple-700 focus:ring focus:ring-purple-700 focus:ring-opacity-50 transition duration-200 ease-in-out transform hover:scale-105" required>
                </div>
                <!-- End Date -->
                <div>
                    <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                    <input type="date" name="end_date" id="end_date"class="form-input mt-1 block w-full rounded-md border-2 shadow-sm focus:border-purple-700 focus:ring focus:ring-purple-700 focus:ring-opacity-50 transition duration-200 ease-in-out transform hover:scale-105" required>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="mt-6 flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-200">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
