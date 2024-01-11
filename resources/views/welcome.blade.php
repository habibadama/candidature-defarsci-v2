@extends('layouts.front')

@section('content')

<div class="container">

    @if (session('success'))
    <div class="alert alert-info mt-5 text-center" style="width: 18rem; margin: auto">
        {{ session('success') }}
    </div>
    @endif

    <div class="img-container" style="padding: 10px;">
        <img src="images/baniere-defarci.png" alt="Defarsci" width="100%" height="400" class="d-block mx-auto mt-3 rounded" style="object-fit: cover;">
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card my-3 shadow-lg"> 
                <div class="card-header text-white fs-5 fw-bold text-center" style="background-color: #85ADDB;">FORMATION DE STAGE 100% PRATIQUE</div>
                <div class="card-body">
                    <form action="{{ route('store.candidat') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse Email</label>
                            <input type="email" name="email" id="email" placeholder="Votre Adresse Email" class="form-control">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" name="nom" id="nom" placeholder="Votre Nom" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="prenom" class="form-label">Prénom</label>
                                <input type="text" name="prenom" id="prenom" placeholder="Votre Prénom" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="adresse" class="form-label">Adresse Domicile</label>
                                <input type="text" name="adresse" id="adresse" placeholder="Votre Adresse Domicile" class="form-control">    
                            </div>
                            <div class="col-md-6">
                                <label for="telephone" class="form-label">Téléphone</label>
                                <input type="tel" name="telephone" id="telephone" placeholder="Votre Téléphone" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="domaine" class="form-label">Choisir votre domaine de compétence</label>
                            <select name="domaine" id="domaine" class="form-select">
                                @foreach ($module as $modules)
                                    <option value="{{ $modules->libele }}">{{ $modules->libele }}</option>
                                @endforeach
                                <option value="Ressources Humaines">Ressources Humaines</option>
                                <option value="Marketing Digital">Marketing Digital</option>
                                <option value="Gestion Projet">Gestion Projet</option>
                                <option value="Informatique Bureautique">Informatique Bureautique</option>
                                <option value="Développement Web">Développement Web</option>
                                <option value="Ardino(Robotique-Internet des objets connectés)">Ardino(Robotique-Internet des objets connectés)</option>
                                <option value="Modélisation et Impression 3D">Modélisation et Impression 3D</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="Design Graphique">Design Graphique</option>
                                <option value="Autres">Autres</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="myfile" class="form-label">Télécharger votre CV</label>
                            <input type="file" id="myfile" name="myfile" accept = "application/pdf" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="question" class="form-label">Question/Suggestion/Commentaire</label>
                            <textarea name="question" id="question" cols="30" rows="5" placeholder="Question/Suggestion/Commentaire" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn mt-3 text-white" style="background-color: #85ADDB;">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
