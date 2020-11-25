<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PasswordResets Controller
 *
 * @property \App\Model\Table\PasswordResetsTable $PasswordResets
 * @method \App\Model\Entity\PasswordReset[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PasswordResetsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $passwordResets = $this->paginate($this->PasswordResets);

        $this->set(compact('passwordResets'));
    }

    /**
     * View method
     *
     * @param string|null $id Password Reset id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $passwordReset = $this->PasswordResets->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('passwordReset'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $passwordReset = $this->PasswordResets->newEmptyEntity();
        if ($this->request->is('post')) {
            $passwordReset = $this->PasswordResets->patchEntity($passwordReset, $this->request->getData());
            if ($this->PasswordResets->save($passwordReset)) {
                $this->Flash->success(__('The password reset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The password reset could not be saved. Please, try again.'));
        }
        $this->set(compact('passwordReset'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Password Reset id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $passwordReset = $this->PasswordResets->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $passwordReset = $this->PasswordResets->patchEntity($passwordReset, $this->request->getData());
            if ($this->PasswordResets->save($passwordReset)) {
                $this->Flash->success(__('The password reset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The password reset could not be saved. Please, try again.'));
        }
        $this->set(compact('passwordReset'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Password Reset id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $passwordReset = $this->PasswordResets->get($id);
        if ($this->PasswordResets->delete($passwordReset)) {
            $this->Flash->success(__('The password reset has been deleted.'));
        } else {
            $this->Flash->error(__('The password reset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
