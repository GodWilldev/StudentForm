<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Affiche</title>
	<head>
	
	<body>
		<h1>Liste des Etudiants</h1>
		<?php if($list->count() > 0): ?>
			<table border="1" cellpadding"3" cellspacing="0">
			<tr bgcolor="#F4D03F ">
				<td>CNE</td><td>Nom</td><td>Prenom</td><td>Email</td><td>Tel</td><td>Ville</td>
			<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($etudiant->cne); ?></td>
					<td><?php echo e($etudiant->nom); ?></td>
					<td><?php echo e($etudiant->prenom); ?></td>
					<td><?php echo e($etudiant->email); ?></td>
					<td><?php echo e($etudiant->tel); ?></td>
					<td><?php echo e($etudiant->ville); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php else: ?>
			<span>Aucun Etudiant en base de données</span>
		<?php endif; ?>
		
		<div><a href="form_etudiant">Retrouner au formulaire</a></div>
	</body>
</html><?php /**PATH C:\laragon\www\etudiant\resources\views/affiche.blade.php ENDPATH**/ ?>