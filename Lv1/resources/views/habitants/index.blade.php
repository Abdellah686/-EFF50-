
    <html>
        <body>
            @foreach ($habitants as $h)
                <ul>
                    <li>{{$h->cin}}</li>
                    <li>{{$h->nom}}</li>
                    <li>{{$h->ville_id}}</li>
                    <li><img src="$h->photo" alt="n"></li>
                    <li>{{$h->ville->name}}</li>
                </ul>
            @endforeach
        </body>
    </html>
