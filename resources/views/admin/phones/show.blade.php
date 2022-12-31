<x-app-layout>
    <div class="mx-auto py-12 px-6">
        <h1 class="font-bold text-lg">{{ $phone->name }}</h1>
        <p>{!! optional($phone->review)->review ?? "No review yet" !!}</p>
        <form action="{{ route('admin.review.phone', $phone) }}" method="post">
            @csrf
            @method('put')

            <div x-data="{ review: ''}">
                <textarea hidden name="review" x-model="review"></textarea>
                <h1 class="text-lg font-bold">Additional Description</h1>
                <div contenteditable class="border bg-white rounded dark:text-black p-2 " @input="review = $event.target.innerHTML"></div>
            </div>

            <div class="mt-1">
                <x-button>Submit</x-button>
            </div>
        </form>
    </div>
</x-app-layout>
