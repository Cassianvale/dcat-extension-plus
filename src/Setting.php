<?php

namespace Celaraze\DcatPlus;

use Dcat\Admin\Extend\Setting as Form;

class Setting extends Form
{
    public function form()
    {
        $this->text('additional_theme_colors', 'Additional Theme Colors')
            ->help("请先自定义颜色,输入格式为cssname1:Title1,cssname2:Title2")
            ->defaultValue('mypink:粉红');
    }
}
