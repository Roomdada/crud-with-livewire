<!DOCTYPE html>
<html>
<head>
    <title>Etudiant</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    @livewireStyles
</head>
<body>
<nav class="navbar navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Liste des etudiants</a>
  </div>
</nav>

<div class="container mt-4">
    <h3 class="text-center">Etudiants Licence  informatique</h3>


@livewire('student')
</div>


@livewireScripts
</body>
</html>