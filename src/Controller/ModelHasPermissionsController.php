<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ModelHasPermissions Controller
 *
 * @property \App\Model\Table\ModelHasPermissionsTable $ModelHasPermissions
 * @method \App\Model\Entity\ModelHasPermission[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModelHasPermissionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Permissions', 'Models'],
        ];
        $modelHasPermissions = $this->paginate($this->ModelHasPermissions);

        $this->set(compact('modelHasPermissions'));
    }

    /**
     * View method
     *
     * @param string|null $id Model Has Permission id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modelHasPermission = $this->ModelHasPermissions->get($id, [
            'contain' => ['Permissions', 'Models'],
        ]);

        $this->set(compact('modelHasPermission'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modelHasPermission = $this->ModelHasPermissions->newEmptyEntity();
        if ($this->request->is('post')) {
            $modelHasPermission = $this->ModelHasPermissions->patchEntity($modelHasPermission, $this->request->getData());
            if ($this->ModelHasPermissions->save($modelHasPermission)) {
                $this->Flash->success(__('The model has permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The model has permission could not be saved. Please, try again.'));
        }
        $permissions = $this->ModelHasPermissions->Permissions->find('list', ['limit' => 200]);
        $models = $this->ModelHasPermissions->Models->find('list', ['limit' => 200]);
        $this->set(compact('modelHasPermission', 'permissions', 'models'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Model Has Permission id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modelHasPermission = $this->ModelHasPermissions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modelHasPermission = $this->ModelHasPermissions->patchEntity($modelHasPermission, $this->request->getData());
            if ($this->ModelHasPermissions->save($modelHasPermission)) {
                $this->Flash->success(__('The model has permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The model has permission could not be saved. Please, try again.'));
        }
        $permissions = $this->ModelHasPermissions->Permissions->find('list', ['limit' => 200]);
        $models = $this->ModelHasPermissions->Models->find('list', ['limit' => 200]);
        $this->set(compact('modelHasPermission', 'permissions', 'models'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Model Has Permission id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modelHasPermission = $this->ModelHasPermissions->get($id);
        if ($this->ModelHasPermissions->delete($modelHasPermission)) {
            $this->Flash->success(__('The model has permission has been deleted.'));
        } else {
            $this->Flash->error(__('The model has permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
