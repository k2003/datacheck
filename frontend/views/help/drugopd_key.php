<?php
use yii\helpers\Url;
$this->title = Yii::t('app', 'การบันทึกข้อมูลแฟ้ม DRUG_OPD');
$this->params['breadcrumbs'][] = ['label' => 'กลับหน้าเดิม', 'url' => ['drugopd/index']];

?>
<br>
<?= \yii2assets\pdfjs\PdfJs::widget([
    'width'=>'100%',
        'height'=> '600px',
  'url'=> Url::base().'/documents/key_drug_opd.pdf'
]); ?>
