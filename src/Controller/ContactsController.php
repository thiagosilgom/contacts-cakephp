<?php

namespace App\Controller;

class ContactsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash');
    }

    public function index()
    {
        $contacts = $this->Contacts->find('all');
        $this->set(compact('contacts'));
    }

    public function view($id = null)
    {
        $contact = $this->Contacts->get($id);
        $this->set(compact('contact'));
    }

    public function add()
    {
        $contact = $this->Contacts->newEmptyEntity();
        if ($this->request->is('post')) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->Flash->success(__('Contato criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu algum erro ao tentar adicionar contato.'));
        }
        $this->set('contact', $contact);
    }

    public function edit($id = null)
    {
        $contact = $this->Contacts->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->Flash->success(__('Contato atualizado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu algum erro ao tentar editar contato.'));
        }
        $this->set('contact', $contact);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contact = $this->Contacts->get($id);
        if ($this->Contacts->delete($contact)) {
            $this->Flash->success(__('Contato removido com sucesso.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Ocorreu algum erro ao tentar deletar contato.'));
        return $this->redirect(['action' => 'index']);
    }
}