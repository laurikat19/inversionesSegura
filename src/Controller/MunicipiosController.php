<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Municipios Controller
 *
 * @property \App\Model\Table\MunicipiosTable $Municipios
 * @method \App\Model\Entity\Municipio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MunicipiosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departamentos'],
        ];
        $municipios = $this->paginate($this->Municipios);

        $this->set(compact('municipios'));
    }

    /**
     * View method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $municipio = $this->Municipios->get($id, [
            'contain' => ['Departamentos', 'Sucursales', 'Users'],
        ]);

        $this->set(compact('municipio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $municipio = $this->Municipios->newEmptyEntity();
        if ($this->request->is('post')) {
            $municipio = $this->Municipios->patchEntity($municipio, $this->request->getData());
            if ($this->Municipios->save($municipio)) {
                $this->Flash->success(__('The municipio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipio could not be saved. Please, try again.'));
        }
        $departamentos = $this->Municipios->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('municipio', 'departamentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $municipio = $this->Municipios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $municipio = $this->Municipios->patchEntity($municipio, $this->request->getData());
            if ($this->Municipios->save($municipio)) {
                $this->Flash->success(__('The municipio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipio could not be saved. Please, try again.'));
        }
        $departamentos = $this->Municipios->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('municipio', 'departamentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $municipio = $this->Municipios->get($id);
        if ($this->Municipios->delete($municipio)) {
            $this->Flash->success(__('The municipio has been deleted.'));
        } else {
            $this->Flash->error(__('The municipio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
