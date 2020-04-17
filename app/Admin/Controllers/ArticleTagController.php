<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\ArticleTag;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ArticleTagController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ArticleTag(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->article_id;
            $grid->tag_id;
            $grid->created_at;
            $grid->updated_at->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new ArticleTag(), function (Show $show) {
            $show->id;
            $show->article_id;
            $show->tag_id;
            $show->created_at;
            $show->updated_at;
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new ArticleTag(), function (Form $form) {
            $form->display('id');
            $form->text('article_id');
            $form->text('tag_id');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
