<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.error').hide();
        
      $('form').submit(function(){
        var name = $('#name').val();
        var surname = $('#surname').val();
	var cne = $('#cne').val();
        var email = $('#email').val();
        var tel= $('#tel').val();
        var ville= $('#ville').val();

        if(name== ''){
          $('#nameErr').show();
          return false;
        }
        if(surname== ''){
          $('#surnameErr').show();
          return false;
        }
	if(IsCNE(cne)=== false){
          $('#cneErr').show();
          return false;
        }
        if(email== ''){
          $('#emailErr1').show();
          return false;
        }
        if(IsEmail(email)==false){
          $('#emailErr2').show();
          return false;
        }
        if(IsNumber(tel) ==false){
          $('#telErr').show();
          return false;
        }
	});
});
	
    function IsEmail(email) {
      var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if(!regex.test(email)) {
        return false;
      }else{
        return true;
      }
    }
    function IsNumber(tel) {
        var regex2 = /[0-9]{10}/;
        if(!(regex2.test(tel))){
            return false;
        }else{
            return true;
        }
    }
    function IsCNE(cne) {
        var regex2 = /[A-Z0-9]{8}/;
        if(!(regex2.test(cne))){
            return false;
        }else{
            return true;
        }
    }
	
  </script>
		
	</head>
	
	<body>
    <form method="post" action="<?php echo e(route('form_etudiant.create')); ?>" id="myForm">
	<?php echo csrf_field(); ?>
        <label for="name">Nom: </label>
        <input id="name" type="text" name="nom" required>
        <span class="error" id="nameErr">Damn, Enter your name here</span>

        <label for="surname">Prénom: </label>
        <input type="text" name="prenom" id="surname" required>
        <span class="error" id="surnameErr">Damn, Enter your surname here</span>

        <label for="cne">CNE: </label>
        <input type="text" name="cne" id="cne" required>
        <span class="error" id="cneErr">Le CNE doit être composée de 8 caractères</span>

        <label for="email">Email: </label>
        <input id="email" type="email" name="email" required>
        <span class="error" id="emailErr1">Damn, Enter your email here</span>
        <span class="error" id="emailErr2">Ceci n'est pas un email</span>

        <label for="tel">N° de Téléphone: </label>
        <input type="text" name="tel" id="tel" required>
        <span class="error" id="telErr">Le numéro de téléphone doit comprendre 10 chiffres</span>
		
		<label for="ville">Ville: 
            <select id="ville" name="ville" placeholder="Ville">
                <option value="">Ville</option>
                <option value="Rabat">Rabat</option>
                <option value="Tanger">Tanger</option>
                <option value="Casablanca">Casablanca</option>
                <option value="Agadir">Agadir</option>
            </select>
        </label>
        <button id="#submit" type="submit">Submit</button>
    </form>
	<a href="list_etudiant">Voir la liste des étudiants</a>
</html><?php /**PATH C:\laragon\www\etudiant\resources\views/ajout.blade.php ENDPATH**/ ?>