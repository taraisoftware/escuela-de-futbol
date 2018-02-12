<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[tablegalerias]].
 *
 * @see tablegalerias
 */
class tablegaleriasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return tablegalerias[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return tablegalerias|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
