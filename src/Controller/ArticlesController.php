<?php
	namespace App\Controller;

	class ArticlesController extends AppController {

		public function initialize() {
			parent::initialize();
			$this->loadComponent('Flash');
		}

		//////////////////////////////////////////////////
		// index page
		public function index() {
			$this->set('articles', $this->Articles->find('all'));
		}

		//////////////////////////////////////////////////
		// detail page
		public function view($id = null) {
			$article = $this->Articles->get($id);
			$this->set(compact('article'));
		}

		//////////////////////////////////////////////////
		// add page
		public function add() {
			$article = $this->Articles->newEntity();
			// POST
			if($this->request->is('post')) {
				$article = $this->Articles->patchEntity($article, $this->request->data);
				// SQL save
				if($this->Articles->save($article)) {
					$this->Flash->success(__('保存されました。'));
					return $this->redirect(['action' => 'index']);
				}
				// insert error
				$this->Flash->error(__('保存に失敗しました。'));
			}
			$this->set('article', $article);
		}

		//////////////////////////////////////////////////
		// edit page
		public function edit($id = null) {
			$article = $this->Articles->get($id);
			// POST
			if($this->request->is(['post', 'put'])) {
				$this->Articles->patchEntity($article, $this->request->data);
				// update
				if($this->Articles->save($article)) {
					$this->Flash->success(__('保存されました。'));
					return $this->redirect(['action' => 'index']);
				}
				// update error
				$this->Flash->error(__('保存に失敗しました。'));
			}
			$this->set('article', $article);
		}

		//////////////////////////////////////////////////
		// delete page
		public function delete($id) {
			$this->request->allowMethod(['post', 'delete']);

			$article = $this->Articles->get($id);
			if($this->Articles->delete($article)) {
				$this->Flash->success(__('id: {0} 削除されました。', h($id)));
				return $this->redirect(['action' => 'index']);
			}
		}
	}