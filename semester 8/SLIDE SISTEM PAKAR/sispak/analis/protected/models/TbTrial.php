<?php

/**
 * This is the model class for table "tb_trial".
 *
 * The followings are the available columns in table 'tb_trial':
 * @property integer $id_trial
 * @property string $nama_anak
 * @property string $tanggal_lahir
 * @property string $nama_ibu
 * @property string $alamat_rumah
 * @property string $no_handphone
 * @property string $results
 * @property string $date_created
 */
class TbTrial extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return TbTrial the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tb_trial';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nama_anak, tanggal_lahir, nama_ibu', 'required'),
            array('nama_anak, nama_ibu', 'length', 'max' => 200),
            array('no_handphone', 'length', 'max' => 25),
            array('tanggal_lahir', 'isvalidage'),
            array('results, date_created, alamat_rumah, no_handphone, umur', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id_trial, nama_anak, tanggal_lahir, nama_ibu, alamat_rumah, no_handphone, results, date_created', 'safe', 'on' => 'search'),
        );
    }

    public function isvalidage($attribute, $params) {
        $age = $this->getAge();
        if ($age > 5) {
            $this->addError('tanggal_lahir', 'Umur anak +- ' . $age . ' Tahun, tidak disarankan hanya untuk anak 1 - 5 Tahun');
        } elseif ($age == 0) {
            $this->addError('tanggal_lahir', 'Umur anak +- ' . $age . ' Tahun, tidak disarankan hanya untuk anak 1 - 5 Tahun');
        }
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_trial' => 'Id Trial',
            'nama_anak' => 'Nama Anak',
            'tanggal_lahir' => 'Tanggal Lahir',
            'nama_ibu' => 'Nama Ibu',
            'alamat_rumah' => 'Alamat Rumah',
            'no_handphone' => 'No Handphone',
            'results' => 'Results',
            'date_created' => 'Date Created',
            'umur'=>'umur'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_trial', $this->id_trial);
        $criteria->compare('nama_anak', $this->nama_anak, true);
        $criteria->compare('umur', $this->umur, true);
        $criteria->compare('tanggal_lahir', $this->tanggal_lahir, true);
        $criteria->compare('nama_ibu', $this->nama_ibu, true);
        $criteria->compare('alamat_rumah', $this->alamat_rumah, true);
        $criteria->compare('no_handphone', $this->no_handphone, true);
        $criteria->compare('results', $this->results, true);
        $criteria->compare('date_created', $this->date_created, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getAge() {
//        $this->umur = (date('Ymd') - date('Ymd', strtotime($this->tanggal_lahir))) / 360;
//        var_dump(round($this->umur,0)) or die();
//        var_dump($this->umur) or die();

        $tgl1 = date('Y-m-d', strtotime($this->tanggal_lahir)); //"2009-10-01";  // 1 Oktober 2009
        $tgl2 = date('Y-m-d'); // "2009-10-10";  // 10 Oktober 2009
// memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
// dari tanggal pertama

        $pecah1 = explode("-", $tgl1);
        $date1 = $pecah1[2];
        $month1 = $pecah1[1];
        $year1 = $pecah1[0];

// memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
// dari tanggal kedua

        $pecah2 = explode("-", $tgl2);
        $date2 = $pecah2[2];
        $month2 = $pecah2[1];
        $year2 = $pecah2[0];

// menghitung JDN dari masing-masing tanggal

        $jd1 = GregorianToJD($month1, $date1, $year1);
        $jd2 = GregorianToJD($month2, $date2, $year2);

// hitung selisih hari kedua tanggal

        $selisih = $jd2 - $jd1;

        return round($selisih / 360, 0);
    }
    
    public function beforeSave(){
        $this->tanggal_lahir  = date('Y-m-d',  strtotime($this->tanggal_lahir));
        $this->date_created = date('Y-m-d');
        return TRUE;
    }

}