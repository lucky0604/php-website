<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Comment;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class CommentController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Comment(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->article_id;
            $grid->parent_id;
            $grid->target_id;
            $grid->user_id;
            $grid->content;
            $grid->name;
            $grid->email;
            $grid->website;
            $grid->avatar;
            $grid->ip;
            $grid->city;
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
        return Show::make($id, new Comment(), function (Show $show) {
            $show->id;
            $show->article_id;
            $show->parent_id;
            $show->target_id;
            $show->user_id;
            $show->content;
            $show->name;
            $show->email;
            $show->website;
            $show->avatar;
            $show->ip;
            $show->city;
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
        return Form::make(new Comment(), function (Form $form) {
            $form->display('id');
            $form->text('article_id');
            $form->text('parent_id');
            $form->text('target_id');
            $form->text('user_id');
            $form->text('content');
            $form->text('name');
            $form->text('email');
            $form->text('website');
            $form->text('avatar');
            $form->text('ip');
            $form->text('city');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
