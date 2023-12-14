<x-layout>
    <x-breadcrumbs-nav class="mb-4"
    :links="['Jobs' => route('job.index'), $job->title => '#']" />

    <x-job-card :$job  limit=""/>

</x-layout>