@inject('nomObjet', 'App\Utilitises\Getcombat' )

@extends('welcom', ['title' => 'page edit'] )

@section('vitrine')
<h3>Welcome to my fighting game application __ page edi</h3>

{{ $nomObjet->getCombat()}}
    
@endsection