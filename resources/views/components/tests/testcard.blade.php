@props([
    'title' => 'タイトルなし',
    'message' => '他のファイル',
    'content' => 'あああああ',
    'blank'=>'空のデータ',
    'message2'=>'空のメッセージ'
])
<div {{ $attributes ->merge([
    'class' => 'border-2 shadow-md w-1/4 p-2 bg-emerald-400'
])}} >
    <div>{{ $title }}</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
    <div>{{ $blank }}</div>
    <div>{{ $message2 }}</div>
</div>
