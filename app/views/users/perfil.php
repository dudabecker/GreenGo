<html> 
<?= print "<pre>"; ?>
<?=    print_r($usuario); ?>
<?=    print "</pre>"; ?>
 <title> perfil </title>
<button> <h3>  Editar  </h3> <a href='../cotrollers/userController.php?action=edit&id=<?= $user->getId() ?>'> </a> </button>

</html>
