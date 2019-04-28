<?php

namespace App\Admin\Controllers;

use App\Status;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class StatusController extends Controller
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
        $grid = new Grid(new Status);

        $grid->id('序号');
        $grid->city_id('城市编号');
        $grid->title('标题');
        $grid->content('内容')->display(function($content) {
            return str_limit($content, 100, '...');
        });
        $grid->browser('初始浏览量');
        $grid->author('作者');
        $grid->date('日期');
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
        $show = new Show(Status::findOrFail($id));

        $show->id('序号');
        $show->city_id('城市编号');
        $show->title('标题');
        $show->content('内容');
        $show->browser('浏览量');
        $show->author('作者');
        $show->date('日期');
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
        $form = new Form(new Status);

        $form->number('city_id', '城市编号');
        $form->text('title', '标题');
        $form->text('content', '内容');
        $form->number('browser', '浏览量');
        $form->text('author', '作者');
        $form->number('date', '日期');

        return $form;
    }
}
