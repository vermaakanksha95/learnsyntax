@extends('admin.adminlayout')
@section('content')

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 p-4">
            <div class="text-center mb-8">
                <img src="https://via.placeholder.com/80" alt="Profile Picture" class="w-20 h-20 mx-auto rounded-full">
                <h2 class="mt-4 text-lg font-semibold">Sneha Patel</h2>
                <p class="text-gray-400">Administrator</p>
            </div>
            <nav class="space-y-4">
                <a href="#" class="flex items-center space-x-2 p-2 rounded bg-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3m6 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Dashboard</span>
                </a>
                
                <a href="#" class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M20 13V9a7 7 0 00-14 0v4a3 3 0 003 3h8a3 3 0 003-3zM13 21h-2a1 1 0 001 1h0a1 1 0 001-1z"></path>
                    </svg>
                    <span>Insert Course</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 14l9-5-9-5-9 5 9 5zm0 7v-5.5l4.5-2.5m-9 0L12 21"></path>
                    </svg>
                    <span>Manage Course</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M5 7a5 5 0 0110 0v10a5 5 0 01-10 0V7z"></path>
                    </svg>
                    <span>Manage Chapter</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M5 7a5 5 0 0110 0v10a5 5 0 01-10 0V7z"></path>
                    </svg>
                    <span>Manage Lesson</span>
                </a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6">
            <!-- Top navigation -->
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-bold">Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Search..." class="bg-gray-700 p-2 rounded text-gray-300">
                    
                </div>
            </div>

            <!-- Stats cards -->
            <div class="grid grid-cols-4 gap-6 my-8">
                <div class="bg-green-500 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold">Total Courses</h2>
                    <p class="text-3xl font-bold">450</p>
                   
                </div>
                <div class="bg-yellow-500 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold">Total Chapters</h2>
                    <p class="text-3xl font-bold">155</p>
                   
                </div>
                <div class="bg-blue-500 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold">Total Lessons</h2>
                    <p class="text-3xl font-bold">52</p>
                   
                </div>
                <div class="bg-red-500 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold">Fees Collected</h2>
                    <p class="text-3xl font-bold">$13,921</p>
                    
                </div>
            </div>

            <!-- Charts section -->
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-gray-900 p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold">University Survey</h2>
                    <div class="mt-4">
                        <!-- Placeholder for Chart 1 -->
                        <div class="h-40 bg-gray-700 rounded"></div>
                    </div>
                </div>
                <div class="bg-gray-900 p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold">University Survey</h2>
                    <div class="mt-4">
                        <!-- Placeholder for Chart 2 -->
                        <div class="h-40 bg-gray-700 rounded"></div>
                    </div>
                </div>
            </div>
        </main>
    </div>


@endsection