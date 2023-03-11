@inject('nomObjet', 'App\Utilitises\Getcombat' )

@extends('welcom', ['title' => 'page liste'] )

@section('vitrine')
<h3>Welcome to my fighting game application __ page liste</h3>

{{ $nomObjet->getCombat()}}
    
@endsection