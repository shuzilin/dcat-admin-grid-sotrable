
<div align="center">

# DCAT-ADMIN GRID-SORTABLE

</div>

這個擴充程式可以幫助您透過拖曳資料列表的列來進行排序，前端基於[SortableJS](https://github.com/SortableJS/Sortable), 後端基於[eloquent-sortable](https://github.com/spatie/eloquent-sortable)。

[Dcat-admin](https://github.com/jqhph/dcat-admin) 官方的擴充程式[DCAT-ADMIN GRID-SORTABLE](https://github.com/dcat-admin/grid-sortable) 只支持 1.* 的版本
，在此基礎上製作了這個僅 2.* 可用的版本。

新增了不同的拖曳方式，可以在設定中選擇。

新增了取消的按鈕，可以在設定中選擇顯示與否。

## 安装

```shell
composer require shuzilin/dcat-admin-grid-sotrable
```

然後開啟網頁`http://yourhost/admin/auth/extensions` ，依序點擊 `更新` 和 `啟用` 。


## 使用

修改模型

```php
<?php

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class MyModel extends Model implements Sortable
{
    use SortableTrait;

    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];
}
```

在表格中使用對應的排序字段

```php

$grid = new Grid(new MyModel());


遞增排序
$grid->sortable('order_column');

遞減排序
$grid->sortable('order_column', false);

```

## 多語翻譯
對應語言目錄下新建`sortable.php` ,或直接在 `global.php` 新增以下內容
```php
return [
    'save_order' => 'Save order',
    'cancel_save_order' => 'Cancel save order',
    'save_succeeded' => 'Save succeeded !',
    'save_cancel' => 'Save canceled !'
];
```
