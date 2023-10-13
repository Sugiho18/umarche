{{-- 初期値を指定しないと変数に何も入っていない場合
エラーになってしまうので@propsで初期値を指定する --}}
@props([
    'title' => 'タイトルなし',
    'message' => '空のファイル',
    'content' => '空のコメント',
])

<div {{ $attributes ->merge([
    'class' => 'border-2 shadow-md w-1/4 p-2'
])}} >
    <div>{{ $title }}</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>
