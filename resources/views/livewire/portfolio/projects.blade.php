<div>
    <!-- Enhanced Hero Section -->
    <div class="modern-bg text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/90 via-purple-600/90 to-pink-600/90"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center fade-in-up">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 hero-title">My Projects</h1>
                <p class="text-xl md:text-2xl max-w-4xl mx-auto leading-relaxed opacity-90">
                    A collection of my work showcasing full-stack development skills and innovative solutions.
                </p>
            </div>
        </div>
    </div>

    <!-- Enhanced Projects Grid -->
    @if($projects->count() > 0)
    <div class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold section-title mb-4">
                    <span class="gradient-text">Project Portfolio</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Explore my latest work and technical achievements
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $index => $project)
                <div class="modern-card overflow-hidden transform hover:scale-105 transition-all duration-500" style="animation-delay: {{ $index * 0.1 }}s">
                    @if($project->image)
                    <div class="relative overflow-hidden">
                        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-56 object-cover transform hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                        @if($project->is_featured)
                        <div class="absolute top-4 right-4">
                            <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-3 py-1 rounded-full text-sm font-bold shadow-lg">
                                Featured
                            </span>
                        </div>
                        @endif
                    </div>
                    @endif
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-gray-900">{{ $project->title }}</h3>
                        </div>
                        
                        <p class="text-gray-600 mb-6 leading-relaxed">{{ $project->description }}</p>
                        
                        @if($project->role)
                        <div class="mb-4">
                            <span class="text-sm font-semibold text-gray-500">Role:</span>
                            <span class="text-sm text-gray-700 ml-2 font-medium">{{ $project->role }}</span>
                        </div>
                        @endif
                        
                        @if($project->period)
                        <div class="mb-6">
                            <span class="text-sm font-semibold text-gray-500">Period:</span>
                            <span class="text-sm text-gray-700 ml-2 font-medium">{{ $project->period }}</span>
                        </div>
                        @endif
                        
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-500 mb-3">Technologies:</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach(explode(',', $project->technologies) as $tech)
                                <span class="bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">{{ trim($tech) }}</span>
                                @endforeach
                            </div>
                        </div>
                        
                        @if($project->achievements)
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-500 mb-2">Key Achievements:</h4>
                            <p class="text-sm text-gray-700 leading-relaxed">{{ $project->achievements }}</p>
                        </div>
                        @endif
                        
                        <div class="flex space-x-4 pt-4 border-t border-gray-100">
                            @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" class="flex items-center space-x-2 text-blue-600 hover:text-blue-800 font-medium transition-colors duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>GitHub</span>
                            </a>
                            @endif
                            @if($project->live_url)
                            <a href="{{ $project->live_url }}" target="_blank" class="flex items-center space-x-2 text-green-600 hover:text-green-800 font-medium transition-colors duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Live Demo</span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
    <div class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="modern-card p-12 max-w-2xl mx-auto">
                <div class="mb-8">
                    <div class="w-24 h-24 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">No Projects Yet</h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Projects will be displayed here once they are added through the admin panel. 
                    Check back soon to see my latest work and technical achievements!
                </p>
            </div>
        </div>
    </div>
    @endif
</div>
