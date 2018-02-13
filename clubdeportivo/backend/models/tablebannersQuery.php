<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[tablebanners]].
 *
 * @see tablebanners
 */
class tablebannersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return tablebanners[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return tablebanners|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
