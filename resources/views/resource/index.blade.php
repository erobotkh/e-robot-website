<x-layout>
    <div class="p-8">
        <h1 class="font-bold text-4xl text-center my-10 text-red-600">EDUCATIONAL RESOURCES</h1>
        <p class="text-center mb-10">FIRST Global has reviewed the following content and is presenting it for
            informational purposes only to support continued learning and skill development. Inclusion on this page does
            not constitute an affiliation, endorsement, sponsorship, or approval by FIRST Global of any of the products,
            services, or opinions of the corporation or organization.</p>
        <p class="text-center mb-5 font-semibold"> If you would like to share additional resources, please send an email
            to<a href="mailto:ERobotTeam@gmail.com" class=" hover:underline hover:text-red-600">
                ERobotTeam@gmail.com</a>
        </p>

        <!-- resource card wrapper -->
        <div class="grid auto-rows-auto sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($resources as $resource)
                <x-resource-card title="{{ $resource->title }}" image="{{ $resource->image }}"
                    description="{{ $resource->description }}" subTitle="{{ $resource->sub_title }}"
                    link="{{ route('resource.show', $resource) }}" />
            @endforeach


        </div>
        <div class="mt-5"> {{ $resources->links() }}</div>
</x-layout>
