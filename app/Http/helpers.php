<?php
 
  function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->hak_akses);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }
 
 
  function getMyPermission($id)
  {
    switch ($id) {
      case 'administrator':
        return 'admin';
        break;
      case 'pendaftar':
        return 'pendaftar';
        break;
      default:
        return 'user';
        break;
    }
  }
 
?>