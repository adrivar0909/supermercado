<?php

/**
 * This is the model class for table "pedido".
 *
 * The followings are the available columns in table 'pedido':
 * @property integer $idPedido
 * @property integer $idCliente
 * @property integer $idEnviador
 * @property string $latitud
 * @property string $longitud
 * @property string $fecha
 * @property string $estado
 * @property double $monto
 * @property string $cliente
 * @property string $direccion
 *
 * The followings are the available model relations:
 * @property Detallepedido[] $detallepedidos
 * @property Cliente $idCliente0
 * @property Enviador $idEnviador0
 */
class Pedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cliente, direccion', 'required'),
			array('idCliente, idEnviador', 'numerical', 'integerOnly'=>true),
			array('monto', 'numerical'),
			array('latitud, longitud, direccion', 'length', 'max'=>100),
			array('fecha, cliente', 'length', 'max'=>50),
			array('estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPedido, idCliente, idEnviador, latitud, longitud, fecha, estado, monto, cliente, direccion', 'safe', 'on'=>'search'),
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
			'detallepedidos' => array(self::HAS_MANY, 'Detallepedido', 'idPedido'),
			'idCliente0' => array(self::BELONGS_TO, 'Cliente', 'idCliente'),
			'idEnviador0' => array(self::BELONGS_TO, 'Enviador', 'idEnviador'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPedido' => 'Id Pedido',
			'idCliente' => 'Id Cliente',
			'idEnviador' => 'Id Enviador',
			'latitud' => 'Latitud',
			'longitud' => 'Longitud',
			'fecha' => 'Fecha',
			'estado' => 'Estado',
			'monto' => 'Monto',
			'cliente' => 'Cliente',
			'direccion' => 'Direccion',
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

		$criteria->compare('idPedido',$this->idPedido);
		$criteria->compare('idCliente',$this->idCliente);
		$criteria->compare('idEnviador',$this->idEnviador);
		$criteria->compare('latitud',$this->latitud,true);
		$criteria->compare('longitud',$this->longitud,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('cliente',$this->cliente,true);
		$criteria->compare('direccion',$this->direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
