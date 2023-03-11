@inject('nomObjet', 'App\Utilitises\GetCombat')

@extends('welcom', ['title' => 'page add'] )

@section('vitrine')
<h3>Welcome to my fighting game application __  page add</h3>

{{ $nomObjet->getCombat()}}

@endsection 