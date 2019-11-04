<?php
function getLoginRules(){
return array(
  array(
            'field' => 'username',
            'label' => 'Nombre de usuario',
            'rules' => 'required|trim',
            'errors' => array(
                    'required' => 'El %s es invalido.',
            ),
    ),
    array(
            'field' => 'password',
            'label' => 'Contraseña',
            'rules' => 'required|trim',
            'errors' => array(
                    'required' => 'La %s es invalida.',
            ),
    )
  );
}
