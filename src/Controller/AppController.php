<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
        $this->loadComponent('Authentication.Authentication');
    }

    public function beforeRender(EventInterface $event) {
        parent::beforeRender($event);

        $controller = $event->getSubject();
        $request = $controller->getRequest();
        $params = $request->getAttribute("params");
        
        // Use admin layout on admin prefix
        if ( array_key_exists("prefix", $params) ) {
            if($params['prefix'] == 'Admin') {
                if ($controller->name == 'Users' && $params['action'] == 'login') {
                    $this->viewBuilder()->setLayout('login');
                }
                else {
                    $this->viewBuilder()->setLayout('admin');
                }
                return;
            }
        }

        if ($controller->name == 'Pages' && array_key_exists("pass", $params)) {
            $this->set(compact('params'));
            if($params['pass'][0] == 'home') {
                $this->viewBuilder()->setLayout('default');
            }
            else {
                $this->viewBuilder()->setLayout('ajax');
            }
        }
        else {
            $this->viewBuilder()->setLayout('ajax');
        }
    }
}
