<?php
/**
 * Created by PhpStorm.
 * User: webwerks
 * Date: 24/4/17
 * Time: 6:41 PM
 */

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity{


    protected $_accessible=[
        '*'=>true,
        'username'=>true,
        'id'=>false
    ];

    protected $_hidden=['password'];



    protected function _setPassword($password){
        return (new DefaultPasswordHasher())->hash($password);
    }
}