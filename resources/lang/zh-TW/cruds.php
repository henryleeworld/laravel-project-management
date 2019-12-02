<?php

return [
    'userManagement' => [
        'title'          => '使用者管理',
        'title_singular' => '使用者管理',
    ],
    'permission'     => [
        'title'          => '權限',
        'title_singular' => '權限',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'title'             => '標題',
            'title_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'title'              => '標題',
            'title_helper'       => '',
            'permissions'        => '權限',
            'permissions_helper' => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => '使用者',
        'title_singular' => '使用者',
        'fields'         => [
            'id'                       => '編號',
            'id_helper'                => '',
            'name'                     => '名稱',
            'name_helper'              => '',
            'email'                    => '電子郵件',
            'email_helper'             => '',
            'email_verified_at'        => '電子郵件驗證時間',
            'email_verified_at_helper' => '',
            'password'                 => '密碼',
            'password_helper'          => '',
            'roles'                    => '角色',
            'roles_helper'             => '',
            'remember_token'           => '記住令牌',
            'remember_token_helper'    => '',
            'created_at'               => '建立時間',
            'created_at_helper'        => '',
            'updated_at'               => '更新時間',
            'updated_at_helper'        => '',
            'deleted_at'               => '刪除時間',
            'deleted_at_helper'        => '',
        ],
    ],
    'clientManagementSetting' => [
        'title'          => '設定',
        'title_singular' => '設定',
    ],
    'currency'                => [
        'title'          => '幣別',
        'title_singular' => '幣別',
        'fields'         => [
            'id'                   => '編號',
            'id_helper'            => '',
            'name'                 => '名稱',
            'name_helper'          => '',
            'code'                 => '幣別代碼',
            'code_helper'          => '',
            'main_currency'        => '主要幣別',
            'main_currency_helper' => '',
            'created_at'           => '建立時間',
            'created_at_helper'    => '',
            'updated_at'           => '更新時間',
            'updated_at_helper'    => '',
            'deleted_at'           => '刪除時間',
            'deleted_at_helper'    => '',
        ],
    ],
    'transactionType'         => [
        'title'          => '交易類別',
        'title_singular' => '交易類別',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'incomeSource'            => [
        'title'          => '收入來源',
        'title_singular' => '收入來源',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'name'               => '名稱',
            'name_helper'        => '',
            'fee_percent'        => '費用百分比',
            'fee_percent_helper' => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
    'clientStatus'            => [
        'title'          => '客戶身份',
        'title_singular' => '客戶身份',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'projectStatus'           => [
        'title'          => '專案狀態',
        'title_singular' => '專案狀態',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'clientManagement'        => [
        'title'          => '客戶管理',
        'title_singular' => '客戶管理',
    ],
    'client'                  => [
        'title'          => '客戶',
        'title_singular' => '客戶',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'first_name'        => '名字',
            'first_name_helper' => '',
            'last_name'         => '姓氏',
            'last_name_helper'  => '',
            'company'           => '公司',
            'company_helper'    => '',
            'email'             => '電子郵件',
            'email_helper'      => '',
            'phone'             => '電話',
            'phone_helper'      => '',
            'website'           => '網站',
            'website_helper'    => '',
            'skype'             => 'Skype',
            'skype_helper'      => '',
            'country'           => '國家',
            'country_helper'    => '',
            'status'            => '客戶身份',
            'status_helper'     => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'project'                 => [
        'title'          => '專案',
        'title_singular' => '專案',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'name'               => '名稱',
            'name_helper'        => '',
            'client'             => '客戶',
            'client_helper'      => '',
            'description'        => '描述',
            'description_helper' => '',
            'start_date'         => '開始日期',
            'start_date_helper'  => '',
            'budget'             => '預算',
            'budget_helper'      => '',
            'status'             => '專案狀態',
            'status_helper'      => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
    'note'                    => [
        'title'          => '註記',
        'title_singular' => '註記',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'project'           => '專案',
            'project_helper'    => '',
            'note_text'         => '註記文字',
            'note_text_helper'  => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'document'                => [
        'title'          => '文件',
        'title_singular' => '文件',
        'fields'         => [
            'id'                   => '編號',
            'id_helper'            => '',
            'project'              => '專案',
            'project_helper'       => '',
            'document_file'        => '檔案',
            'document_file_helper' => '',
            'name'                 => '文件名稱',
            'name_helper'          => '',
            'description'          => '描述',
            'description_helper'   => '',
            'created_at'           => '建立時間',
            'created_at_helper'    => '',
            'updated_at'           => '更新時間',
            'updated_at_helper'    => '',
            'deleted_at'           => '刪除時間',
            'deleted_at_helper'    => '',
        ],
    ],
    'transaction'             => [
        'title'          => '交易',
        'title_singular' => '交易',
        'fields'         => [
            'id'                      => '編號',
            'id_helper'               => '',
            'project'                 => '專案',
            'project_helper'          => '',
            'transaction_type'        => '交易型式',
            'transaction_type_helper' => '',
            'income_source'           => '收入來源',
            'income_source_helper'    => '',
            'amount'                  => '金額',
            'amount_helper'           => '',
            'currency'                => '幣別',
            'currency_helper'         => '',
            'transaction_date'        => '交易日期',
            'transaction_date_helper' => '',
            'name'                    => '名稱',
            'name_helper'             => '',
            'description'             => '描述',
            'description_helper'      => '',
            'created_at'              => '建立時間',
            'created_at_helper'       => '',
            'updated_at'              => '更新時間',
            'updated_at_helper'       => '',
            'deleted_at'              => '刪除時間',
            'deleted_at_helper'       => '',
        ],
    ],
    'clientReport'            => [
        'title'          => '報告',
        'title_singular' => '報告',
        'reports'        => [
            'month'       => '月份',
            'income'      => '收入',
            'expenses'    => '開支經費',
            'fees'        => '費用',
            'total'       => '合計',
            'allProjects' => '全部專案',
        ],
    ],
];
