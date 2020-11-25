<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * FailedJobs Controller
 *
 * @property \App\Model\Table\FailedJobsTable $FailedJobs
 * @method \App\Model\Entity\FailedJob[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FailedJobsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $failedJobs = $this->paginate($this->FailedJobs);

        $this->set(compact('failedJobs'));
    }

    /**
     * View method
     *
     * @param string|null $id Failed Job id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $failedJob = $this->FailedJobs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('failedJob'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $failedJob = $this->FailedJobs->newEmptyEntity();
        if ($this->request->is('post')) {
            $failedJob = $this->FailedJobs->patchEntity($failedJob, $this->request->getData());
            if ($this->FailedJobs->save($failedJob)) {
                $this->Flash->success(__('The failed job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The failed job could not be saved. Please, try again.'));
        }
        $this->set(compact('failedJob'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Failed Job id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $failedJob = $this->FailedJobs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $failedJob = $this->FailedJobs->patchEntity($failedJob, $this->request->getData());
            if ($this->FailedJobs->save($failedJob)) {
                $this->Flash->success(__('The failed job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The failed job could not be saved. Please, try again.'));
        }
        $this->set(compact('failedJob'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Failed Job id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $failedJob = $this->FailedJobs->get($id);
        if ($this->FailedJobs->delete($failedJob)) {
            $this->Flash->success(__('The failed job has been deleted.'));
        } else {
            $this->Flash->error(__('The failed job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
