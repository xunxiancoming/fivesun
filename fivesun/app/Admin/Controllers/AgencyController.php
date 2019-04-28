<?php

namespace App\Admin\Controllers;

use App\Agency;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class AgencyController extends Controller
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
        $grid = new Grid(new Agency);

        $grid->id('序号');
        $grid->url('图片地址');
        $grid->city('城市');
        $grid->company('公司名称');
        $grid->contact('联系人');
        $grid->phone('联系电话');
        $grid->address('地址');
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
        $show = new Show(Agency::findOrFail($id));

        $show->id('序号');
        $show->url('图片地址')->display(function($url) {
            return str_limit($url, 100, '...');
        });
        $show->city('城市');
        $show->company('公司');
        $show->contact('联系人');
        $show->phone('联系电话');
        $show->address('地址');
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
        $form = new Form(new Agency);

        $form->url('url', '图片地址');
        $form->text('city', '城市');
        $form->text('company', '公司');
        $form->text('contact', '联系人');
        $form->mobile('phone', '联系电话');
        $form->text('address', '地址');

        return $form;
    }
}
