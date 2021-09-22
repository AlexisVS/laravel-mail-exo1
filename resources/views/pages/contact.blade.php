@extends('layout.app')
@section('content')
  <form class="w-10/12 lg:w-4/12 flex flex-col justify-center items-center" action="/contact" method="POST">
    @csrf
    <input class="w-full py-3 my-3 border-0 bg-gray-800 text-gray-50 rounded-full px-4" placeholder="Nom et prenom" type="text" name="name" id="">
    <select class="w-full py-3 my-3 border-0 bg-gray-800 text-gray-50 rounded-full px-4" name="sujet" id="">
      @foreach ($sujets as $sujet)
          <option class="bg-gray-800 text-gray-50" value="{{ $sujet->id }}">{{ $sujet->sujet }}</option>
      @endforeach
    </select>
    <input class="w-full py-3 my-3 border-0 bg-gray-800 text-gray-50 rounded-full px-4" placeholder="Titre du message" type="text" name="title" id="">
    <textarea class="w-full py-3 my-3 border-0 bg-gray-800 text-gray-50 rounded-2xl px-4" placeholder="Description du message" name="message" id="" cols="30" rows="10"></textarea>
    <input class="w-full py-3 my-3 border-0 bg-gray-800 text-gray-50 rounded-full px-4 hover:bg-gray-600" type="submit" value="Envoyer">
  </form>
@endsection