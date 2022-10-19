<?php

namespace backend\models;

use kartik\password\StrengthValidator;
use Yii;
use \backend\models\base\User as BaseUser;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user".
 */
class User extends BaseUser
{
    public $oldPassword;
    public $newPassword;
    public $retypePassword;

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                [['oldPassword', 'newPassword', 'retypePassword'], 'required', 'on' => 'change-password'],
                [['oldPassword'], 'validatePassword', 'on' => 'change-password'],
                [['retypePassword'], 'compare', 'compareAttribute' => 'newPassword', 'on' => 'change-password'],
                [['password', 'retypePassword'], 'required', 'on' => 'reset-password'],
                [['retypePassword'], 'compare', 'compareAttribute' => 'password', 'on' => 'reset-password'],

                [['retypePassword'], 'safe'],
            ]
        );
    }
    public function attributeLabels()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                'oldPassword' => Yii::t('models', 'Old password'),
                'newPassword' => Yii::t('models', 'New password'),
                'retypePassword' => Yii::t('models', 'Retry new password'),
            ]
        );
    }


    public function validatePassword()
    {
        $user = User::find()->where(['id' => Yii::$app->user->id])->one();
        if (Yii::$app->getSecurity()->validatePassword($this->oldPassword, $user->password_hash)) {
            return Yii::$app->security->validatePassword($this->oldPassword, $user->password_hash);
        } else {
            return $this->addError('oldPassword', Yii::t('app', 'Incorrect old password.'));
        }
    }
}
