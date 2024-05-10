<?php

namespace Shuzilin\DcatAdminGridSotrable;

use Dcat\Admin\Extend\Setting as Form;
use Dcat\Admin\OperationLog\Models\OperationLog;
use Dcat\Admin\Support\Helper;


class Setting extends Form
{
    public function title()
    {
        return $this->trans('setting.title');
    }

    public function form()
    {
        $this->radio('sortalbe_type', $this->trans('setting.sortalbe_type'))
            ->options([$this->trans('setting.row_button_style'), $this->trans('setting.row_style')])
            ->default(0);
        $this->radio('sortalbe_cancel', $this->trans('setting.sortalbe_cancel'))
            ->options([$this->trans('setting.do_not_show'), $this->trans('setting.show')])
            ->default(0);
    }
}
