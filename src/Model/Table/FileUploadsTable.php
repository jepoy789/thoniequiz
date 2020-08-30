<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FileUploads Model
 *
 * @method \App\Model\Entity\FileUpload newEmptyEntity()
 * @method \App\Model\Entity\FileUpload newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FileUpload[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FileUpload get($primaryKey, $options = [])
 * @method \App\Model\Entity\FileUpload findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FileUpload patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FileUpload[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FileUpload|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FileUpload saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FileUpload[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FileUpload[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FileUpload[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FileUpload[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FileUploadsTable extends Table
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

        $this->setTable('file_uploads');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->boolean('valid')
            ->allowEmptyString('valid');
        $validator
            ->allowEmptyFile('file')
            ->add('file', [
            'mimeType' => [
                'rule' => ['mimeType',['text/csv','file/csv']],
                'message' => 'Please Upload only CSV file',
            ],
            'fileSize' => [
                'rule' => ['fileSize', '<=', '3MB'],
                'message' => 'File size must be 3MB only',
            ],
            ]);

        return $validator;
    }
}
