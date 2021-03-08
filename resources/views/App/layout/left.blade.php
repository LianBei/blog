@foreach($data as $row)
    <ul>
        <li><a href="/app/index/details?id={{$row->id}}" ><span class="thumbnail">
<img class="thumb" src="{{asset('storage/images/article/'.$row->pic)}}" alt=""  style="display: block;">
</span><span class="text">{{$row->title}}</span><span class="muted"><i class="fa fa-clock-o">{{$row->created_at}}</i>
                </span>
            </a>
    </ul>
@endforeach