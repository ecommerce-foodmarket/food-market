<div class="bg-white w-22.5rem h-6.75rem flex-shrink-0">
    <div class="flex items-center">
        <div class="w-10 h-10 bg-white-400 m-8 flex-shrink-0">
            <a href="{{ route('user.dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="24" viewBox="0 0 29 24" fill="none">
                    <rect x="0.599609" width="27.6" height="24" rx="4" fill="#4A6159"/>
                    <path d="M18.6809 6.32303L17.1508 5L8.64941 12.4L17.1594 19.8L18.6809 18.477L11.6924 12.4L18.6809 6.32303Z" fill="white"/>
                </svg>
            </a>
        </div>

        <div>
            <h3 class="text-xl font-semibold">{{ $title }}</h3>
            <h4>{{ $subtitle }}</h4>
        </div>
    </div>
</div>