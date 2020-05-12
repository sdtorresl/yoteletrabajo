<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Images Model
 *
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsToMany $Categories
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsToMany $Products
 *
 * @method \App\Model\Entity\Image newEmptyEntity()
 * @method \App\Model\Entity\Image newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Image[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Image get($primaryKey, $options = [])
 * @method \App\Model\Entity\Image findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Image patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Image[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Image|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ImagesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('images');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Categories', [
            'foreignKey' => 'image_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'categories_images',
        ]);
        $this->belongsToMany('Products', [
            'foreignKey' => 'image_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'products_images',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 100)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        $validator
            ->scalar('filename')
            ->maxLength('filename', 100)
            ->requirePresence('filename', 'create')
            ->notEmptyFile('filename');

        $validator
            ->scalar('directory')
            ->maxLength('directory', 255)
            ->requirePresence('directory', 'create')
            ->notEmptyString('directory');

        $validator
            ->scalar('size')
            ->maxLength('size', 45)
            ->allowEmptyString('size');

        $validator
            ->scalar('format')
            ->maxLength('format', 45)
            ->allowEmptyString('format');

        $validator
            ->scalar('type')
            ->maxLength('type', 55)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        return $validator;
    }
}
