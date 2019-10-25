<!DOCTYPE html>
<html>
<head>

<body>
    @foreach($datas as $data)
        <div>
            {{--<a href='detail/{{$data->id}}'>{{$data->title}}</a>--}}
            <a href={{ route('show',['id'=>$data->id])  }}>{{$data->title}}</a>
            <p>{{$data->content}}</p>

        </div>
    @endforeach
</body>

</head>
</html>