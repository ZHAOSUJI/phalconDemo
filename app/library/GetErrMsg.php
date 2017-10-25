<?php
/**
 * 错误信息定义和获取类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/5
 * Time: 15:49
 */

class GetErrMsg
{
    const LOGIN_FAILED = '登录失败';
    const PASS_INCORRECT = '用户名或密码不正确';
    const ADD_STAFF_FAILED = '员工添加失败';
    const EDIT_STAFF_FAILED = '员工编辑失败';
    const EDIT_ORG_INFO_FAILED = '管理员信息个人信息修改失败';
    const SERVER_LIST_FAILED = '服务商产品列表获取失败';
    const SERVER_ADD_FAILED = '服务商服务配置失败';
    const DATABASE_FALSE = '数据库操作失败';

    protected $_msgArr = [
        '10000' => ['登录失败',self::LOGIN_FAILED],
        '10001' => ['参数错误','参数错误'],
        '10002' => ['该账号尚未登录','该账号尚未登录，请重新登录!'],
        '10003' => ['验证码REDIS查询失败','验证码已失效'],
        '10004' => ['手机号码格式不正确',self::PASS_INCORRECT],
        '10005' => ['密码不正确',self::PASS_INCORRECT],
        '10006' => ['密码格式错误','密码格式错误'],
        '10007' => ['用户名太长',self::PASS_INCORRECT],
        '10008'  =>['用户名不正确',self::PASS_INCORRECT],
        '10009'  => ['用户名不能为空',self::PASS_INCORRECT],
        '10010' => ['用户名已存在','用户名已存在'],
        '10011' => ['用户不存在',self::PASS_INCORRECT],
        '10012' => ['用户信息写入失败',self::LOGIN_FAILED],
        '10013' => ['用户登陆token清除失败','用户退出登录失败'],
        '10014' => ['用户登录失败','用户登录失败'],
        '10015' => ['手机号码格式不正确','手机号码格式不正确'],
        '10018' => ['验证码不正确','验证码不正确'],
        '10019' => ['验证码缓存查询失败','验证码过期'],
        '10020' => ['验证码缓存写入失败','验证码获取失败'],
        '10021' => ['验证码接口请求失败','验证码发送失败,请稍后再试'],
        '10022' => ['用户验证码缓存写入失败...','验证码获取失败,请重试...'],
        '10023' => ['该用户不在被允许登陆范围','抱歉,您不是管理员,无权登陆服务商管理平台'],
        '10024' => ['user表数据添加失败',self::ADD_STAFF_FAILED],
        '10025' => ['图片上传出错','图片上传失败'],
        '10026' => ['上传图片格式不正确','上传图片格式不正确'],
        '10027' => ['user表update失败','员工编辑失败'],
        '10028' => ['该员工还有未完成订单,不能删除','该员工还有未完成订单,不能删除'],
        '10029' => ['该员工已有所属服务商,请确认','该员工已有所属服务商,请确认'],
        '10030' => ['员工绑定服务商失败',self::ADD_STAFF_FAILED],
        '10031' => ['短信接口请求失败','短信通知失败,请确认'],
        '10032' => ['truck_org_worker修改数据失败',self::EDIT_STAFF_FAILED],
        '10033' => ['truck_org_worker新增数据失败',self::ADD_STAFF_FAILED],
        '10034' => ['org表查询错误','个人信息查询错误'],
        '10035' => ['user表修改失败',self::EDIT_ORG_INFO_FAILED],
        '10036' => ['user表修改失败','管理员密码修改失败'],
        '10037' => ['org_info表修改失败',self::EDIT_ORG_INFO_FAILED],
        '10038' => ['truck_org_worker删除数据失败','员工删除失败'],
        '10042' => ['账号信息异常,请联系平台管理员','账号信息异常,请联系平台管理员'],
        '10043' => ['维修工详情查询失败','维修工详情查询失败'],
        '10044' => ['账号信息异常,请联系平台管理员','员工详情获取失败'],
        '10080' => ['开始时间不能大于结束时间','开始时间不能大于结束时间'],
        '12001' => ['truck_brand表查询失败','厂家品牌获取失败'],
        '12020' => ['goods_stripe查询失败','条纹查询失败'],
        '12021' => ['goods_model查询失败','商品型号查询失败'],
        '12022' => ['轮胎服务商商品列表查询失败',self::SERVER_LIST_FAILED],
        '12023' => ['商品插入失败',self::SERVER_ADD_FAILED],
        '12024' => ['商品插入失败','该商品已经存在'],
        '12025' => ['轮胎商品查询错误','商品查询错误'],
        '12026' => ['商品删除失败','商品删除失败'],
        '12027' => ['商品编辑失败','商品编辑失败'],
        '12028' => ['商品列表查询失败',self::SERVER_LIST_FAILED],
        '12029' => ['维修商业务列表获取失败',self::SERVER_LIST_FAILED],
        '12030' => ['维修商里程费设置失败','维修商里程费设置失败'],
        '12031' => ['获取厂商故障列表失败','获取厂商故障列表失败'],
        '12032' => ['获取厂商配件列表失败','获取厂商配件列表失败'],
        '12033' => [self::DATABASE_FALSE,'里程费获取失败'],
        '12034' => ['该业务已配置','该业务已配置'],
        '12035' => ['品牌型号查询失败','品牌型号查询失败'],
        '12036' => ['维修厂业务配置失败','维修厂业务配置失败'],
        '12037' => ['维修厂业务编辑失败','维修厂业务编辑失败'],
        '12038' => ['优惠价添加失败','优惠价添加失败'],
        '12039' => ['优惠价编辑失败','优惠价编辑失败']
    ];

    public function __construct(){}


    /**
     * 获得提示信息
     * @param $errno
     * @param int $isShowMsg
     * @return string
     */
    public function getErrMsg($errno, $errMsg='')
    {
        if( $errMsg === ''){
            //开启调试模试后显示真实的错误信息,未开启调试模试显示优化后（对用户友好的）的错误信息
            $errMsg = (DEBUG_MODEL === 1) ? $this->_msgArr[$errno][0] : $this->_msgArr[$errno][1];
        }

        $msg = ['status'=>0,'errno'=>$errno,'errmsg'=>$errMsg];
        return $msg;
    }
}
