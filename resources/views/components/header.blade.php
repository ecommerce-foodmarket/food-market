<div class="bg-white w-22.5rem h-6.75rem flex-shrink-0 m-6">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <div class="m-4">
                <h3 class="text-xl font-semibold">{{ $title }}</h3>
                <h4>{{ $subtitle }}</h4>
            </div>
        </div>
        <div>
            <img src="{{ asset($user->picture) }}" alt="Imagen de perfil" width="60px" height="60px" class="rounded-full">
        </div>
    </div>
</div>
