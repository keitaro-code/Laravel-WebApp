<x-common>
    <div class="shop-view">
        <x-slot name='title'>
            {{$post->title}} - no Real
        </x-slot>
        <div class="back-title">
            <div class="back-link">
                &laquo; <a href="{{ route('posts.index')}}">Back</a>
            </div>
            <h1>
                <span>{{  $post->title  }} </span>
                <a href="{{ route('posts.edit', $post) }}">[Edit]</a>
                <form action="{{ route('posts.destroy',$post) }}" method="post" id="delete_post">
                    @method('DELETE')
                    @csrf
                    <button class="btn">[x]</button>
                </form>
            </h1>
        </div>
        <p>{!! nl2br(e($post->body)) !!}</p>
    </div>

    <script>
        'use strict'
        {
            document.getElementById('delete_post').addEventListener('submit', e =>
            {
                // ページ遷移を阻止する
                e.preventDefault();

                //確認する
                if(!confirm('本当に削除していいですか？'))
                {
                    return;
                }
                    //削除OKだったら、そのまま削除依頼を送信
                    e.target.submit();

            })
        }
    </script>
</x-common>
