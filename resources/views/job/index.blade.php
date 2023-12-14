<x-layout title="Jobify">
    <x-breadcrumbs-nav class="mb-4 rounded-lg bg-slate-500 text-white px-10 max-w-fit"
     :links="['Jobs' => route('job.index')]" />

    <x-card class="mb-4 text-sm">
        <form id="formId" action="{{ route('job.index') }}" method="get">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input name="search" value="{{request('search')}}" placeholder="Search for any text" />
                </div>
                <div>
                    <div class="mb-1 font-semibold">Salary</div>

                    <div class="flex space-x-2">
                        <x-text-input name="min_salary" value="{{request('min_salary')}}" placeholder="From" />
                        @error('min_salary')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                      @enderror
                        <x-text-input name="max_salary" value="{{request('max_salary')}}" placeholder="To" />
                        @error('max_salary')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                      @enderror
                    </div>
                </div>
                {{-- experiece radio --}}
                
                <div>
                  <x-radio-group name="experience"
                   :options="\App\Models\Job::$experience"/>
                </div>
                <div>
                  <x-radio-group name="category"
                   :options="\App\Models\Job::$category"/>
                </div>
            </div>

              <x-button type='submit' class="w-full">Filter</x-button>

        </form>
    </x-card>
    <article>
        @foreach ($jobs as $job)
            {{-- if the variable has the same name with the attrebute just use :$job --}}
            <x-job-card class="mb-4" :$job limit="true">

                <div>
                    <x-link :href="route('job.show', $job)">
                        More...
                    </x-link>
                </div>

            </x-job-card>
        @endforeach
        {{-- @for ($i = 0; $i < count($jobs); $i++)<span class="text-m font-bold block text-slate-700" ><b>{{$i+1}}</b>-{{$jobs[$i]->title}}</span> @endfor --}}
    </article>
</x-layout>
