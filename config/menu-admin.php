<?php
// 站点地图。
// 用于菜单根据拥有的权限展示隐藏。
return [
    '<i class="fa fa-tachometer"></i> <span>仪表盘</span>' => 'RootDashboard',
    '<i class="fa fa-bar-chart-o"></i> <span>数据统计</span>' => [
        '用户统计' => 'RootStatisticsUser',
        '流水统计' => 'RootStatisticsFlow'
    ],
    '<i class="fa fa-exchange"></i> <span>交易管理</span>' => [
        '订单管理' => 'RootOrderList',
        '柜台管理' => 'RootCounterList'
    ],
    '<i class="fa fa-money"></i> <span>财务流水</span>' => [
        '提现请求' => 'RootWithdrawList',
        '存款单管理' => 'RootDepositList',
        '交易记录' => 'RootTransactionList',
        '钱包地址' => 'RootAddressList'
    ],
    '<i class="fa fa-users"></i> <span>用户管理</span>' => [
        '用户列表' => 'RootUserList',
        '身份验证' => 'RootAuthenticationList',
        '登陆日志' => 'RootUserLoginLogList'
    ],
    '<i class="fa fa-bullhorn"></i> <span>内容管理</span>' => [
        '文章管理' => 'RootArticleList'
    ],
    '<i class="fa fa-wrench"></i> <span>系统管理</span>' => [
        '系统配置' => 'RootConfigEdit',
        '市场价数据' => 'RootMarketPriceList',
        '法币汇率' => 'RootExchangeRateList',
        '国家信息' => 'RootCountryList',
        '货币信息' => 'RootCurrencyList',
        '操作日志' => 'RootOperationRecordList'
    ],
    '<i class="fa fa-cogs"></i> <span>管理人员</span>' => [
        '管理员账号' => 'admin/admin-list',
        '角色管理' => 'RootRoleList',
        '权限管理' => 'RootPermissionList'
    ],
    '<i class="fa fa-lock"></i> <span>账号信息</span>' => [
        '修改密码' => 'admin/modify-password'
    ]
];