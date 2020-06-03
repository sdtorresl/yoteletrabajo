<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Podcasts Controller
 *
 * @property \App\Model\Table\PodcastsTable $Podcasts
 * @method \App\Model\Entity\Podcast[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PodcastsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index($category_id = null)
    {
        if ($category_id != null) {
            $query = $this->Podcasts->findByCategoryId($category_id);
        }
        else {
            $query = $this->Podcasts->find();
        }

        $podcasts = $this->paginate($query);
        $this->set(compact('podcasts', 'category_id'));
    }
}
