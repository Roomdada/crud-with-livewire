<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Student extends Component
{


	  use WithPagination;
	  protected $paginationTheme = 'bootstrap';

	  public $show_form = false;

	  public $nom,$prenom,$contact,$age;



	  protected $rules = [
	  	'nom' => 'required|string',
	  	'prenom' => 'required|string',
	  	'contact' => 'required|string',
	  	'age' =>'required'
	  ];



	public function DeleteUser(int $id)
	{
       User::findOrFail($id)->delete();
       session()->flash('success',"L'etudiant a été supprimé!");
	}


	public function showForm()
	{
		$this->show_form = true;
	}


	public function hideForm()
	{
		$this->show_form = false;
	}



	public function createUser()
	{
	   $data = $this->validate();
		User::create($data);
		$this->refreshInput();


       session()->flash('success',"L'etudiant a été enregisté!");

	}

	public function refreshInput()
	{
		$this->nom = null;
		$this->prenom = null;
		$this->age = null;
		$this->contact = null;
		$this->show_form = false;
	}

	public $paginate = 10;
    public function render()
    {
    	$users = User::orderByDesc('created_at')->paginate($this->paginate);
        return view('livewire.student',['users' => $users]);
    }
}
