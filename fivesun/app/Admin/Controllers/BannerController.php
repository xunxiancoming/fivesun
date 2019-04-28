<?php

namespace App\Admin\Controllers;

use App\Banner;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class BannerController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('首页')
            ->description('描述')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('详情')
            ->description('描述')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑')
            ->description('描述')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('创建')
            ->description('描述')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Banner);

        $grid->id('序号');
        $grid->city_id('城市编号');
        $grid->banner_id('轮播页面');
        $grid->url('图片地址')->display(function($url) {
            return str_limit($url, 100, '...');
        });
        $grid->order('排序');
        $grid->navigate_to('跳转到');
        $grid->description('描述');
        $grid->created_at('创建于');
        $grid->updated_at('更新于');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Banner::findOrFail($id));

        $show->id('序号');
        $show->city_id('城市编号');
        $show->banner_id('轮播页面');
        $show->url('图片地址');
        $show->order('排序');
        $show->navigate_to('跳转到');
        $show->description('描述');
        $show->created_at('创建于');
        $show->updated_at('更新于');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Banner);

        $form->number('city_id', '城市编号');
        $form->number('banner_id', '轮播页面');
        $form->url('url', '图片地址');
        $form->number('order', '排序');
        $form->number('navigate_to', '跳转到');
        $form->text('description', '描述');

        return $form;
    }
}
