<div>
    <!-- Enhanced Hero Section -->
    <div class="modern-bg text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/90 via-purple-600/90 to-pink-600/90"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center fade-in-up">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 hero-title">About Me</h1>
                <p class="text-xl md:text-2xl max-w-4xl mx-auto leading-relaxed opacity-90">
                    A passionate Full-Stack Developer with expertise in Laravel, Livewire, and modern web technologies.
                </p>
            </div>
        </div>
    </div>

    <!-- Enhanced Personal Information -->
    @if($personalInfo)
    <div class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-12">
                <div class="flex items-center space-x-4 mb-6 lg:mb-0">
                    <div class="icon-container">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-4xl font-bold section-title">
                            <span class="gradient-text">Personal Information</span>
                        </h2>
                        <p class="text-gray-600 mt-2 text-lg">Get to know me better</p>
                    </div>
                </div>
                <a href="{{ route('download.cv') }}" class="modern-btn px-8 py-4 rounded-2xl text-white font-semibold text-lg shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105 flex items-center space-x-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span>Download CV</span>
                </a>
            </div>
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="modern-card p-8">
                    <h3 class="text-2xl font-bold mb-6 text-gray-900">Contact Details</h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                            <span class="font-semibold w-24 text-gray-700">Name:</span>
                            <span class="text-gray-900 font-medium">{{ $personalInfo->full_name }}</span>
                        </div>
                        <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                            <span class="font-semibold w-24 text-gray-700">Email:</span>
                            <span class="text-gray-900 font-medium">{{ $personalInfo->email }}</span>
                        </div>
                        <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                            <span class="font-semibold w-24 text-gray-700">Phone:</span>
                            <span class="text-gray-900 font-medium">{{ $personalInfo->phone }}</span>
                        </div>
                        <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                            <span class="font-semibold w-24 text-gray-700">Address:</span>
                            <span class="text-gray-900 font-medium">{{ $personalInfo->address }}</span>
                        </div>
                        <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                            <span class="font-semibold w-24 text-gray-700">NIC:</span>
                            <span class="text-gray-900 font-medium">{{ $personalInfo->nic }}</span>
                        </div>
                    </div>
                </div>
                <div class="modern-card p-8">
                    <h3 class="text-2xl font-bold mb-6 text-gray-900">Professional Summary</h3>
                    <p class="text-gray-700 leading-relaxed text-lg">{{ $personalInfo->summary }}</p>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Enhanced Experience -->
    @if($experiences->count() > 0)
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-4 mb-12">
                <div class="icon-container">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-4xl font-bold section-title">
                        <span class="gradient-text">Professional Experience</span>
                    </h2>
                    <p class="text-gray-600 mt-2 text-lg">My journey in the tech world</p>
                </div>
            </div>
            <div class="space-y-8">
                @foreach($experiences as $index => $experience)
                <div class="modern-card p-8 transform hover:scale-105 transition-all duration-500" style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-6">
                        <div class="mb-4 lg:mb-0">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $experience->title }}</h3>
                            <p class="text-xl text-gray-600">{{ $experience->company }}</p>
                        </div>
                        <span class="bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800 px-4 py-2 rounded-full font-semibold">{{ $experience->period }}</span>
                    </div>
                    @if($experience->description)
                    <p class="text-gray-700 leading-relaxed text-lg">{{ $experience->description }}</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- Enhanced Education -->
    @if($education->count() > 0)
    <div class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-4 mb-12">
                <div class="icon-container">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-4xl font-bold section-title">
                        <span class="gradient-text">Education</span>
                    </h2>
                    <p class="text-gray-600 mt-2 text-lg">My academic background</p>
                </div>
            </div>
            <div class="space-y-8">
                @foreach($education as $index => $edu)
                <div class="modern-card p-8 transform hover:scale-105 transition-all duration-500" style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-6">
                        <div class="mb-4 lg:mb-0">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $edu->level }}</h3>
                            <p class="text-xl text-gray-600">{{ $edu->institution }}</p>
                        </div>
                        <span class="bg-gradient-to-r from-green-100 to-teal-100 text-green-800 px-4 py-2 rounded-full font-semibold">{{ $edu->year }}</span>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 p-6 rounded-xl">
                            <h4 class="font-bold text-gray-900 mb-3 text-lg">Subjects:</h4>
                            <p class="text-gray-700 leading-relaxed">{{ $edu->subjects }}</p>
                        </div>
                        @if($edu->results)
                        <div class="bg-gray-50 p-6 rounded-xl">
                            <h4 class="font-bold text-gray-900 mb-3 text-lg">Results:</h4>
                            <p class="text-gray-700 leading-relaxed">{{ $edu->results }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- Enhanced Certifications -->
    @if($certifications->count() > 0)
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-4 mb-12">
                <div class="icon-container">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-4xl font-bold section-title">
                        <span class="gradient-text">Certifications</span>
                    </h2>
                    <p class="text-gray-600 mt-2 text-lg">Professional achievements & skills</p>
                </div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($certifications as $index => $cert)
                <div class="modern-card p-8 transform hover:scale-105 transition-all duration-500" style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-gray-900">{{ $cert->name }}</h3>
                        <span class="px-3 py-1 rounded-full text-sm font-semibold {{ $cert->status === 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                            {{ ucfirst($cert->status) }}
                        </span>
                    </div>
                    <p class="text-gray-600 mb-3 text-lg">{{ $cert->issuer }}</p>
                    <p class="text-sm text-gray-500 mb-4 font-medium">{{ $cert->year }}</p>
                    @if($cert->description)
                    <p class="text-gray-700 leading-relaxed">{{ $cert->description }}</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
