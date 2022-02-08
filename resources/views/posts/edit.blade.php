<x-common>
    <x-slot name='title'>
        編集画面
    </x-slot>
    <div class="back-title">
        <div class="back-link">
            &laquo; <a href="{{ route('posts.show',$post)}}">Back</a>
        </div>
    </div>

    <h1>スペース情報の変更</h1>
    <h2>基本情報</h2>

    <form action="{{ route('posts.update',$post) }}" method="post">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label>
                スペース名
                <input type="text" name="title" value="{{ old('title',$post->title) }}">
            </label>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
            <label>
                おすすめポイント
                <textarea name="body">{{ old('body',$post->body) }}</textarea>
            </label>
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>
        <button class='btn-style2 btn-style2--blue box-center'>アップロード</button>
    </form>

</x-common>
