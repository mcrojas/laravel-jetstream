<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
    @foreach ($courses as $course)
    <x-course-card :course="$course" />
    @endforeach
</div>
