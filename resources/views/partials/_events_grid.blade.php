@foreach($filteredEvents as $event)
@php
    // Vérifier si la date limite d'inscription est passée
    $isPastDeadline = false;
    if (isset($event['registration_deadline'])) {
        $today = new DateTime();
        $deadline = new DateTime($event['registration_deadline']);
        $isPastDeadline = $today > $deadline;
    }
@endphp
<article class="event-card group transform transition-all duration-700" data-category="{{ $event['category'] }}">
    {{-- Image en forme d'Arche --}}
    <div class="arch-container w-full mb-8 overflow-hidden transition-transform duration-700 group-hover:shadow-lg">
        <div class="overflow-hidden" style="border-radius: 50% 50% 0 0 / 40% 40% 0 0;">
            @php
                $imagePath = file_exists(public_path('images/'.$event['image'].'.png')) 
                             ? 'images/'.$event['image'].'.png' 
                             : (file_exists(public_path('images/'.$event['image'].'.jpeg')) 
                                ? 'images/'.$event['image'].'.jpeg' 
                                : 'images/default-event.jpeg');
            @endphp
            <img src="{{ asset($imagePath) }}"
                 alt="{{ $event['title'] }}"
                 class="w-full aspect-[3/4] object-cover transition-all duration-700 group-hover:scale-110 hover:grayscale">
        </div>
    </div>

    <div class="space-y-4 px-2">
        <div class="flex items-center gap-4">
            <span class="text-[9px] font-black uppercase tracking-widest text-red-700">{{ $event['category_label'] }}</span>
            <span class="h-[1px] w-4 bg-gray-200"></span>
            <span class="text-[9px] font-bold uppercase tracking-widest text-gray-400">{{ $event['date'] }}</span>
        </div>
        
        <h3 class="text-xl font-bold leading-tight group-hover:text-red-900 transition-colors uppercase tracking-tighter">
            {{ $event['title'] }}
        </h3>
        
        <p class="text-sm text-gray-500 font-light leading-relaxed line-clamp-2 italic">
            {{ $event['description'] }}
        </p>
        
        <div class="pt-4 space-y-2">
            <div class="flex items-center gap-3 text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                <i class="far fa-clock text-red-300"></i>
                {{ $event['time'] }}
            </div>
            <div class="flex items-center gap-3 text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                <i class="fas fa-map-marker-alt text-red-300"></i>
                {{ $event['location'] }}
            </div>
        </div>

        <div class="pt-8">
            @if($isPastDeadline)
            <button disabled class="inline-block w-full text-center py-4 border border-gray-100 text-[10px] font-black uppercase tracking-[0.2em] bg-gray-100 text-gray-400 cursor-not-allowed">
                Inscriptions closes
            </button>
            @else
            <a href="{{ route('contact') }}" class="inline-block w-full text-center py-4 border border-gray-100 text-[10px] font-black uppercase tracking-[0.2em] hover:bg-black hover:text-white transition-all duration-500">
                S'inscrire
            </a>
            @endif
        </div>
    </div>
</article>
@endforeach