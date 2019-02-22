<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "t_mis_visit".
 *
 * @property int $id 参观预约id
 * @property int $customerid 客户id
 * @property string $customername 客户名称
 * @property int $customersex 客户性别，0男，1女，2未知
 * @property string $customerphone 客户手机号
 * @property string $customerage 客户年龄
 * @property string $customeraddress 客户家庭住址
 * @property int $visiterid 参观人id
 * @property string $visitername 参观人名称
 * @property string $visiterphone 参观人手机号
 * @property string $number 参观人数
 * @property string $visittime 参观时间
 * @property int $stationid 驿站id
 * @property string $stationname 驿站名称
 * @property string $remarks 备注
 * @property int $process_instance_id 审批实例编号id
 * @property int $deptid 所属部门id
 * @property int $approverid 审批人id
 * @property int $copyid 抄送人id
 * @property int $status 履约状态，0默认未履约，1履约
 * @property int $cid 创建人id
 * @property string $cname 创建人名称
 * @property string $updatetime 更新时间
 */
class TMisVisit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_mis_visit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customerid', 'visiterid', 'stationid', 'process_instance_id', 'deptid', 'approverid', 'cid'], 'required'],
            [['customerid', 'customersex', 'visiterid', 'stationid', 'process_instance_id', 'deptid', 'approverid', 'copyid', 'status', 'cid'], 'integer'],
            [['visittime', 'updatetime'], 'safe'],
            [['customername', 'customeraddress', 'visitername', 'stationname', 'remarks', 'cname'], 'string', 'max' => 50],
            [['customerphone', 'customerage', 'visiterphone', 'number'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customerid' => 'Customerid',
            'customername' => 'Customername',
            'customersex' => 'Customersex',
            'customerphone' => 'Customerphone',
            'customerage' => 'Customerage',
            'customeraddress' => 'Customeraddress',
            'visiterid' => 'Visiterid',
            'visitername' => 'Visitername',
            'visiterphone' => 'Visiterphone',
            'number' => 'Number',
            'visittime' => 'Visittime',
            'stationid' => 'Stationid',
            'stationname' => 'Stationname',
            'remarks' => 'Remarks',
            'process_instance_id' => 'Process Instance ID',
            'deptid' => 'Deptid',
            'approverid' => 'Approverid',
            'copyid' => 'Copyid',
            'status' => 'Status',
            'cid' => 'Cid',
            'cname' => 'Cname',
            'updatetime' => 'Updatetime',
        ];
    }
}
