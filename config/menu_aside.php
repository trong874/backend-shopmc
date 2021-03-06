<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Bảng điều khiển',
            'root' => true,
            'icon' => 'media/svg/icons/Communication/Dial-numbers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin',
            'new-tab' => false,
        ],

        // Custom
        [
            'section' => 'Sản phẩm',
        ],
        [
            'title' => 'Tất cả sản phẩm',
            'root' => true,
            'icon' => 'media/svg/icons/Clothes/Shirt.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/products',
            'new-tab' => false,
        ],
        [
            'title' => 'Danh mục sản phẩm',
            'root' => true,
            'icon' => 'media/svg/icons/Media/Playlist2.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/category-products',
            'new-tab' => false,
        ],
        [
            'title' => 'Nhóm sản phẩm',
            'root' => true,
            'icon' => 'media/svg/icons/Media/Playlist2.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/products-group',
            'new-tab' => false,
        ],
        [
            'section' => 'Đơn hàng',
        ],
        [
            'title' => 'Danh sách đơn hàng',
            'root' => true,
            'icon' => 'media/svg/icons/Shopping/Cart2.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/orders',
            'new-tab' => false,
        ],
        [
            'section' => 'Tin tức',
        ],
        [
            'title' => 'Tất cả tin tức',
            'root' => true,
            'icon' => 'media/svg/icons/Communication/Chat6.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/news',
            'new-tab' => false,
        ],
        [
            'title' => 'Danh mục tin tức',
            'root' => true,
            'icon' => 'media/svg/icons/General/Thunder-move.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/category-news',
            'new-tab' => false,
        ],
        [
            'title' => 'Nhóm tin tức',
            'root' => true,
            'icon' => 'media/svg/icons/General/Thunder-move.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/news-group',
            'new-tab' => false,
        ],
        [
            'section' => 'Telecom',
        ],
        [
            'title' => 'Quản lí nạp thẻ',
            'root' => true,
            'icon' => 'media/svg/icons/Shopping/Dollar.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/telecoms',
            'new-tab' => false,
        ],
        [
            'section' => 'Người dùng',
        ],
        [
            'title' => 'Quản lí quản trị viên',
            'root' => true,
            'icon' => 'media/svg/icons/Communication/Add-user.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/admin-manage',
            'new-tab' => false,
        ],
        [
            'title' => 'Quản lí người dùng',
            'root' => true,
            'icon' => 'media/svg/icons/Communication/Group.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/user-manage',
            'new-tab' => false,
        ],
        [
            'section' => 'Hệ thống',
        ],
        [
            'title' => 'Cấu hình chung',
            'root' => true,
            'icon' => 'media/svg/icons/General/Settings-1.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/setting',
            'new-tab' => false,
        ],
    ]

];
