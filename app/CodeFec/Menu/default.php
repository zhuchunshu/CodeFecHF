<?php
// 仪表盘
menu()->add(0,[
    'url' => '/admin',
    'name' => '仪表盘',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dashboard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <circle cx="12" cy="13" r="2"></circle>
    <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line>
    <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
 </svg>',
]);

menu()->add(1,[
    'url' => '/admin/plugins',
    'name' => '插件',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-package" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
    <line x1="12" y1="12" x2="20" y2="7.5"></line>
    <line x1="12" y1="12" x2="12" y2="21"></line>
    <line x1="12" y1="12" x2="4" y2="7.5"></line>
    <line x1="16" y1="5.25" x2="8" y2="9.75"></line>
 </svg>',
]);

menu()->add(2,[
    'url' => '/admin/plugins',
    'name' => '插件列表',
    'icon' => '',
    'parent_id' => 1
]);
menu()->add(3,[
    'url' => '/admin/plugins/add',
    'name' => '上传插件',
    'icon' => '',
    'parent_id' => 1
]);