@extends('layouts.front')

@section('content')

<div class="container">
    @if (session('success'))
        <div class="alert alert-info mt-5 text-center" style="width: 18rem; margin: auto">
            {{ session('success') }}
        </div>
    @endif


    <section id="section-banniere" style="margin-top:50px">
        <div class="banniere-img">
            <div class="card" style="width: 32rem;">
                <div class="card-body">
                    <h5 class="card-title fs-1">STAGE 100% PRATIQUE</h5>
                    <h6 class="card-subtitle mb-4 text-muted fs-4 ">Donner aux Jeunes Formés un stage </h6>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non voluptatum asperiores, culpa fuga sit quibusdam. Voluptate dolores perferendis exercitationem cupiditate nulla molestiae accusamus! Sunt.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Envoyez votre candidature</a>
                </div>
            </div>
            
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">FORMATION DE STAGE 100% PRATIQUE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="section2">
        <div class="card my-3 " style="width:28em; margin: auto">

            <div class="card-header text-black fs-5 fw-bold text-center">FORMATION DE STAGE 100% PRATIQUE</div>
            <div class="card-body">
                <form action="{{route('store.candidat')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">Adresse Email:</label>
                        <input type="email" name="email" id="email" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nom" id="" placeholder="Votre réponse" class="form-control my-3">
                    </div>

                    <div class="form-group">
                        <label for="">Prenom:</label>
                        <input type="text" name="prenom" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Téléphone</label>
                        <input type="tel" name="telephone" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Adresse Domicile</label>
                        <input type="text" name="adresse" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Choisir votre domaine de compétence</label>
                        
                        <select name="domaine" id="" class="form-control my-3">
                            {{-- foreach module --}}
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
                    <div class="form-group">
                        <label for="myfile">Télécharger votre CV:</label>
                        <input type="file" id="myfile" name="myfile" accept = "application/pdf" class="form-control my-3" required>

                    </div>

                    <div class="form-group">
                        <label for="">Question/Suggestion/Commentaire</label>
                        <input type="text" name="question" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <button class="btn mt-3">Envoyer</button>
                        {{-- <button class="btn text-danger float-end mt-2" >Effacer le formumaire</button> --}}
                    </div>
                </form>
                @if (session('success'))
              <script>
               swal("Success","{{ Session::get('success')}}", 'success',{
                 button:true,
                 button:"Ok",
               });
              </script>
              @else
              <!-- <script>
                swal("Echec","{{ Session::get('success')}}", 'error',{
                 button:true,
                 button:"Ok",
               });
              </script> -->
          @endif
            </div>
        </div>
    </div>

</section>

</div>   














































































<!-- 
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
    </div> -->
</div>

@endsection
