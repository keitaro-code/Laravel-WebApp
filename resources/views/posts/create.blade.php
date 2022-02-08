<x-common>
    <x-slot name='title'>
       スペース登録
    </x-slot>
    <div class="back-title">
        <div class="back-link">
            &laquo; <a href="{{ route('posts.index')}}">Back</a>
        </div>
    </div>

    <h1>新規スペース登録</h1>
    <h2>基本情報</h2>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label>
                スペース名
                <input type="text" name="title" value="{{ old('title') }}">
            </label>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
            <label>
                おすすめポイント
                <textarea name="body">{{ old('body') }}</textarea>
            </label>
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>
        <button class='btn-style2 btn-style2--blue box-center'>登録</button>
    </form>

</x-common>
