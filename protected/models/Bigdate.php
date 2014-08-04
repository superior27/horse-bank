<?php

/**
 * This is the model class for table "bigdate".
 *
 * The followings are the available columns in table 'bigdate':
 * @property integer $id
 * @property string $name_client
 * @property string $nick_name
 * @property string $cpf
 * @property string $phone
 * @property string $table
 * @property string $agreement
 * @property string $contract
 * @property string $emission_date
 * @property string $liberation_date
 * @property string $term
 * @property string $status
 * @property double $value
 * @property double $commission
 * @property double $commission_value
 * @property string $bank
 * @property string $address
 * @property string $complement
 * @property string $address_number
 * @property string $city
 * @property string $neighborhood
 * @property string $state_acronym
 * @property string $broker
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
			array('name_client, cpf, bank, address, address_number, city, neighborhood, state_acronym', 'required'),
			array('value, commission, commission_value', 'numerical'),
			array('name_client, cpf, table, agreement, contract, term, status, bank, complement, address_number, city, neighborhood', 'length', 'max'=>45),
			array('nick_name', 'length', 'max'=>256),
			array('phone, address, state_acronym, broker', 'length', 'max'=>255),
			array('emission_date, liberation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name_client, nick_name, cpf, phone, table, agreement, contract, emission_date, liberation_date, term, status, value, commission, commission_value, bank, address, complement, address_number, city, neighborhood, state_acronym', 'safe', 'on'=>'search'),
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
			'nick_name' => 'Apelido',
			'cpf' => 'CPF',
			'phone' => 'Telefone',
			'table' => 'Tabela',
			'agreement' => 'Convênio',
			'contract' => 'Contrato',
			'emission_date' => 'Data de Emissão',
			'liberation_date' => 'Data de Liberação',
			'term' => 'Prazo',
			'status' => 'Status',
			'value' => 'Valor',
			'commission' => 'Comissão',
			'commission_value' => 'Comissão %',
			'bank' => 'Banco',
			'address' => 'Endereço',
			'complement' => 'Complemento',
			'address_number' => 'Nº',
			'city' => 'Cidade',
			'neighborhood' => 'Bairro',
			'state_acronym' => 'Estado',
			'broker' => 'Corretor'
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
		$criteria->compare('nick_name',$this->nick_name,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('table',$this->table,true);
		$criteria->compare('agreement',$this->agreement,true);
		$criteria->compare('contract',$this->contract,true);
		$criteria->compare('emission_date',$this->emission_date,true);
		$criteria->compare('liberation_date',$this->liberation_date,true);
		$criteria->compare('term',$this->term,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('value',$this->value);
		$criteria->compare('commission',$this->commission);
		$criteria->compare('commission_value',$this->commission_value);
		$criteria->compare('bank',$this->bank,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('complement',$this->complement,true);
		$criteria->compare('address_number',$this->address_number,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('neighborhood',$this->neighborhood,true);
		$criteria->compare('state_acronym',$this->state_acronym,true);
		$criteria->compare('broker',$this->broker,true);


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
