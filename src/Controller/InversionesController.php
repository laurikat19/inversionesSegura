<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Inversiones Controller
 *
 * @property \App\Model\Table\InversionesTable $Inversiones
 * @method \App\Model\Entity\Inversione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InversionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Servicios'],
        ];
        $inversiones = $this->paginate($this->Inversiones);

        $this->set(compact('inversiones'));
    }

    /**
     * View method
     *
     * @param string|null $id Inversione id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inversione = $this->Inversiones->get($id, [
            'contain' => ['Users', 'Servicios'],
        ]);

        $this->set(compact('inversione'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inversione = $this->Inversiones->newEmptyEntity();
        if ($this->request->is('post')) {
            $inversione = $this->Inversiones->patchEntity($inversione, $this->request->getData());
            if ($this->Inversiones->save($inversione)) {
                $this->Flash->success(__('The inversione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inversione could not be saved. Please, try again.'));
        }
        $users = $this->Inversiones->Users->find('list', ['limit' => 200]);
        $servicios = $this->Inversiones->Servicios->find('list', ['limit' => 200]);
        $this->set(compact('inversione', 'users', 'servicios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inversione id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inversione = $this->Inversiones->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inversione = $this->Inversiones->patchEntity($inversione, $this->request->getData());
            if ($this->Inversiones->save($inversione)) {
                $this->Flash->success(__('The inversione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inversione could not be saved. Please, try again.'));
        }
        $users = $this->Inversiones->Users->find('list', ['limit' => 200]);
        $servicios = $this->Inversiones->Servicios->find('list', ['limit' => 200]);
        $this->set(compact('inversione', 'users', 'servicios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inversione id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inversione = $this->Inversiones->get($id);
        if ($this->Inversiones->delete($inversione)) {
            $this->Flash->success(__('The inversione has been deleted.'));
        } else {
            $this->Flash->error(__('The inversione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
