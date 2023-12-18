<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\BookSection;

class BookSectionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BookSection';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BookSection());

        $grid->column('id', __('Id'));
        $grid->column('tittle', __('Tittle'));
        $grid->column('thumbnail')->image();
        $grid->column('isbn', __('Isbn'));
        $grid->column('author', __('Author'));
        $grid->column('publisher', __('Publisher'));
        $grid->column('publication_date', __('Publication date'));
        $grid->column('pages', __('Pages'));
        $grid->column('price', __('Price'));
        $grid->column('book_file', __('Book file'));
        $grid->column('synopsis', __('Synopsis'));
        $grid->column('genre', __('Genre'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(BookSection::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('tittle', __('Tittle'));
        $show->field('thumbnail', __('Thumbnail'));
        $show->field('isbn', __('Isbn'));
        $show->field('author', __('Author'));
        $show->field('publisher', __('Publisher'));
        $show->field('publication_date', __('Publication date'));
        $show->field('pages', __('Pages'));
        $show->field('price', __('Price'));
        $show->field('book_file', __('Book file'));
        $show->field('synopsis', __('Synopsis'));
        $show->field('genre', __('Genre'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BookSection());

        $form->text('tittle', __('Tittle'));
        $form->image('thumbnail', __('Thumbnail'));
        $form->number('isbn', __('Isbn'));
        $form->text('author', __('Author'));
        $form->text('publisher', __('Publisher'));
        $form->date('publication_date', __('Publication date'))->default(date('Y-m-d'));
        $form->number('pages', __('Pages'));
        $form->currency('price', __('Price'))->symbol('IDR');
        $form->file('book_file', __('Book file'))->rules('mimes:doc,docx,xlsx,pdf');
        $form->textarea('synopsis', __('Synopsis'));
        $form->text('genre', __('Genre'));

        return $form;
    }
}
