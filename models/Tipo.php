<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo".
 *
 * @property int $id
 * @property string $type_name
 * @property string $type_description
 *
 * @property AssistantsEvents[] $assistantsEvents
 */
class Tipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_name', 'type_description'], 'required'],
            [['type_name', 'type_description'], 'string', 'max' => 30],
            [['type_description'], 'unique'],
            [['type_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_name' => 'Type Name',
            'type_description' => 'Type Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssistantsEvents()
    {
        return $this->hasMany(AssistantsEvents::className(), ['type_event' => 'id']);
    }
}
