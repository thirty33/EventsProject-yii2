<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $event_date
 * @property string $event_name
 * @property string $event_description
 * @property string $city
 *
 * @property AssistantsEvents[] $assistantsEvents
 * @property Assistant[] $assistants
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_date', 'event_name', 'event_description', 'city'], 'required'],
            [['event_date'], 'safe'],
            ['event_date', 'validateDates' ],
            [['event_name'], 'string', 'max' => 50],
            [['event_description'], 'string', 'max' => 500],
            [['city'], 'string', 'max' => 20],
        ];
    }

    public function validateDates() {
        $now = date('Y-m-d H:i:s'); 
        if(strtotime($this->event_date) <= strtotime($now)){
            $this->addError('event_date','seleccione una fecha correcta');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_date' => 'Event Date',
            'event_name' => 'Event Name',
            'event_description' => 'Event Description',
            'city' => 'City',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssistantsEvents()
    {
        return $this->hasMany(AssistantsEvents::className(), ['event_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssistants()
    {
        return $this->hasMany(Assistant::className(), ['id' => 'assistant_id'])->viaTable('assistants_events', ['event_id' => 'id']);
    }
}
