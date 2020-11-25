<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RoleHasPermissions Controller
 *
 * @property \App\Model\Table\RoleHasPermissionsTable $RoleHasPermissions
 * @method \App\Model\Entity\RoleHasPermission[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoleHasPermissionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Permissions', 'Roles'],
        ];
        $roleHasPermissions = $this->paginate($this->RoleHasPermissions);

        $this->set(compact('roleHasPermissions'));
    }

    /**
     * View method
     *
     * @param string|null $id Role Has Permission id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roleHasPermission = $this->RoleHasPermissions->get($id, [
            'contain' => ['Permissions', 'Roles'],
        ]);

        $this->set(compact('roleHasPermission'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roleHasPermission = $this->RoleHasPermissions->newEmptyEntity();
        if ($this->request->is('post')) {
            $roleHasPermission = $this->RoleHasPermissions->patchEntity($roleHasPermission, $this->request->getData());
            if ($this->RoleHasPermissions->save($roleHasPermission)) {
                $this->Flash->success(__('The role has permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role has permission could not be saved. Please, try again.'));
        }
        $permissions = $this->RoleHasPermissions->Permissions->find('list', ['limit' => 200]);
        $roles = $this->RoleHasPermissions->Roles->find('list', ['limit' => 200]);
        $this->set(compact('roleHasPermission', 'permissions', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Role Has Permission id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roleHasPermission = $this->RoleHasPermissions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roleHasPermission = $this->RoleHasPermissions->patchEntity($roleHasPermission, $this->request->getData());
            if ($this->RoleHasPermissions->save($roleHasPermission)) {
                $this->Flash->success(__('The role has permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role has permission could not be saved. Please, try again.'));
        }
        $permissions = $this->RoleHasPermissions->Permissions->find('list', ['limit' => 200]);
        $roles = $this->RoleHasPermissions->Roles->find('list', ['limit' => 200]);
        $this->set(compact('roleHasPermission', 'permissions', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Role Has Permission id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roleHasPermission = $this->RoleHasPermissions->get($id);
        if ($this->RoleHasPermissions->delete($roleHasPermission)) {
            $this->Flash->success(__('The role has permission has been deleted.'));
        } else {
            $this->Flash->error(__('The role has permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
