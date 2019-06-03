<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assistant".
 *
 * @property int $id
 * @property string $firts_name
 * @property string $tlf_number
 * @property string $last_name
 *
 * @property AssistantsEvents[] $assistantsEvents
 * @property Event[] $events
 */
class Assistant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assistant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firts_name', 'tlf_number', 'last_name'], 'required'],
            [['firts_name', 'last_name'], 'string', 'max' => 50],
            [['tlf_number'], 'string', 'max' => 12],
            [['firts_name'], 'unique'],
            [['last_name'], 'unique'],
            [['tlf_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firts_name' => 'Firts Name',
            'tlf_number' => 'Tlf Number',
            'last_name' => 'Last Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssistantsEvents()
    {
        return $this->hasMany(AssistantsEvents::className(), ['assistant_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Event::className(), ['id' => 'event_id'])->viaTable('assistants_events', ['assistant_id' => 'id']);
    }
}
