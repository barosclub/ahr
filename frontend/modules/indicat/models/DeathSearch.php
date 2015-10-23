<?php

namespace frontend\modules\indicat\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\indicat\models\Death;

/**
 * DeathSearch represents the model behind the search form about `frontend\modules\indicat\models\Death`.
 */
class DeathSearch extends Death
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['death_id', 'wpreg', 'death_cert_id', 'death_source', 'newborn_death_cause_id'], 'integer'],
            [['hn', 'cid', 'hcode', 'death_date', 'death_diag_1', 'death_diag_2', 'death_diag_3', 'death_diag_4', 'death_diag_other', 'death_cause', 'death_place', 'last_update', 'last_pttype', 'an', 'nopreg', 'odisease', 'death_time', 'death_diag_date_1', 'death_diag_date_2', 'death_diag_date_3', 'death_diag_date_4', 'death_cause_text', 'death_cert_date', 'death_cert_doctor', 'death_number', 'hos_guid', 'autopsy_perform', 'no_detail', 'death_hospcode', 'death_preg_42_day', 'update_datetime', 'staff'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Death::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'death_id' => $this->death_id,
            'death_date' => $this->death_date,
            'last_update' => $this->last_update,
            'wpreg' => $this->wpreg,
            'death_time' => $this->death_time,
            'death_diag_date_1' => $this->death_diag_date_1,
            'death_diag_date_2' => $this->death_diag_date_2,
            'death_diag_date_3' => $this->death_diag_date_3,
            'death_diag_date_4' => $this->death_diag_date_4,
            'death_cert_id' => $this->death_cert_id,
            'death_cert_date' => $this->death_cert_date,
            'death_source' => $this->death_source,
            'newborn_death_cause_id' => $this->newborn_death_cause_id,
            'update_datetime' => $this->update_datetime,
        ]);

        $query->andFilterWhere(['like', 'hn', $this->hn])
            ->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'hcode', $this->hcode])
            ->andFilterWhere(['like', 'death_diag_1', $this->death_diag_1])
            ->andFilterWhere(['like', 'death_diag_2', $this->death_diag_2])
            ->andFilterWhere(['like', 'death_diag_3', $this->death_diag_3])
            ->andFilterWhere(['like', 'death_diag_4', $this->death_diag_4])
            ->andFilterWhere(['like', 'death_diag_other', $this->death_diag_other])
            ->andFilterWhere(['like', 'death_cause', $this->death_cause])
            ->andFilterWhere(['like', 'death_place', $this->death_place])
            ->andFilterWhere(['like', 'last_pttype', $this->last_pttype])
            ->andFilterWhere(['like', 'an', $this->an])
            ->andFilterWhere(['like', 'nopreg', $this->nopreg])
            ->andFilterWhere(['like', 'odisease', $this->odisease])
            ->andFilterWhere(['like', 'death_cause_text', $this->death_cause_text])
            ->andFilterWhere(['like', 'death_cert_doctor', $this->death_cert_doctor])
            ->andFilterWhere(['like', 'death_number', $this->death_number])
            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->andFilterWhere(['like', 'autopsy_perform', $this->autopsy_perform])
            ->andFilterWhere(['like', 'no_detail', $this->no_detail])
            ->andFilterWhere(['like', 'death_hospcode', $this->death_hospcode])
            ->andFilterWhere(['like', 'death_preg_42_day', $this->death_preg_42_day])
            ->andFilterWhere(['like', 'staff', $this->staff]);

        return $dataProvider;
    }
}
