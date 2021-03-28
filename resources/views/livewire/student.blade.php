<div>
 <table class="table">
 	@if(!$show_form)
 	<button wire:click='showForm()' class="btn btn-primary">Ajouter</button>
 	 @else
     	<button wire:click='hideForm()' class="btn btn-danger">Retour</button>
     @endif
    @if($show_form)
 	<div class="container mt-3">
 		<form class="form-group">
 			{{$nom}}
 			<div class="row mb-1">
 				<div class="col-md-6">
 					<input wire:model='nom' class="form-control" type="text" placeholder="Nom etudiant">
 					@error('nom')<span style="color: red;">{{$message}}</span>@enderror
 				</div>
 				<div class="col-md-6">
 					<input wire:model='prenom' class="form-control" type="text" placeholder="prenom etudiant">
 					@error('prenom')<span style="color: red;">{{$message}}</span>@enderror
 				</div>
 			</div>
 			<div class="row">
				<div class="col-md-6">
					<input wire:model='contact' class="form-control" type="text" placeholder="Contact">
 					@error('contact')<span style="color: red;">{{$message}}</span>@enderror

				</div>
 				<div class="col-md-6">
 					<input wire:model='age' class="form-control" type="number" placeholder="age">
 					@error('age')<span style="color: red;">{{$message}}</span>@enderror

 				</div>
 			</div>

 			<button class="btn btn-info mt-2 w-100" wire:click='createUser()'>Enregistrer</button>
 		</form>
 	</div>
 	@endif
 	
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénoms</th>
      <th scope="col">Contact</th>
      <th scope="col">Mature?</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
  	@if(session()->has('success'))
  	  <div class="alert alert-success text-center">
  	  	{{session()->get('success')}}
  	  </div>
  	@endif

  	@forelse($users as $user)
    <tr>
      <th scope="row">{{$user->nom}}</th>
      <td>{{$user->prenom}}</td>
      <td>{{$user->contact}}</td>
      <td>
      	@if($user->isMature($user->age))
      		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(58, 156, 41, 1);transform:;-ms-filter:"><path d="M10 15.586L6.707 12.293 5.293 13.707 10 18.414 19.707 8.707 18.293 7.293z"></path></svg>
      	@else
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(207, 17, 17, 1);transform:;-ms-filter:"><path d="M11.953,2C6.465,2,2,6.486,2,12s4.486,10,10,10s10-4.486,10-10S17.493,2,11.953,2z M12,20c-4.411,0-8-3.589-8-8 s3.567-8,7.953-8C16.391,4,20,7.589,20,12S16.411,20,12,20z"></path><path d="M11 7H13V14H11zM11 15H13V17H11z"></path></svg>
      	@endif
      </td>
      <td>
      	<button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(238, 231, 231, 1);transform:;-ms-filter:"><path d="M8.707 19.707L18 10.414 13.586 6l-9.293 9.293c-.128.128-.219.289-.263.464L3 21l5.242-1.03C8.418 19.926 8.579 19.835 8.707 19.707zM21 7.414c.781-.781.781-2.047 0-2.828L19.414 3c-.781-.781-2.047-.781-2.828 0L15 4.586 19.414 9 21 7.414z"></path></svg></button>
      	<button wire:click='DeleteUser({{$user->id}})' class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(238, 231, 231, 1);transform:;-ms-filter:"><path d="M6 7C5.447 7 5 7 5 7v13c0 1.104.896 2 2 2h10c1.104 0 2-.896 2-2V7c0 0-.447 0-1 0H6zM10 19H8v-9h2V19zM16 19h-2v-9h2V19zM16.618 4L15 2 9 2 7.382 4 3 4 3 6 8 6 16 6 21 6 21 4z"></path></svg></button>
      </td>
    </tr>
    @empty
     <p>il n'ya pas d'etudiant pour ce niveau</p>
    @endforelse
  </tbody>
</table>
  <div class="container">
  	{{$users->links()}}
  </div>
</div>
