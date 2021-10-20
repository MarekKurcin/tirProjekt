<?php
include '../admin/assets/hlavickaAdmin.php';
include '../admin/assets/navAdmin.php';
?>
<?php
session_start();
if (!isset($_SESSION['user']))
{
    $_SESSION['user'] = ['username' => null, 'isLoggedIn' => false, ];

}

$uzivatelia = file('uzivatelia.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($uzivatelia as $uzivatel)
{
    list($meno, $heslo) = explode('::', $uzivatel);
    $prihlasenie[$meno] = $heslo;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

    foreach ($prihlasenie as $name => $password)
    {
        if ($name === $_POST['meno'])
        {
            if ($password === $_POST['heslo'])
            {
                $_SESSION['user'] = ['username' => $meno, 'isLoggedIn' => true, ];
                header('Location: ./index.php');

            }
        }
        var_dump($_SESSION);
    }
}
?>
<section class=" p-5">
	<div class="container-sm border">
		 <h4 class="text-sm-center font-weight-bold p-3 bg-light border">Prihlásenie</h4>
		<form action="prihlasenie.php"  method="post" class="p-3">			
			<div class="form-group was-validated">
				<strong> Meno </strong>				
				<input type="text" class="form-control" required  name="meno"> 
				<div class="invalid-feedback">Prosím zadaj meno</div>
			</div>
			<div class="form-group was-validated">
				<strong> Heslo </strong>
				<input type="text" class="form-control" required name="heslo"> 
				<div class="invalid-feedback">Prosím zadaj heslo</div>				
			</div>				
	  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label text-secondary" for="exampleCheck1"> Pamätať si prihlasenie</label>
  </div>

  	<div class="row justify-content-md-center">
  		 <button type="submit" class="btn btn-light border"> Prihlasiť sa </button>
  	</div>
  	<br><br>
  	 	<div class="row justify-content-md-center">
  		<span> <a>Zaregistruj sa </a></span>
  	</div>
  	 	<div class="row justify-content-md-center">
   			<span class=""><a>Zabudol som heslo</a></span>
   		</div>
				
	</div>	
	</form>
	</div>

 <?php 
		include '../admin/assets/petickaAdmin.php';
 ?>