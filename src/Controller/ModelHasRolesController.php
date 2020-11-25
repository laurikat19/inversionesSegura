<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ModelHasRoles Controller
 *
 * @property \App\Model\Table\ModelHasRolesTable $ModelHasRoles
 * @method \App\Model\Entity\ModelHasRole[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModelHasRolesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Models'],
        ];
        $modelHasRoles = $this->paginate($this->ModelHasRoles);

        $this->set(compact('modelHasRoles'));
    }

    /**
     * View method
     *
     * @param string|null $id Model Has Role id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modelHasRole = $this->ModelHasRoles->get($id, [
            'contain' => ['Roles', 'Models'],
        ]);

        $this->set(compact('modelHasRole'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modelHasRole = $this->ModelHasRoles->newEmptyEntity();
        if ($this->request->is('post')) {
            $modelHasRole = $this->ModelHasRoles->patchEntity($modelHasRole, $this->request->getData());
            if ($this->ModelHasRoles->save($modelHasRole)) {
                $this->Flash->success(__('The model has role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The model has role could not be saved. Please, try again.'));
        }
        $roles = $this->ModelHasRoles->Roles->find('list', ['limit' => 200]);
        $models = $this->ModelHasRoles->Models->find('list', ['limit' => 200]);
        $this->set(compact('modelHasRole', 'roles', 'models'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Model Has Role id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modelHasRole = $this->ModelHasRoles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modelHasRole = $this->ModelHasRoles->patchEntity($modelHasRole, $this->request->getData());
            if ($this->ModelHasRoles->save($modelHasRole)) {
                $this->Flash->success(__('The model has role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The model has role could not be saved. Please, try again.'));
        }
        $roles = $this->ModelHasRoles->Roles->find('list', ['limit' => 200]);
        $models = $this->ModelHasRoles->Models->find('list', ['limit' => 200]);
        $this->set(compact('modelHasRole', 'roles', 'models'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Model Has Role id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modelHasRole = $this->ModelHasRoles->get($id);
        if ($this->ModelHasRoles->delete($modelHasRole)) {
            $this->Flash->success(__('The model has role has been deleted.'));
        } else {
            $this->Flash->error(__('The model has role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
