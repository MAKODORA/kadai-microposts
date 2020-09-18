@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favorites($user->id))
        {{--unfavoritesボタンのフォーム --}}
        {!! Form::open(['route' => ['user.unfavorites', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorites', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- favoritesのフォーム --}}
        {!! Form::open(['route' => ['user.favorites', $user->id]]) !!}
            {!! Form::submit('favorites', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif