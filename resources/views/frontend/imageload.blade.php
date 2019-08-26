@foreach($bodys as $body)
    @php
        preg_match_all('/<[img|IMG].*?src=[\' | \"](.*?(?:[\.jpg|\.jpeg|\.png|\.gif|\.bmp]))[\'|\"].*?[\/]?>/i',$body,$matches)
    @endphp
    @if(isset($matches[1]))
        @foreach($matches[1] as $pic)
            "{{$pic}}",
        @endforeach
    @endif
@endforeach