<?php

/**
 * This is the model class for table "bigdate".
 *
 * The followings are the available columns in table 'bigdate':
 * @property integer $id
 * @property string $name_client
 * @property string $cpf
 * @property string $table
 * @property string $agreement
 * @property string $contract
 * @property string $emission_date
 * @property string $liberation_date
 * @property string $term
 * @property string $status
 * @property double $value
 * @property double $commission
 */
class Bigdate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bigdate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_client, cpf', 'required'),
			array('value, commission', 'numerical'),
			array('name_client, cpf, table, agreement, contract, term, status', 'length', 'max'=>45),
			array('emission_date, liberation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name_client, cpf, table, agreement, contract, emission_date, liberation_date, term, status, value, commission', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name_client' => 'Nome',
			'cpf' => 'Cpf',
			'table' => 'Tabela',
			'agreement' => 'Convênio',
			'contract' => 'Contrato',
			'emission_date' => 'Data de Emissão',
			'liberation_date' => 'Data de Liberação',
			'term' => 'Prazo',
			'status' => 'Status',
			'value' => 'Valor',
			'commission' => 'Comissão',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name_client',$this->name_client,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('table',$this->table,true);
		$criteria->compare('agreement',$this->agreement,true);
		$criteria->compare('contract',$this->contract,true);
		$criteria->compare('emission_date',$this->emission_date,true);
		$criteria->compare('liberation_date',$this->liberation_date,true);
		$criteria->compare('term',$this->term,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('value',$this->value);
		$criteria->compare('commission',$this->commission);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bigdate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
