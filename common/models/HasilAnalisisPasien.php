<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hasil_analisis_pasien".
 *
 * @property int $id
 * @property int|null $id_hasil_analisis
 * @property int|null $meriang
 * @property int|null $sakit_kepala
 * @property int|null $batuk
 * @property int|null $diare
 * @property int|null $nyeri_otot
 * @property int|null $mual
 * @property int|null $endemik
 * @property int|null $demam
 * @property int|null $keringat_dingin
 * @property int|null $dehidrasi
 * @property int|null $hasil
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class HasilAnalisisPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_analisis_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_hasil_analisis', 'meriang', 'sakit_kepala', 'batuk', 'diare', 'nyeri_otot', 'mual', 'endemik', 'demam', 'keringat_dingin', 'dehidrasi', 'hasil', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'default', 'value' => null],
            [['id_hasil_analisis', 'meriang', 'sakit_kepala', 'batuk', 'diare', 'nyeri_otot', 'mual', 'endemik', 'demam', 'keringat_dingin', 'dehidrasi', 'hasil', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_hasil_analisis' => 'Id Hasil Analisis',
            'meriang' => 'Meriang',
            'sakit_kepala' => 'Sakit Kepala',
            'batuk' => 'Batuk',
            'diare' => 'Diare',
            'nyeri_otot' => 'Nyeri Otot',
            'mual' => 'Mual',
            'endemik' => 'Endemik',
            'demam' => 'Demam',
            'keringat_dingin' => 'Keringat Dingin',
            'dehidrasi' => 'Dehidrasi',
            'hasil' => 'Hasil',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
