<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Article;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ArticleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Article(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->title;
            $grid->cover;
            $grid->content_raw;
            $grid->content_html;
            $grid->content_markdown;
            $grid->is_markdown;
            $grid->is_top;
            $grid->is_hidden;
            $grid->view;
            $grid->comment;
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
        return Show::make($id, new Article(), function (Show $show) {
            $show->id;
            $show->title;
            $show->cover;
            $show->content_raw;
            $show->content_html;
            $show->content_markdown;
            $show->is_markdown;
            $show->is_top;
            $show->is_hidden;
            $show->view;
            $show->comment;
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
        return Form::make(new Article(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->text('cover');
            $form->text('content_raw');
            $form->text('content_html');
            $form->text('content_markdown');
            $form->text('is_markdown');
            $form->text('is_top');
            $form->text('is_hidden');
            $form->text('view');
            $form->text('comment');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
