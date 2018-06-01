<?php
// 站点地图。
// 用于菜单根据拥有的权限展示隐藏。
return [
    '<i class="fa fa-tachometer"></i> <span>仪表盘</span>' => 'AdminDashboard',
    '<i class="fa fa-bar-chart-o"></i> <span>数据统计</span>' => [
        '用户统计' => 'AdminDashboard',
        '流水统计' => 'AdminDashboard'
    ],
    '<i class="fa fa-exchange"></i> <span>交易管理</span>' => [
        '订单管理' => 'AdminDashboard',
        '柜台管理' => 'AdminDashboard'
    ],
    '<i class="fa fa-money"></i> <span>财务流水</span>' => [
        '提现请求' => 'AdminDashboard',
        '存款单管理' => 'AdminDashboard',
        '交易记录' => 'AdminDashboard',
        '钱包地址' => 'AdminDashboard'
    ],
    '<i class="fa fa-users"></i> <span>用户管理</span>' => [
        '用户列表' => 'AdminDashboard',
        '身份验证' => 'AdminDashboard',
        '登陆日志' => 'AdminDashboard'
    ],
    '<i class="fa fa-bullhorn"></i> <span>内容管理</span>' => [
        '文章管理' => 'AdminDashboard'
    ],
    '<i class="fa fa-wrench"></i> <span>系统管理</span>' => [
        '系统配置' => 'AdminDashboard',
        '市场价数据' => 'AdminDashboard',
        '法币汇率' => 'AdminDashboard',
        '国家信息' => 'AdminCountryList',
        '货币信息' => 'AdminCurrencyList',
        '操作日志' => 'AdminOperationRecordList'
    ],
    '<i class="fa fa-cogs"></i> <span>管理人员</span>' => [
        '管理员账号' => 'AdminList',
        '角色管理' => 'AdminRoleList',
        '权限管理' => 'AdminPermissionList'
    ],
    '<i class="fa fa-lock"></i> <span>账号信息</span>' => [
        '修改密码' => 'AdminChangePassowrd'
    ]
];