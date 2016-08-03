<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $createdate
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createdate'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['content'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'createdate' => 'Createdate',
        ];
    }

    public function getList($offset, $limit) {
        return Message::find()->offset($offset)->limit($limit)->all();
    }
}
