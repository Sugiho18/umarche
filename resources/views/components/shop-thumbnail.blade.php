{{-- 画像データが無ければNoimage画像を出しあれば対応している画像データを表示する --}}
<div>
    @if(empty($filename)) 
        <img src="{{asset('images/no_image.jpg')}}"> 
    @else 
        <img src="{{asset('storage/shops/' . $filename)}}"> 
    @endif
</div>
