<x-card class="mb-4">
    <div class="mb-4 flex justify-between">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <div class="text-slate-500">
            ${{ number_format($job->salary) }}
        </div>
    </div>

    <div class="mb-4 flex items-center justify-between text-sm text-slate-500">
        <div class="flex space-x-4">
            <div>Company Name</div>
            <div>{{ $job->location }}</div>
        </div>
        <div class="flex space-x-1 text-xs">
            <x-tag>
                <a href="{{ route('job.index', ['experience' => $job->experience]) }}">
                    {{ Str::ucfirst($job->experience) }}
                </a>
            </x-tag>
            <x-tag>

                <a href="{{ route('job.index', ['category' => $job->category]) }}">
                    {{ $job->category }}
                </a>
                
            </x-tag>
        </div>
    </div>

    <p class="mb-4 text-sm text-slate-500">
        @if ($limit)
            {!! Str::limit(nl2br(e($job->description)), 70, '...') !!}
        @else
            {!! nl2br(e($job->description)) !!}
        @endif
    </p>

    {{ $slot }}
</x-card>
