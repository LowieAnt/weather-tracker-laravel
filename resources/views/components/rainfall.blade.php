@props(['rainfall' => $rainfall])
<tr>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="flex-shrink-0 h-10 w-10">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
            </div>
            <div class="ml-4">
                <div class="text-sm font-medium text-gray-900">
                    {{ $rainfall->user->name }}
                </div>
                <div class="text-sm text-gray-500">
                    {{ $rainfall->user->email }}
                </div>
            </div>
        </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{ $rainfall->date }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <span class="px-2 inline-flex text-xs leading-5 font-semibold">
            {{ $rainfall->rainfall }} liter / &#13217;
        </span>
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
        @if($rainfall->postedBy(auth()->user()))
            <form action="{{ route('rainfall.destroy', $rainfall) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-indigo-600 hover:text-indigo-900">Verwijder</button>
            </form>
        @endif
    </td>
</tr>
