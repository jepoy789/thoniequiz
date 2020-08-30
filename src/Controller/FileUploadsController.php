<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * FileUploads Controller
 *
 * @property \App\Model\Table\FileUploadsTable $FileUploads
 * @method \App\Model\Entity\FileUpload[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FileUploadsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $fileUploads = $this->paginate($this->FileUploads);

        $this->set(compact('fileUploads'));
    }

    /**
     * View method
     *
     * @param string|null $id File Upload id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fileUpload = $this->FileUploads->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('fileUpload'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fileUpload = $this->FileUploads->newEmptyEntity();
        if ($this->request->is('post')) {
            $fileUpload = $this->FileUploads->patchEntity($fileUpload, $this->request->getData());
            
            if(!$fileUpload->getErrors){

            $file = $this->request->getData('file_upload');
            $name = $file->getClientFilename(); 
            $targetPath = WWW_ROOT.'files'.DS.$name;
            if($name)

            $file->moveTo($targetPath);
            
            $fileUpload->file = $name;
            }

            if ($this->FileUploads->save($fileUpload)) {
                $this->Flash->success(__('The file upload has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The file upload could not be saved. Please, try again.'));
        }
        $this->set(compact('fileUpload'));
    }

    /**
     * Edit method
     *
     * @param string|null $id File Upload id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fileUpload = $this->FileUploads->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fileUpload = $this->FileUploads->patchEntity($fileUpload, $this->request->getData());
            if ($this->FileUploads->save($fileUpload)) {
                $this->Flash->success(__('The file upload has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The file upload could not be saved. Please, try again.'));
        }
        $this->set(compact('fileUpload'));
    }

    /**
     * Delete method
     *
     * @param string|null $id File Upload id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fileUpload = $this->FileUploads->get($id);
        if ($this->FileUploads->delete($fileUpload)) {
            $this->Flash->success(__('The file upload has been deleted.'));
        } else {
            $this->Flash->error(__('The file upload could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
