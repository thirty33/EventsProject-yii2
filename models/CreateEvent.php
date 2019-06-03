<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assistants_events".
 *
 * @property int $event_id
 * @property int $assistant_id
 * @property int $type_event
 *
 * @property Assistant $assistant
 * @property Event $event
 * @property Tipo $typeEvent
 */
class CreateEvent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assistants_events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_id', 'assistant_id', 'type_event'], 'required'],
            [['event_id', 'assistant_id', 'type_event'], 'default', 'value' => null],
            [['event_id', 'assistant_id', 'type_event'], 'integer'],
            [['event_id', 'assistant_id', 'type_event'], 'unique', 'targetAttribute' => ['event_id', 'assistant_id', 'type_event']],
            [['event_id', 'assistant_id'], 'unique', 'targetAttribute' => ['event_id', 'assistant_id']],
            [['assistant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Assistant::className(), 'targetAttribute' => ['assistant_id' => 'id']],
            [['event_id'], 'exist', 'skipOnError' => true, 'targetClass' => Event::className(), 'targetAttribute' => ['event_id' => 'id']],
            [['type_event'], 'exist', 'skipOnError' => true, 'targetClass' => Tipo::className(), 'targetAttribute' => ['type_event' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'assistant_id' => 'Assistant ID',
            'type_event' => 'Type Event',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssistant()
    {
        return $this->hasOne(Assistant::className(), ['id' => 'assistant_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Event::className(), ['id' => 'event_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(Tipo::className(), ['id' => 'type_event']);
    }
}
