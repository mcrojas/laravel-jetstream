<div class="flex flex-col items-center justify-center bg-white shadow rounded-lg">
    <a href="{{ route('course', $course->slug) }}">
        <div class="inline-flex border border-gray-200 rounded-t-lg overflow-hidden">
            <img 
                src="{{ $course->image }}"
                alt=""
                class="h-full w-full"
            />
        </div>
        <h2 class="mt-2 font-bold text-xl px-4 text-gray-500 h-14">{{ $course->title }}</h2>

        <p class="text-sm text-gray-500 mt-3 px-4">
            {{ $course->excerpt }}
        </p>
        <div class="flex w-full py-2 px-4 mb-2">
            <img alt="avatar" class="w-6 h-6 rounded-full border-2 border-gray-300" src="{{ $course->user->avatar }}" />
            <p class="ml-3 text-sm text-gray-500">John Doe</p>
        </div>
    </a>
</div>