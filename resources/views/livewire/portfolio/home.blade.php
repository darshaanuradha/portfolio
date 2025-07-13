<div>
    <!-- Enhanced Hero Section -->
    <div class="modern-bg text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/90 via-purple-600/90 to-pink-600/90"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center fade-in-up">
                <div class="mb-8">
                    <div class="w-24 h-24 bg-gradient-to-br from-white/20 to-white/10 rounded-full flex items-center justify-center mx-auto mb-6 backdrop-blur-sm border border-white/20">
                        <span class="text-3xl font-bold text-white">A</span>
                    </div>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 hero-title">
                    <span class="gradient-text">G.B.D Anuradha</span>
                </h1>
                <p class="text-2xl md:text-3xl mb-8 font-light">
                    Full-Stack Developer & Lead Developer at NPSS
                </p>
                <p class="text-lg md:text-xl mb-12 max-w-4xl mx-auto leading-relaxed opacity-90">
                    A highly motivated and skilled Full-Stack Developer with proven experience in leading the complete lifecycle of complex web applications. 
                    Adept at architecting, developing, and deploying robust, data-driven solutions.
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="{{ route('projects') }}" class="modern-btn px-8 py-4 rounded-2xl text-white font-semibold text-lg shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105">
                        <span class="flex items-center space-x-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            <span>View Projects</span>
                        </span>
                    </a>
                    <a href="{{ route('about') }}" class="border-2 border-white/30 text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-white/10 backdrop-blur-sm transition-all duration-500 transform hover:scale-105">
                        <span class="flex items-center space-x-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Learn More</span>
                        </span>
                    </a>
                    <a href="{{ route('download.cv') }}" class="bg-gradient-to-r from-green-500 to-emerald-600 text-white px-8 py-4 rounded-2xl font-semibold text-lg shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105">
                        <span class="flex items-center space-x-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span>Download CV</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Featured Projects -->
    @if($featuredProjects->count() > 0)
    <div class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold section-title mb-4">
                    <span class="gradient-text">Featured Projects</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Showcasing my best work and innovative solutions
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredProjects as $index => $project)
                <div class="modern-card p-8 transform hover:scale-105 transition-all duration-500" style="animation-delay: {{ $index * 0.1 }}s">
                    @if($project->image)
                    <div class="relative mb-6 overflow-hidden rounded-2xl">
                        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-48 object-cover transform hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    @endif
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-gray-900">{{ $project->title }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ Str::limit($project->description, 120) }}</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach(explode(',', $project->technologies) as $tech)
                            <span class="bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">{{ trim($tech) }}</span>
                            @endforeach
                        </div>
                        <div class="flex space-x-4">
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
    @endif

    <!-- Enhanced Skills Section -->
    @if($skills->count() > 0)
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold section-title mb-4">
                    <span class="gradient-text">Technical Skills</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Expertise across multiple technologies and frameworks
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($skills as $category => $categorySkills)
                <div class="modern-card p-8 transform hover:scale-105 transition-all duration-500">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="icon-container">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">{{ $category }}</h3>
                    </div>
                    <div class="space-y-4">
                        @foreach($categorySkills as $skill)
                        <div class="flex justify-between items-center p-4 bg-gray-50 rounded-xl">
                            <span class="text-gray-700 font-medium">{{ $skill->name }}</span>
                            @if($skill->description)
                            <span class="text-sm text-gray-500 bg-white px-3 py-1 rounded-full">{{ $skill->description }}</span>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- Enhanced Contact CTA -->
    <div class="py-24 modern-bg text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/90 via-purple-600/90 to-pink-600/90"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 hero-title">Ready to Work Together?</h2>
            <p class="text-xl md:text-2xl mb-12 max-w-3xl mx-auto opacity-90">
                Let's discuss your next project and bring your ideas to life with innovative solutions.
            </p>
            <a href="{{ route('contact') }}" class="modern-btn px-10 py-5 rounded-2xl text-white font-semibold text-xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:scale-105 inline-flex items-center space-x-3">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span>Get In Touch</span>
            </a>
        </div>
    </div>
</div>
