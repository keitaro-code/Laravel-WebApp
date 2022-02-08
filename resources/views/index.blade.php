<x-common>
    <x-slot name='title'>
        M&W no Real
    </x-slot>
    <ul>
            <div class="shoplist">
                @forelse ($posts as $post)
                    <li>
                        {{-- <img src="img/cats-cafe-4697753_1920.jpg" width="100%" height="100
                        5" alt=""> --}}
                        <a class="link" href="{{route('posts.show',$post)}}">
                            {{ $post->title }}
                        </a>
                    </li>
                @empty
                    <li>No posts yet!!</li>
                @endforelse
            </div>
        </ul>



            <a class='btn-style2 btn-style2--blue box-center' href="{{ route('posts.create') }}">スペースを登録</a>

</x-common>
