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
            [['death_id', 'age'], 'integer'],
            [['hn', 'sex', 'addre', 'death_out_place', 'send_by_id', 'cpr', 'ward', 'symptoms_refer', 'death_af48hr', 'case_refer'], 'safe'],
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
            'age' => $this->age,
        ]);

        $query->andFilterWhere(['like', 'hn', $this->hn])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'addre', $this->addre])
            ->andFilterWhere(['like', 'death_out_place', $this->death_out_place])
            ->andFilterWhere(['like', 'send_by_id', $this->send_by_id])
            ->andFilterWhere(['like', 'cpr', $this->cpr])
            ->andFilterWhere(['like', 'ward', $this->ward])
            ->andFilterWhere(['like', 'symptoms_refer', $this->symptoms_refer])
            ->andFilterWhere(['like', 'death_af48hr', $this->death_af48hr])
            ->andFilterWhere(['like', 'case_refer', $this->case_refer]);

        return $dataProvider;
    }
}
