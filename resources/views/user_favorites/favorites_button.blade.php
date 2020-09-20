
@if (Auth::user()->is_favorite($micropost->id))
    {{-- unfavoritesボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorites', ['class' => "btn btn-danger "]) !!}
    {!! Form::close() !!}
@else
    {{-- favoritesのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('favorites', ['class' => "btn btn-primary "]) !!}
    {!! Form::close() !!}
    
@endif