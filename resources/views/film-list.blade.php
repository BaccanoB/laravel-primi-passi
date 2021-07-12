<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Libri</title>
</head>
<body>
    <h1>Ecco qui la lista dei film:</h1>
    <ul>
        <li> <h4>{{ $title }} -anno: {{ $year }}</h4>
            <div>
                @if(count($vote)==0)
                    <h5>è stato votato con 0 stelle!</h5>
                @elseif (count($vote)>0)
                    <h5>è stato votato con {{$vote[0]}} stelle!</h5>
                @endif
                @if (count($actors)==0)
                    <h5>Non ci sono attori!</h5>
                @else
                    <h4>Gli attori sono</h4>
                    <ul>
                        @foreach($actors as $actor)
                            <li>{{$actor}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
    </ul>
</body>
</html>